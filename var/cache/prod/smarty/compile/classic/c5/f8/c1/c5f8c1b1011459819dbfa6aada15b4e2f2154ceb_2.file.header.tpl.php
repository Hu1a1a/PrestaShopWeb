<?php
/* Smarty version 4.3.1, created on 2023-05-07 11:39:46
  from 'C:\xampp\htdocs\prestashop\modules\ps_checkout\views\templates\hook\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645771e27ec576_89803214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5f8c1b1011459819dbfa6aada15b4e2f2154ceb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\ps_checkout\\views\\templates\\hook\\header.tpl',
      1 => 1683449364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645771e27ec576_89803214 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contentToPrefetch']->value, 'content');
$_smarty_tpl->tpl_vars['content']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->do_else = false;
?>
  <link rel="prefetch" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['content']->value['link'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" as="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
