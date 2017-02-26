<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-26 16:56:34
         compiled from "/opt/ixpmanager/application/views/customer/js/overview/contacts.js" */ ?>
<?php /*%%SmartyHeaderCode:87180146258b29842021658-90533291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35599aa8a5320666e059f8f6e72e02e21525c8db' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/js/overview/contacts.js',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87180146258b29842021658-90533291',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b29842024e25_92705549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b29842024e25_92705549')) {function content_58b29842024e25_92705549($_smarty_tpl) {?>$(document).ready(function() {
	
    $( 'a[id|="cont-list-delete"]' ).off( 'click' ).on( 'click', function( event ){

		event.preventDefault();
		url = $(this).attr("href");
	
		bootbox.dialog( 
			"Are you sure you want to delete this contact? " 
					+ ( $(this).attr( "data-hasuser" ) == "1" ? "The related user login account will also be removed." : "" ), 
			[
			    {
				    "label": "Cancel",
				    "class": "btn-primary"
			    },
			    {
				    "label": "Delete",
				    "class": "btn-danger",
				    "callback": function() { document.location.href = url; }
			    }
			]
		);

    });
});
<?php }} ?>
