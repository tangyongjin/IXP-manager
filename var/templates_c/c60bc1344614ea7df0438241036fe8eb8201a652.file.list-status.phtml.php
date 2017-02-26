<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-26 16:06:48
         compiled from "/opt/ixpmanager/application/views/customer/list-status.phtml" */ ?>
<?php /*%%SmartyHeaderCode:137141756958b28c98a9bb38-96838981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c60bc1344614ea7df0438241036fe8eb8201a652' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/list-status.phtml',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137141756958b28c98a9bb38-96838981',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
    'col' => 0,
    'cconf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b28c98ab9735_03518446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b28c98ab9735_03518446')) {function content_58b28c98ab9735_03518446($_smarty_tpl) {?><td>
    <?php if ($_smarty_tpl->tpl_vars['row']->value['dateleave']!=null&&$_smarty_tpl->tpl_vars['row']->value['dateleave']->format('Y-m-d')!='0000-00-00'&&$_smarty_tpl->tpl_vars['row']->value['dateleave']->format('Y-m-d')!='-0001-11-30') {?>
        <span class="label label-important">CLOSED</span>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value]==\Entities\Customer::STATUS_SUSPENDED) {?>
            <span class="label label-important">SUSPENDED</span>
        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value]==\Entities\Customer::STATUS_NORMAL||($_smarty_tpl->tpl_vars['row']->value['type']==\Entities\Customer::TYPE_ASSOCIATE&&$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value]==\Entities\Customer::STATUS_NOTCONNECTED)) {?>
            
            <span class="label label-success">NORMAL</span>
        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value]==\Entities\Customer::STATUS_NOTCONNECTED) {?>
            <span class="label label-warning">NOT CONNECTED</span>
        <?php } else { ?>
            <span class="label"><?php echo $_smarty_tpl->tpl_vars['cconf']->value['mapper'][$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value]];?>
</span>
        <?php }?>
    <?php }?>
</td>
<?php }} ?>
