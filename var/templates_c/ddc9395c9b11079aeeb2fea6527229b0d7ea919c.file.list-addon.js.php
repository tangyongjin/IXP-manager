<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:39:36
         compiled from "/opt/ixpmanager/application/views/contact/js/list-addon.js" */ ?>
<?php /*%%SmartyHeaderCode:30525453758b715682ba677-47966840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddc9395c9b11079aeeb2fea6527229b0d7ea919c' => 
    array (
      0 => '/opt/ixpmanager/application/views/contact/js/list-addon.js',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30525453758b715682ba677-47966840',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b715682bd9c2_37478335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b715682bd9c2_37478335')) {function content_58b715682bd9c2_37478335($_smarty_tpl) {?>
$(document).ready(function() {
	
    $( 'a[id|="list-delete"]' ).off( 'click' ).on( 'click', function( event ){

		event.preventDefault();
		url = $(this).attr("href");
	
		bootbox.dialog( 
			"Are you sure you want to delete this contact? The related user login account, if any, will also be removed.", 
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
