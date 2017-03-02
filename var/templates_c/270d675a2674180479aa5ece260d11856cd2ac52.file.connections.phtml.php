<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:50:18
         compiled from "/opt/ixpmanager/application/views/dashboard/index-tabs/connections.phtml" */ ?>
<?php /*%%SmartyHeaderCode:22158074758b7a48a74db62-63681945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '270d675a2674180479aa5ece260d11856cd2ac52' => 
    array (
      0 => '/opt/ixpmanager/application/views/dashboard/index-tabs/connections.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22158074758b7a48a74db62-63681945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resellerMode' => 0,
    'cust' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7a48a756b16_94418734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7a48a756b16_94418734')) {function content_58b7a48a756b16_94418734($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
?>
<?php if ($_smarty_tpl->tpl_vars['resellerMode']->value&&$_smarty_tpl->tpl_vars['cust']->value->isReseller()) {?>
    <?php echo smarty_function_tmplinclude(array('file'=>"customer/overview-tabs/reseller-ports.phtml"),$_smarty_tpl);?>

<?php } else { ?>
    <?php echo smarty_function_tmplinclude(array('file'=>"customer/overview-tabs/ports.phtml"),$_smarty_tpl);?>

<?php }?>

<?php }} ?>
