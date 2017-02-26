<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-26 17:08:52
         compiled from "/opt/ixpmanager/application/views/index/about.phtml" */ ?>
<?php /*%%SmartyHeaderCode:101646468258b29b24334880-01827038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f016ec9ca629cff78e31e92950be9d8e0e3339f' => 
    array (
      0 => '/opt/ixpmanager/application/views/index/about.phtml',
      1 => 1487856731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101646468258b29b24334880-01827038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b29b2434b7d5_45703653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b29b2434b7d5_45703653')) {function content_58b29b2434b7d5_45703653($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
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
