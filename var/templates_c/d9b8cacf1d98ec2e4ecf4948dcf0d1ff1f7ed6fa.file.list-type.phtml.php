<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-23 12:45:07
         compiled from "/opt/ixpmanager/application/views/customer/list-type.phtml" */ ?>
<?php /*%%SmartyHeaderCode:168545839458ae68d39ca074-38802739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9b8cacf1d98ec2e4ecf4948dcf0d1ff1f7ed6fa' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/list-type.phtml',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168545839458ae68d39ca074-38802739',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'col' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58ae68d39d8459_70920545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ae68d39d8459_70920545')) {function content_58ae68d39d8459_70920545($_smarty_tpl) {?><td>
    <?php if ($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value]==\Entities\Customer::TYPE_ASSOCIATE) {?>
        <span class="label label-warning">ASSOCIATE</span>
    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value]==\Entities\Customer::TYPE_PROBONO) {?>
        <span class="label label-info">PROBONO</span>
    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value]==\Entities\Customer::TYPE_INTERNAL) {?>
        <span class="label label-inverse">INTERNAL</span>
    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value]==\Entities\Customer::TYPE_FULL) {?>
        <span class="label label-success">FULL</span>
    <?php } else { ?>
        <span class="label">UNKNOWN</span>
    <?php }?>
</td>
<?php }} ?>
