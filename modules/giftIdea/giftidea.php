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

		if (!parent::install() ||
			!Configuration::updateValue('GIFT_IDEA_NUMBER', 5) ||
			!$this->registerHook('displayHome')
			)
			return false;
		return true;
	}

	public function uninstall() {

		if (!parent::uninstall())
			return false;

		return true;

	}

	public function getContent() {

		$output = null;

		if(Tools::isSubmit('submit'.$this->name)) {
			$GIFT_IDEA_NUMBER_txt = strval(Tools::getValue('GIFT_IDEA_NUMBER'));

			if(!$GIFT_IDEA_NUMBER_txt || empty($GIFT_IDEA_NUMBER_txt) || !Validate::isGenericName($GIFT_IDEA_NUMBER_txt))
					$output .= $this->displayError($this->l('Config invalide'));
			else {
				Configuration::updateValue('GIFT_IDEA_NUMBER', $GIFT_IDEA_NUMBER_txt);
				$output .= $this->displayConfirmation($this->l('Settings updated'));
			}

		}

		return $output.$this->displayForm();
	}


	public function displayForm() {

		//champs du formulaire
		$fields_form[0]['form'] = array(
			'legend' => array(
				'title' => $this->l('Titre'),
				),
			'input' => array(
				array(
					'type' => 'text',
					'label' => $this->l('Texte a afficher'),
					'name' => 'GIFT_IDEA_NUMBER',
					'size' => 20,
					'required' =>true
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

	// Load current value
		$helper->fields_value['GIFT_IDEA_NUMBER'] = Configuration::get('GIFT_IDEA_NUMBER');

		return $helper->generateForm($fields_form);

	}

	public function hookDisplayHome($params)
	{
		$category = new Category(Context::getContext()->shop->getCategory(), (int)Context::getContext()->language->id);
		$nb = (int)(Configuration::get('GIFT_IDEA_NUMBER'));
		$products = $category->getProducts((int)Context::getContext()->language->id, 1, ($nb ? $nb : 10));
		shuffle($products);
		$this->smarty->assign(array(
			'products' => $products
			));
		return $this->display(__FILE__, 'giftidea.tpl');
	}
}