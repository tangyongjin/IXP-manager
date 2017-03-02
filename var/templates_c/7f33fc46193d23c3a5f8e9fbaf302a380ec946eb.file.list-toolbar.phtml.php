<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 11:31:46
         compiled from "/opt/ixpmanager/application/views/virtual-interface/list-toolbar.phtml" */ ?>
<?php /*%%SmartyHeaderCode:156511845258b792229adee0-98412136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f33fc46193d23c3a5f8e9fbaf302a380ec946eb' => 
    array (
      0 => '/opt/ixpmanager/application/views/virtual-interface/list-toolbar.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156511845258b792229adee0-98412136',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b792229bad48_22277328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b792229bad48_22277328')) {function content_58b792229bad48_22277328($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><li class="pull-right"> 
    <div class="btn-group">
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
