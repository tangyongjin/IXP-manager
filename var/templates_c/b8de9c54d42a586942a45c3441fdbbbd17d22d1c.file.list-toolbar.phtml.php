<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-23 12:45:07
         compiled from "/opt/ixpmanager/application/views/customer/list-toolbar.phtml" */ ?>
<?php /*%%SmartyHeaderCode:57567304658ae68d3964b44-58384898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8de9c54d42a586942a45c3441fdbbbd17d22d1c' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/list-toolbar.phtml',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57567304658ae68d3964b44-58384898',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'multiIXP' => 0,
    'ixp' => 0,
    'ixpNames' => 0,
    'controller' => 0,
    'action' => 0,
    'xid' => 0,
    'xname' => 0,
    'currentCustomersOnly' => 0,
    'showCustomers' => 0,
    'cstate' => 0,
    'customerStates' => 0,
    'cstateid' => 0,
    'cstatename' => 0,
    'ctype' => 0,
    'customerTypes' => 0,
    'ctypeid' => 0,
    'ctypename' => 0,
    'feParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58ae68d39b33b1_89475353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ae68d39b33b1_89475353')) {function content_58ae68d39b33b1_89475353($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><li class="pull-right" style="margin-top: -12px;">
<div class="btn-toolbar">
    
    <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
        <div class="btn-group">
            <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
                <?php if (isset($_smarty_tpl->tpl_vars['ixp']->value)) {?><?php echo $_smarty_tpl->tpl_vars['ixp']->value->getName();?>
<?php } else { ?>Limit to IXP...<?php }?>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu pull-right">
                <?php  $_smarty_tpl->tpl_vars['xname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xname']->_loop = false;
 $_smarty_tpl->tpl_vars['xid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ixpNames']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xname']->key => $_smarty_tpl->tpl_vars['xname']->value) {
$_smarty_tpl->tpl_vars['xname']->_loop = true;
 $_smarty_tpl->tpl_vars['xid']->value = $_smarty_tpl->tpl_vars['xname']->key;
?>
                    <li> <a href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>$_smarty_tpl->tpl_vars['action']->value,'ixp'=>$_smarty_tpl->tpl_vars['xid']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['xname']->value;?>
</a> </li>
                <?php } ?>
            </ul>
        </div>
    <?php }?>
    
    <div class="btn-group">
        <?php if ($_smarty_tpl->tpl_vars['currentCustomersOnly']->value) {?><?php $_smarty_tpl->tpl_vars['showCustomers'] = new Smarty_variable(0, null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['showCustomers'] = new Smarty_variable(1, null, 0);?><?php }?>
        <a class="btn btn-mini" href="<?php echo smarty_function_genUrl(array('controller'=>'customer','action'=>$_smarty_tpl->tpl_vars['action']->value,'currentonly'=>$_smarty_tpl->tpl_vars['showCustomers']->value),$_smarty_tpl);?>
">
            <?php if ($_smarty_tpl->tpl_vars['currentCustomersOnly']->value) {?>Show All Customers<?php } else { ?>Show Current Customers<?php }?>
        </a>
    </div>

    <div class="btn-group">
        <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
            <?php if (isset($_smarty_tpl->tpl_vars['cstate']->value)&&$_smarty_tpl->tpl_vars['cstate']->value) {?><?php echo $_smarty_tpl->tpl_vars['customerStates']->value[$_smarty_tpl->tpl_vars['cstate']->value];?>
<?php } else { ?>Limit to state...<?php }?>
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu pull-right">
            <li <?php if (!$_smarty_tpl->tpl_vars['cstate']->value) {?>class="active"<?php }?>> <a href="<?php echo smarty_function_genUrl(array('controller'=>'customer','action'=>$_smarty_tpl->tpl_vars['action']->value,'cstate'=>0),$_smarty_tpl);?>
">All states</a> </li>
            <li class="divider"></li>
            <?php  $_smarty_tpl->tpl_vars['cstatename'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cstatename']->_loop = false;
 $_smarty_tpl->tpl_vars['cstateid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customerStates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cstatename']->key => $_smarty_tpl->tpl_vars['cstatename']->value) {
$_smarty_tpl->tpl_vars['cstatename']->_loop = true;
 $_smarty_tpl->tpl_vars['cstateid']->value = $_smarty_tpl->tpl_vars['cstatename']->key;
?>
                <li <?php if ($_smarty_tpl->tpl_vars['cstate']->value==$_smarty_tpl->tpl_vars['cstateid']->value) {?>class="active"<?php }?>> <a href="<?php echo smarty_function_genUrl(array('controller'=>'customer','action'=>$_smarty_tpl->tpl_vars['action']->value,'cstate'=>$_smarty_tpl->tpl_vars['cstateid']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['cstatename']->value;?>
</a> </li>
            <?php } ?>
        </ul>
    </div>

    <div class="btn-group">
        <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
            <?php if (isset($_smarty_tpl->tpl_vars['ctype']->value)&&$_smarty_tpl->tpl_vars['ctype']->value) {?><?php echo $_smarty_tpl->tpl_vars['customerTypes']->value[$_smarty_tpl->tpl_vars['ctype']->value];?>
<?php } else { ?>Limit to type...<?php }?>
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu pull-right">
            <li <?php if (!$_smarty_tpl->tpl_vars['ctype']->value) {?>class="active"<?php }?>> <a href="<?php echo smarty_function_genUrl(array('controller'=>'customer','action'=>$_smarty_tpl->tpl_vars['action']->value,'ctype'=>0),$_smarty_tpl);?>
">All types</a> </li>
            <li class="divider"></li>
            <?php  $_smarty_tpl->tpl_vars['ctypename'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ctypename']->_loop = false;
 $_smarty_tpl->tpl_vars['ctypeid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customerTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ctypename']->key => $_smarty_tpl->tpl_vars['ctypename']->value) {
$_smarty_tpl->tpl_vars['ctypename']->_loop = true;
 $_smarty_tpl->tpl_vars['ctypeid']->value = $_smarty_tpl->tpl_vars['ctypename']->key;
?>
                <li <?php if ($_smarty_tpl->tpl_vars['ctype']->value==$_smarty_tpl->tpl_vars['ctypeid']->value) {?>class="active"<?php }?>> <a href="<?php echo smarty_function_genUrl(array('controller'=>'customer','action'=>$_smarty_tpl->tpl_vars['action']->value,'ctype'=>$_smarty_tpl->tpl_vars['ctypeid']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['ctypename']->value;?>
</a> </li>
            <?php } ?>
        </ul>
    </div>

    <div class="btn-group">
        <?php if (!isset($_smarty_tpl->tpl_vars['feParams']->value->readonly)||!$_smarty_tpl->tpl_vars['feParams']->value->readonly) {?>
            <a class="btn btn-mini" id="assign-customer-btn" href="<?php echo smarty_function_genUrl(array('controller'=>'customer','action'=>'add'),$_smarty_tpl);?>
"><i class="icon-plus"></i></a>
        <?php }?>
    </div>
</div>
</li>
<?php }} ?>
