<?php /*%%SmartyHeaderCode:2015526443571a1198b59f94-61740690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c9efd558070269e71988481e0397042266a34c7' => 
    array (
      0 => '/home/u405142996/public_html/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1461324312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2015526443571a1198b59f94-61740690',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_571a1198ba7c07_00361195',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a1198ba7c07_00361195')) {function content_571a1198ba7c07_00361195($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//prestashop-esgi.16mb.com/recherche" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Rechercher" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Rechercher</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
