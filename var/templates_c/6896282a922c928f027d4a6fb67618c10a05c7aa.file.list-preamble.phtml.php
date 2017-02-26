<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-26 16:06:48
         compiled from "/opt/ixpmanager/application/views/customer/list-preamble.phtml" */ ?>
<?php /*%%SmartyHeaderCode:22284156158b28c98a78773-84731514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6896282a922c928f027d4a6fb67618c10a05c7aa' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/list-preamble.phtml',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22284156158b28c98a78773-84731514',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ixp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b28c98a80507_54173240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b28c98a80507_54173240')) {function content_58b28c98a80507_54173240($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><?php if (isset($_smarty_tpl->tpl_vars['ixp']->value)) {?>
    <div class="row-fluid">
        <div class="alert alert-info">
            Only showing customers for: <strong><?php echo $_smarty_tpl->tpl_vars['ixp']->value->getName();?>
</strong>.
            You can also assign or unassign customers from this IXP on this page.
            <span class="pull-right">
                <a href="<?php echo smarty_function_genUrl(array('controller'=>'customer','action'=>'list'),$_smarty_tpl);?>
" class='btn btn-small'>Show All</a>
            </span>
        </div>
    </div>
<?php }?>
<?php }} ?>
