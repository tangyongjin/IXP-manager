<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 13:52:55
         compiled from "/opt/ixpmanager/application/views/statistics-cli/mrtg/aggregates.cfg" */ ?>
<?php /*%%SmartyHeaderCode:26486440958b823b72e7423-04285425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8d780e70c7aae87f6a25bd4ff8b8a983c2ddebd' => 
    array (
      0 => '/opt/ixpmanager/application/views/statistics-cli/mrtg/aggregates.cfg',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26486440958b823b72e7423-04285425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'portsByInfrastructure' => 0,
    'ixpMaxBytes' => 0,
    'infra' => 0,
    'TRAFFIC_TYPES' => 0,
    'trafficType' => 0,
    'ttype' => 0,
    'mrtglabel' => 0,
    'options' => 0,
    'ixp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b823b7343a03_65005086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b823b7343a03_65005086')) {function content_58b823b7343a03_65005086($_smarty_tpl) {?>

#####################################################################################################################
#####################################################################################################################
#####################################################################################################################
###
###
###
### AGGREGATE GRAPHS
###
###
###
#####################################################################################################################
#####################################################################################################################
#####################################################################################################################

<?php $_smarty_tpl->tpl_vars['ixpMaxBytes'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['infra'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['infra']->_loop = false;
 $_smarty_tpl->tpl_vars['infraid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['portsByInfrastructure']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['infra']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['infra']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['infra']->key => $_smarty_tpl->tpl_vars['infra']->value) {
$_smarty_tpl->tpl_vars['infra']->_loop = true;
 $_smarty_tpl->tpl_vars['infraid']->value = $_smarty_tpl->tpl_vars['infra']->key;
 $_smarty_tpl->tpl_vars['infra']->iteration++;
 $_smarty_tpl->tpl_vars['infra']->last = $_smarty_tpl->tpl_vars['infra']->iteration === $_smarty_tpl->tpl_vars['infra']->total;
?>

    <?php $_smarty_tpl->tpl_vars['ixpMaxBytes'] = new Smarty_variable($_smarty_tpl->tpl_vars['ixpMaxBytes']->value+$_smarty_tpl->tpl_vars['infra']->value['maxbytes'], null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['trafficType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['trafficType']->_loop = false;
 $_smarty_tpl->tpl_vars['ttype'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TRAFFIC_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['trafficType']->key => $_smarty_tpl->tpl_vars['trafficType']->value) {
$_smarty_tpl->tpl_vars['trafficType']->_loop = true;
 $_smarty_tpl->tpl_vars['ttype']->value = $_smarty_tpl->tpl_vars['trafficType']->key;
?>
    
    
#####################################################################################################################    
#
# <?php echo $_smarty_tpl->tpl_vars['infra']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['trafficType']->value['name'];?>
 traffic
#

<?php $_smarty_tpl->tpl_vars['mrtglabel'] = new Smarty_variable("ixp_peering-".((string)$_smarty_tpl->tpl_vars['infra']->value['aggregate_graph_name'])."-".((string)$_smarty_tpl->tpl_vars['ttype']->value), null, 0);?>

Target[<?php echo $_smarty_tpl->tpl_vars['mrtglabel']->value;?>
]: <?php echo implode($_smarty_tpl->tpl_vars['infra']->value['mrtgIds'][$_smarty_tpl->tpl_vars['ttype']->value],' + ');?>

MaxBytes[<?php echo $_smarty_tpl->tpl_vars['mrtglabel']->value;?>
]: <?php if ($_smarty_tpl->tpl_vars['ttype']->value=='bits') {?><?php echo $_smarty_tpl->tpl_vars['infra']->value['maxbytes'];?>
<?php } else { ?><?php echo round($_smarty_tpl->tpl_vars['infra']->value['maxbytes']/64);?>
<?php }?>

Title[<?php echo $_smarty_tpl->tpl_vars['mrtglabel']->value;?>
]:    <?php echo $_smarty_tpl->tpl_vars['options']->value['identity']['orgname'];?>
 <?php echo $_smarty_tpl->tpl_vars['trafficType']->value['name'];?>
 / second on <?php echo $_smarty_tpl->tpl_vars['infra']->value['name'];?>

Options[<?php echo $_smarty_tpl->tpl_vars['mrtglabel']->value;?>
]:  <?php echo $_smarty_tpl->tpl_vars['trafficType']->value['options'];?>

YLegend[<?php echo $_smarty_tpl->tpl_vars['mrtglabel']->value;?>
]:  <?php echo $_smarty_tpl->tpl_vars['trafficType']->value['name'];?>
 / Second

    <?php } ?>
<?php } ?>


<?php if ($_smarty_tpl->tpl_vars['ixp']->value->getAggregateGraphName()) {?>
    <?php  $_smarty_tpl->tpl_vars['trafficType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['trafficType']->_loop = false;
 $_smarty_tpl->tpl_vars['ttype'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TRAFFIC_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['trafficType']->key => $_smarty_tpl->tpl_vars['trafficType']->value) {
$_smarty_tpl->tpl_vars['trafficType']->_loop = true;
 $_smarty_tpl->tpl_vars['ttype']->value = $_smarty_tpl->tpl_vars['trafficType']->key;
?>

#####################################################################################################################    
#
# Aggregate <?php echo $_smarty_tpl->tpl_vars['trafficType']->value['name'];?>
 on entire exchange
#

<?php $_smarty_tpl->tpl_vars['mrtglabel'] = new Smarty_variable("ixp_peering-".((string)$_smarty_tpl->tpl_vars['ixp']->value->getAggregateGraphName())."-".((string)$_smarty_tpl->tpl_vars['ttype']->value), null, 0);?>

Target[<?php echo $_smarty_tpl->tpl_vars['mrtglabel']->value;?>
]:   <?php  $_smarty_tpl->tpl_vars['infra'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['infra']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['portsByInfrastructure']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['infra']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['infra']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['infra']->key => $_smarty_tpl->tpl_vars['infra']->value) {
$_smarty_tpl->tpl_vars['infra']->_loop = true;
 $_smarty_tpl->tpl_vars['infra']->iteration++;
 $_smarty_tpl->tpl_vars['infra']->last = $_smarty_tpl->tpl_vars['infra']->iteration === $_smarty_tpl->tpl_vars['infra']->total;
?><?php echo implode($_smarty_tpl->tpl_vars['infra']->value['mrtgIds'][$_smarty_tpl->tpl_vars['ttype']->value],' + ');?>
<?php if (!$_smarty_tpl->tpl_vars['infra']->last) {?> + <?php }?><?php } ?>

MaxBytes[<?php echo $_smarty_tpl->tpl_vars['mrtglabel']->value;?>
]: <?php if ($_smarty_tpl->tpl_vars['ttype']->value=='bits') {?><?php echo $_smarty_tpl->tpl_vars['ixpMaxBytes']->value;?>
<?php } else { ?><?php echo round($_smarty_tpl->tpl_vars['ixpMaxBytes']->value/64);?>
<?php }?>

Title[<?php echo $_smarty_tpl->tpl_vars['mrtglabel']->value;?>
]:    <?php echo $_smarty_tpl->tpl_vars['options']->value['identity']['orgname'];?>
 Aggregate Traffic - <?php echo $_smarty_tpl->tpl_vars['trafficType']->value['name'];?>
 / second
Options[<?php echo $_smarty_tpl->tpl_vars['mrtglabel']->value;?>
]:  <?php echo $_smarty_tpl->tpl_vars['trafficType']->value['options'];?>

YLegend[<?php echo $_smarty_tpl->tpl_vars['mrtglabel']->value;?>
]:  <?php echo $_smarty_tpl->tpl_vars['trafficType']->value['name'];?>
 / Second

    <?php } ?>        
<?php }?>

#####################################################################################################################
#####################################################################################################################
#####################################################################################################################
        <?php }} ?>
