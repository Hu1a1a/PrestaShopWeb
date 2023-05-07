<?php
/* Smarty version 4.3.1, created on 2023-05-07 11:55:48
  from 'C:\xampp\htdocs\prestashop\admin059ewzqvnveyfa3ohww\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645775a4084f30_99537205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33457b70585e4a449fc304effff02ac04c3aaf22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin059ewzqvnveyfa3ohww\\themes\\default\\template\\content.tpl',
      1 => 1683448952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645775a4084f30_99537205 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
