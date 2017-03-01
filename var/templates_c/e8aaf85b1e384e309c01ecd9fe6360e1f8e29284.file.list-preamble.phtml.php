<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:39:38
         compiled from "/opt/ixpmanager/application/views/infrastructure/list-preamble.phtml" */ ?>
<?php /*%%SmartyHeaderCode:132889599158b7156a98a3c9-55499871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8aaf85b1e384e309c01ecd9fe6360e1f8e29284' => 
    array (
      0 => '/opt/ixpmanager/application/views/infrastructure/list-preamble.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132889599158b7156a98a3c9-55499871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ixp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7156a9994e3_53147808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7156a9994e3_53147808')) {function content_58b7156a9994e3_53147808($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['ixp']->value)&&$_smarty_tpl->tpl_vars['ixp']->value) {?>

<div class="row-fluid">
    <div class="alert alert-info">
        Only showing infrastructures for: <strong><?php echo $_smarty_tpl->tpl_vars['ixp']->value->getName();?>
</strong>.
        <span class="pull-right">
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'infrastructure','action'=>'list'),$_smarty_tpl);?>
" class='btn btn-small'>Show All</a>
        </span>
    </div>
</div>

<?php }?>
<?php }} ?>
