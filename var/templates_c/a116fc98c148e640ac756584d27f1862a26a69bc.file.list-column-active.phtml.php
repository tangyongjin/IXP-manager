<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-26 16:45:39
         compiled from "/opt/ixpmanager/application/views/frontend/list-column-active.phtml" */ ?>
<?php /*%%SmartyHeaderCode:80511643058b295b3d2f277-78150145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a116fc98c148e640ac756584d27f1862a26a69bc' => 
    array (
      0 => '/opt/ixpmanager/application/views/frontend/list-column-active.phtml',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80511643058b295b3d2f277-78150145',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cconf' => 0,
    'row' => 0,
    'object' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b295b3d426c8_44883103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b295b3d426c8_44883103')) {function content_58b295b3d426c8_44883103($_smarty_tpl) {?><td>
    <?php if (((isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['cconf']->value['colname']])&&$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['cconf']->value['colname']])||isset($_smarty_tpl->tpl_vars['object']->value[$_smarty_tpl->tpl_vars['cconf']->value['colname']])&&$_smarty_tpl->tpl_vars['object']->value[$_smarty_tpl->tpl_vars['cconf']->value['colname']])&&(!isset($_smarty_tpl->tpl_vars['cconf']->value['inverse'])||!$_smarty_tpl->tpl_vars['cconf']->value['inverse'])) {?>
        <i class="icon-ok"></i>
    <?php } else { ?>
        <i class="icon-remove"></i>
    <?php }?>
</td>
<?php }} ?>
