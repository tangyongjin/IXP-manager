<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-27 03:40:52
         compiled from "/opt/ixpmanager/application/views/statistics-cli/mrtg/switch-aggregates.cfg" */ ?>
<?php /*%%SmartyHeaderCode:4228691258b39fc4356655-03553025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ba49b7ac3650c99aae9c9c08e9eaf25984dc17e' => 
    array (
      0 => '/opt/ixpmanager/application/views/statistics-cli/mrtg/switch-aggregates.cfg',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4228691258b39fc4356655-03553025',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'portsByInfrastructure' => 0,
    'infra' => 0,
    'TRAFFIC_TYPES' => 0,
    'switch' => 0,
    'trafficType' => 0,
    'ttype' => 0,
    'mrtglabel' => 0,
    'options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b39fc43846d4_88934276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b39fc43846d4_88934276')) {function content_58b39fc43846d4_88934276($_smarty_tpl) {?>

#####################################################################################################################
#####################################################################################################################
#####################################################################################################################
###
###
###
### SWITCH AGGREGATE GRAPHS
###
###
###
#####################################################################################################################
#####################################################################################################################
#####################################################################################################################


<?php  $_smarty_tpl->tpl_vars['infra'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['infra']->_loop = false;
 $_smarty_tpl->tpl_vars['infraid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['portsByInfrastructure']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['infra']->key => $_smarty_tpl->tpl_vars['infra']->value) {
$_smarty_tpl->tpl_vars['infra']->_loop = true;
 $_smarty_tpl->tpl_vars['infraid']->value = $_smarty_tpl->tpl_vars['infra']->key;
?>
    <?php  $_smarty_tpl->tpl_vars['switch'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['switch']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infra']->value['switches']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['switch']->key => $_smarty_tpl->tpl_vars['switch']->value) {
$_smarty_tpl->tpl_vars['switch']->_loop = true;
?>
        <?php  $_smarty_tpl->tpl_vars['trafficType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['trafficType']->_loop = false;
 $_smarty_tpl->tpl_vars['ttype'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TRAFFIC_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['trafficType']->key => $_smarty_tpl->tpl_vars['trafficType']->value) {
$_smarty_tpl->tpl_vars['trafficType']->_loop = true;
 $_smarty_tpl->tpl_vars['ttype']->value = $_smarty_tpl->tpl_vars['trafficType']->key;
?>
    
    
#####################################################################################################################    
#
# <?php echo $_smarty_tpl->tpl_vars['switch']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['trafficType']->value['name'];?>
 traffic
#

<?php $_smarty_tpl->tpl_vars['mrtglabel'] = new Smarty_variable("switch-aggregate-".((string)$_smarty_tpl->tpl_vars['switch']->value['name'])."-".((string)$_smarty_tpl->tpl_vars['ttype']->value), null, 0);?>

Target[<?php echo $_smarty_tpl->tpl_vars['mrtglabel']->value;?>
]: <?php echo implode($_smarty_tpl->tpl_vars['switch']->value['mrtgIds'][$_smarty_tpl->tpl_vars['ttype']->value],' + ');?>

MaxBytes[<?php echo $_smarty_tpl->tpl_vars['mrtglabel']->value;?>
]: <?php if ($_smarty_tpl->tpl_vars['ttype']->value=='bits') {?><?php echo $_smarty_tpl->tpl_vars['switch']->value['maxbytes'];?>
<?php } else { ?><?php echo round($_smarty_tpl->tpl_vars['switch']->value['maxbytes']/64);?>
<?php }?>

Title[<?php echo $_smarty_tpl->tpl_vars['mrtglabel']->value;?>
]:    <?php echo $_smarty_tpl->tpl_vars['options']->value['identity']['orgname'];?>
 - Peering <?php echo $_smarty_tpl->tpl_vars['trafficType']->value['name'];?>
 / second on <?php echo $_smarty_tpl->tpl_vars['switch']->value['name'];?>

Options[<?php echo $_smarty_tpl->tpl_vars['mrtglabel']->value;?>
]:  <?php echo $_smarty_tpl->tpl_vars['trafficType']->value['options'];?>

YLegend[<?php echo $_smarty_tpl->tpl_vars['mrtglabel']->value;?>
]:  <?php echo $_smarty_tpl->tpl_vars['trafficType']->value['name'];?>
 / Second
Directory[<?php echo $_smarty_tpl->tpl_vars['mrtglabel']->value;?>
]: switches

        <?php } ?>
    <?php } ?>
<?php } ?>



#####################################################################################################################
#####################################################################################################################
#####################################################################################################################
        <?php }} ?>
