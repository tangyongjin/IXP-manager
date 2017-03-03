<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-03 11:40:52
         compiled from "/opt/ixpmanager/application/views/virtual-interface/js/add.js" */ ?>
<?php /*%%SmartyHeaderCode:198120004558b8e5c43e2ba2-99525394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a564642affa4742ed1d4df422e38df4b9b57a381' => 
    array (
      0 => '/opt/ixpmanager/application/views/virtual-interface/js/add.js',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198120004558b8e5c43e2ba2-99525394',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b8e5c43e5a87_91854870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8e5c43e5a87_91854870')) {function content_58b8e5c43e5a87_91854870($_smarty_tpl) {?>

$(document).ready(function() {

	$( 'a[id|="object-delete"]' ).on( 'click', function( event ){

		event.preventDefault();
		url = $(this).attr( "data-url" );

	    bootbox.dialog( "Are you sure you want to delete this object?", [{
	    	"label": "Cancel",
	    	"class": "btn-primary"
	    },
	    {
	    	"label": "Delete",
	    	"class": "btn-danger",
	    	"callback": function() { document.location.href = url; }
	    }]);

    });
});




<?php }} ?>
