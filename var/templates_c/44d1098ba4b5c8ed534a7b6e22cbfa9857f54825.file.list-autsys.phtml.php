<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:39:29
         compiled from "/opt/ixpmanager/application/views/customer/list-autsys.phtml" */ ?>
<?php /*%%SmartyHeaderCode:60054201558b71561922c62-19611889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44d1098ba4b5c8ed534a7b6e22cbfa9857f54825' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/list-autsys.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60054201558b71561922c62-19611889',
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
  'unifunc' => 'content_58b7156192a010_55269467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7156192a010_55269467')) {function content_58b7156192a010_55269467($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_asnumber')) include '/opt/ixpmanager/application/../library/inex-smarty/functions/modifier.asnumber.php';
?><td>
    <?php if ($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value]!=0) {?>
        <?php echo smarty_modifier_asnumber($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value]);?>

    <?php }?>
</td>
<?php }} ?>
