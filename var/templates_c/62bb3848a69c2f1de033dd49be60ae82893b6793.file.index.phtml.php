<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:53:43
         compiled from "/opt/ixpmanager/application/views/weather-map/index.phtml" */ ?>
<?php /*%%SmartyHeaderCode:19012194958b7a557830395-96903115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62bb3848a69c2f1de033dd49be60ae82893b6793' => 
    array (
      0 => '/opt/ixpmanager/application/views/weather-map/index.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19012194958b7a557830395-96903115',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'weathermap' => 0,
    'weathermaps' => 0,
    'id' => 0,
    'wp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7a557865a92_67962285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7a557865a92_67962285')) {function content_58b7a557865a92_67962285($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml"),$_smarty_tpl);?>


<?php if (isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value->getPrivs()==3) {?>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
">Home</a> <span class="divider">/</span>
        </li>
        <li class="active">
            <?php if ($_smarty_tpl->tpl_vars['weathermap']->value) {?><?php echo $_smarty_tpl->tpl_vars['weathermap']->value['name'];?>
<?php } else { ?>Weather Maps<?php }?>
        </li>
    </ul>
    <div>
<?php } else { ?>
    <div class="page-content">
    
        <div class="page-header">
            <h1><?php if ($_smarty_tpl->tpl_vars['weathermap']->value) {?><?php echo $_smarty_tpl->tpl_vars['weathermap']->value['name'];?>
<?php } else { ?>Weather Maps<?php }?></h1>
        </div>
        
<?php }?>

<?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['weathermap']->value) {?>
    <iframe src="<?php echo $_smarty_tpl->tpl_vars['weathermap']->value['url'];?>
"
    		frameborder="0"
    		scrolling="no"
    		width="100%"
    		height="<?php echo $_smarty_tpl->tpl_vars['weathermap']->value['height'];?>
"
    		style="margin: 0; padding: 0; margin-left: auto; margin-right: auto;"
    	></iframe>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['weathermaps']->value)&&is_array($_smarty_tpl->tpl_vars['weathermaps']->value)) {?>
    <h3>Available Weathermaps</h3>
    
    <ul>
        <?php  $_smarty_tpl->tpl_vars['wp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wp']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['weathermaps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wp']->key => $_smarty_tpl->tpl_vars['wp']->value) {
$_smarty_tpl->tpl_vars['wp']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['wp']->key;
?>
            <li> <a href="<?php echo smarty_function_genUrl(array('controller'=>"weather-map",'action'=>"index",'id'=>$_smarty_tpl->tpl_vars['id']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['wp']->value['name'];?>
</a> </li>
        <?php } ?>
    </ul>
<?php }?>

</div>

<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>

<?php }} ?>
