<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-23 12:45:12
         compiled from "/opt/ixpmanager/application/views/customer/custtype.phtml" */ ?>
<?php /*%%SmartyHeaderCode:129347763158ae68d8a7ee82-81165563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '035e207599b662ecbe6635e74711a8652a616e2e' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/custtype.phtml',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129347763158ae68d8a7ee82-81165563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cust' => 0,
    'resellerMode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58ae68d8aa2ee6_81694445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ae68d8aa2ee6_81694445')) {function content_58ae68d8aa2ee6_81694445($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['cust']->value->getType()==\Entities\Customer::TYPE_ASSOCIATE) {?>
    <span class="label label-warning">ASSOCIATE MEMBER</span>
<?php } elseif ($_smarty_tpl->tpl_vars['cust']->value->getType()==\Entities\Customer::TYPE_PROBONO) {?>
    <span class="label label-info">PROBONO MEMBER</span>
<?php } elseif ($_smarty_tpl->tpl_vars['cust']->value->getType()==\Entities\Customer::TYPE_INTERNAL) {?>
    <span class="label label-inverse">INTERNAL INFRASTRUCTURE</span>
<?php } elseif ($_smarty_tpl->tpl_vars['cust']->value->getType()==\Entities\Customer::TYPE_FULL) {?>
    <span class="label label-success">FULL MEMBER</span>
<?php } else { ?>
    <span class="label">UNKNOWN MEMBER TYPE</span>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['cust']->value->hasLeft()) {?>
    <span class="label label-important">ACCOUNT CLOSED</span>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['resellerMode']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['cust']->value->getIsReseller()) {?>
        <span class="label">RESELLER</span>
    <?php } elseif ($_smarty_tpl->tpl_vars['cust']->value->getReseller()) {?>
        <span class="label">RESOLD CUSTOMER</span>
    <?php }?>
<?php }?>

<?php if ((!$_smarty_tpl->tpl_vars['cust']->value->isTypeAssociate())&&(!$_smarty_tpl->tpl_vars['cust']->value->statusIsNormal())) {?>

    <?php if ($_smarty_tpl->tpl_vars['cust']->value->statusIsNotConnected()) {?>
        <span class="label label-warning">NOT CONNECTED</span>
    <?php } elseif ($_smarty_tpl->tpl_vars['cust']->value->statusIsSuspended()) {?>
        <span class="label label-important">SUSPENDED</span>
    <?php } else { ?>
        <span class="label label-inverse">UNKNOWN CUSTOMER STATUS</span>
    <?php }?>
<?php }?>
<?php }} ?>
