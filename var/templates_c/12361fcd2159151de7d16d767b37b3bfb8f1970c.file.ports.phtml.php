<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-26 16:54:30
         compiled from "/opt/ixpmanager/application/views/customer/overview-tabs/ports.phtml" */ ?>
<?php /*%%SmartyHeaderCode:143227924258b297c647e793-98698116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12361fcd2159151de7d16d767b37b3bfb8f1970c' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/overview-tabs/ports.phtml',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143227924258b297c647e793-98698116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cust' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b297c6487b32_12767748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b297c6487b32_12767748')) {function content_58b297c6487b32_12767748($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
?>
<?php if (!$_smarty_tpl->tpl_vars['cust']->value->statusIsNormal()) {?>
    <div class="alert alert-block">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4>Warning! Customer status is not normal.</h4>
        Many backend processes that configure interface related systems (for example
        MRTG, P2P statistics, Nagios, Smokeping, route collector, route servers, etc.)
        will skip members that do not have a normal status.
    </div>
<?php }?>


<?php  $_smarty_tpl->tpl_vars['vi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cust']->value->getVirtualInterfaces(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vi']->key => $_smarty_tpl->tpl_vars['vi']->value) {
$_smarty_tpl->tpl_vars['vi']->_loop = true;
?>

    <?php echo smarty_function_tmplinclude(array('file'=>'customer/overview-tabs/ports/port.phtml'),$_smarty_tpl);?>


<?php } ?>
<?php }} ?>
