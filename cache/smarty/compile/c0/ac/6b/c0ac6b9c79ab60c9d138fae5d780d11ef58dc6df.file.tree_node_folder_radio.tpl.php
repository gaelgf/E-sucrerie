<?php /* Smarty version Smarty-3.1.19, created on 2016-03-29 18:39:32
         compiled from "C:\wamp\www\prestashop\admin\themes\default\template\controllers\groups\helpers\tree\tree_node_folder_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2817456faafc43b21c2-08254722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0ac6b9c79ab60c9d138fae5d780d11ef58dc6df' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin\\themes\\default\\template\\controllers\\groups\\helpers\\tree\\tree_node_folder_radio.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2817456faafc43b21c2-08254722',
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
  'unifunc' => 'content_56faafc43ee885_89495194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56faafc43ee885_89495194')) {function content_56faafc43ee885_89495194($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-folder-name-disable<?php }?>">
		<input type="radio" name="id_category" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
