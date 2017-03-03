<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-03 11:40:21
         compiled from "/opt/ixpmanager/application/views/customer/billing-registration.phtml" */ ?>
<?php /*%%SmartyHeaderCode:38827535258b8e5a561b1c2-36039622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa4ce8c2cd9565480b3e3d16672428e5ed4b297a' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/billing-registration.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38827535258b8e5a561b1c2-36039622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controller' => 0,
    'feParams' => 0,
    'cust' => 0,
    'module' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b8e5a5641b44_49939096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8e5a5641b44_49939096')) {function content_58b8e5a5641b44_49939096($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml",'pageTitle'=>"IXP Manager :: Administrator's Home"),$_smarty_tpl);?>


<ul class="breadcrumb">
    <li>
        <a href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
">Home</a> <span class="divider">/</span>
    </li>
    <li>
        <a href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>"list"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['feParams']->value->pagetitle;?>
</a> <span class="divider">/</span>
    </li>
    <li>
        <a href="<?php echo smarty_function_genUrl(array('controller'=>"customer",'action'=>"overview",'id'=>$_smarty_tpl->tpl_vars['cust']->value->getId(),'tab'=>"billing"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['cust']->value->getName();?>
</a> <span class="divider">/</span>
    </li>
    <li class="active">
        Billing &amp; Registration Details
    </li>
    <li class="pull-right">
        <div class="btn-group">
            <a class="btn btn-mini" href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'list'),$_smarty_tpl);?>
"><i class="icon-list"></i></a>
            <a class="btn btn-mini" href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'add'),$_smarty_tpl);?>
"><i class="icon-plus"></i></a>
        </div>
    </li>
</ul>

<?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>

<div id="co-messages"></div>

<?php echo $_smarty_tpl->tpl_vars['form']->value;?>



<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>

<?php }} ?>
