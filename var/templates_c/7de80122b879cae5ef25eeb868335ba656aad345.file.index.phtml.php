<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:50:18
         compiled from "/opt/ixpmanager/application/views/dashboard/index.phtml" */ ?>
<?php /*%%SmartyHeaderCode:50767428558b7a48a65c9f2-63569338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7de80122b879cae5ef25eeb868335ba656aad345' => 
    array (
      0 => '/opt/ixpmanager/application/views/dashboard/index.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50767428558b7a48a65c9f2-63569338',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'multiIXP' => 0,
    'resellerMode' => 0,
    'cust' => 0,
    'custNotes' => 0,
    'unreadNotes' => 0,
    'options' => 0,
    'rsRoutes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7a48a6be652_14282415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7a48a6be652_14282415')) {function content_58b7a48a6be652_14282415($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml",'pageTitle'=>"IXP Manager :: Member Dashboard"),$_smarty_tpl);?>


<div class="page-content">

<?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>






<?php if (!$_smarty_tpl->tpl_vars['user']->value->getCustomer()->isTypeAssociate()) {?>

    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#tab1" data-toggle="tab">Overview</a></li>
            <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
                <li><a href="#tab-ixps" data-toggle="tab">IXPs</a></li>
            <?php }?>
            <li><a href="#tab-details" data-toggle="tab">My Details</a></li>
            <li><a href="#tab3" data-toggle="tab">Ports</a></li>
            
            <?php if ($_smarty_tpl->tpl_vars['resellerMode']->value&&$_smarty_tpl->tpl_vars['cust']->value->isReseller()) {?>
                <li>
                    <a href="#tab-resold-customers" data-toggle="tab">Resold Customers</a>
                </li>
            <?php }?>
            
            <?php if (count($_smarty_tpl->tpl_vars['custNotes']->value)) {?>
                <li>
                    <a href="#tab-content-notes" id="tab-notes" data-toggle="tab">
                        Notes <?php if (isset($_smarty_tpl->tpl_vars['unreadNotes']->value)&&$_smarty_tpl->tpl_vars['unreadNotes']->value) {?>
                            <span id="notes-unread-indicator" class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['unreadNotes']->value;?>
</span>
                        <?php }?>
                    </a>
                </li>
            <?php }?>

            <?php if (!isset($_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['rs-prefixes'])||!$_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['rs-prefixes']) {?>
                <?php if ($_smarty_tpl->tpl_vars['user']->value->getCustomer()->isRouteServerClient()) {?>
                    <li>
                        <a href="<?php echo smarty_function_genUrl(array('controller'=>"rs-prefixes",'action'=>"list",'tab'=>'adv_nacc'),$_smarty_tpl);?>
">
                            Prefixes
		    	            <?php if ($_smarty_tpl->tpl_vars['rsRoutes']->value['adv_nacc']['total']>0) {?>
		    	                <span class="badge badge-important"><?php echo $_smarty_tpl->tpl_vars['rsRoutes']->value['adv_nacc']['total'];?>
</span>
		                    <?php }?>
                            &raquo;
                        </a>
                    </li>
                <?php }?>
            <?php }?>

            <?php if (!isset($_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['peering-manager'])||!$_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['peering-manager']) {?>
                <li><a href="<?php echo smarty_function_genUrl(array('controller'=>"peering-manager"),$_smarty_tpl);?>
">Peering Manager &raquo;</a></li>
            <?php }?>

            <li><a href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"member"),$_smarty_tpl);?>
">Statistics &raquo;</a></li>

            <?php if (isset($_smarty_tpl->tpl_vars['options']->value['sflow']['enabled'])&&$_smarty_tpl->tpl_vars['options']->value['sflow']['enabled']) {?>
                <li><a href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"p2p"),$_smarty_tpl);?>
">Peer to Peer Traffic &raquo;</a></li>
            <?php }?>
    </ul>

    <div class="tab-content">

        <div class="tab-pane active" id="tab1">
            <!-- Overview Tab -->
            <?php echo smarty_function_tmplinclude(array('file'=>"dashboard/index-tabs/overview.phtml"),$_smarty_tpl);?>

        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
            <div class="tab-pane" id="tab-ixps">
                <?php echo smarty_function_tmplinclude(array('file'=>"dashboard/index-tabs/ixps.phtml"),$_smarty_tpl);?>


            </div>
        <?php }?>

        <div class="tab-pane" id="tab-details">
            <!-- Details Tab -->
            <?php echo smarty_function_tmplinclude(array('file'=>"dashboard/index-tabs/details.phtml"),$_smarty_tpl);?>


        </div>

        <div class="tab-pane" id="tab3">
            <!-- Connections -->
            <?php echo smarty_function_tmplinclude(array('file'=>"dashboard/index-tabs/connections.phtml"),$_smarty_tpl);?>


        </div>

        <?php if ($_smarty_tpl->tpl_vars['resellerMode']->value&&$_smarty_tpl->tpl_vars['cust']->value->isReseller()) {?>
            <div class="tab-pane" id="tab-resold-customers">
                <?php echo smarty_function_tmplinclude(array('file'=>"customer/overview-tabs/resold-customers.phtml"),$_smarty_tpl);?>

            </div>
        <?php }?>
        
        <?php if (count($_smarty_tpl->tpl_vars['custNotes']->value)) {?>
            <div class="tab-pane" id="tab-content-notes">
                <?php echo smarty_function_tmplinclude(array('file'=>"customer/overview-tabs/notes.phtml"),$_smarty_tpl);?>


            </div>
        <?php }?>

    </div>

<?php } else { ?>

    <?php echo smarty_function_tmplinclude(array('file'=>"dashboard/index-tabs/associate.phtml"),$_smarty_tpl);?>


<?php }?>

</div>

<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>

<?php }} ?>
