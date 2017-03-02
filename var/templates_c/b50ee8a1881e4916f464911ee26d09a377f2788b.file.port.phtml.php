<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 09:06:46
         compiled from "/opt/ixpmanager/application/views/customer/overview-tabs/ports/port.phtml" */ ?>
<?php /*%%SmartyHeaderCode:123047579258b77026994d92-30809316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b50ee8a1881e4916f464911ee26d09a377f2788b' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/overview-tabs/ports/port.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123047579258b77026994d92-30809316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vi' => 0,
    'vlanints' => 0,
    'physInts' => 0,
    'user' => 0,
    'isLAG' => 0,
    'multiIXP' => 0,
    'pi' => 0,
    'vli' => 0,
    'pvlans' => 0,
    'cust' => 0,
    'options' => 0,
    'm' => 0,
    'vlanid' => 0,
    'netinfo' => 0,
    'as112UiActive' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b77026abaea2_55440859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b77026abaea2_55440859')) {function content_58b77026abaea2_55440859($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/opt/ixpmanager/application/../vendor/smarty/smarty/libs/plugins/function.counter.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genMrtgImgUrlTag')) include '/opt/ixpmanager/application/../library/inex-smarty/functions/function.genMrtgImgUrlTag.php';
?>


<div class="row-fluid">

    <div class="span6">

    <h3>
        Connection <?php echo smarty_function_counter(array('name'=>'numconnections'),$_smarty_tpl);?>


        <?php $_smarty_tpl->tpl_vars['vlanints'] = new Smarty_variable($_smarty_tpl->tpl_vars['vi']->value->getVlanInterfaces(), null, 0);?>

        <?php if (count($_smarty_tpl->tpl_vars['vlanints']->value)) {?>
            <?php $_smarty_tpl->tpl_vars['vlanint'] = new Smarty_variable($_smarty_tpl->tpl_vars['vlanints']->value[0], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['vlanint'] = new Smarty_variable(0, null, 0);?>
        <?php }?>

        <small>
            <?php $_smarty_tpl->tpl_vars['physInts'] = new Smarty_variable($_smarty_tpl->tpl_vars['vi']->value->getPhysicalInterfaces(), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['vi']->value->getType()==\Entities\SwitchPort::TYPE_PEERING&&count($_smarty_tpl->tpl_vars['physInts']->value)) {?>
                &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['physInts']->value[0]->getSwitchPort()->getSwitcher()->getInfrastructure()->getName();?>

            <?php } elseif ($_smarty_tpl->tpl_vars['vi']->value->getType()==\Entities\SwitchPort::TYPE_FANOUT) {?>
                &nbsp;&nbsp;&nbsp;&nbsp;Reseller Fanout

                <?php if (count($_smarty_tpl->tpl_vars['physInts']->value)&&$_smarty_tpl->tpl_vars['physInts']->value[0]->getRelatedInterface()) {?>
                    for <a

                    <?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>
                        href="<?php echo smarty_function_genUrl(array('controller'=>"customer",'action'=>"overview",'id'=>$_smarty_tpl->tpl_vars['physInts']->value[0]->getRelatedInterface()->getVirtualInterface()->getCustomer()->getId()),$_smarty_tpl);?>
"
                    <?php } else { ?>
                        href="<?php echo smarty_function_genUrl(array('controller'=>"customer",'action'=>"detail",'id'=>$_smarty_tpl->tpl_vars['physInts']->value[0]->getRelatedInterface()->getVirtualInterface()->getCustomer()->getId()),$_smarty_tpl);?>
"
                    <?php }?>

                    ><?php echo $_smarty_tpl->tpl_vars['physInts']->value[0]->getRelatedInterface()->getVirtualInterface()->getCustomer()->getAbbreviatedName();?>
</a>
                <?php } else { ?>
                    <em>(unassigned)</em>
                <?php }?>

            <?php } elseif ($_smarty_tpl->tpl_vars['vi']->value->getType()==\Entities\SwitchPort::TYPE_RESELLER) {?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resller Uplink
            <?php }?>

            <?php if (count($_smarty_tpl->tpl_vars['vi']->value->getPhysicalInterfaces())>1) {?>
                <?php $_smarty_tpl->tpl_vars['isLAG'] = new Smarty_variable(1, null, 0);?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LAG Port
            <?php } else { ?>
                <?php echo smarty_function_tmplinclude(array('file'=>'customer/overview-tabs/ports/physintstatus.phtml','pi'=>$_smarty_tpl->tpl_vars['physInts']->value[0]),$_smarty_tpl);?>

                <?php $_smarty_tpl->tpl_vars['isLAG'] = new Smarty_variable(0, null, 0);?>
            <?php }?>
        </small>

        <?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>
            <div class="btn-group" style="padding-left: 20px;">
                <a class="btn btn-mini have-tooltip-below" href="<?php echo smarty_function_genUrl(array('controller'=>'virtual-interface','action'=>'edit','id'=>$_smarty_tpl->tpl_vars['vi']->value->getId()),$_smarty_tpl);?>
" title="Edit"><i class="icon-pencil"></i></a>
            </div>
        <?php }?>

    </h3>

    <?php echo smarty_function_counter(array('name'=>'numphysports','print'=>0,'start'=>0),$_smarty_tpl);?>

    <?php  $_smarty_tpl->tpl_vars['pi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vi']->value->getPhysicalInterfaces(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pi']->key => $_smarty_tpl->tpl_vars['pi']->value) {
$_smarty_tpl->tpl_vars['pi']->_loop = true;
?>

        <?php if ($_smarty_tpl->tpl_vars['isLAG']->value) {?>
            <h5>
                Port <?php echo smarty_function_counter(array('name'=>'numphysports'),$_smarty_tpl);?>
 of <?php echo count($_smarty_tpl->tpl_vars['vi']->value->getPhysicalInterfaces());?>
 in LAG
                <?php echo smarty_function_tmplinclude(array('file'=>'customer/overview-tabs/ports/physintstatus.phtml'),$_smarty_tpl);?>

            </h5>
        <?php }?>

        <table id="myDetailsTable">
            <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
                <tr>
                    <td width="200"><strong>IXP:</strong></td>
                    <td width="200" id="value">
                        <?php echo $_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getSwitcher()->getInfrastructure()->getIXP()->getName();?>

                    </td>
                    <td width="40"></td>
                    <td width="200"></td>
                    <td width="200" id="value"></td>
                </tr>
            <?php }?>
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
                <td id="value">
                    <?php echo $_smarty_tpl->tpl_vars['pi']->value->getSpeed();?>
 Mbps <?php if ($_smarty_tpl->tpl_vars['pi']->value->getDuplex()!='full') {?>(HD)<?php }?>
                </td>
                <td></td>
                <?php if ($_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getSwitcher()->getMauSupported()) {?>
                    <td><strong>Media:</strong></td>
                    <td id="value"><?php echo $_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getMauType();?>
</td>
                <?php } else { ?>
                    <td><strong>Duplex:</strong></td>
                    <td id="value"><?php echo $_smarty_tpl->tpl_vars['pi']->value->getDuplex();?>
</td>
                <?php }?>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getSwitcher()->getCabinet()) {?>
            <tr>
                <td><strong>Location:</strong></td>
                <td id="value"><?php echo $_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getSwitcher()->getCabinet()->getLocation()->getName();?>
</td>
                <td></td>
                <td><strong>Colo Cabinet ID:</strong></td>
                <td id="value"><?php echo $_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getSwitcher()->getCabinet()->getName();?>
</td>
            </tr>
            <?php }?>
            <tr>
                <td></td><td></td><td></td><td></td><td></td>
            </tr>
        </table>
    <?php }
if (!$_smarty_tpl->tpl_vars['pi']->_loop) {
?>
        <p>
            No physical interfaces defined.
            <?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>
                <a href="<?php echo smarty_function_genUrl(array('controller'=>"physical-interface",'action'=>"add",'vintid'=>$_smarty_tpl->tpl_vars['vi']->value->getId()),$_smarty_tpl);?>
">Add one...</a>
            <?php }?>
        </p>
    <?php } ?>

    <br /><br />

    <?php  $_smarty_tpl->tpl_vars['vli'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vli']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vi']->value->getVlanInterfaces(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vli']->key => $_smarty_tpl->tpl_vars['vli']->value) {
$_smarty_tpl->tpl_vars['vli']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars['vlanid'] = new Smarty_variable($_smarty_tpl->tpl_vars['vli']->value->getVlan()->getId(), null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['vli']->value->getVlan()->getPrivate()) {?>

            <?php if (!isset($_smarty_tpl->tpl_vars['pvlans']->value)) {?>
                <?php $_smarty_tpl->tpl_vars['pvlans'] = new Smarty_variable($_smarty_tpl->tpl_vars['cust']->value->getPrivateVlanDetails(), null, 0);?>
            <?php }?>

            <h4>
                &nbsp;&nbsp;&nbsp;Private VLAN Service
                <small><?php echo $_smarty_tpl->tpl_vars['options']->value['identity']['orgname'];?>
 Reference: #<?php echo $_smarty_tpl->tpl_vars['vli']->value->getVlan()->getId();?>
</small>
            </h4>

            <table id="myDetailsTable">

            <tr>
                <td width="40"></td>
                <td width="80"><strong>Name</strong></td>
                <td width="150" id="value"><?php echo $_smarty_tpl->tpl_vars['vli']->value->getVlan()->getName();?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
                    <td width="20"></td>
                    <td width="60"><strong>IXP</strong></td>
                    <td width="150" id="value"><?php echo $_smarty_tpl->tpl_vars['vli']->value->getVlan()->getInfrastructure()->getIXP()->getName();?>
</td>
                <?php }?>
                <td width="20"></td>
                <td width="80"><strong>Tag</strong></td>
                <td width="80" id="value"><?php echo $_smarty_tpl->tpl_vars['vli']->value->getVlan()->getNumber();?>
</td>
                <td width="20"></td>
                <td width="150"><strong>Other Members:</strong></td>
                <td width="400" id="value">
                    <?php if (count($_smarty_tpl->tpl_vars['pvlans']->value[$_smarty_tpl->tpl_vars['vli']->value->getVlan()->getId()]['members'])==1) {?>
                        <em>None - single member</em>
                    <?php } else { ?>
                        <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pvlans']->value[$_smarty_tpl->tpl_vars['vli']->value->getVlan()->getId()]['members']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
                            <?php echo $_smarty_tpl->tpl_vars['m']->value->getAbbreviatedName();?>
<br />
                        <?php } ?>
                    <?php }?>
                </td>
            </tr>

            </table>
            <br /><br />

        <?php } else { ?>
            <h4>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vli']->value->getVlan()->getName();?>
:</h4>

            <table id="myDetailsTable">

            <tr>
                <td width="40"></td>
                <td width="200"><strong>IPv6 Address:</strong></td>
                <td width="200" id="value">
                    <?php if ($_smarty_tpl->tpl_vars['vli']->value->getIpv6enabled()&&$_smarty_tpl->tpl_vars['vli']->value->getIpv6address()) {?>
                        <?php echo $_smarty_tpl->tpl_vars['vli']->value->getIPv6Address()->getAddress();?>
<?php if (isset($_smarty_tpl->tpl_vars['netinfo']->value[$_smarty_tpl->tpl_vars['vlanid']->value])) {?>/<?php echo $_smarty_tpl->tpl_vars['netinfo']->value[$_smarty_tpl->tpl_vars['vlanid']->value][6]['masklen'];?>
<?php }?>
                    <?php } else { ?>
                        IPv6 not enabled.
                    <?php }?>
                </td>
                <td width="40"></td>
                <td width="200"><strong>IPv4 Address:</strong></td>
                <td width="200" id="value">
                    <?php if ($_smarty_tpl->tpl_vars['vli']->value->getIpv4enabled()&&$_smarty_tpl->tpl_vars['vli']->value->getIpv4address()) {?>
                        <?php echo $_smarty_tpl->tpl_vars['vli']->value->getIPv4Address()->getAddress();?>
<?php if (isset($_smarty_tpl->tpl_vars['netinfo']->value[$_smarty_tpl->tpl_vars['vlanid']->value])) {?>/<?php echo $_smarty_tpl->tpl_vars['netinfo']->value[$_smarty_tpl->tpl_vars['vlanid']->value][4]['masklen'];?>
<?php }?>
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
                <td><strong></strong></td>
                <td id="value"></td>
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

    <?php }
if (!$_smarty_tpl->tpl_vars['vli']->_loop) {
?>
        <?php if ($_smarty_tpl->tpl_vars['vi']->value->getType()==\Entities\SwitchPort::TYPE_PEERING) {?>
            <p>
                No VLAN interfaces defined.
                <?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>
                    <a href="<?php echo smarty_function_genUrl(array('controller'=>"vlan-interface",'action'=>"add",'vintid'=>$_smarty_tpl->tpl_vars['vi']->value->getId()),$_smarty_tpl);?>
">Add one...</a>
                <?php }?>
            </p>
        <?php }?>
    <?php } ?>

    <br /><br />

    </div>
    <div class="span6">

        <?php if ($_smarty_tpl->tpl_vars['isLAG']->value) {?>
            <br /><br />
            <div class="well">
                <h4>Aggregate Day Graph for LAG</h4>
                <br />
                <a href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"member-drilldown",'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname(),'category'=>'bits','monitorindex'=>"lag-viid-".((string)$_smarty_tpl->tpl_vars['vi']->value->getId())),$_smarty_tpl);?>
">
                    <?php $_smarty_tpl->tpl_vars['pi'] = new Smarty_variable($_smarty_tpl->tpl_vars['vi']->value->getPhysicalInterfaces(), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['pi'] = new Smarty_variable($_smarty_tpl->tpl_vars['pi']->value[0], null, 0);?>
                    <?php echo smarty_function_genMrtgImgUrlTag(array('ixp'=>$_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getSwitcher()->getInfrastructure()->getIXP()->getId(),'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname(),'monitorindex'=>"lag-viid-".((string)$_smarty_tpl->tpl_vars['vi']->value->getId())),$_smarty_tpl);?>

                </a>
            </div>
        <?php }?>

        <?php  $_smarty_tpl->tpl_vars['pi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vi']->value->getPhysicalInterfaces(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pi']->key => $_smarty_tpl->tpl_vars['pi']->value) {
$_smarty_tpl->tpl_vars['pi']->_loop = true;
?>
            <br /><br />
            <div class="well">
                <h4>Day Graph for <?php echo $_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getSwitcher()->getName();?>
 / <?php echo $_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getName();?>
</h4>
                <br />
                <a href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"member-drilldown",'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname(),'category'=>'bits','monitorindex'=>$_smarty_tpl->tpl_vars['pi']->value->getMonitorindex()),$_smarty_tpl);?>
">
                    <?php echo smarty_function_genMrtgImgUrlTag(array('ixp'=>$_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getSwitcher()->getInfrastructure()->getIXP()->getId(),'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname(),'monitorindex'=>$_smarty_tpl->tpl_vars['pi']->value->getMonitorindex()),$_smarty_tpl);?>

                </a>
            </div>
        <?php } ?>
    </div>
</div>
<?php }} ?>
