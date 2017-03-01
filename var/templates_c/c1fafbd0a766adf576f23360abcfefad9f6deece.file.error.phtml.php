<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 03:11:48
         compiled from "/opt/ixpmanager/application/views/error/error.phtml" */ ?>
<?php /*%%SmartyHeaderCode:141400382058b71cf461b035-16588048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1fafbd0a766adf576f23360abcfefad9f6deece' => 
    array (
      0 => '/opt/ixpmanager/application/views/error/error.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141400382058b71cf461b035-16588048',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'options' => 0,
    'exceptions' => 0,
    'exception' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b71cf4645845_36773485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b71cf4645845_36773485')) {function content_58b71cf4645845_36773485($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
if (!is_callable('smarty_function_mailto')) include '/opt/ixpmanager/application/../vendor/smarty/smarty/libs/plugins/function.mailto.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml"),$_smarty_tpl);?>



<div class="page-content" >

    <div class="page-header" >
        <h1>Unexpected Error</h1>
    </div>


<?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>


<p align="center">

<table width="80%" align="center">
<tr>
    <td valign="top" align="center">
        <br />
        <h3>Uh oh! Unexpected Error!</h3>

        <p>We're very sorry but something we didn't expect has just happened.</p>
        <p>We've alerted the web monkeys and, after a severe flogging, they will get it fixed as soon as possible.</p>
        <p>Please feel free to email the <?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['options']->value['identity']['email'],'encode'=>'javascript','text'=>$_smarty_tpl->tpl_vars['options']->value['identity']['name']),$_smarty_tpl);?>
</p>
    </td>
</tr>
</table>

</p>

<?php if (isset($_smarty_tpl->tpl_vars['options']->value['phpSettings']['display_errors'])&&$_smarty_tpl->tpl_vars['options']->value['phpSettings']['display_errors']) {?>

    <div class="alert alert-warning">
        <p>
            <strong>Development Platform Detected!</strong> Display errors enabled via <code>application.ini</code>. Disable in production!
        </p>
    </div>
    
    <?php if (isset($_smarty_tpl->tpl_vars['exceptions']->value)) {?>

        <?php  $_smarty_tpl->tpl_vars['exception'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['exception']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['exceptions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['exception']->key => $_smarty_tpl->tpl_vars['exception']->value) {
$_smarty_tpl->tpl_vars['exception']->_loop = true;
?>
        
            <h2><?php echo get_class($_smarty_tpl->tpl_vars['exception']->value);?>
</h2>
            
            <dl>
                <dt>File</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['exception']->value->getFile();?>
</dd>
        
                <dt>Line</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['exception']->value->getLine();?>
</dd>
        
                <dt>Message</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['exception']->value->getMessage();?>
</dd>
        
                <dt>Code</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['exception']->value->getCode();?>
</dd>
            </dl>
        
            <h3>Trace</h3>
        
            <pre><?php echo $_smarty_tpl->tpl_vars['exception']->value->getTraceAsString();?>
</pre>

        <?php } ?>
    
    <?php }?>
<?php }?>

</div>
<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>

<?php }} ?>
