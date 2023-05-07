<?php
/* Smarty version 4.3.1, created on 2023-05-07 13:24:21
  from 'module:ps_mainmenups_mainmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64578a650ae519_19829709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41df1985130dffd7d3fe4cb369091546a0b40be7' => 
    array (
      0 => 'module:ps_mainmenups_mainmenu.tpl',
      1 => 1683458660,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64578a650ae519_19829709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\prestashop\\var\\cache\\prod\\smarty\\compile\\classic\\41\\df\\19\\41df1985130dffd7d3fe4cb369091546a0b40be7_2.module.ps_mainmenups_mainmenu.tpl.php',
    'uid' => '41df1985130dffd7d3fe4cb369091546a0b40be7',
    'call_name' => 'smarty_template_function_menu_83285812864578a65088c66_16587052',
  ),
));
$_smarty_tpl->_assignInScope('_counter', 0);?>




<div class="menu js-top-menu position-static hidden-sm-down" id="_desktop_top_menu">
  <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('nodes'=>$_smarty_tpl->tpl_vars['menu']->value['children']), true);?>

  <div class="clearfix"></div>
  <style>
    .parent {
      display: block;
      position: relative;
      float: left;
      line-height: 30px;
      background-color: #4FA0D8;
      border-right: #CCC 1px solid;
    }

    .parent a {
      margin: 10px;
      color: #FFFFFF;
      text-decoration: none;
    }

    .parent:hover>ul {
      display: block;
      position: absolute;
    }

    .child {
      display: none;
    }

    .child li {
      background-color: #E4EFF7;
      line-height: 30px;
      border-bottom: #CCC 1px solid;
      border-right: #CCC 1px solid;
      width: 100%;
    }

    .child li a {
      color: #000000;
    }

    ul {
      list-style: none;
      margin: 0;
      padding: 0px;
      min-width: 10em;
    }

    ul ul ul {
      left: 100%;
      top: 0;
      margin-left: 1px;
    }

    li:hover {
      background-color: #95B4CA;
    }

    .parent li:hover {
      background-color: #F0F0F0;
    }

    .expand {
      font-size: 12px;
      float: right;
      margin-right: 5px;
    }
  </style>
</div><?php }
/* smarty_template_function_menu_83285812864578a65088c66_16587052 */
if (!function_exists('smarty_template_function_menu_83285812864578a65088c66_16587052')) {
function smarty_template_function_menu_83285812864578a65088c66_16587052(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0,'parent'=>null,'parenN'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['nodes']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?>
      <ul id="menu">
        <li class="parent"><a href="#"> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['label'], ENT_QUOTES, 'UTF-8');?>
</a>
          <ul class="child">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['children'], 'nodex');
$_smarty_tpl->tpl_vars['nodex']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nodex']->value) {
$_smarty_tpl->tpl_vars['nodex']->do_else = false;
?>
              <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['nodex']->value['children'])) {?>
                <li class="parent">
                  <a href="#"> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nodex']->value['label'], ENT_QUOTES, 'UTF-8');?>
<span class="expand">»</span></a>
                  <ul class="child">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodex']->value['children'], 'nodey');
$_smarty_tpl->tpl_vars['nodey']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nodey']->value) {
$_smarty_tpl->tpl_vars['nodey']->do_else = false;
?>
                      <li><a href="#"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nodey']->value['label'], ENT_QUOTES, 'UTF-8');?>
 </a></li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                </li>
              <?php } else { ?>
                <li><a href="#"> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nodex']->value['label'], ENT_QUOTES, 'UTF-8');?>
</a></li>
              <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </li>
      </ul>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }?>

<?php
}}
/*/ smarty_template_function_menu_83285812864578a65088c66_16587052 */
}
