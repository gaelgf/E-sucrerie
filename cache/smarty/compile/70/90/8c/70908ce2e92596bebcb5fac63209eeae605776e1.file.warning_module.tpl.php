<?php /* Smarty version Smarty-3.1.19, created on 2016-04-22 11:48:17
         compiled from "/home/u405142996/public_html/admin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:840235200571a0f81848ba1-89408858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70908ce2e92596bebcb5fac63209eeae605776e1' => 
    array (
      0 => '/home/u405142996/public_html/admin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1461325609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '840235200571a0f81848ba1-89408858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_571a0f8184e462_48492408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a0f8184e462_48492408')) {function content_571a0f8184e462_48492408($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
