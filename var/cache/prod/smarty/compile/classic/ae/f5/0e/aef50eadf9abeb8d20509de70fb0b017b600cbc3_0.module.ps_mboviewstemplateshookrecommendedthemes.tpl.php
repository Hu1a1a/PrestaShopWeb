<?php
/* Smarty version 4.3.1, created on 2023-05-07 11:37:33
  from 'module:ps_mboviewstemplateshookrecommendedthemes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6457715dcde5f7_81537443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aef50eadf9abeb8d20509de70fb0b017b600cbc3' => 
    array (
      0 => 'module:ps_mboviewstemplateshookrecommendedthemes.tpl',
      1 => 1683449328,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6457715dcde5f7_81537443 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  if (typeof window.mboCdc == undefined || typeof window.mboCdc == "undefined") {
    if (typeof renderCdcError === 'function') {
      window.$(document).ready(function() {
        renderCdcError($('#cdc-explore-themes-catalog'));
      });
    }
  } else {
    const renderExploreThemesCatalog = window.mboCdc.renderExploreThemeCatalog

    const exploreThemesCatalogContext = <?php echo $_smarty_tpl->tpl_vars['shop_context']->value;?>
;

    renderExploreThemesCatalog(exploreThemesCatalogContext, '#cdc-explore-themes-catalog')
  }
<?php echo '</script'; ?>
>

<div id="cdc-explore-themes-catalog" class="col-lg-3 col-md-4 col-sm-6 theme-card-container cdc-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></div>

<?php }
}
