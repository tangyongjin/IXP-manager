<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:50:05
         compiled from "/opt/ixpmanager/application/views/user/js/list-addon.js" */ ?>
<?php /*%%SmartyHeaderCode:150036434358b717dd7e7cb4-38204227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99c004aaa0d3f228d03430b30c4b5f055524d210' => 
    array (
      0 => '/opt/ixpmanager/application/views/user/js/list-addon.js',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150036434358b717dd7e7cb4-38204227',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b717dd7ebd33_80808359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b717dd7ebd33_80808359')) {function content_58b717dd7ebd33_80808359($_smarty_tpl) {?>$(document).ready(function() {

    $( 'a[id|="list-delete"]' ).off('click').on( 'click', function( event ){

        event.preventDefault();
        url = $(this).attr("href");

        bootbox.dialog( "Are you sure you want to delete this user?", [{
            "label": "Cancel",
            "class": "btn-primary"
        },
        {
            "label": "Remove User Access",
            "class": "btn-danger",
            "callback": function() { document.location.href = url + "/useronly/1"; }
        },
        {
            "label": "Delete",
            "class": "btn-danger",
            "callback": function() { document.location.href = url }
        }
        ]);

    });
});




<?php }} ?>
