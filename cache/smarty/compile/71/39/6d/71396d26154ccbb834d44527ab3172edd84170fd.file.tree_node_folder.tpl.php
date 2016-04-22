<?php /* Smarty version Smarty-3.1.19, created on 2016-04-22 11:48:11
         compiled from "/home/u405142996/public_html/admin/themes/default/template/helpers/tree/tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1961668096571a0f7bc8d4f5-00309483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71396d26154ccbb834d44527ab3172edd84170fd' => 
    array (
      0 => '/home/u405142996/public_html/admin/themes/default/template/helpers/tree/tree_node_folder.tpl',
      1 => 1461325635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1961668096571a0f7bc8d4f5-00309483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_571a0f7bc926d7_99488762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a0f7bc926d7_99488762')) {function content_571a0f7bc926d7_99488762($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/u405142996/public_html/tools/smarty/plugins/modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
