<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-23 12:45:12
         compiled from "/opt/ixpmanager/application/views/customer/overview.phtml" */ ?>
<?php /*%%SmartyHeaderCode:179185793258ae68d89a25a0-31982184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91698aa6601a2291b97a8a90950040d8ee915b8d' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/overview.phtml',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179185793258ae68d89a25a0-31982184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cust' => 0,
    'resellerMode' => 0,
    'controller' => 0,
    'action' => 0,
    'options' => 0,
    'customers' => 0,
    'k' => 0,
    'haveprev' => 0,
    'havenext' => 0,
    'cidprev' => 0,
    'cidnext' => 0,
    'multiIXP' => 0,
    'unreadNotes' => 0,
    'rsRoutes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58ae68d8a73196_88057389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ae68d8a73196_88057389')) {function content_58ae68d8a73196_88057389($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml",'pageTitle'=>"IXP Manager :: Administrator's Home"),$_smarty_tpl);?>


<ul class="breadcrumb">
    <li>
    <h3>
            <?php echo $_smarty_tpl->tpl_vars['cust']->value->getName();?>

            <?php echo smarty_function_tmplinclude(array('file'=>'customer/custtype.phtml'),$_smarty_tpl);?>

        </h3>
        <?php if ($_smarty_tpl->tpl_vars['resellerMode']->value&&$_smarty_tpl->tpl_vars['cust']->value->getReseller()) {?>
            <p style="margin-left: 15px;">Resold customer of <a href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>$_smarty_tpl->tpl_vars['action']->value,'id'=>$_smarty_tpl->tpl_vars['cust']->value->getReseller()->getId()),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['cust']->value->getReseller()->getName();?>
</p>
        <?php }?>
    </li>
    <li class="pull-right" style="margin-top: 12px;">
        <div class="btn-toolbar" style="display: inline;">
        
            <div class="btn-group">
                <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-cog"></i>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="<?php echo smarty_function_genUrl(array('controller'=>'virtual-interface','action'=>"add-wizard",'custid'=>$_smarty_tpl->tpl_vars['cust']->value->getId(),'rtn'=>"ov"),$_smarty_tpl);?>
">
                        	Provision new port...
                        </a>
                    </li>
                	<li class="divider"></li>
                    <li>
                        <a href="<?php echo smarty_function_genUrl(array('controller'=>"customer",'action'=>"welcome-email",'id'=>$_smarty_tpl->tpl_vars['cust']->value->getId()),$_smarty_tpl);?>
">Send Welcome Email...</a>
                    </li>
                </ul>
            </div>
        
            <div class="btn-group">
                <a class="btn btn-mini dropdown-toggle" href="#" data-toggle="dropdown">
                    <i class="icon-pencil"></i>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>"edit",'id'=>$_smarty_tpl->tpl_vars['cust']->value->getId()),$_smarty_tpl);?>
">
                            Edit Customer Details
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>"billing-registration",'id'=>$_smarty_tpl->tpl_vars['cust']->value->getId()),$_smarty_tpl);?>
">
                            <?php if ((!isset($_smarty_tpl->tpl_vars['options']->value['reseller']['no_billing_for_resold_customers'])||!$_smarty_tpl->tpl_vars['options']->value['reseller']['no_billing_for_resold_customers'])||!$_smarty_tpl->tpl_vars['resellerMode']->value||!$_smarty_tpl->tpl_vars['cust']->value->isResoldCustomer()) {?>
                                Edit Billing/Registration Details
                            <?php } else { ?>
                                Edit Registration Details
                            <?php }?>
                        </a>
                    </li>
                </ul>
            </div>
    
            <div class="btn-group">
                <?php $_smarty_tpl->tpl_vars['haveprev'] = new Smarty_variable(0, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['havenext'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['i']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['i']->iteration=0;
 $_smarty_tpl->tpl_vars['i']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
 $_smarty_tpl->tpl_vars['i']->iteration++;
 $_smarty_tpl->tpl_vars['i']->index++;
 $_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->index === 0;
 $_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['custs']['first'] = $_smarty_tpl->tpl_vars['i']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['custs']['last'] = $_smarty_tpl->tpl_vars['i']->last;
?>
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['custs']['first']) {?>
                        <?php $_smarty_tpl->tpl_vars['cidprev'] = new Smarty_variable($_smarty_tpl->tpl_vars['k']->value, null, 0);?>
                    <?php }?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['cust']->value->getId()) {?>
                        <?php $_smarty_tpl->tpl_vars['haveprev'] = new Smarty_variable(1, null, 0);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['haveprev']->value&&!$_smarty_tpl->tpl_vars['havenext']->value) {?>
                        <?php $_smarty_tpl->tpl_vars['havenext'] = new Smarty_variable(1, null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['cidnext'] = new Smarty_variable($_smarty_tpl->tpl_vars['k']->value, null, 0);?>
                    <?php }?>
                    
                    <?php if (!$_smarty_tpl->tpl_vars['haveprev']->value) {?>
                        <?php $_smarty_tpl->tpl_vars['cidprev'] = new Smarty_variable($_smarty_tpl->tpl_vars['k']->value, null, 0);?>
                    <?php }?>
                    
                    <?php if (!$_smarty_tpl->tpl_vars['havenext']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['custs']['last']) {?>
                        <?php $_smarty_tpl->tpl_vars['cidnext'] = new Smarty_variable($_smarty_tpl->tpl_vars['k']->value, null, 0);?>
                    <?php }?>
                    
                <?php } ?>
                
                <a class="btn btn-mini" href="<?php echo smarty_function_genUrl(array('controller'=>'customer','action'=>"overview",'id'=>$_smarty_tpl->tpl_vars['cidprev']->value),$_smarty_tpl);?>
"><i class="icon-chevron-left"></i></a>
                <a class="btn btn-mini" href="<?php echo smarty_function_genUrl(array('controller'=>'customer','action'=>"overview",'id'=>$_smarty_tpl->tpl_vars['cust']->value->getId()),$_smarty_tpl);?>
"><i class="icon-refresh"></i></a>
                <a class="btn btn-mini" href="<?php echo smarty_function_genUrl(array('controller'=>'customer','action'=>"overview",'id'=>$_smarty_tpl->tpl_vars['cidnext']->value),$_smarty_tpl);?>
"><i class="icon-chevron-right"></i></a>
            </div>
        </div>
    </li>
</ul>

<?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>

<div id="co-messages"></div>

<div class="row-fluid">

    <div class="span12 tabbable">
    
        <ul id="customer-overview-tabs" class="nav nav-tabs">
        
        <li class="active">
            <a href="#overview" data-toggle="tab">Overview</a>
        </li>

        <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
            <li>
                <a href="#ixps" data-toggle="tab">IXPs</a>
            </li>
        <?php }?>

        <li>
            <a href="#details" data-toggle="tab">Details</a>
        </li>

        <?php if ($_smarty_tpl->tpl_vars['resellerMode']->value&&$_smarty_tpl->tpl_vars['cust']->value->isReseller()) {?>
            <li>
                <a href="#resold-customers" data-toggle="tab">Resold Customers</a>
            </li>
        <?php }?>
            
        <?php if ($_smarty_tpl->tpl_vars['cust']->value->getType()!=\Entities\Customer::TYPE_ASSOCIATE&&(!$_smarty_tpl->tpl_vars['cust']->value->hasLeft())) {?>
            <li>
                <a href="#ports" data-toggle="tab">Ports</a>
            </li>

            <?php if ($_smarty_tpl->tpl_vars['cust']->value->hasPrivateVLANs()) {?>
                <li>
                    <a href="#private-vlans" data-toggle="tab">Private VLANs</a>
                </li>
            <?php }?>
        <?php }?>
                
        <li>
            <a href="#users" data-toggle="tab">Users</a>
        </li>
        
        <li>
            <a href="#contacts" data-toggle="tab">Contacts</a>
        </li>
        
        <li>
            <a href="#logins" data-toggle="tab">Logins</a>
        </li>
                
        <li>
            <a href="#notes" id="tab-notes" data-toggle="tab">
                Notes <?php if (isset($_smarty_tpl->tpl_vars['unreadNotes']->value)&&$_smarty_tpl->tpl_vars['unreadNotes']->value) {?>
                    <span id="notes-unread-indicator" class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['unreadNotes']->value;?>
</span>
                <?php }?>
            </a>
        </li>
        
        <?php if (count($_smarty_tpl->tpl_vars['cust']->value->getConsoleServerConnections())) {?>
            <li>
                <a href="#console-server-connections" data-toggle="tab">OOB Access</a>
            </li>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['cust']->value->getType()!=\Entities\Customer::TYPE_ASSOCIATE&&(!$_smarty_tpl->tpl_vars['cust']->value->hasLeft())) {?>
        
            <?php if (!isset($_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['rs-prefixes'])||!$_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['rs-prefixes']) {?>
                <?php if ($_smarty_tpl->tpl_vars['cust']->value->isRouteServerClient()) {?>
                    <li>
                        <a href="<?php echo smarty_function_genUrl(array('controller'=>"rs-prefixes",'action'=>"list",'custid'=>$_smarty_tpl->tpl_vars['cust']->value->getId()),$_smarty_tpl);?>
">
                            RS Prefixes
                            <?php if ($_smarty_tpl->tpl_vars['rsRoutes']->value['adv_nacc']['total']>0) {?>
                                <span class="badge badge-important"><?php echo $_smarty_tpl->tpl_vars['rsRoutes']->value['adv_nacc']['total'];?>
</span>
                            <?php }?>
                            &raquo;
                        </a>
                    </li>
                <?php }?>
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['options']->value['sflow']['enabled'])&&$_smarty_tpl->tpl_vars['options']->value['sflow']['enabled']) {?>
                <li>
                    <a href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"p2p",'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname()),$_smarty_tpl);?>
">P2P &raquo;</a>
                </li>
            <?php }?>
        <?php }?>
        
        </ul>
        
        <div class="tab-content">
        <div class="tab-pane active" id="overview">
            <?php echo smarty_function_tmplinclude(array('file'=>"customer/overview-tabs/overview.phtml"),$_smarty_tpl);?>

        </div>

        <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
            <div class="tab-pane" id="ixps">
                <?php echo smarty_function_tmplinclude(array('file'=>"customer/overview-tabs/ixps.phtml"),$_smarty_tpl);?>

            </div>
        <?php }?>

        <div class="tab-pane" id="details">
            <?php echo smarty_function_tmplinclude(array('file'=>"customer/overview-tabs/details.phtml"),$_smarty_tpl);?>

        </div>

        <?php if ($_smarty_tpl->tpl_vars['resellerMode']->value&&$_smarty_tpl->tpl_vars['cust']->value->isReseller()) {?>
            <div class="tab-pane" id="resold-customers">
                <?php echo smarty_function_tmplinclude(array('file'=>"customer/overview-tabs/resold-customers.phtml"),$_smarty_tpl);?>

            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['cust']->value->getType()!=\Entities\Customer::TYPE_ASSOCIATE&&(!$_smarty_tpl->tpl_vars['cust']->value->hasLeft())) {?>
            <div class="tab-pane" id="ports">
                <?php if ($_smarty_tpl->tpl_vars['resellerMode']->value&&$_smarty_tpl->tpl_vars['cust']->value->isReseller()) {?>
                    <?php echo smarty_function_tmplinclude(array('file'=>"customer/overview-tabs/reseller-ports.phtml"),$_smarty_tpl);?>

                <?php } else { ?>
                    <?php echo smarty_function_tmplinclude(array('file'=>"customer/overview-tabs/ports.phtml"),$_smarty_tpl);?>

                <?php }?>
            </div>

                <?php if ($_smarty_tpl->tpl_vars['cust']->value->hasPrivateVLANs()) {?>
                    <div class="tab-pane" id="private-vlans">
                        <?php echo smarty_function_tmplinclude(array('file'=>"customer/overview-tabs/private-vlans.phtml"),$_smarty_tpl);?>

                    </div>
                <?php }?>
        <?php }?>
            
        <div class="tab-pane" id="users">
            <?php echo smarty_function_tmplinclude(array('file'=>"customer/overview-tabs/users.phtml"),$_smarty_tpl);?>

        </div>
        
        <div class="tab-pane" id="contacts">
            <?php echo smarty_function_tmplinclude(array('file'=>"customer/overview-tabs/contacts.phtml"),$_smarty_tpl);?>

        </div>
        
         <div class="tab-pane" id="logins">
            <?php echo smarty_function_tmplinclude(array('file'=>"customer/overview-tabs/logins.phtml"),$_smarty_tpl);?>

        </div>
        
        <div class="tab-pane" id="notes">
            <?php echo smarty_function_tmplinclude(array('file'=>"customer/overview-tabs/notes.phtml"),$_smarty_tpl);?>

        </div>
        
        <?php if (count($_smarty_tpl->tpl_vars['cust']->value->getConsoleServerConnections())) {?>
            <div class="tab-pane" id="console-server-connections">
                <?php echo smarty_function_tmplinclude(array('file'=>"customer/overview-tabs/console-server-connections.phtml"),$_smarty_tpl);?>

            </div>
        <?php }?>
            
        </div>
        
    </div>
    
</div>

<script><?php echo smarty_function_tmplinclude(array('file'=>"customer/js/overview.js"),$_smarty_tpl);?>
</script>
<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>

<?php }} ?>
