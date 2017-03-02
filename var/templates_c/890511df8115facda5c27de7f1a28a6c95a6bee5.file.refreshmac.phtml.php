<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 16:11:41
         compiled from "/opt/ixpmanager/application/views/noc/refreshmac.phtml" */ ?>
<?php /*%%SmartyHeaderCode:109616553058b7d3bd714501-51555079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '890511df8115facda5c27de7f1a28a6c95a6bee5' => 
    array (
      0 => '/opt/ixpmanager/application/views/noc/refreshmac.phtml',
      1 => 1488392703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109616553058b7d3bd714501-51555079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7d3bd7335d9_22292184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7d3bd7335d9_22292184')) {function content_58b7d3bd7335d9_22292184($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
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
点击按钮,从交换机读取mac地址.

<br/><br/>



<input class="btn"  id="refreshmac" value="刷新MAC" type="submit">

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
