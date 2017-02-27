<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-28 01:15:18
         compiled from "/opt/ixpmanager/application/views/header-documentation.phtml" */ ?>
<?php /*%%SmartyHeaderCode:187498033158b28c840a9d89-43400882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87d220c75bcf45f3416bb37ea8470f39158dc1f2' => 
    array (
      0 => '/opt/ixpmanager/application/views/header-documentation.phtml',
      1 => 1488215716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187498033158b28c840a9d89-43400882',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b28c840b5ef1_76391984',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b28c840b5ef1_76391984')) {function content_58b28c840b5ef1_76391984($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Action<b class="caret"></b></a>
    <ul class="dropdown-menu">

        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>"noc",'action'=>"regeneratemrtg"),$_smarty_tpl);?>
">生成MRTG配置文件</a>
        </li>


        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>"batch-ping",'action'=>"list"),$_smarty_tpl);?>
">BatchPing(Underbuild...)</a>
        </li>




        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>"noc",'action'=>"refreshmac"),$_smarty_tpl);?>
">采集MAC地址</a>
        </li>

        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>"static",'action'=>"example"),$_smarty_tpl);?>
">Feature1(under build..)</a>
        </li>


        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>"static",'action'=>"example"),$_smarty_tpl);?>
">Feature2(under build..)</a>
        </li>



        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>"static",'action'=>"example"),$_smarty_tpl);?>
">Feature3(under build..)</a>
        </li>





        
        <li class="divider"></li>

        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>"noc",'action'=>"docker"),$_smarty_tpl);?>
">Docker操作</a>
        </li>
        
    </ul>
</li>
<?php }} ?>
