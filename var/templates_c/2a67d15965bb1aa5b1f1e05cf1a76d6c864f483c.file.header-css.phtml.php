<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:39:22
         compiled from "/opt/ixpmanager/application/views/header-css.phtml" */ ?>
<?php /*%%SmartyHeaderCode:120312308058b7155aac7f50-80612474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a67d15965bb1aa5b1f1e05cf1a76d6c864f483c' => 
    array (
      0 => '/opt/ixpmanager/application/views/header-css.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120312308058b7155aac7f50-80612474',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7155aad7457_58390732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7155aad7457_58390732')) {function content_58b7155aad7457_58390732($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><?php if (isset($_smarty_tpl->tpl_vars['options']->value['mini_css'])&&$_smarty_tpl->tpl_vars['options']->value['mini_css']) {?>
    <link rel="stylesheet" type="text/css" href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/css/min.bundle-v38.css" />
<?php } else { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/css/200-jquery-ui-1.8.23.custom.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/css/230-jquery.contextMenu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/css/250-jquery-colorbox.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/css/300-chosen.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/css/800-bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/css/805-bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/css/810-override_container_app.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/css/820-bootstrap-override.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/css/830-bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/css/900-ixp-manager.css" />
<?php }?>
<?php }} ?>