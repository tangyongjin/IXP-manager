<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-23 12:45:07
         compiled from "/opt/ixpmanager/application/views/customer/js/list-addon.js" */ ?>
<?php /*%%SmartyHeaderCode:119014383858ae68d3a6ab94-72131694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d88a71fc52a009bf57f8e111e27d0ad34dd4622' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/js/list-addon.js',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119014383858ae68d3a6ab94-72131694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'validCustomers' => 0,
    'ixp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58ae68d3a74b71_50696860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ae68d3a74b71_50696860')) {function content_58ae68d3a74b71_50696860($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['validCustomers']->value)) {?>
    $( "#cust-assign-dialog-close" ).on( 'click', function(){
        dialog.modal( "hide" );
    });
    
    $( "#cust-assign-dialog-assign" ).on( 'click', function(){ 
        window.location.href = '<?php echo smarty_function_genUrl(array('controller'=>"ixp",'action'=>"assign-customer",'id'=>$_smarty_tpl->tpl_vars['ixp']->value->getId()),$_smarty_tpl);?>
/cid/' + $( '#customer' ).val();
    });
    
    $( document ).ready( function(){
        $( "#assign-customer-btn" ).on( 'click', function( event ){
            event.preventDefault();
            dialog = $( '#cust-assign-dialog' ).modal( {
                backdrop: true,
                keyboard: true,
                show: true
            });
        } );
    });
<?php }?>
	<?php }} ?>
