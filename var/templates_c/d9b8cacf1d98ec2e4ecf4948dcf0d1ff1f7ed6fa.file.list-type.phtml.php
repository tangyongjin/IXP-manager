<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-26 16:06:48
         compiled from "/opt/ixpmanager/application/views/customer/list-type.phtml" */ ?>
<?php /*%%SmartyHeaderCode:95543824458b28c98a8b633-63076905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '95543824458b28c98a8b633-63076905',
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
  'unifunc' => 'content_58b28c98a99e94_46241917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b28c98a99e94_46241917')) {function content_58b28c98a99e94_46241917($_smarty_tpl) {?><td>
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
