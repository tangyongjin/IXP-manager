<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:58:49
         compiled from "/opt/ixpmanager/application/views/customer/detail.phtml" */ ?>
<?php /*%%SmartyHeaderCode:18568912158b7a6898fbd97-87857883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c67a8a9f80a686f84c5ff276bf6d77243cacaa4' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/detail.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18568912158b7a6898fbd97-87857883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'cust' => 0,
    'multiIXP' => 0,
    'ixp' => 0,
    'vi' => 0,
    'vlanints' => 0,
    'vlanint' => 0,
    'isLAG' => 0,
    'pi' => 0,
    'vli' => 0,
    'vlanid' => 0,
    'netinfo' => 0,
    'as112UiActive' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7a6899bcfa2_93040165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7a6899bcfa2_93040165')) {function content_58b7a6899bcfa2_93040165($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
if (!is_callable('smarty_modifier_asnumber')) include '/opt/ixpmanager/application/../library/inex-smarty/functions/modifier.asnumber.php';
if (!is_callable('smarty_function_counter')) include '/opt/ixpmanager/application/../vendor/smarty/smarty/libs/plugins/function.counter.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml",'pageTitle'=>"IXP Manager :: Member Dashboard"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==3) {?>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>"customer",'action'=>"details"),$_smarty_tpl);?>
">Customer Details</a> <span class="divider">/</span>
        </li>
        <li class="active">
            <?php echo $_smarty_tpl->tpl_vars['cust']->value->getName();?>

        </li>
    </ul>

    <div>
<?php } else { ?>
    <div class="page-content">

        <div class="page-header">
            <h1>Member Details - <?php echo $_smarty_tpl->tpl_vars['cust']->value->getName();?>
</h1>
        </div>
<?php }?>

<?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>


<table id="ixpDataTable">

<tr>
    <td width="200"><strong>Member Type:</strong></td>
    <td width="200" id="value"><?php echo \Entities\Customer::$CUST_TYPES_TEXT[$_smarty_tpl->tpl_vars['cust']->value->getType()];?>
</td>
    <td width="40"></td>
    <td width="200"><strong>Member Status:</strong></td>
    <td width="200" id="value"><?php echo \Entities\Customer::$CUST_STATUS_TEXT[$_smarty_tpl->tpl_vars['cust']->value->getStatus()];?>
</td>
</tr>

<tr>
    <td>&nbsp;</td><td></td><td></td><td></td><td></td>
</tr>

<tr>
    <td><strong>AS Number:</strong></td>
    <td id="value"><?php echo smarty_modifier_asnumber($_smarty_tpl->tpl_vars['cust']->value->getAutsys());?>
</td>
    <td></td>
    <td><strong>Peering Macro:</strong></td>
    <td id="value"><?php echo $_smarty_tpl->tpl_vars['cust']->value->getPeeringmacro();?>
</td>
</tr>

<tr>
    <td></td><td></td><td></td><td></td><td></td>
</tr>

<tr>
    <td><strong>Peering Policy:</strong></td>
    <td id="value"><?php echo $_smarty_tpl->tpl_vars['cust']->value->getPeeringpolicy();?>
</td>
    <td></td>
    <td></td>
    <td></td>
</tr>

<tr>
    <td>&nbsp;</td><td></td><td></td><td></td><td></td>
</tr>

<tr>
    <td><strong>Peering Email:</strong></td>
    <td id="value"><?php echo $_smarty_tpl->tpl_vars['cust']->value->getPeeringemail();?>
</td>
    <td></td>
    <td><strong>NOC Email</strong></td>
    <td id="value"><?php echo $_smarty_tpl->tpl_vars['cust']->value->getNocemail();?>
</td>
</tr>

<tr>
    <td></td><td></td><td></td><td></td><td></td>
</tr>

<tr>
    <td><strong>NOC Phone:</strong></td>
    <td id="value"><?php echo $_smarty_tpl->tpl_vars['cust']->value->getNocphone();?>
</td>
    <td></td>
    <td><strong>NOC 24 Hour Phone</strong></td>
    <td id="value"><?php echo $_smarty_tpl->tpl_vars['cust']->value->getNoc24hphone();?>
</td>
</tr>

<tr>
    <td></td><td></td><td></td><td></td><td></td>
</tr>

<tr>
    <td><strong>Dedicated NOC Web:</strong></td>
    <td id="value"><a href="<?php echo $_smarty_tpl->tpl_vars['cust']->value->getNocwww();?>
"><?php echo $_smarty_tpl->tpl_vars['cust']->value->getNocwww();?>
</a></td>
    <td></td>
    <td><strong>NOC Fax</strong></td>
    <td id="value"><?php echo $_smarty_tpl->tpl_vars['cust']->value->getNocfax();?>
</td>
</tr>

<tr>
    <td></td><td></td><td></td><td></td><td></td>
</tr>

<tr>
    <td><strong>NOC Hours:</strong></td>
    <td id="value"><?php echo $_smarty_tpl->tpl_vars['cust']->value->getNochours();?>
</td>
    <td></td>
    <td></td>
    <td></td>
</tr>

<tr>
    <td>&nbsp;</td><td></td><td></td><td></td><td></td>
</tr>

<tr>
    <td><strong>Corporate Web:</strong></td>
    <td id="value"><a href="<?php echo $_smarty_tpl->tpl_vars['cust']->value->getCorpwww();?>
"><?php echo $_smarty_tpl->tpl_vars['cust']->value->getCorpwww();?>
</a></td>
    <td></td>
    <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
        <td><strong>IXPs:</strong></td>
        <td>
            <?php  $_smarty_tpl->tpl_vars['ixp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ixp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cust']->value->getIXPs(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['ixp']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['ixp']->key => $_smarty_tpl->tpl_vars['ixp']->value) {
$_smarty_tpl->tpl_vars['ixp']->_loop = true;
 $_smarty_tpl->tpl_vars['ixp']->index++;
?>
                <?php if ($_smarty_tpl->tpl_vars['ixp']->index!=0) {?><br /><?php }?>
                <?php echo $_smarty_tpl->tpl_vars['ixp']->value->getName();?>

            <?php } ?>
        </td>
    <?php } else { ?>
        <td></td>
        <td></td>
    <?php }?>
</tr>

<tr>
    <td>&nbsp;</td><td></td><td></td><td></td><td></td>
</tr>

</table>


<?php  $_smarty_tpl->tpl_vars['vi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cust']->value->getVirtualInterfaces(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vi']->key => $_smarty_tpl->tpl_vars['vi']->value) {
$_smarty_tpl->tpl_vars['vi']->_loop = true;
?>

<hr width="95%"></hr>

<h3>
    Connection <?php echo smarty_function_counter(array('name'=>'numconnections'),$_smarty_tpl);?>

    <?php $_smarty_tpl->tpl_vars['vlanints'] = new Smarty_variable($_smarty_tpl->tpl_vars['vi']->value->getVlanInterfaces(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['vlanint'] = new Smarty_variable($_smarty_tpl->tpl_vars['vlanints']->value[0], null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['vlanint']->value) {?>
    <small>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Infrastructure #<?php if ($_smarty_tpl->tpl_vars['vlanint']->value->getVlan()->getNumber()%10==0) {?>1<?php } else { ?>2<?php }?>
        <?php if (count($_smarty_tpl->tpl_vars['vi']->value->getPhysicalInterfaces())>1) {?>
            <?php $_smarty_tpl->tpl_vars['isLAG'] = new Smarty_variable(1, null, 0);?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LAG Port
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['isLAG'] = new Smarty_variable(0, null, 0);?>
        <?php }?>
    </small>
    <?php }?>
</h3>

<?php  $_smarty_tpl->tpl_vars['pi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vi']->value->getPhysicalInterfaces(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pi']->key => $_smarty_tpl->tpl_vars['pi']->value) {
$_smarty_tpl->tpl_vars['pi']->_loop = true;
?>

    <?php if ($_smarty_tpl->tpl_vars['isLAG']->value) {?><h5>Port <?php echo smarty_function_counter(array('name'=>'numphysports'),$_smarty_tpl);?>
 of <?php echo count($_smarty_tpl->tpl_vars['vi']->value->getPhysicalInterfaces());?>
 in LAG</h5><?php }?>

    <table id="myDetailsTable">
        <tr>
            <td width="200"><strong>Switch:</strong></td>
            <td width="200" id="value"><?php echo $_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getSwitcher()->getName();?>
</td>
            <td width="40"></td>
            <td width="200"><strong>Switch Port:</strong></td>
            <td width="200" id="value"><?php echo $_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getName();?>
</td>
        </tr>
        <tr>
            <td><strong>Speed:</strong></td>
            <td id="value"><?php echo $_smarty_tpl->tpl_vars['pi']->value->getSpeed();?>
 Mbps</td>
            <td></td>
            <td><strong>Duplex:</strong></td>
            <td id="value"><?php echo $_smarty_tpl->tpl_vars['pi']->value->getDuplex();?>
</td>
        </tr>
        <tr>
            <td><strong>Location:</strong></td>
            <td id="value"><?php echo $_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getSwitcher()->getCabinet()->getLocation()->getName();?>
</td>
            <td></td>
            <td><strong>Colo Cabinet ID:</strong></td>
            <td id="value"><?php echo $_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getSwitcher()->getCabinet()->getName();?>
</td>
        </tr>
        <tr>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
    </table>
<?php } ?>

<br /><br />


<?php  $_smarty_tpl->tpl_vars['vli'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vli']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vi']->value->getVlanInterfaces(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vli']->key => $_smarty_tpl->tpl_vars['vli']->value) {
$_smarty_tpl->tpl_vars['vli']->_loop = true;
?>
<?php $_smarty_tpl->tpl_vars['vlanid'] = new Smarty_variable($_smarty_tpl->tpl_vars['vli']->value->getVlan()->getId(), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['vli']->value->getVlan()->getPrivate()) {?>

    <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vli']->value->getVlan()->getName();?>
:</h4>

    <table id="myDetailsTable">

    <tr>
        <td width="40"></td>
        <td width="200"><strong>IPv6 Address:</strong></td>
        <td width="200" id="value">
            <?php if ($_smarty_tpl->tpl_vars['vli']->value->getIpv6enabled()&&$_smarty_tpl->tpl_vars['vli']->value->getIpv6address()) {?>
                <?php echo $_smarty_tpl->tpl_vars['vli']->value->getIPv6Address()->getAddress();?>
/<?php echo $_smarty_tpl->tpl_vars['netinfo']->value[$_smarty_tpl->tpl_vars['vlanid']->value][6]['masklen'];?>

            <?php } else { ?>
                IPv6 not enabled.
            <?php }?>
        </td>
        <td width="40"></td>
        <td width="200"><strong>IPv4 Address:</strong></td>
        <td width="200" id="value">
            <?php if ($_smarty_tpl->tpl_vars['vli']->value->getIpv4enabled()&&$_smarty_tpl->tpl_vars['vli']->value->getIpv4address()) {?>
                <?php echo $_smarty_tpl->tpl_vars['vli']->value->getIPv4Address()->getAddress();?>
/<?php echo $_smarty_tpl->tpl_vars['netinfo']->value[$_smarty_tpl->tpl_vars['vlanid']->value][4]['masklen'];?>

            <?php } else { ?>
                IPv4 not enabled.
            <?php }?>
        </td>
    </tr>

    <tr>
        <td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>

    <tr>
        <td></td>
        <td><strong>Multicast Enabled:</strong></td>
        <td id="value"><?php if ($_smarty_tpl->tpl_vars['vli']->value->getMcastenabled()) {?>Yes<?php } else { ?>No<?php }?></td>
        <td></td>
        <td><strong>Max Prefixes:</strong></td>
        <td id="value">global: <?php echo $_smarty_tpl->tpl_vars['cust']->value->getMaxprefixes();?>
, per-interface: <?php echo $_smarty_tpl->tpl_vars['vli']->value->getMaxbgpprefix();?>
</td>
    </tr>

    <tr>
        <td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>

    <tr>
        <td></td>
        <td><strong>Route Server Client:</strong></td>
        <td id="value"><?php if ($_smarty_tpl->tpl_vars['vli']->value->getRsclient()) {?>Yes<?php } else { ?>No<?php }?></td>
        <td></td>
        <?php if ($_smarty_tpl->tpl_vars['as112UiActive']->value) {?>
            <td><strong>AS112 Client:</strong></td>
            <td id="value"><?php if ($_smarty_tpl->tpl_vars['vli']->value->getAs112client()) {?>Yes<?php } else { ?>No<?php }?></td>
        <?php } else { ?>
            <td></td>
            <td></td>
        <?php }?>
    </tr>

    </table>

<?php }?> 

<?php } ?>

<br /><br />

<?php } ?>

</div>

<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>

<?php }} ?>
