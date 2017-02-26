<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-26 16:56:34
         compiled from "/opt/ixpmanager/application/views/customer/js/overview/users.js" */ ?>
<?php /*%%SmartyHeaderCode:66461162458b2984200c467-68565689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11e6744d97df83b27020e5473d93fd9f48eac601' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/js/overview/users.js',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66461162458b2984200c467-68565689',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b29842019be3_80395151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b29842019be3_80395151')) {function content_58b29842019be3_80395151($_smarty_tpl) {?>$(document).ready( function() {

    $( 'a[id|="usr-list-delete"]' ).off( 'click' ).on(  'click', function( event ) {

		event.preventDefault();
		url = $(this).attr( "href" );
	
		bootbox.dialog( "Are you sure you want to delete this contact?", 
			[
			 	{
				    "label": "Cancel",
				    "class": "btn-primary"
				},
				{
				    "label": "Remove User Access Only",
				    "class": "btn-danger",
				    "callback": function() { document.location.href = url + "/useronly/1"; }
				},
				{
				    "label": "Delete Contact",
				    "class": "btn-danger",
				    "callback": function() { document.location.href = url; }
				}
			]
		);
    });
});<?php }} ?>
