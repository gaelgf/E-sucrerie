<?php /* Smarty version Smarty-3.1.19, created on 2016-04-22 11:48:19
         compiled from "/home/u405142996/public_html/themes/default-bootstrap/modules/loyalty/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:769186178571a0f833c2cb3-86737336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac1b3b3dbb420afe52237f6b7fedfba737efa88a' => 
    array (
      0 => '/home/u405142996/public_html/themes/default-bootstrap/modules/loyalty/views/templates/hook/my-account.tpl',
      1 => 1461324352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '769186178571a0f833c2cb3-86737336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_571a0f8343ffd6_21410596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a0f8343ffd6_21410596')) {function content_571a0f8343ffd6_21410596($_smarty_tpl) {?>

<!-- MODULE Loyalty -->
<li class="loyalty">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('loyalty','default',array('process'=>'summary'),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-flag"></i><span><?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
</span></a>
</li>
<!-- END : MODULE Loyalty --><?php }} ?>
