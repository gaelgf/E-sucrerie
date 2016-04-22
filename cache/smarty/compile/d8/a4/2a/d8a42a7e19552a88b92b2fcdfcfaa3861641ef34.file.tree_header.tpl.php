<?php /* Smarty version Smarty-3.1.19, created on 2016-04-22 14:11:37
         compiled from "/home/u405142996/public_html/admin895y2k4kv/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2047701667571a14f9ab4d80-66776569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8a42a7e19552a88b92b2fcdfcfaa3861641ef34' => 
    array (
      0 => '/home/u405142996/public_html/admin895y2k4kv/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1461325635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2047701667571a14f9ab4d80-66776569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_571a14f9abc799_89648377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a14f9abc799_89648377')) {function content_571a14f9abc799_89648377($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
