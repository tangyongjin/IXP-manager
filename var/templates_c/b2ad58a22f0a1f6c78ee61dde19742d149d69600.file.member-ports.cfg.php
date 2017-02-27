<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-27 03:40:52
         compiled from "/opt/ixpmanager/application/views/statistics-cli/mrtg/member-ports.cfg" */ ?>
<?php /*%%SmartyHeaderCode:98660469758b39fc4386ea5-24117862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2ad58a22f0a1f6c78ee61dde19742d149d69600' => 
    array (
      0 => '/opt/ixpmanager/application/views/statistics-cli/mrtg/member-ports.cfg',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98660469758b39fc4386ea5-24117862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'custs' => 0,
    'c' => 0,
    'vi' => 0,
    'tmplMemberPort' => 0,
    'tmplMemberLagPort' => 0,
    'tmplMemberAggregatePort' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b39fc43a5be4_82271446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b39fc43a5be4_82271446')) {function content_58b39fc43a5be4_82271446($_smarty_tpl) {?>


#####################################################################################################################
#####################################################################################################################
#####################################################################################################################
###
###
###
### MEMBER PORTS
###
###
###
#####################################################################################################################
#####################################################################################################################
#####################################################################################################################

<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['custs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars['custPortsAggregateSpeed'] = new Smarty_variable(0, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['custPorts'] = new Smarty_variable(array(), null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['vi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['c']->value->getVirtualInterfaces(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vi']->key => $_smarty_tpl->tpl_vars['vi']->value) {
$_smarty_tpl->tpl_vars['vi']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars['custLagPortsAggregateSpeed'] = new Smarty_variable(0, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['custLagPorts'] = new Smarty_variable(array(), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['pi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vi']->value->getPhysicalInterfaces(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pi']->key => $_smarty_tpl->tpl_vars['pi']->value) {
$_smarty_tpl->tpl_vars['pi']->_loop = true;
?>
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['tmplMemberPort']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 1);?>

        <?php } ?>

        
        <?php if (count($_smarty_tpl->tpl_vars['vi']->value->getPhysicalInterfaces())>1) {?>
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['tmplMemberLagPort']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 1);?>

        <?php }?>
    <?php } ?>

    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['tmplMemberAggregatePort']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 1);?>


#####################################################################################################################
#####################################################################################################################
#####################################################################################################################

<?php } ?>
<?php }} ?>
