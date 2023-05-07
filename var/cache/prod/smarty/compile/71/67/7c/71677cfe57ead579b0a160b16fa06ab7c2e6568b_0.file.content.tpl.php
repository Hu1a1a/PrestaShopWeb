<?php
/* Smarty version 4.3.1, created on 2023-05-07 11:37:32
  from 'C:\xampp\htdocs\prestashop\admin059ewzqvnveyfa3ohww\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6457715ca51396_36548068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71677cfe57ead579b0a160b16fa06ab7c2e6568b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin059ewzqvnveyfa3ohww\\themes\\new-theme\\template\\content.tpl',
      1 => 1683448973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6457715ca51396_36548068 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
