<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-27 03:40:52
         compiled from "/opt/ixpmanager/application/views/statistics-cli/mrtg/member-port.cfg" */ ?>
<?php /*%%SmartyHeaderCode:148907051858b39fc43adfb8-56097838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96eecab6b8fef0933bf399a4e4260a022e208344' => 
    array (
      0 => '/opt/ixpmanager/application/views/statistics-cli/mrtg/member-port.cfg',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148907051858b39fc43adfb8-56097838',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c' => 0,
    'pi' => 0,
    'mrtgId' => 0,
    'custPortsAggregateSpeed' => 0,
    'custLagPortsAggregateSpeed' => 0,
    'tag' => 0,
    'switch' => 0,
    'port' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b39fc4489623_40622934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b39fc4489623_40622934')) {function content_58b39fc4489623_40622934($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['tag'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['c']->value->getShortname())."-".((string)$_smarty_tpl->tpl_vars['pi']->value->getMonitorindex()), null, 0);?>
<?php $_smarty_tpl->tpl_vars['mrtgId'] = new Smarty_variable($_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->ifnameToSNMPIdentifier(), null, 0);?>
<?php $_smarty_tpl->createLocalArrayVariable('custPorts', null, 0);
$_smarty_tpl->tpl_vars['custPorts']->value[] = $_smarty_tpl->tpl_vars['mrtgId']->value;?>
<?php $_smarty_tpl->createLocalArrayVariable('custLagPorts', null, 0);
$_smarty_tpl->tpl_vars['custLagPorts']->value[] = $_smarty_tpl->tpl_vars['mrtgId']->value;?>
<?php $_smarty_tpl->tpl_vars['port'] = new Smarty_variable($_smarty_tpl->tpl_vars['pi']->value->getSwitchPort(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['switch'] = new Smarty_variable($_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getSwitcher(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['custPortsAggregateSpeed'] = new Smarty_variable($_smarty_tpl->tpl_vars['custPortsAggregateSpeed']->value+$_smarty_tpl->tpl_vars['pi']->value->getSpeed(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['custLagPortsAggregateSpeed'] = new Smarty_variable($_smarty_tpl->tpl_vars['custLagPortsAggregateSpeed']->value+$_smarty_tpl->tpl_vars['pi']->value->getSpeed(), null, 0);?>

# <?php echo $_smarty_tpl->tpl_vars['c']->value->getName();?>
 - <?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
 - bits in/out
Target[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-bits]: #<?php echo $_smarty_tpl->tpl_vars['mrtgId']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['switch']->value->getSnmppasswd();?>
@<?php echo $_smarty_tpl->tpl_vars['switch']->value->getHostname();?>
:::::2
<?php $_smarty_tpl->createLocalArrayVariable('custPorts', null, 0);
$_smarty_tpl->tpl_vars['custPorts']->value['bits'][] = "#".((string)$_smarty_tpl->tpl_vars['mrtgId']->value).":".((string)$_smarty_tpl->tpl_vars['switch']->value->getSnmppasswd())."@".((string)$_smarty_tpl->tpl_vars['switch']->value->getHostname()).":::::2";?>
<?php $_smarty_tpl->createLocalArrayVariable('custLagPorts', null, 0);
$_smarty_tpl->tpl_vars['custLagPorts']->value['bits'][] = "#".((string)$_smarty_tpl->tpl_vars['mrtgId']->value).":".((string)$_smarty_tpl->tpl_vars['switch']->value->getSnmppasswd())."@".((string)$_smarty_tpl->tpl_vars['switch']->value->getHostname()).":::::2";?>
MaxBytes[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-bits]: <?php echo $_smarty_tpl->tpl_vars['pi']->value->getSpeed()*1000000/8;?>

Directory[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-bits]: members/<?php echo $_smarty_tpl->tpl_vars['c']->value->getShortname();?>

Title[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-bits]: <?php echo $_smarty_tpl->tpl_vars['c']->value->getAbbreviatedName();?>
 -- <?php echo $_smarty_tpl->tpl_vars['port']->value->getName();?>
 -- <?php echo $_smarty_tpl->tpl_vars['switch']->value->getName();?>
 -- bits in/out

# <?php echo $_smarty_tpl->tpl_vars['c']->value->getName();?>
 - <?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
 - packets in/out
Target[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-pkts]: ifInUcastPkts#<?php echo $_smarty_tpl->tpl_vars['mrtgId']->value;?>
&ifOutUcastPkts#<?php echo $_smarty_tpl->tpl_vars['mrtgId']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['switch']->value->getSnmppasswd();?>
@<?php echo $_smarty_tpl->tpl_vars['switch']->value->getHostname();?>
:::::2
<?php $_smarty_tpl->createLocalArrayVariable('custPorts', null, 0);
$_smarty_tpl->tpl_vars['custPorts']->value['packets'][] = "ifInUcastPkts#".((string)$_smarty_tpl->tpl_vars['mrtgId']->value)."&ifOutUcastPkts#".((string)$_smarty_tpl->tpl_vars['mrtgId']->value).":".((string)$_smarty_tpl->tpl_vars['switch']->value->getSnmppasswd())."@".((string)$_smarty_tpl->tpl_vars['switch']->value->getHostname()).":::::2";?>
<?php $_smarty_tpl->createLocalArrayVariable('custLagPorts', null, 0);
$_smarty_tpl->tpl_vars['custLagPorts']->value['packets'][] = "ifInUcastPkts#".((string)$_smarty_tpl->tpl_vars['mrtgId']->value)."&ifOutUcastPkts#".((string)$_smarty_tpl->tpl_vars['mrtgId']->value).":".((string)$_smarty_tpl->tpl_vars['switch']->value->getSnmppasswd())."@".((string)$_smarty_tpl->tpl_vars['switch']->value->getHostname()).":::::2";?>
MaxBytes[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-pkts]: <?php echo round($_smarty_tpl->tpl_vars['pi']->value->getSpeed()*1000000/8/64);?>

Directory[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-pkts]: members/<?php echo $_smarty_tpl->tpl_vars['c']->value->getShortname();?>

Options[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-pkts]: growright
YLegend[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-pkts]: Packets/Second
Title[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-pkts]: <?php echo $_smarty_tpl->tpl_vars['c']->value->getAbbreviatedName();?>
 -- <?php echo $_smarty_tpl->tpl_vars['port']->value->getName();?>
 -- <?php echo $_smarty_tpl->tpl_vars['switch']->value->getName();?>
 -- packets in/out

# <?php echo $_smarty_tpl->tpl_vars['c']->value->getName();?>
 - <?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
 - errors in/out
Target[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-errs]: ifInErrors#<?php echo $_smarty_tpl->tpl_vars['mrtgId']->value;?>
&ifOutErrors#<?php echo $_smarty_tpl->tpl_vars['mrtgId']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['switch']->value->getSnmppasswd();?>
@<?php echo $_smarty_tpl->tpl_vars['switch']->value->getHostname();?>
:::::2
<?php $_smarty_tpl->createLocalArrayVariable('custPorts', null, 0);
$_smarty_tpl->tpl_vars['custPorts']->value['errors'][] = "ifInErrors#".((string)$_smarty_tpl->tpl_vars['mrtgId']->value)."&ifOutErrors#".((string)$_smarty_tpl->tpl_vars['mrtgId']->value).":".((string)$_smarty_tpl->tpl_vars['switch']->value->getSnmppasswd())."@".((string)$_smarty_tpl->tpl_vars['switch']->value->getHostname()).":::::2";?>
<?php $_smarty_tpl->createLocalArrayVariable('custLagPorts', null, 0);
$_smarty_tpl->tpl_vars['custLagPorts']->value['errors'][] = "ifInErrors#".((string)$_smarty_tpl->tpl_vars['mrtgId']->value)."&ifOutErrors#".((string)$_smarty_tpl->tpl_vars['mrtgId']->value).":".((string)$_smarty_tpl->tpl_vars['switch']->value->getSnmppasswd())."@".((string)$_smarty_tpl->tpl_vars['switch']->value->getHostname()).":::::2";?>
MaxBytes[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-errs]: <?php echo round($_smarty_tpl->tpl_vars['pi']->value->getSpeed()*1000000/8/64);?>

Directory[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-errs]: members/<?php echo $_smarty_tpl->tpl_vars['c']->value->getShortname();?>

Options[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-errs]: growright
YLegend[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-errs]: Errors/Second
Title[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-errs]: <?php echo $_smarty_tpl->tpl_vars['c']->value->getAbbreviatedName();?>
 -- <?php echo $_smarty_tpl->tpl_vars['port']->value->getName();?>
 -- <?php echo $_smarty_tpl->tpl_vars['switch']->value->getName();?>
 -- errors in/out

# <?php echo $_smarty_tpl->tpl_vars['c']->value->getName();?>
 - <?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
 - discards in/out
<?php if ($_smarty_tpl->tpl_vars['switch']->value->getOs()=='ExtremeXOS') {?>
# ExtremeOS out discards extremeCongDropPkts - .1.3.6.1.4.1.1916.1.4.14.1.1 - https://github.com/inex/IXP-Manager/issues/171
Target[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-discs]: ifInDiscards#<?php echo $_smarty_tpl->tpl_vars['mrtgId']->value;?>
&1.3.6.1.4.1.1916.1.4.14.1.1#<?php echo $_smarty_tpl->tpl_vars['mrtgId']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['switch']->value->getSnmppasswd();?>
@<?php echo $_smarty_tpl->tpl_vars['switch']->value->getHostname();?>
:::::2
<?php } else { ?>
Target[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-discs]: ifInDiscards#<?php echo $_smarty_tpl->tpl_vars['mrtgId']->value;?>
&ifOutDiscards#<?php echo $_smarty_tpl->tpl_vars['mrtgId']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['switch']->value->getSnmppasswd();?>
@<?php echo $_smarty_tpl->tpl_vars['switch']->value->getHostname();?>
:::::2
<?php }?>
<?php $_smarty_tpl->createLocalArrayVariable('custPorts', null, 0);
$_smarty_tpl->tpl_vars['custPorts']->value['discards'][] = "ifInDiscards#".((string)$_smarty_tpl->tpl_vars['mrtgId']->value)."&ifOutDiscards#".((string)$_smarty_tpl->tpl_vars['mrtgId']->value).":".((string)$_smarty_tpl->tpl_vars['switch']->value->getSnmppasswd())."@".((string)$_smarty_tpl->tpl_vars['switch']->value->getHostname()).":::::2";?>
<?php $_smarty_tpl->createLocalArrayVariable('custLagPorts', null, 0);
$_smarty_tpl->tpl_vars['custLagPorts']->value['discards'][] = "ifInDiscards#".((string)$_smarty_tpl->tpl_vars['mrtgId']->value)."&ifOutDiscards#".((string)$_smarty_tpl->tpl_vars['mrtgId']->value).":".((string)$_smarty_tpl->tpl_vars['switch']->value->getSnmppasswd())."@".((string)$_smarty_tpl->tpl_vars['switch']->value->getHostname()).":::::2";?>
MaxBytes[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-discs]: <?php echo round($_smarty_tpl->tpl_vars['pi']->value->getSpeed()*1000000/8/10);?>

Directory[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-discs]: members/<?php echo $_smarty_tpl->tpl_vars['c']->value->getShortname();?>

Options[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-discs]: growright
YLegend[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-discs]: Discards/Second
Title[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-discs]: <?php echo $_smarty_tpl->tpl_vars['c']->value->getAbbreviatedName();?>
 -- <?php echo $_smarty_tpl->tpl_vars['port']->value->getName();?>
 -- <?php echo $_smarty_tpl->tpl_vars['switch']->value->getName();?>
 -- discards in/out
<?php }} ?>
