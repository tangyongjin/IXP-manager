<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-23 12:44:39
         compiled from "/opt/ixpmanager/application/views/static/regeneratemrtg.phtml" */ ?>
<?php /*%%SmartyHeaderCode:123790865558ae68b7353a37-89765766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3543361505a5cd4edb2ebad2c9b71f14f03019f3' => 
    array (
      0 => '/opt/ixpmanager/application/views/static/regeneratemrtg.phtml',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123790865558ae68b7353a37-89765766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58ae68b73c7bb6_04966725',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ae68b73c7bb6_04966725')) {function content_58ae68b73c7bb6_04966725($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml"),$_smarty_tpl);?>




<?php if (isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value->getPrivs()==3) {?>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
">Home</a> <span class="divider">/</span>
        </li>
        <li>
            Action <span class="divider">/</span>
        </li>
        <li class="active">
            MRTG
        </li>
    </ul>
<?php } else { ?>
    <div class="page-content">
        <div class="page-header">
            <h1>Example Documenation Page</h1>
        </div>
<?php }?>
<p>
点击按钮,重新生成MRTG的配置文件:&nbsp/ixpdata/mrtgcfg/mrtg.cfg

<br/><br/>

命令行[在docker container:ixp.webframework]:&nbsp; /opt/ixpmanager/bin/ixptool.php -a statistics-cli.gen-mrtg-conf
<br/><br/>

<input class="btn"  id="recreate_mrtg_cfg" value="重新生成配置文件" type="submit">

<input class="btn"  id="restart_mrtg" value="重新运行mrtg" type="submit">

<br/>

<pre><div id="mrtg_file"  class="well well-lg"></div></pre>

</p>


<?php if (!isset($_smarty_tpl->tpl_vars['user']->value)||$_smarty_tpl->tpl_vars['user']->value->getPrivs()!=3) {?>
    </div>
<?php }?>
<script><?php echo smarty_function_tmplinclude(array('file'=>"static/js/mrtg.js"),$_smarty_tpl);?>
</script>
<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>

<?php }} ?>
