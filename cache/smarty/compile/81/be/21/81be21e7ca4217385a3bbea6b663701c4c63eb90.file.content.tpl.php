<?php /* Smarty version Smarty-3.1.19, created on 2016-04-22 11:48:18
         compiled from "/home/u405142996/public_html/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:911749015571a0f825bce96-22008253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81be21e7ca4217385a3bbea6b663701c4c63eb90' => 
    array (
      0 => '/home/u405142996/public_html/admin/themes/default/template/content.tpl',
      1 => 1461325587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '911749015571a0f825bce96-22008253',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_571a0f825c6db8_27506402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a0f825c6db8_27506402')) {function content_571a0f825c6db8_27506402($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
