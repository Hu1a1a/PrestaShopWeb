<?php
/* Smarty version 4.3.1, created on 2023-05-07 11:57:34
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\catalog\_partials\category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6457760e0e4c32_93217206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cba381f1a20e3b0de755ecb30bcb7696ca4e9a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\category-footer.tpl',
      1 => 1683448990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6457760e0e4c32_93217206 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
    <?php if ((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value['additional_description'] && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="card">
            <div class="card-block category-additional-description">
                <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
}
