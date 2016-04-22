<?php /* Smarty version Smarty-3.1.19, created on 2016-04-22 11:48:12
         compiled from "/home/u405142996/public_html/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11275339571a0f7c5ed8b3-12667215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd13c6ce5bf107184274546f90f874297865e794d' => 
    array (
      0 => '/home/u405142996/public_html/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1461325634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11275339571a0f7c5ed8b3-12667215',
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
  'unifunc' => 'content_571a0f7c5fb8c9_67856641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a0f7c5fb8c9_67856641')) {function content_571a0f7c5fb8c9_67856641($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-circle-arrow-down"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
