<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:39:29
         compiled from "/opt/ixpmanager/application/views/customer/js/list-addon.js" */ ?>
<?php /*%%SmartyHeaderCode:198823624558b715619cf022-29491485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d88a71fc52a009bf57f8e111e27d0ad34dd4622' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/js/list-addon.js',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198823624558b715619cf022-29491485',
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
  'unifunc' => 'content_58b715619d9009_23152702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b715619d9009_23152702')) {function content_58b715619d9009_23152702($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
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
