<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-26 16:06:28
         compiled from "/opt/ixpmanager/application/views/header-base.phtml" */ ?>
<?php /*%%SmartyHeaderCode:163651399458b28c8406ca65-59041348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc3d6688c5c896da49637cfe7323e571f6d858cb' => 
    array (
      0 => '/opt/ixpmanager/application/views/header-base.phtml',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163651399458b28c8406ca65-59041348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'hasIdentity' => 0,
    'user' => 0,
    'mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b28c84081421_18979563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b28c84081421_18979563')) {function content_58b28c84081421_18979563($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/index.php">

    <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
    <meta charset="utf-8">
    
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pageTitle']->value)===null||$tmp==='' ? "IXP Manager" : $tmp);?>
</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <?php echo smarty_function_tmplinclude(array('file'=>"header-css.phtml"),$_smarty_tpl);?>

    <?php echo smarty_function_tmplinclude(array('file'=>"header-js.phtml"),$_smarty_tpl);?>

	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <?php if ((!isset($_smarty_tpl->tpl_vars['hasIdentity']->value)||!$_smarty_tpl->tpl_vars['hasIdentity']->value||$_smarty_tpl->tpl_vars['user']->value->getPrivs()!=3)&&(!isset($_smarty_tpl->tpl_vars['mode']->value)||$_smarty_tpl->tpl_vars['mode']->value!='fluid')) {?>
        <style>
            html, body {
              background-color: #eee;
            }
            
            body {
                padding-top: 40px;
            }
        </style>
    <?php }?>
    
</head>

<body>





<?php }} ?>
