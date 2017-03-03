<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-03 11:40:52
         compiled from "/opt/ixpmanager/application/views/virtual-interface/add-toolbar.phtml" */ ?>
<?php /*%%SmartyHeaderCode:205590383758b8e5c42c1fa9-19790315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a584c83223ec1a3f51b9ad1ee4389037891f59f3' => 
    array (
      0 => '/opt/ixpmanager/application/views/virtual-interface/add-toolbar.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205590383758b8e5c42c1fa9-19790315',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b8e5c42d5572_45777293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8e5c42d5572_45777293')) {function content_58b8e5c42d5572_45777293($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><li class="pull-right"> 
    <div class="btn-group">
        <a class="btn btn-mini" href="<?php echo smarty_function_genUrl(array('controller'=>'virtual-interface','action'=>'list'),$_smarty_tpl);?>
"><i class="icon-list"></i></a>
        <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-plus"></i>&nbsp;<span class="caret"></span></a>
        <ul class="dropdown-menu pull-right">
            <li>
                <a href="<?php echo smarty_function_genUrl(array('controller'=>'virtual-interface','action'=>'add-wizard'),$_smarty_tpl);?>
">Add Interface Wizard...</a>
            </li>
            <li>
                <a href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>"add"),$_smarty_tpl);?>
">Virtual Interface Only...</a>
            </li>
        </ul>
    </div>
</li>

<?php }} ?>
