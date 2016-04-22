<?php /* Smarty version Smarty-3.1.19, created on 2016-04-22 11:48:14
         compiled from "/home/u405142996/public_html/admin/themes/default/template/controllers/request_sql/list_action_export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1850043933571a0f7e1f6965-69917429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '926a231c608ea1b84a47d9f1d4a48f339aa9503c' => 
    array (
      0 => '/home/u405142996/public_html/admin/themes/default/template/controllers/request_sql/list_action_export.tpl',
      1 => 1461325613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1850043933571a0f7e1f6965-69917429',
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
  'unifunc' => 'content_571a0f7e1fbd17_60781453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a0f7e1fbd17_60781453')) {function content_571a0f7e1fbd17_60781453($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-default">
	<i class="icon-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
