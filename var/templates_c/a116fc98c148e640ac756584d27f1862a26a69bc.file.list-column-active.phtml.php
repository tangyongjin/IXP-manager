<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-23 12:58:35
         compiled from "/opt/ixpmanager/application/views/frontend/list-column-active.phtml" */ ?>
<?php /*%%SmartyHeaderCode:100595121058ae6bfb83b6a4-43512270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '100595121058ae6bfb83b6a4-43512270',
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
  'unifunc' => 'content_58ae6bfb84e2b3_09106720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ae6bfb84e2b3_09106720')) {function content_58ae6bfb84e2b3_09106720($_smarty_tpl) {?><td>
    <?php if (((isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['cconf']->value['colname']])&&$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['cconf']->value['colname']])||isset($_smarty_tpl->tpl_vars['object']->value[$_smarty_tpl->tpl_vars['cconf']->value['colname']])&&$_smarty_tpl->tpl_vars['object']->value[$_smarty_tpl->tpl_vars['cconf']->value['colname']])&&(!isset($_smarty_tpl->tpl_vars['cconf']->value['inverse'])||!$_smarty_tpl->tpl_vars['cconf']->value['inverse'])) {?>
        <i class="icon-ok"></i>
    <?php } else { ?>
        <i class="icon-remove"></i>
    <?php }?>
</td>
<?php }} ?>
