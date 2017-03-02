<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 17:50:33
         compiled from "/opt/ixpmanager/application/views/switch/list-row-menu.phtml" */ ?>
<?php /*%%SmartyHeaderCode:199084266258b7eae94bce97-70327104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f14767f852dcf52fbb5daf590bde75f3436559e' => 
    array (
      0 => '/opt/ixpmanager/application/views/switch/list-row-menu.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199084266258b7eae94bce97-70327104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module' => 0,
    'controller' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7eae94e0885_84042708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7eae94e0885_84042708')) {function content_58b7eae94e0885_84042708($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><div class="btn-group">
    <a class="btn btn-mini have-tooltip-below" href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'view','id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" title="Preview"><i class="icon-eye-open"></i></a>
    <a class="btn btn-mini have-tooltip-below" href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'edit','id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" title="Edit"><i class="icon-pencil"></i></a>
    <a class="btn btn-mini have-tooltip-below" id='list-delete-<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
' href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'delete','id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" title="Delete"><i class="icon-trash"></i></a>
    <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
        More...
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu pull-right">
        <?php if ($_smarty_tpl->tpl_vars['row']->value['active']) {?>
            <li>
                <a href="<?php echo smarty_function_genUrl(array('controller'=>'switch-port','action'=>'snmp-poll','switch'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
">View / Edit Ports (with SNMP poll)</a>
            </li>
            <li>
                <a href="<?php echo smarty_function_genUrl(array('controller'=>'switch-port','action'=>'op-status','switch'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
">View Live Port States (with SNMP poll)</a>
            </li>
        <?php }?>
        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'switch-port','action'=>'list','switch'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
">View / Edit Ports (database only)</a>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['row']->value['mauSupported']) {?>
            <li>
                <a href="<?php echo smarty_function_genUrl(array('controller'=>'switch-port','action'=>'list-mau','switch'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
">View Port MAU Detail (database only)</a>
            </li>
        <?php }?>
        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'switch','action'=>'port-report','id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
">View Port Report</a>
        </li>
    </ul>
</div>
<?php }} ?>
