<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 11:31:46
         compiled from "/opt/ixpmanager/application/views/virtual-interface/js/list-addon.js" */ ?>
<?php /*%%SmartyHeaderCode:96098817558b792229f2df8-11078863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c30af310352869ea7d6ea3114bdd1a5674265521' => 
    array (
      0 => '/opt/ixpmanager/application/views/virtual-interface/js/list-addon.js',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96098817558b792229f2df8-11078863',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b792229f9a34_17364499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b792229f9a34_17364499')) {function content_58b792229f9a34_17364499($_smarty_tpl) {?>$(document).ready(function() {

      $( 'a[id|="list-delete"]' ).off('click').on( 'click', function( event ){

        event.preventDefault();
        var url = $(this).attr("href");
        var reltype = "normal";
        
        if( $( this ).attr( "data-type" ) == 1 )
            reltype = "fanout";
        if( $( this ).attr( "data-type" ) == 6 )
            reltype = "peering";
        
        var related = false;
        if( $( this ).attr( "data-related" ) )
            related = true;
        
        if( !related )
        {
            bootbox.dialog( "Are you sure you want to delete this object?", [{
                "label": "Cancel",
                "class": "btn-primary"
            },
            {
                "label": "Delete",
                "class": "btn-danger",
                "callback": function() { document.location.href = url; }
            }]);
        }
        else
        {
            bootbox.dialog( "Are you sure you want to delete this object? It has realted " + reltype  + " interface.", [{
                "label": "Cancel",
                "class": "btn-primary"
            },
            {
                "label": "Delete with related " + reltype + " inetrface",
                "class": "btn-danger",
                "callback": function() { document.location.href = url + "/related/1"; }
            },
            {
                "label": "Delete",
                "class": "btn-danger",
                "callback": function() { document.location.href = url; }
            }]);
        }

  });
});<?php }} ?>
