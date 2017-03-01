<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:39:22
         compiled from "/opt/ixpmanager/application/views/header-js.phtml" */ ?>
<?php /*%%SmartyHeaderCode:86503524558b7155aad9168-24699619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a261413bb43b56b43ea1638cadba97bfcdcafb7' => 
    array (
      0 => '/opt/ixpmanager/application/views/header-js.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86503524558b7155aad9168-24699619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7155aaec611_89947235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7155aaec611_89947235')) {function content_58b7155aaec611_89947235($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><?php if (isset($_smarty_tpl->tpl_vars['options']->value['mini_js'])&&$_smarty_tpl->tpl_vars['options']->value['mini_js']) {?>
    <script type="text/javascript" src="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/js/min.bundle-v38.js"></script>
<?php } else { ?>
    <script type="text/javascript" src="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/js/200-jquery-1.11.0.js"></script>
    <script type="text/javascript" src="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/js/210-jquery-ui-1.10.3.custom.js"></script>
    <script type="text/javascript" src="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/js/220-jquery.dataTables-1.9.4.js"></script>
    <script type="text/javascript" src="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/js/231-jquery.contextMenu-1.5.24.js"></script>
    <script type="text/javascript" src="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/js/240-jquery.json-2.3.js"></script>
    <script type="text/javascript" src="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/js/245-jquery-cookie.js"></script>
    <script type="text/javascript" src="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/js/250-jquery-colorbox-1.4.21.js"></script>
    <script type="text/javascript" src="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/js/300-chosen.jquery.js"></script>
    <script type="text/javascript" src="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/js/310-throbber.js"></script>
    <script type="text/javascript" src="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/js/700-php.js"></script>
    <script type="text/javascript" src="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/js/800-bootstrap-2.3.2.js"></script>
    <script type="text/javascript" src="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/js/830-bootstrap-wysihtml5.js"></script>
    <script type="text/javascript" src="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/js/890-bootbox.js"></script>
    <script type="text/javascript" src="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/js/900-oss-framework.js"></script>
    <script type="text/javascript" src="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/js/999-ixpmanager.js"></script>
<?php }?>
<?php }} ?>
