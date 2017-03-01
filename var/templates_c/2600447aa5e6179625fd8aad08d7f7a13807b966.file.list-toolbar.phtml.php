<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:50:05
         compiled from "/opt/ixpmanager/application/views/user/list-toolbar.phtml" */ ?>
<?php /*%%SmartyHeaderCode:207448910458b717dd7a5472-90796212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2600447aa5e6179625fd8aad08d7f7a13807b966' => 
    array (
      0 => '/opt/ixpmanager/application/views/user/list-toolbar.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207448910458b717dd7a5472-90796212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b717dd7b41b8_50955570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b717dd7b41b8_50955570')) {function content_58b717dd7b41b8_50955570($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><li class="pull-right"> 
    <?php if (!isset($_smarty_tpl->tpl_vars['feParams']->value->readonly)||!$_smarty_tpl->tpl_vars['feParams']->value->readonly) {?>
        <a class="btn btn-mini pull-right" href="<?php echo smarty_function_genUrl(array('controller'=>'contact','action'=>'add','user'=>true),$_smarty_tpl);?>
"><i class="icon-plus"></i></a>
    <?php }?>
</li>
<?php }} ?>
