<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-03 11:40:21
         compiled from "/opt/ixpmanager/application/views/customer/forms/billing-registration.phtml" */ ?>
<?php /*%%SmartyHeaderCode:132799559558b8e5a564d117-38497330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc40eadc33185c8fc9c0c222495aeaaeb58d6e71' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/forms/billing-registration.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132799559558b8e5a564d117-38497330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cust' => 0,
    'element' => 0,
    'options' => 0,
    'resellerMode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b8e5a5688e19_31505357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8e5a5688e19_31505357')) {function content_58b8e5a5688e19_31505357($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?>
<form class="form-horizontal" enctype="application/x-www-form-urlencoded"
        accept-charset="UTF-8" method="post" horizontal="1"
        action="<?php echo smarty_function_genUrl(array('controller'=>"customer",'action'=>"billing-registration",'id'=>$_smarty_tpl->tpl_vars['cust']->value->getId()),$_smarty_tpl);?>
">
            
<div class="row-fluid">

    <div class="span6">
    
         <fieldset>
            <legend>Registration Details</legend>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->registeredName;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->companyNumber;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->jurisdiction;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->address1;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->address2;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->address3;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->townCity;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->postcode;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->country;?>


        </fieldset>

        
    </div>

    <div class="span6">
        <?php if ((!isset($_smarty_tpl->tpl_vars['options']->value['reseller']['no_billing_for_resold_customers'])||!$_smarty_tpl->tpl_vars['options']->value['reseller']['no_billing_for_resold_customers'])||!$_smarty_tpl->tpl_vars['resellerMode']->value||!$_smarty_tpl->tpl_vars['cust']->value->isResoldCustomer()) {?>
            <legend>Billing Details</legend>

                <?php echo $_smarty_tpl->tpl_vars['element']->value->billingContactName;?>

                <?php echo $_smarty_tpl->tpl_vars['element']->value->billingFrequency;?>

                <?php echo $_smarty_tpl->tpl_vars['element']->value->billingAddress1;?>

                <?php echo $_smarty_tpl->tpl_vars['element']->value->billingAddress2;?>

                <?php echo $_smarty_tpl->tpl_vars['element']->value->billingAddress3;?>

                <?php echo $_smarty_tpl->tpl_vars['element']->value->billingTownCity;?>

                <?php echo $_smarty_tpl->tpl_vars['element']->value->billingPostcode;?>

                <?php echo $_smarty_tpl->tpl_vars['element']->value->billingCountry;?>

                <?php echo $_smarty_tpl->tpl_vars['element']->value->billingEmail;?>

                <?php echo $_smarty_tpl->tpl_vars['element']->value->billingTelephone;?>

                <?php echo $_smarty_tpl->tpl_vars['element']->value->purchaseOrderRequired;?>

                <?php echo $_smarty_tpl->tpl_vars['element']->value->invoiceMethod;?>

                <?php echo $_smarty_tpl->tpl_vars['element']->value->invoiceEmail;?>

                <?php echo $_smarty_tpl->tpl_vars['element']->value->vatRate;?>

                <?php echo $_smarty_tpl->tpl_vars['element']->value->vatNumber;?>


            </fieldset>
        <?php }?>
    </div>

    
</div>

<div class="form-actions">

    <?php echo $_smarty_tpl->tpl_vars['element']->value->cancel;?>

    <?php echo $_smarty_tpl->tpl_vars['element']->value->submit;?>


</div>

    
</form>


<script type="text/javascript">

$(document).ready( function(){
    
    $( "#billingEmail" ).on( "change", function(){
        if( $( '#invoiceEmail' ).val() == "" )
            $( '#invoiceEmail' ).val( $('#billingEmail' ).val() );
    });
    
});

</script>

<?php }} ?>
