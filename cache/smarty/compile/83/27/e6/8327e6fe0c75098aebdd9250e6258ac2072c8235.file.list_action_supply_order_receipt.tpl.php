<?php /* Smarty version Smarty-3.1.19, created on 2016-04-22 11:48:12
         compiled from "/home/u405142996/public_html/admin/themes/default/template/helpers/list/list_action_supply_order_receipt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1091638692571a0f7cd84f04-75915018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8327e6fe0c75098aebdd9250e6258ac2072c8235' => 
    array (
      0 => '/home/u405142996/public_html/admin/themes/default/template/helpers/list/list_action_supply_order_receipt.tpl',
      1 => 1461325634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1091638692571a0f7cd84f04-75915018',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_571a0f7cd925a1_91341679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a0f7cd925a1_91341679')) {function content_571a0f7cd925a1_91341679($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-truck"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
