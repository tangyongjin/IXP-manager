<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:52:52
         compiled from "/opt/ixpmanager/application/views/profile/index.phtml" */ ?>
<?php /*%%SmartyHeaderCode:115311884058b7a5248fd6c9-09961577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a52b214e26014466e143a9289d55aa6c8c1a4426' => 
    array (
      0 => '/opt/ixpmanager/application/views/profile/index.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115311884058b7a5248fd6c9-09961577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'controller' => 0,
    'action' => 0,
    'options' => 0,
    'passwordForm' => 0,
    'customerNotesForm' => 0,
    'profileForm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7a524930f16_59620577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7a524930f16_59620577')) {function content_58b7a524930f16_59620577($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==3) {?>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
">Home</a> <span class="divider">/</span>
        </li>
        <li class="active">
            <a href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>$_smarty_tpl->tpl_vars['action']->value),$_smarty_tpl);?>
">My Profile</a>
        </li>
    </ul>
<?php } else { ?>
    <div class="page-content">
        <div class="page-header">
            <h1>User Profile</h1>
        </div>
<?php }?>

<?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>


<div class="row-fluid">
    <div class="span6">
        
        <h3>Change Your Password</h3>
        <br />
        
        <?php if (isset($_smarty_tpl->tpl_vars['options']->value['resources']['auth']['oss']['pwhash'])&&$_smarty_tpl->tpl_vars['options']->value['resources']['auth']['oss']['pwhash']=='plaintext') {?>
            <div class="alert alert-info">
                    Please note that your passwords are not currently hashed in the backend database. Choose a unique password for IXP Manager.
                    Please <a href="https://github.com/inex/IXP-Manager/wiki/Password-Hashing" target="_blank">read this page</a>
                    to understand why we need to this.
            </div>
        <?php }?>
        
        <?php echo $_smarty_tpl->tpl_vars['passwordForm']->value;?>

        
        <?php if (isset($_smarty_tpl->tpl_vars['customerNotesForm']->value)) {?>
            <h3>Customer Notes</h3>
            <br />
            <?php echo $_smarty_tpl->tpl_vars['customerNotesForm']->value;?>

        <?php } else { ?>
            <?php echo smarty_function_tmplinclude(array('file'=>"profile/mailing-list.phtml"),$_smarty_tpl);?>

        <?php }?>
        
    </div>
    <div class="span6">
     
        <h3>Change Your Profile</h3>
        <br />
        <?php echo $_smarty_tpl->tpl_vars['profileForm']->value;?>

        
        <?php if (isset($_smarty_tpl->tpl_vars['customerNotesForm']->value)) {?>
            <?php echo smarty_function_tmplinclude(array('file'=>"profile/mailing-list.phtml"),$_smarty_tpl);?>

        <?php }?>
        
    </div>
</div>

<?php if (!isset($_smarty_tpl->tpl_vars['user']->value)||$_smarty_tpl->tpl_vars['user']->value->getPrivs()!=3) {?>
    </div>
<?php }?>

<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>

<?php }} ?>
