<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 17:50:33
         compiled from "/opt/ixpmanager/application/views/switch/list-preamble.phtml" */ ?>
<?php /*%%SmartyHeaderCode:176651612258b7eae949cf29-14821485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8017cac61834d615684e31d8176f21b96cc6909' => 
    array (
      0 => '/opt/ixpmanager/application/views/switch/list-preamble.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176651612258b7eae949cf29-14821485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infra' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7eae94a6148_99414758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7eae94a6148_99414758')) {function content_58b7eae94a6148_99414758($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['infra']->value)&&$_smarty_tpl->tpl_vars['infra']->value) {?>

<div class="row-fluid">
    <div class="alert alert-info">
        Only showing switches for: <strong><?php echo $_smarty_tpl->tpl_vars['infra']->value->getName();?>
</strong>.
        <span class="pull-right">
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'switch','action'=>'list'),$_smarty_tpl);?>
" class='btn btn-small'>Show All</a>
        </span>
        
    </div>
</div>

<?php }?>
<?php }} ?>
