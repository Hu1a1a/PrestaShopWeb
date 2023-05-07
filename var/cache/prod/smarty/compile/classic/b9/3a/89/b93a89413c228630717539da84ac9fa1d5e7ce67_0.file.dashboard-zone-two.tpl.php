<?php
/* Smarty version 4.3.1, created on 2023-05-07 11:55:47
  from 'C:\xampp\htdocs\prestashop\modules\ps_mbo\views\templates\hook\dashboard-zone-two.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645775a3a1df37_26385389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b93a89413c228630717539da84ac9fa1d5e7ce67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\ps_mbo\\views\\templates\\hook\\dashboard-zone-two.tpl',
      1 => 1683449328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645775a3a1df37_26385389 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  if (typeof window.mboCdc == undefined || typeof window.mboCdc == "undefined") {
    if (typeof renderCdcError === 'function') {
      window.$(document).ready(function() {
        renderCdcError($('#cdc-more-module-container'));
      });
    }
  } else {
    const renderMoreModule = window.mboCdc.renderDashboardMoreModule

    const context = <?php echo $_smarty_tpl->tpl_vars['shop_context']->value;?>
;

    renderMoreModule(context, '#cdc-more-module-container')
  }
<?php echo '</script'; ?>
>

<div class="row-margin-bottom cdc-container" id="cdc-more-module-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></div>
<?php }
}
