<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 13:52:55
         compiled from "/opt/ixpmanager/application/views/statistics-cli/mrtg/member-aggregate-port.cfg" */ ?>
<?php /*%%SmartyHeaderCode:149677560858b823b7484772-41752621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcd811c5c9a9508a5367eed1667f995dbeae4f72' => 
    array (
      0 => '/opt/ixpmanager/application/views/statistics-cli/mrtg/member-aggregate-port.cfg',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149677560858b823b7484772-41752621',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c' => 0,
    'custPorts' => 0,
    'tag' => 0,
    'custPortsAggregateSpeed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b823b74f1459_19661338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b823b74f1459_19661338')) {function content_58b823b74f1459_19661338($_smarty_tpl) {?>


###################################################################
### Aggregate for <?php echo $_smarty_tpl->tpl_vars['c']->value->getAbbreviatedName();?>


<?php $_smarty_tpl->tpl_vars['tag'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['c']->value->getShortname())."-aggregate", null, 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['custPorts']->value['bits'])&&count($_smarty_tpl->tpl_vars['custPorts']->value['bits'])) {?>
# <?php echo $_smarty_tpl->tpl_vars['c']->value->getName();?>
 - <?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
 - aggregate bits in/out
Target[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-bits]: <?php echo implode($_smarty_tpl->tpl_vars['custPorts']->value['bits'],' + ');?>

MaxBytes[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-bits]: <?php echo $_smarty_tpl->tpl_vars['custPortsAggregateSpeed']->value*1000000/8;?>

Directory[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-bits]: members/<?php echo $_smarty_tpl->tpl_vars['c']->value->getShortname();?>

Title[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-bits]: <?php echo $_smarty_tpl->tpl_vars['c']->value->getAbbreviatedName();?>
 -- aggregate bits in/out
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['custPorts']->value['packets'])&&count($_smarty_tpl->tpl_vars['custPorts']->value['packets'])) {?>
# <?php echo $_smarty_tpl->tpl_vars['c']->value->getName();?>
 - <?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
 - aggregate packets in/out
Target[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-pkts]: <?php echo implode($_smarty_tpl->tpl_vars['custPorts']->value['packets'],' + ');?>

MaxBytes[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-pkts]: <?php echo round($_smarty_tpl->tpl_vars['custPortsAggregateSpeed']->value*1000000/8/64);?>

Directory[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-pkts]: members/<?php echo $_smarty_tpl->tpl_vars['c']->value->getShortname();?>

Options[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-pkts]: growright
YLegend[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-pkts]: Packets/Second
Title[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-pkts]: <?php echo $_smarty_tpl->tpl_vars['c']->value->getAbbreviatedName();?>
 -- aggregate packets in/out
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['custPorts']->value['errors'])&&count($_smarty_tpl->tpl_vars['custPorts']->value['errors'])) {?>
# <?php echo $_smarty_tpl->tpl_vars['c']->value->getName();?>
 - <?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
 - aggregate errors in/out
Target[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-errs]: <?php echo implode($_smarty_tpl->tpl_vars['custPorts']->value['errors'],' + ');?>

MaxBytes[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-errs]: <?php echo round($_smarty_tpl->tpl_vars['custPortsAggregateSpeed']->value*1000000/8/64);?>

Directory[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-errs]: members/<?php echo $_smarty_tpl->tpl_vars['c']->value->getShortname();?>

Options[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-errs]: growright
YLegend[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-errs]: Errors/Second
Title[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-errs]: <?php echo $_smarty_tpl->tpl_vars['c']->value->getAbbreviatedName();?>
 -- aggregate errors in/out
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['custPorts']->value['discards'])&&count($_smarty_tpl->tpl_vars['custPorts']->value['discards'])) {?>
# <?php echo $_smarty_tpl->tpl_vars['c']->value->getName();?>
 - <?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
 - aggregate discards in/out
Target[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-discs]: <?php echo implode($_smarty_tpl->tpl_vars['custPorts']->value['discards'],' + ');?>

MaxBytes[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-discs]: <?php echo round($_smarty_tpl->tpl_vars['custPortsAggregateSpeed']->value*1000000/8/64);?>

Directory[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-discs]: members/<?php echo $_smarty_tpl->tpl_vars['c']->value->getShortname();?>

Options[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-discs]: growright
YLegend[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-discs]: Discards/Second
Title[<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
-discs]: <?php echo $_smarty_tpl->tpl_vars['c']->value->getAbbreviatedName();?>
 -- aggregate discards in/out
<?php }?>
<?php }} ?>
