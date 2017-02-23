<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-23 12:45:07
         compiled from "/opt/ixpmanager/application/views/customer/list-autsys.phtml" */ ?>
<?php /*%%SmartyHeaderCode:57322673558ae68d39c0939-72870882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44d1098ba4b5c8ed534a7b6e22cbfa9857f54825' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/list-autsys.phtml',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57322673558ae68d39c0939-72870882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'col' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58ae68d39c81d9_54298840',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ae68d39c81d9_54298840')) {function content_58ae68d39c81d9_54298840($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_asnumber')) include '/opt/ixpmanager/application/../library/inex-smarty/functions/modifier.asnumber.php';
?><td>
    <?php if ($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value]!=0) {?>
        <?php echo smarty_modifier_asnumber($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value]);?>

    <?php }?>
</td>
<?php }} ?>
