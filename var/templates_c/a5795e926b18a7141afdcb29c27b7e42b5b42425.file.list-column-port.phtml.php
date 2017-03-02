<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 11:31:46
         compiled from "/opt/ixpmanager/application/views/virtual-interface/list-column-port.phtml" */ ?>
<?php /*%%SmartyHeaderCode:138848679158b792229be120-48558365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5795e926b18a7141afdcb29c27b7e42b5b42425' => 
    array (
      0 => '/opt/ixpmanager/application/views/virtual-interface/list-column-port.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138848679158b792229be120-48558365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b792229c6d01_12340326',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b792229c6d01_12340326')) {function content_58b792229c6d01_12340326($_smarty_tpl) {?><td>
    <?php if ($_smarty_tpl->tpl_vars['row']->value['ports']>1) {?>
        <em>LAG with <?php echo $_smarty_tpl->tpl_vars['row']->value['ports'];?>
 ports</em>
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['row']->value['port'];?>

    <?php }?>
</td><?php }} ?>
