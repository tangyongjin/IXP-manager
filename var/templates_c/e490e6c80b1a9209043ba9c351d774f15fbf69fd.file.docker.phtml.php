<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:28:32
         compiled from "/opt/ixpmanager/application/views/noc/docker.phtml" */ ?>
<?php /*%%SmartyHeaderCode:54372751458b79f703c4494-84216214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e490e6c80b1a9209043ba9c351d774f15fbf69fd' => 
    array (
      0 => '/opt/ixpmanager/application/views/noc/docker.phtml',
      1 => 1488392703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54372751458b79f703c4494-84216214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b79f703e2b56_95284588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b79f703e2b56_95284588')) {function content_58b79f703e2b56_95284588($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml"),$_smarty_tpl);?>


<?php if (isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value->getPrivs()==3) {?>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
">Home</a> <span class="divider">/</span>
        </li>
        <li class="active">
            Docker操作
        </li>
    </ul>
<?php } else { ?>
    <div class="page-content">
        
<?php }?>


<div class="row-fluid">

<iframe src="http://114.113.88.2:9000/" style="width:1200px;height: 900px;"></iframe>
    
 
</div>


<?php if (!isset($_smarty_tpl->tpl_vars['user']->value)||$_smarty_tpl->tpl_vars['user']->value->getPrivs()!=3) {?>
    </div>
<?php }?>

<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>

<?php }} ?>
