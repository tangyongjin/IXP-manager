<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-26 16:54:30
         compiled from "/opt/ixpmanager/application/views/customer/overview-tabs/details.phtml" */ ?>
<?php /*%%SmartyHeaderCode:105689251658b297c640e5d4-88020664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe8478854be37faca2ef5896965e35fd43f4ba17' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/overview-tabs/details.phtml',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105689251658b297c640e5d4-88020664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cust' => 0,
    'rdetails' => 0,
    'options' => 0,
    'resellerMode' => 0,
    'bdetails' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b297c64783f6_65405580',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b297c64783f6_65405580')) {function content_58b297c64783f6_65405580($_smarty_tpl) {?><div class="row-fluid">
    <div class="span6">
        <?php $_smarty_tpl->tpl_vars['rdetails'] = new Smarty_variable($_smarty_tpl->tpl_vars['cust']->value->getRegistrationDetails(), null, 0);?>
        <legend>Registration Details</legend>
        <table class="table">
            <tr>
                <th>Registered Name</th>
                <td><?php echo $_smarty_tpl->tpl_vars['rdetails']->value->getRegisteredName();?>
</td>
            </tr>
            <tr>
                <th>Company Number</th>
                <td><?php echo $_smarty_tpl->tpl_vars['rdetails']->value->getCompanyNumber();?>
</td>
            </tr>
            <tr>
                <th>Jurisdiction</th>
                <td><?php echo $_smarty_tpl->tpl_vars['rdetails']->value->getJurisdiction();?>
</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['rdetails']->value->getAddress1()) {?><?php echo $_smarty_tpl->tpl_vars['rdetails']->value->getAddress1();?>
<br/><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['rdetails']->value->getAddress2()) {?><?php echo $_smarty_tpl->tpl_vars['rdetails']->value->getAddress2();?>
<br/><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['rdetails']->value->getAddress3()) {?><?php echo $_smarty_tpl->tpl_vars['rdetails']->value->getAddress3();?>
<br/><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['rdetails']->value->getTownCity()) {?><?php echo $_smarty_tpl->tpl_vars['rdetails']->value->getTownCity();?>
<br/><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['rdetails']->value->getPostcode()) {?><?php echo $_smarty_tpl->tpl_vars['rdetails']->value->getPostcode();?>
<?php }?>
                </td>
            </tr>
            <tr>
                <th>Country</th>
                <td><?php echo OSS_Countries::getCountryName($_smarty_tpl->tpl_vars['rdetails']->value->getCountry());?>
</td>
            </tr>
        </table>
    </div>
    <div class="span6">
        <?php if ((!isset($_smarty_tpl->tpl_vars['options']->value['reseller']['no_billing_for_resold_customers'])||!$_smarty_tpl->tpl_vars['options']->value['reseller']['no_billing_for_resold_customers'])||!$_smarty_tpl->tpl_vars['resellerMode']->value||!$_smarty_tpl->tpl_vars['cust']->value->isResoldCustomer()) {?>
        <legend>Billing Details</legend>
        <?php $_smarty_tpl->tpl_vars['bdetails'] = new Smarty_variable($_smarty_tpl->tpl_vars['cust']->value->getBillingDetails(), null, 0);?>
        <table class="table">
            <tr>
                <th>Contact Name</th>
                <td><?php echo $_smarty_tpl->tpl_vars['bdetails']->value->getBillingContactName();?>
</td>
            </tr>
            <tr>
                <th>VAT Number</th>
                <td><?php echo $_smarty_tpl->tpl_vars['bdetails']->value->getVatNumber();?>
</td>
            </tr>
            <tr>
                <th>VAT Rate</th>
                <td><?php echo $_smarty_tpl->tpl_vars['bdetails']->value->getVatRate();?>
</td>
            </tr>
            <tr>
                <th>Billing Period</th>
                <td>
                    <?php if (isset(\Entities\CompanyBillingDetail::$BILLING_FREQUENCIES[$_smarty_tpl->tpl_vars['bdetails']->value->getBillingFrequency()])) {?>
                        <?php echo \Entities\CompanyBillingDetail::$BILLING_FREQUENCIES[$_smarty_tpl->tpl_vars['bdetails']->value->getBillingFrequency()];?>

                    <?php }?>
                </td>
            </tr>
            <tr>
                <th>E-Mail</th>
                <td><?php echo $_smarty_tpl->tpl_vars['bdetails']->value->getBillingEmail();?>
</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['bdetails']->value->getBillingAddress1()) {?><?php echo $_smarty_tpl->tpl_vars['bdetails']->value->getBillingAddress1();?>
<br/><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['bdetails']->value->getBillingAddress2()) {?><?php echo $_smarty_tpl->tpl_vars['bdetails']->value->getBillingAddress2();?>
<br/><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['bdetails']->value->getBillingAddress3()) {?><?php echo $_smarty_tpl->tpl_vars['bdetails']->value->getBillingAddress3();?>
<br/><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['bdetails']->value->getBillingTownCity()) {?><?php echo $_smarty_tpl->tpl_vars['bdetails']->value->getBillingTownCity();?>
<br/><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['bdetails']->value->getBillingPostcode()) {?><?php echo $_smarty_tpl->tpl_vars['bdetails']->value->getBillingPostcode();?>
<?php }?>
                </td>
            </tr>
            <tr>
                <th>Country</th>
                <td><?php echo OSS_Countries::getCountryName($_smarty_tpl->tpl_vars['bdetails']->value->getBillingCountry());?>
</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><?php echo $_smarty_tpl->tpl_vars['bdetails']->value->getBillingTelephone();?>
</td>
            </tr>
            <tr>
                <th>P/O Required</th>
                <td><?php if ($_smarty_tpl->tpl_vars['bdetails']->value->getPurchaseOrderRequired()) {?><i class="icon-ok"></i><?php } else { ?><i class="icon-remove"></i><?php }?></td>
            </tr>
            <tr>
                <th>Invoice Method</th>
                <td>
                    <?php if (isset(\Entities\CompanyBillingDetail::$INVOICE_METHODS[$_smarty_tpl->tpl_vars['bdetails']->value->getInvoiceMethod()])) {?>
                        <?php echo \Entities\CompanyBillingDetail::$INVOICE_METHODS[$_smarty_tpl->tpl_vars['bdetails']->value->getInvoiceMethod()];?>

                    <?php }?>
                </td>
            </tr>
            <tr>
                <th>Invoice E-Mail</th>
                <td><?php echo $_smarty_tpl->tpl_vars['bdetails']->value->getInvoiceEmail();?>
</td>
            </tr>
        </table>
        <?php }?>
    </div>
</div>

<?php }} ?>
