<?php /* Smarty version Smarty-3.1.19, created on 2016-04-22 11:48:12
         compiled from "/home/u405142996/public_html/admin/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:498737961571a0f7ccbf307-23606458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a78f8b84a1f31cdd98527abc5e2c0d3b73c6ee2d' => 
    array (
      0 => '/home/u405142996/public_html/admin/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1461325634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '498737961571a0f7ccbf307-23606458',
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
  'unifunc' => 'content_571a0f7ccc9521_72057514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a0f7ccc9521_72057514')) {function content_571a0f7ccc9521_72057514($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
