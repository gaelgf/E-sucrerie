<?php /*%%SmartyHeaderCode:254656fab0dc970ed9-52908816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c063ca6a807d911926a3b094b64bda3942cbde54' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default-bootstrap\\modules\\blockcms\\blockcms.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254656fab0dc970ed9-52908816',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56fbf2c8587698_74509074',
  'has_nocache_code' => true,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fbf2c8587698_74509074')) {function content_56fbf2c8587698_74509074($_smarty_tpl) {?>
	<!-- Block CMS module footer -->
	<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
		<h4>Informations</h4>
		<ul class="toggle-footer">
							<li class="item">
					<a href="http://localhost/prestashop/promotions" title="Promotions">
						Promotions
					</a>
				</li>
									<li class="item">
				<a href="http://localhost/prestashop/nouveaux-produits" title="Nouveaux produits">
					Nouveaux produits
				</a>
			</li>
										<li class="item">
					<a href="http://localhost/prestashop/meilleures-ventes" title="Meilleures ventes">
						Meilleures ventes
					</a>
				</li>
										<li class="item">
					<a href="http://localhost/prestashop/magasins" title="Nos magasins">
						Nos magasins
					</a>
				</li>
									<li class="item">
				<a href="http://localhost/prestashop/nous-contacter" title="Contactez-nous">
					Contactez-nous
				</a>
			</li>
															<li class="item">
						<a href="http://localhost/prestashop/content/3-conditions-utilisation" title="Conditions d&#039;utilisation">
							Conditions d&#039;utilisation
						</a>
					</li>
																<li class="item">
						<a href="http://localhost/prestashop/content/4-a-propos" title="A propos">
							A propos
						</a>
					</li>
													<li>
				<a href="http://localhost/prestashop/plan-site" title="sitemap">
					sitemap
				</a>
			</li>
					</ul>
		
	</section>
		<section class="bottom-footer col-xs-12">
		<div>
			<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Ecommerce software by %1$s [/1]','mod'=>'blockcms','sprintf'=>array('PrestaShop™',date('Y'),'©'),'tags'=>array('<a class="_blank" href="http://www.prestashop.com">')),$_smarty_tpl);?>

		</div>
	</section>
		<!-- /Block CMS module footer -->
<?php }} ?>
