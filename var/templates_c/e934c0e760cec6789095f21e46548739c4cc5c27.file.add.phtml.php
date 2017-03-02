<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 11:35:39
         compiled from "/opt/ixpmanager/application/views/frontend/add.phtml" */ ?>
<?php /*%%SmartyHeaderCode:108870656858b7930b5325f5-51447788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e934c0e760cec6789095f21e46548739c4cc5c27' => 
    array (
      0 => '/opt/ixpmanager/application/views/frontend/add.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108870656858b7930b5325f5-51447788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'controller' => 0,
    'feParams' => 0,
    'isEdit' => 0,
    'addToolbar' => 0,
    'module' => 0,
    'addPreamble' => 0,
    'form' => 0,
    'addPostamble' => 0,
    'addScript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7930b5861e1_81121411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7930b5861e1_81121411')) {function content_58b7930b5861e1_81121411($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml"),$_smarty_tpl);?>


<?php if (isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>
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
        <li class="active">
            <?php if ($_smarty_tpl->tpl_vars['isEdit']->value) {?>Edit<?php } else { ?>Add New<?php }?> <?php echo $_smarty_tpl->tpl_vars['feParams']->value->titleSingular;?>

        </li>
        
        <li class="pull-right">
            
            <?php if ($_smarty_tpl->tpl_vars['addToolbar']->value) {?>
                <?php echo smarty_function_tmplinclude(array('file'=>$_smarty_tpl->tpl_vars['addToolbar']->value),$_smarty_tpl);?>

            <?php } else { ?>
                <div class="btn-group">
                    <a class="btn btn-mini" href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'list'),$_smarty_tpl);?>
"><i class="icon-list"></i></a>
                    <a class="btn btn-mini" href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'add'),$_smarty_tpl);?>
"><i class="icon-plus"></i></a>
                </div>
            <?php }?>
        </li>
    </ul>

    <div>
<?php } else { ?>
    <div class="page-content" >
    
        <div class="page-header" >
            <h1 style="display: inline;">
                <?php echo $_smarty_tpl->tpl_vars['feParams']->value->pagetitle;?>
&nbsp;&nbsp;
                <small><?php if ($_smarty_tpl->tpl_vars['isEdit']->value) {?>Edit<?php } else { ?>Add New <?php echo $_smarty_tpl->tpl_vars['feParams']->value->titleSingular;?>
<?php }?></small>
            </h1>
            
            <span style="float: right; margin-top: -10px;">
                
                <?php if ($_smarty_tpl->tpl_vars['addToolbar']->value) {?>
                    <?php echo smarty_function_tmplinclude(array('file'=>$_smarty_tpl->tpl_vars['addToolbar']->value),$_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['module']->value!="index") {?>
                    <div class="btn-toolbar">
                        <div class="btn-group">
                            <a class="btn" href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'list'),$_smarty_tpl);?>
"><i class="icon-list"></i></a>
                            <a class="btn" href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'add'),$_smarty_tpl);?>
"><i class="icon-plus"></i></a>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="btn-toolbar">
                    	<div class="btn-group">
                            <a class="btn" href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'add'),$_smarty_tpl);?>
"><i class="icon-plus"></i></a>
                        </div>
                    </div>
                <?php }?>
            </span>
        </div>
<?php }?>
    
    <?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>


    
    <?php if ($_smarty_tpl->tpl_vars['addPreamble']->value) {?><?php echo smarty_function_tmplinclude(array('file'=>$_smarty_tpl->tpl_vars['addPreamble']->value),$_smarty_tpl);?>
<?php }?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value;?>

    
    
    <?php if ($_smarty_tpl->tpl_vars['addPostamble']->value) {?><?php echo smarty_function_tmplinclude(array('file'=>$_smarty_tpl->tpl_vars['addPostamble']->value),$_smarty_tpl);?>
<?php }?>
    
</div>


<?php if ($_smarty_tpl->tpl_vars['addScript']->value) {?><script><?php echo smarty_function_tmplinclude(array('file'=>$_smarty_tpl->tpl_vars['addScript']->value),$_smarty_tpl);?>
</script><?php }?>
<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>
<?php }} ?>
