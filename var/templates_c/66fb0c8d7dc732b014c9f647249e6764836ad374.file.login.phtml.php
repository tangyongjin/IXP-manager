<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-09 23:26:41
         compiled from "/opt/ixpmanager/application/views/auth/login.phtml" */ ?>
<?php /*%%SmartyHeaderCode:102004104658b7701603fcd2-32041783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66fb0c8d7dc732b014c9f647249e6764836ad374' => 
    array (
      0 => '/opt/ixpmanager/application/views/auth/login.phtml',
      1 => 1489073199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102004104658b7701603fcd2-32041783',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b77016058693_78860050',
  'variables' => 
  array (
    'options' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b77016058693_78860050')) {function content_58b77016058693_78860050($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
if (!is_callable('smarty_function_mailto')) include '/opt/ixpmanager/application/../vendor/smarty/smarty/libs/plugins/function.mailto.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml"),$_smarty_tpl);?>


<div class="page-content">

    <div class="page-header">
        <h1>Login to CNIX Manager</h1>
    </div>

<?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>


<div class="row">

    <?php if (!isset($_smarty_tpl->tpl_vars['options']->value['identity']['biglogo'])) {?>
        <div class="span12">
            <h2 align="center">[Your Logo Here]</h2>
            <p align="center">
                Configure <code>identity.ixp.biglogo</code> in <code>application.ini</code>.
                <br /><br /><br /><br />
            </p>
    <?php } else { ?>
        <div class="span12">
            <p align="center">
                <img src="<?php echo $_smarty_tpl->tpl_vars['options']->value['identity']['biglogo'];?>
" />
            </p>
    <?php }?>
        </div>
    
</div>

<div class="row">
    <div class="span6 offset3">
        <?php echo $_smarty_tpl->tpl_vars['form']->value;?>

    </div>
</div>

<p align="center">
    For help, please contact <?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['options']->value['identity']['email'],'encode'=>'javascript','text'=>$_smarty_tpl->tpl_vars['options']->value['identity']['name']),$_smarty_tpl);?>
.
</p>

</div>

<script type="text/javascript">
    $( document ).ready( function(){
        $('#username').focus();
    });
</script>

<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>

<?php }} ?>
