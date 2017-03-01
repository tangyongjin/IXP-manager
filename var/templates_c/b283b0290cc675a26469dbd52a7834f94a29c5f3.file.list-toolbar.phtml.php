<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:39:36
         compiled from "/opt/ixpmanager/application/views/contact/list-toolbar.phtml" */ ?>
<?php /*%%SmartyHeaderCode:54284923058b715682780e8-68001205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b283b0290cc675a26469dbd52a7834f94a29c5f3' => 
    array (
      0 => '/opt/ixpmanager/application/views/contact/list-toolbar.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54284923058b715682780e8-68001205',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'role' => 0,
    'roles' => 0,
    'action' => 0,
    'roleid' => 0,
    'rolename' => 0,
    'feParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b715682a10f4_99050142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b715682a10f4_99050142')) {function content_58b715682a10f4_99050142($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><li class="pull-right" style="margin-top: -12px;">
<div class="btn-toolbar">
    
    <div class="btn-group">
        <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
            <?php if (isset($_smarty_tpl->tpl_vars['role']->value)&&$_smarty_tpl->tpl_vars['role']->value) {?><?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->tpl_vars['role']->value]['name'];?>
<?php } else { ?>Limit to role...<?php }?>
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu pull-right">
            <li <?php if (!$_smarty_tpl->tpl_vars['role']->value) {?>class="active"<?php }?>> <a href="<?php echo smarty_function_genUrl(array('controller'=>'contact','action'=>$_smarty_tpl->tpl_vars['action']->value),$_smarty_tpl);?>
">All roles</a> </li>
            <li class="divider"></li>
            <?php  $_smarty_tpl->tpl_vars['rolename'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rolename']->_loop = false;
 $_smarty_tpl->tpl_vars['roleid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rolename']->key => $_smarty_tpl->tpl_vars['rolename']->value) {
$_smarty_tpl->tpl_vars['rolename']->_loop = true;
 $_smarty_tpl->tpl_vars['roleid']->value = $_smarty_tpl->tpl_vars['rolename']->key;
?>
                <li <?php if ($_smarty_tpl->tpl_vars['role']->value==$_smarty_tpl->tpl_vars['roleid']->value) {?>class="active"<?php }?>> <a href="<?php echo smarty_function_genUrl(array('controller'=>'contact','action'=>$_smarty_tpl->tpl_vars['action']->value,'role'=>$_smarty_tpl->tpl_vars['roleid']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['rolename']->value['name'];?>
</a> </li>
            <?php } ?>
        </ul>
    </div>

    <div class="btn-group">
        <?php if (!isset($_smarty_tpl->tpl_vars['feParams']->value->readonly)||!$_smarty_tpl->tpl_vars['feParams']->value->readonly) {?>
            <a class="btn btn-mini" id="assign-customer-btn" href="<?php echo smarty_function_genUrl(array('controller'=>'contact','action'=>'add'),$_smarty_tpl);?>
"><i class="icon-plus"></i></a>
        <?php }?>
    </div>
</div>
</li>
<?php }} ?>
