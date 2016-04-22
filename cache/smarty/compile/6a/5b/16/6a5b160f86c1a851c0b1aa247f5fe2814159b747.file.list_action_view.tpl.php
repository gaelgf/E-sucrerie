<?php /* Smarty version Smarty-3.1.19, created on 2016-04-22 14:08:58
         compiled from "/home/u405142996/public_html/admin895y2k4kv/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:676956990571a145a6e7e29-93219837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a5b160f86c1a851c0b1aa247f5fe2814159b747' => 
    array (
      0 => '/home/u405142996/public_html/admin895y2k4kv/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1461325634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '676956990571a145a6e7e29-93219837',
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
  'unifunc' => 'content_571a145a6f58d5_29246577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a145a6f58d5_29246577')) {function content_571a145a6f58d5_29246577($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
