<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-23 04:35:22
         compiled from "/opt/ixpmanager/application/views/statistics-cli/mrtg/index.cfg" */ ?>
<?php /*%%SmartyHeaderCode:58371163558ae668ad70ce4-29491320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ded31e5177ec5da6c0b29cedb912ebddc50cf193' => 
    array (
      0 => '/opt/ixpmanager/application/views/statistics-cli/mrtg/index.cfg',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58371163558ae668ad70ce4-29491320',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58ae668ad9d264_96275147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ae668ad9d264_96275147')) {function content_58ae668ad9d264_96275147($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
?>

<?php echo smarty_function_tmplinclude(array('file'=>'statistics-cli/mrtg/header.cfg'),$_smarty_tpl);?>

<?php echo smarty_function_tmplinclude(array('file'=>'statistics-cli/mrtg/custom-header.cfg'),$_smarty_tpl);?>

<?php echo smarty_function_tmplinclude(array('file'=>'statistics-cli/mrtg/trunks.cfg'),$_smarty_tpl);?>

<?php echo smarty_function_tmplinclude(array('file'=>'statistics-cli/mrtg/aggregates.cfg'),$_smarty_tpl);?>

<?php echo smarty_function_tmplinclude(array('file'=>'statistics-cli/mrtg/switch-aggregates.cfg'),$_smarty_tpl);?>

<?php echo smarty_function_tmplinclude(array('file'=>'statistics-cli/mrtg/member-ports.cfg'),$_smarty_tpl);?>

<?php echo smarty_function_tmplinclude(array('file'=>'statistics-cli/mrtg/custom-footer.cfg'),$_smarty_tpl);?>

<?php }} ?>
