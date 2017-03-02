<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:56:52
         compiled from "/opt/ixpmanager/application/views/meeting/read.phtml" */ ?>
<?php /*%%SmartyHeaderCode:179348588958b7a61485bc45-45486657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eaee51577cf6dd98d530ca901dd9043567f61be' => 
    array (
      0 => '/opt/ixpmanager/application/views/meeting/read.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179348588958b7a61485bc45-45486657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'entries' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7a614882cf1_43524675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7a614882cf1_43524675')) {function content_58b7a614882cf1_43524675($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'meeting','action'=>'list'),$_smarty_tpl);?>
">Meetings</a> <span class="divider">/</span>
        </li>
        <li class="active">
            Member View
        </li>
    </ul>
<?php } else { ?>
    <div class="page-content">
    
        <div class="page-header">
            <h1>Meetings</h1>
        </div>
<?php }?>

<?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>


<div class="meetings_index">
    <p>
        <form name="meeting_jumpto" class="form">
            <strong>Jump to:</strong>&nbsp;
        
            <select
                name="meetings_index"
                onChange="window.location.href=meeting_jumpto.meetings_index.options[selectedIndex].value">
            >
        
                <option></option>
                <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
                    <option value="#<?php echo $_smarty_tpl->tpl_vars['e']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value->getDate()->format("Y-m-d");?>
</option>
                <?php } ?>
        
            </select>
        </form>
    </p>
</div>



<?php echo smarty_function_tmplinclude(array('file'=>'meeting/core.phtml'),$_smarty_tpl);?>



<?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()!=\Entities\User::AUTH_SUPERUSER) {?>
</div>
<?php }?>

<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>

<?php }} ?>
