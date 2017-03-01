<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:39:29
         compiled from "/opt/ixpmanager/application/views/customer/list-preamble.phtml" */ ?>
<?php /*%%SmartyHeaderCode:172450673558b71561918cb1-04472931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6896282a922c928f027d4a6fb67618c10a05c7aa' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/list-preamble.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172450673558b71561918cb1-04472931',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ixp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b71561920b97_65552494',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b71561920b97_65552494')) {function content_58b71561920b97_65552494($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
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
