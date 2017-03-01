<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:39:36
         compiled from "/opt/ixpmanager/application/views/contact/list-role.phtml" */ ?>
<?php /*%%SmartyHeaderCode:178470969058b715682ae109-61676862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1da0144843bcbd250935901a876e91c105a9539' => 
    array (
      0 => '/opt/ixpmanager/application/views/contact/list-role.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178470969058b715682ae109-61676862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'col' => 0,
    'row' => 0,
    'role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b715682b3ce8_36418953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b715682b3ce8_36418953')) {function content_58b715682b3ce8_36418953($_smarty_tpl) {?><td>
    <?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->_loop = true;
?>
        <span class="label label-success">
            <?php echo $_smarty_tpl->tpl_vars['role']->value;?>

        </span>
    <?php } ?>
</td>
<?php }} ?>
