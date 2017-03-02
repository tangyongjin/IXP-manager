<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:50:18
         compiled from "/opt/ixpmanager/application/views/dashboard/index-tabs/details.phtml" */ ?>
<?php /*%%SmartyHeaderCode:123560580858b7a48a70f844-10864503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2f44f03f9502d6857026c3ee48ec81a67fe9185' => 
    array (
      0 => '/opt/ixpmanager/application/views/dashboard/index-tabs/details.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123560580858b7a48a70f844-10864503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nocDetails' => 0,
    'options' => 0,
    'resellerMode' => 0,
    'resoldCustomer' => 0,
    'billingDetails' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7a48a71bb62_97860500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7a48a71bb62_97860500')) {function content_58b7a48a71bb62_97860500($_smarty_tpl) {?>
<div class="row-fluid">

    <div class="span6">

        <?php echo $_smarty_tpl->tpl_vars['nocDetails']->value;?>


	</div>
	
	<div class="span6">
        <?php if ((!isset($_smarty_tpl->tpl_vars['options']->value['reseller']['no_billing_for_resold_customers'])||!$_smarty_tpl->tpl_vars['options']->value['reseller']['no_billing_for_resold_customers'])||!$_smarty_tpl->tpl_vars['resellerMode']->value||!$_smarty_tpl->tpl_vars['resoldCustomer']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['billingDetails']->value;?>

        <?php }?>

	</div>
	
</div>

<?php }} ?>
