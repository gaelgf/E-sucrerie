<?php /* Smarty version Smarty-3.1.19, created on 2016-04-22 11:48:13
         compiled from "/home/u405142996/public_html/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:346512592571a0f7d9501d4-63419818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af11ed10c40f52ddb560269312b1019e5401ab2e' => 
    array (
      0 => '/home/u405142996/public_html/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1461325614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '346512592571a0f7d9501d4-63419818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_571a0f7d9557f8_65732564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a0f7d9557f8_65732564')) {function content_571a0f7d9557f8_65732564($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
