<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:50:05
         compiled from "/opt/ixpmanager/application/views/user/list-column-enabled.phtml" */ ?>
<?php /*%%SmartyHeaderCode:96096691558b717dd7b7614-91383994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b91a4459d78fef5ca63aa5a60dda9297f78f4db9' => 
    array (
      0 => '/opt/ixpmanager/application/views/user/list-column-enabled.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96096691558b717dd7b7614-91383994',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
    'object' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b717dd7c1f67_96427617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b717dd7c1f67_96427617')) {function content_58b717dd7c1f67_96427617($_smarty_tpl) {?><td>
    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['disabled'])&&$_smarty_tpl->tpl_vars['row']->value['disabled'])||isset($_smarty_tpl->tpl_vars['object']->value['disabled'])&&$_smarty_tpl->tpl_vars['object']->value['disabled']) {?>
        <i class="icon-remove"></i>
    <?php } else { ?>
        <i class="icon-ok"></i>
    <?php }?>
</td>
<?php }} ?>
