<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-01 10:40:58
  from "/home/bigmee/public_html/cu/application/views/templates/category/navigation-category.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-19',
  'unifunc' => 'content_59d078e29825c6_04749799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d96de73bfefaf360cb4997bcfd9b3c1b24e6291' => 
    array (
      0 => '/home/bigmee/public_html/cu/application/views/templates/category/navigation-category.tpl',
      1 => 1506834238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d078e29825c6_04749799 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mcat_list']->value, 'main');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['main']->value) {
?>
	<li class="single-menu colmd4">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/pages/product-view?base_cat%5B%5D=<?php echo $_smarty_tpl->tpl_vars['main']->value['mcat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['main']->value['mcat_name'];?>
</a>
	</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
  <?php }
}
