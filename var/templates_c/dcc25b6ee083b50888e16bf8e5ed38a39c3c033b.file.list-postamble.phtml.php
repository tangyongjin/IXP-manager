<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:39:38
         compiled from "/opt/ixpmanager/application/views/infrastructure/list-postamble.phtml" */ ?>
<?php /*%%SmartyHeaderCode:136529843158b7156a9b7634-14493146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcc25b6ee083b50888e16bf8e5ed38a39c3c033b' => 
    array (
      0 => '/opt/ixpmanager/application/views/infrastructure/list-postamble.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136529843158b7156a9b7634-14493146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'multiIXP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7156a9bd5b3_36146339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7156a9bd5b3_36146339')) {function content_58b7156a9bd5b3_36146339($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?>
<?php if (!$_smarty_tpl->tpl_vars['multiIXP']->value) {?>
<br /><br />
<div class="row-fluid">
    <div class="well">
        There is a database object representing your IXP. When running in single-IXP mode, as you are, the options to
        manage IXPs are hidden. However, there are points in the various installation and configuration documentation
        that require you to edit it. You can do that
        <a href="<?php echo smarty_function_genUrl(array('controller'=>'ixp','action'=>'edit','id'=>1),$_smarty_tpl);?>
">by clicking here</a>.
    </div>
</div>

<?php }?>
<?php }} ?>
