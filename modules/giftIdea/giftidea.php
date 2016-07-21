<?php
if (!defined('_PS_VERSION_'))
	exit;

class GiftIdea extends Module {
	public function __construct() {
		$this->name = 'giftidea';
		$this->tab = 'front_office_features';
		$this->version = '1.0.0';
		$this->author = 'moi';
		$this->need_instance = 0;
		$this->ps_versions_compliancy = array(
			'min' => '1.6',
			'max' => _PS_VERSION_
			);
		$this->bootstrap = true;

		parent::__construct();

		$this->displayName = $this->l('Donne des idées de cadeau');
		$this->description = $this->l('Affichez des idées de cadeaux');

		$this->confirmUninstall = $this->l('Veux-tu vraiment ne plus afficher ces delicieux bonbons de ton site ?');
	}

	public function install() {
		$sql= "CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."giftidea`(`id_giftidea` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,`id_product` INT(11) NOT NULL )";

		if (!parent::install() ||
			!$result=Db::getInstance()->Execute($sql) ||
			!$this->registerHook('displayHome')
			)
			return false;
		return true;
	}

	public function uninstall() {
		$sql= "DROP TABLE `"._DB_PREFIX_."giftidea`";

		if (!parent::uninstall() ||
			!$result=Db::getInstance()->Execute($sql))
			return false;
		return true;

	}

	public function getContent() {

		$output = null;
		if(Tools::isSubmit('submit'.$this->name)) {
			$select_product_id = strval(Tools::getValue('select_product'));
			if(!$select_product_id || empty($select_product_id))
				$output .= $this->displayError($this->l('Config invalide'));
			else {
				$sql="INSERT INTO `"._DB_PREFIX_."giftidea` (`id_product`) VALUES (".$select_product_id.")";
				if(!Db::getInstance()->execute($sql))
					$output .= $this->displayError($this->l('Request invalide'));
				else
					$output .= $this->displayConfirmation($this->l('Settings updated'));
			}
		}
		else{
			if(Tools::isSubmit('delete_id_giftidea')){
				$id_giftidea = strval(Tools::getValue('id_giftidea'));
				if(!$id_giftidea || empty($id_giftidea))
					$output .= $this->displayError($this->l('Selectionner un produit'));
				else {
					$sql = 'DELETE FROM '._DB_PREFIX_.'giftidea WHERE id_giftidea = '.$id_giftidea;
					if (!Db::getInstance()->execute($sql))
						$output .= $this->displayError($this->l('Request invalide'));
					else
						$output .= $this->displayConfirmation($this->l('Settings updated'));
				}
			}
		}

		$output.= $this->displayForm();
		$output.= $this->initList();
		return $output;
	}

	public function displayForm() {
		$sql ='SELECT `id_product` FROM `'._DB_PREFIX_.'product` ORDER BY `id_category_default`';
		$products=array();
		if ($results = Db::getInstance()->ExecuteS($sql))
    		foreach ($results as $row){
				$products[] = new Product($row['id_product'], false, Context::getContext()->language->id);
    		}

		$product_minify=array();
		$category="";
		for($i=0;$i<count($products)-1;$i++) {
			$product=$products[$i];
    		$cat = new Category($product->id_category_default, $this->context->language->id);
			if($cat->name!=$category){
				$category=$cat->name;
				if($category=="")
					$product_minify[]=array(
						'id_option'=>'',
						'name'=>"Autres"
						);
				else
					$product_minify[]=array(
						'id_option'=>'',
						'name'=>$category
						);
			}
			$product_minify[]=array(
				'id_option'=>$product->id,
				'name'=>'-- '.$product->name
				);
		}
		//champs du formulaire
		$fields_form[0]['form'] = array(
			'legend' => array(
				'title' => $this->l('GiftIdea'),
				),
			'input' => array(
				array(
					'type' => 'select',
					'label' => $this->l('Selection de produit:'),
					'name' => 'select_product',
					'required' => true,
					'options' => array(
						'query' => $product_minify,
						'id' => 'id_option',
						'name' => 'name'
						)
					)
				),
			'submit' => array(
				'title' => $this->l('Envoyer'),
				'class' =>'btn btn-default pull-right'
				)
			);

		$default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

		$helper = new HelperForm();

		// Module, Token and currentIndex
		$helper->module = $this;
		$helper->name_controller = $this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;

		// Language
		$helper->default_form_language = $default_lang;
		$helper->allow_employee_form_lang = $default_lang;

		// title and Toolbar
		$helper->title = $this->displayName;
		$helper->show_toolbar = true;        // false -> remove toolbar
		$helper->toolbar_scroll = true;      // yes - > Toolbar is always visible on the top of the screen.
		$helper->submit_action = 'submit'.$this->name;
		$helper->toolbar_btn = array(
			'save' => array(
				'desc' => $this->l('Save'),
				'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.
				'&token='.Tools::getAdminTokenLite('AdminModules'),
				),
			'back' => array(
				'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules'),
				'desc' => $this->l('Back to list')
				)
			);

		return $helper->generateForm($fields_form);

	}

	public function initList()
	{
		$sql = 'SELECT g.id_giftidea, p.name FROM '._DB_PREFIX_.'product_lang AS p,'._DB_PREFIX_.'giftidea AS g WHERE g.id_product=p.id_product';
		if ($result = Db::getInstance()->ExecuteS($sql))
		{
			$this->fields_list = array(
				'id_giftidea' => array(
					'title' => $this->l('Id'),
					'width' => 140,
					'type' => 'text',
					),
				'name' => array(
					'title' => $this->l('Name'),
					'width' => 140,
					'type' => 'text',
					),
				);
			$helper = new HelperList();

			$helper->shopLinkType = '';

			$helper->simple_header = true;

		    // Actions to be displayed in the "Actions" column
			$helper->actions = array('delete');

			$helper->identifier = 'id_giftidea';
			$helper->show_toolbar = true;
			$helper->title = 'Liste des produits';
			$helper->table = '_id_giftidea';

			$helper->token = Tools::getAdminTokenLite('AdminModules');
			$helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
			
			return $helper->generateList($result, $this->fields_list);
		}
	}
	
	public function hookDisplayHome($params)
	{
		$sql = 'SELECT id_product FROM '._DB_PREFIX_.'giftidea';
		$imagePath=array();
		$url=array();
		if ($results = Db::getInstance()->ExecuteS($sql))
    		foreach ($results as $row){
    			$id_product[]=$row['id_product'];
    		}
		shuffle($id_product);

    	for($i=0;$i<3;$i++){
    		$id=$id_product[$i];
    		//Get image id
    		$img=Image::getCover($id);
			
			//Get image link
			$product = new Product($id, false, Context::getContext()->language->id);
			$link = new Link;//because getImageLInk is not static function
			$imagePath[]= $link->getImageLink($product->link_rewrite, $img['id_image'], 'home_default');
			
			//Get url product
			$url[]= $link->getProductLink($id);
    	
    	}
		foreach ($imagePath as $key => $value) {
			$imagePath[$key]=str_replace("prestashop-esgi.16mb.com/","",$value);
		}
		$this->smarty->assign(array(
			'imagePath' => $imagePath,
			'url' => $url
			));
		return $this->display(__FILE__, 'giftidea.tpl');
	}
}