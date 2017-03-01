<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 03:00:41
         compiled from "/opt/ixpmanager/application/views/error/error-404.phtml" */ ?>
<?php /*%%SmartyHeaderCode:91437092658b71a59b543d8-39237121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe2288e3227cd0587492427e0d077eee2b7b9636' => 
    array (
      0 => '/opt/ixpmanager/application/views/error/error-404.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91437092658b71a59b543d8-39237121',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b71a59b5dd43_65382477',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b71a59b5dd43_65382477')) {function content_58b71a59b5dd43_65382477($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml"),$_smarty_tpl);?>


<div class="page-content" >

    <div class="page-header" >
        <h1>Error 404</h1>
    </div>


<?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>


<p align="center">

<table width="80%" align="center">
<tr>
    <td valign="top" align="center">
        <br />
        <h3>Sorry - the page you are looking for cannot be found</h3>

        <p>
        You may have followed a broken link, an outdated search result, or there may be an
        error on our site. If you typed in a URL, please make sure you have typed it in
        correctly. In particular, make sure that the URL you typed is all in lower case.
        </p>
    </td>
</tr>
</table>

</p>
</div>
<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>

<?php }} ?>
