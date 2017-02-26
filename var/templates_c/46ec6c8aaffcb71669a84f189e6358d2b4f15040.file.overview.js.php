<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-26 16:54:30
         compiled from "/opt/ixpmanager/application/views/customer/js/overview.js" */ ?>
<?php /*%%SmartyHeaderCode:128486933358b297c671fa06-87812049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46ec6c8aaffcb71669a84f189e6358d2b4f15040' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/js/overview.js',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128486933358b297c671fa06-87812049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b297c6724495_54790718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b297c6724495_54790718')) {function content_58b297c6724495_54790718($_smarty_tpl) {?>

$(document).ready(function() {

	<?php if ($_smarty_tpl->tpl_vars['tab']->value) {?>
		$( '#customer-overview-tabs a[href="#<?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
"]').tab( 'show' );
	<?php }?>
	
} );
<?php }} ?>
