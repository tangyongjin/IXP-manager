<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:39:36
         compiled from "/opt/ixpmanager/application/views/contact/list-preamble.phtml" */ ?>
<?php /*%%SmartyHeaderCode:33236693158b715682a4083-89261913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9407c8080d9bf3a6ce0ce49e81f52db1fd6fe32e' => 
    array (
      0 => '/opt/ixpmanager/application/views/contact/list-preamble.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33236693158b715682a4083-89261913',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b715682abbb8_05683125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b715682abbb8_05683125')) {function content_58b715682abbb8_05683125($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><?php if (isset($_smarty_tpl->tpl_vars['group']->value)) {?>
    <h3>Filtered for Group: <em><?php echo $_smarty_tpl->tpl_vars['group']->value->getName();?>
</em>
    <a class="btn btn-mini" href="<?php echo smarty_function_genUrl(array('controller'=>'contact-group','action'=>'list'),$_smarty_tpl);?>
">
        <i class="icon-arrow-left"></i>
    </a>
  </h3>
<?php }?>
<?php }} ?>
