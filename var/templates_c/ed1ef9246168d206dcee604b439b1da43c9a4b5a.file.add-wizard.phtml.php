<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-03 11:40:30
         compiled from "/opt/ixpmanager/application/views/virtual-interface/add-wizard.phtml" */ ?>
<?php /*%%SmartyHeaderCode:134136411358b8e5aef17595-44256895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed1ef9246168d206dcee604b439b1da43c9a4b5a' => 
    array (
      0 => '/opt/ixpmanager/application/views/virtual-interface/add-wizard.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134136411358b8e5aef17595-44256895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b8e5aef2a272_07557901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8e5aef2a272_07557901')) {function content_58b8e5aef2a272_07557901($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml"),$_smarty_tpl);?>


<ul class="breadcrumb">
    <li>
        <a href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
">Home</a> <span class="divider">/</span>
    </li>
    <li>
        <a href="<?php echo smarty_function_genUrl(array('controller'=>'virtual-interface','action'=>'list'),$_smarty_tpl);?>
">(Virtual) Interfaces</a> <span class="divider">/</span>
    </li>
    <li class="active">
        Add Interface Wizard
    </li>
</ul>

<?php echo $_smarty_tpl->tpl_vars['form']->value;?>


<script type="text/javascript"><?php echo smarty_function_tmplinclude(array('file'=>"virtual-interface/js/add-wizard.js"),$_smarty_tpl);?>
</script>

<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>

<?php }} ?>
