<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:50:00
         compiled from "/opt/ixpmanager/application/views/physical-interface/list-row-menu.phtml" */ ?>
<?php /*%%SmartyHeaderCode:50897763358b7a478815ee3-29522201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a815cf4a6b6880548d46d58aabebb95701c9dcaf' => 
    array (
      0 => '/opt/ixpmanager/application/views/physical-interface/list-row-menu.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50897763358b7a478815ee3-29522201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module' => 0,
    'row' => 0,
    'controller' => 0,
    'resellerMode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7a478834727_31229835',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7a478834727_31229835')) {function content_58b7a478834727_31229835($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><div class="btn-group">
    <a class="btn btn-mini have-tooltip-below" href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>'virtual-interface','action'=>'edit','id'=>$_smarty_tpl->tpl_vars['row']->value['vintid']),$_smarty_tpl);?>
" title="Interface Overview"><i class="icon-filter"></i></a>
    <a class="btn btn-mini have-tooltip-below" href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'view','id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" title="Preview"><i class="icon-eye-open"></i></a>
    <a class="btn btn-mini have-tooltip-below" href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'edit','id'=>$_smarty_tpl->tpl_vars['row']->value['id'],'rtn'=>'pi'),$_smarty_tpl);?>
" title="Edit"><i class="icon-pencil"></i></a>
    <a class="btn btn-mini have-tooltip-below" id='list-delete-<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
' <?php if ($_smarty_tpl->tpl_vars['resellerMode']->value&&($_smarty_tpl->tpl_vars['row']->value['ppid']||$_smarty_tpl->tpl_vars['row']->value['fpid'])) {?>data-related="1"<?php }?> data-type="<?php echo $_smarty_tpl->tpl_vars['row']->value['type'];?>
" href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'delete','id'=>$_smarty_tpl->tpl_vars['row']->value['id'],'rtn'=>'pi'),$_smarty_tpl);?>
" title="Delete"><i class="icon-trash"></i></a>
</div>
<?php }} ?>
