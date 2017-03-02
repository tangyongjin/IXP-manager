<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 09:06:46
         compiled from "/opt/ixpmanager/application/views/customer/overview-tabs/ports/physintstatus.phtml" */ ?>
<?php /*%%SmartyHeaderCode:27985400758b77026ad4115-34857852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67378bfa4b8e8ac3474ef244dd4186d8d1c4a6ae' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/overview-tabs/ports/physintstatus.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27985400758b77026ad4115-34857852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pi' => 0,
    'vi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b77026ae87d6_63414292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b77026ae87d6_63414292')) {function content_58b77026ae87d6_63414292($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><?php if ($_smarty_tpl->tpl_vars['pi']->value&&!$_smarty_tpl->tpl_vars['pi']->value->statusIsConnected()) {?>
    <a href="<?php echo smarty_function_genUrl(array('controller'=>'physical-interface','action'=>'edit','id'=>$_smarty_tpl->tpl_vars['pi']->value->getId(),'vintid'=>$_smarty_tpl->tpl_vars['vi']->value->getId()),$_smarty_tpl);?>
">
    <?php if ($_smarty_tpl->tpl_vars['pi']->value->statusIsQuarantine()) {?>
        <span class="label label-warning">IN QUARANTINE</span>
    <?php } elseif ($_smarty_tpl->tpl_vars['pi']->value->statusIsDisabled()) {?>
        <span class="label label-important">DISABLED</span>
    <?php } elseif ($_smarty_tpl->tpl_vars['pi']->value->statusIsNotConnected()) {?>
        <span class="label label-important">NOT CONNECTED</span>
    <?php } elseif ($_smarty_tpl->tpl_vars['pi']->value->statusIsAwaitingXConnect()) {?>
        <span class="label label-warning">AWAITING XCONNECT</span>
    <?php } else { ?>
        <span class="label label-inverse">UNKNOWN STATE</span>
    <?php }?>
    </a>
<?php }?>
<?php }} ?>
