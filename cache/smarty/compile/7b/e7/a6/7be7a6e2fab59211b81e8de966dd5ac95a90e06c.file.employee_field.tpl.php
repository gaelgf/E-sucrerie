<?php /* Smarty version Smarty-3.1.19, created on 2016-04-22 11:48:16
         compiled from "/home/u405142996/public_html/admin/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1882600164571a0f805d87e9-17492551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7be7a6e2fab59211b81e8de966dd5ac95a90e06c' => 
    array (
      0 => '/home/u405142996/public_html/admin/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1461325608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1882600164571a0f805d87e9-17492551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_571a0f805dc5c0_77548458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a0f805dc5c0_77548458')) {function content_571a0f805dc5c0_77548458($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
