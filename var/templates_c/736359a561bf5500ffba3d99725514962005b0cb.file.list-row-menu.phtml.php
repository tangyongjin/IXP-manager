<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:50:05
         compiled from "/opt/ixpmanager/application/views/user/list-row-menu.phtml" */ ?>
<?php /*%%SmartyHeaderCode:139599516758b717dd7c3bb0-76506619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '736359a561bf5500ffba3d99725514962005b0cb' => 
    array (
      0 => '/opt/ixpmanager/application/views/user/list-row-menu.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139599516758b717dd7c3bb0-76506619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module' => 0,
    'controller' => 0,
    'row' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b717dd7e1af7_27596454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b717dd7e1af7_27596454')) {function content_58b717dd7e1af7_27596454($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><div class="btn-group">
    <a class="btn btn-mini have-tooltip-below" href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'view','id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" title="Preview"><i class="icon-eye-open"></i></a>
    <a class="btn btn-mini have-tooltip-below" href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>'contact','action'=>'edit','uid'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" title="Edit"><i class="icon-pencil"></i></a>
    <a class="btn btn-mini have-tooltip-below" id='list-delete-<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
' href="<?php echo smarty_function_genUrl(array('controller'=>'contact','action'=>'delete','id'=>$_smarty_tpl->tpl_vars['row']->value['contactid']),$_smarty_tpl);?>
" title="Delete"><i class="icon-trash"></i></a>
    <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li> <a href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'welcome-email','id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
">Resend welcome email</a> </li>
        <li> <a href="<?php echo smarty_function_genUrl(array('controller'=>'login-history','action'=>"list",'uid'=>$_smarty_tpl->tpl_vars['row']->value['id'],'limit'=>1),$_smarty_tpl);?>
">Login History</a> </li>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==3) {?><li> <a href="<?php echo smarty_function_genUrl(array('controller'=>"auth",'action'=>"switch-user",'id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
">Switch to...</a> </li><?php }?>
    </ul>
</div>
<?php }} ?>
