<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-26 01:57:19
         compiled from "/opt/ixpmanager/application/views/header-documentation.phtml" */ ?>
<?php /*%%SmartyHeaderCode:76295494258ae64ccab7b18-26406983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87d220c75bcf45f3416bb37ea8470f39158dc1f2' => 
    array (
      0 => '/opt/ixpmanager/application/views/header-documentation.phtml',
      1 => 1488045435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76295494258ae64ccab7b18-26406983',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58ae64ccabfb15_53605786',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ae64ccabfb15_53605786')) {function content_58ae64ccabfb15_53605786($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Action<b class="caret"></b></a>
    <ul class="dropdown-menu">

        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>"static",'action'=>"regeneratemrtg"),$_smarty_tpl);?>
">生成MRTG配置文件</a>
        </li>


        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>"batch-ping",'action'=>"list"),$_smarty_tpl);?>
">生成MRTG配置文件</a>
        </li>




        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>"static",'action'=>"example"),$_smarty_tpl);?>
">采集MAC地址(under build..)</a>
        </li>

        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>"static",'action'=>"example"),$_smarty_tpl);?>
">BatchPing(under build..)</a>
        </li>


        
        <li class="divider"></li>
        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>"index",'action'=>"about"),$_smarty_tpl);?>
">Docker操作</a>
        </li>
    </ul>
</li>
<?php }} ?>
