<?php
/* Smarty version 4.3.1, created on 2023-05-07 11:55:45
  from 'C:\xampp\htdocs\prestashop\modules\ps_mbo\views\templates\hook\dashboard-zone-one.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645775a1d9ec55_00064488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cc4d0d3dce68056489bf86b2d685e0e72dd7ec5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\ps_mbo\\views\\templates\\hook\\dashboard-zone-one.tpl',
      1 => 1683449328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645775a1d9ec55_00064488 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  if (typeof window.mboCdc == undefined || typeof window.mboCdc == "undefined") {
    if (typeof renderCdcError === 'function') {
      window.$(document).ready(function() {
        renderCdcError($('#cdc-tips-and-update-container'));
      });
    }
  } else {
    const renderTipsAndUpdate = window.mboCdc.renderDashboardTipsAndUpdate

    const dashboardTipsAndUpdateContext = <?php echo $_smarty_tpl->tpl_vars['shop_context']->value;?>
;

    renderTipsAndUpdate(dashboardTipsAndUpdateContext, '#cdc-tips-and-update-container')
  }
<?php echo '</script'; ?>
>

<section id="cdc-tips-and-update-container" class="cdc-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></section>
<?php }
}
