<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-23 12:45:07
         compiled from "/opt/ixpmanager/application/views/customer/list-row-menu.phtml" */ ?>
<?php /*%%SmartyHeaderCode:115780326358ae68d39f9274-91235630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0fa907e94c1748646cde5a5909a03b73a2a0b8d' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/list-row-menu.phtml',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115780326358ae68d39f9274-91235630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controller' => 0,
    'row' => 0,
    'multiIXP' => 0,
    'ixp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58ae68d3a06516_09714385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ae68d3a06516_09714385')) {function content_58ae68d3a06516_09714385($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?>
<div class="btn-group">
    <a class="btn btn-mini" href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>"overview",'id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
"><i class="icon-eye-open"></i></a>
    <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value&&isset($_smarty_tpl->tpl_vars['ixp']->value)) {?>
        <a class="btn btn-mini" href="<?php echo smarty_function_genUrl(array('controller'=>'ixp','action'=>'unassign-customer','cid'=>$_smarty_tpl->tpl_vars['row']->value['id'],'id'=>$_smarty_tpl->tpl_vars['ixp']->value->getId()),$_smarty_tpl);?>
"><i class="icon-remove"></i></a>
    <?php }?>
</div>
<?php }} ?>
