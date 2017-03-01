<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:39:38
         compiled from "/opt/ixpmanager/application/views/infrastructure/list-row-menu.phtml" */ ?>
<?php /*%%SmartyHeaderCode:126067017058b7156a99b9d9-75202819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8151f8ec7cbdbd639276a1bdc8837143514bcd69' => 
    array (
      0 => '/opt/ixpmanager/application/views/infrastructure/list-row-menu.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126067017058b7156a99b9d9-75202819',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controller' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7156a9b5229_21483639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7156a9b5229_21483639')) {function content_58b7156a9b5229_21483639($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><div class="btn-group">
    <a class="btn btn-mini have-tooltip-below" href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'view','id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" title="Preview"><i class="icon-eye-open"></i></a>
    <a class="btn btn-mini have-tooltip-below" href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'edit','id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" title="Edit"><i class="icon-pencil"></i></a>
    <a class="btn btn-mini have-tooltip-below" id='list-delete-<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
' href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'delete','id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" title="Delete"><i class="icon-trash"></i></a>
    <a class="btn btn-mini dropdown-toggle" href="#" data-toggle="dropdown">
        <span class="caret"></span>
    </a>
    
    <ul class="dropdown-menu">
        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'switch','action'=>'list','infra'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
">View Switches</a>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'vlan','action'=>'list','infra'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
">View All VLANs</a>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'vlan','action'=>'list','infra'=>$_smarty_tpl->tpl_vars['row']->value['id'],'publiconly'=>1),$_smarty_tpl);?>
">View Public VLANs</a>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'vlan','action'=>'private','infra'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
">View Private VLANs</a>
        </li>
    </ul>
</div>
<?php }} ?>
