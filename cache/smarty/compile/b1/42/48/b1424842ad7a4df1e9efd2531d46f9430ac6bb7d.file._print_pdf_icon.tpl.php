<?php /* Smarty version Smarty-3.1.19, created on 2016-04-22 11:48:14
         compiled from "/home/u405142996/public_html/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:698021090571a0f7e433f95-51125561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1424842ad7a4df1e9efd2531d46f9430ac6bb7d' => 
    array (
      0 => '/home/u405142996/public_html/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1461325611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '698021090571a0f7e433f95-51125561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_571a0f7e4422b6_71859552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a0f7e4422b6_71859552')) {function content_571a0f7e4422b6_71859552($_smarty_tpl) {?>


<?php if (Configuration::get('PS_INVOICE')) {?>
	<span style="width:20px; margin-right:5px;">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
	</span>
<?php }?><?php }} ?>
