<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 11:31:46
         compiled from "/opt/ixpmanager/application/views/virtual-interface/list-row-menu.phtml" */ ?>
<?php /*%%SmartyHeaderCode:7435773358b792229c8793-12688824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '809030f358c361e8db60bd8ce41e506278390065' => 
    array (
      0 => '/opt/ixpmanager/application/views/virtual-interface/list-row-menu.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7435773358b792229c8793-12688824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module' => 0,
    'controller' => 0,
    'row' => 0,
    'resellerMode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b792229df7e1_48403147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b792229df7e1_48403147')) {function content_58b792229df7e1_48403147($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><div class="btn-group">
    <a class="btn btn-mini have-tooltip-below" href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'edit','id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" title="View"><i class="icon-eye-open"></i></a>
    <a class="btn btn-mini have-tooltip-below" href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'edit','id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" title="Edit"><i class="icon-pencil"></i></a>
    <a class="btn btn-mini have-tooltip-below" id='list-delete-<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
' <?php if ($_smarty_tpl->tpl_vars['resellerMode']->value&&($_smarty_tpl->tpl_vars['row']->value['ppid']||$_smarty_tpl->tpl_vars['row']->value['fpid'])) {?>data-related="1"<?php }?> data-type="<?php echo $_smarty_tpl->tpl_vars['row']->value['type'];?>
" href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'delete','id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" title="Delete"><i class="icon-trash"></i></a>
</div>
<?php }} ?>
