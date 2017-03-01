<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:39:29
         compiled from "/opt/ixpmanager/application/views/frontend/js/list.js" */ ?>
<?php /*%%SmartyHeaderCode:54175031858b71561996796-18497822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '118403742242ae11d8a67796f92296535dd03317' => 
    array (
      0 => '/opt/ixpmanager/application/views/frontend/js/list.js',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54175031858b71561996796-18497822',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'options' => 0,
    'feParams' => 0,
    'cconf' => 0,
    'col' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b715619cc771_73317787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b715619cc771_73317787')) {function content_58b715619cc771_73317787($_smarty_tpl) {?>

var oDataTable;

$(document).ready(function() {

	$( 'a[id|="list-delete"]' ).on( 'click', function( event ){

		event.preventDefault();
		url = $(this).attr("href");

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


    oDataTable = $( '#frontend-list-table' ).dataTable({
        'fnDrawCallback': function() {
                if( oss_prefs != undefined && 'iLength' in oss_prefs && oss_prefs['iLength'] != $( "select[name='frontend-list-table_length']" ).val() )
                {
                    oss_prefs['iLength'] = parseInt( $( "select[name='frontend-list-table_length']" ).val() );
                    $.jsonCookie( 'oss_prefs', oss_prefs, oss_cookie_options );
                }
            },
        'iDisplayLength': ( typeof oss_prefs != 'undefined' && 'iLength' in oss_prefs )
        		? oss_prefs['iLength']
            	: <?php if (isset($_smarty_tpl->tpl_vars['options']->value['defaults']['table']['entries'])) {?><?php echo $_smarty_tpl->tpl_vars['options']->value['defaults']['table']['entries'];?>
<?php } else { ?>10<?php }?>,
        "aLengthMenu": [ [ 10, 25, 50, 100, 500, -1 ], [ 10, 25, 50, 100, 500, "All" ] ],
        "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
        "sPaginationType": "bootstrap",
        "bAutoWidth": false,
        <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
        <?php if (isset($_smarty_tpl->tpl_vars['feParams']->value->listOrderBy)) {?>
            <?php  $_smarty_tpl->tpl_vars['cconf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cconf']->_loop = false;
 $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feParams']->value->listColumns; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cconf']->key => $_smarty_tpl->tpl_vars['cconf']->value) {
$_smarty_tpl->tpl_vars['cconf']->_loop = true;
 $_smarty_tpl->tpl_vars['col']->value = $_smarty_tpl->tpl_vars['cconf']->key;
?>
                <?php if (!is_array($_smarty_tpl->tpl_vars['cconf']->value)||!isset($_smarty_tpl->tpl_vars['cconf']->value['display'])||$_smarty_tpl->tpl_vars['cconf']->value['display']) {?>
                    <?php if (isset($_smarty_tpl->tpl_vars['feParams']->value->listOrderBy)&&$_smarty_tpl->tpl_vars['feParams']->value->listOrderBy==$_smarty_tpl->tpl_vars['col']->value) {?>
                        'aaSorting': [[ <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
, <?php if (isset($_smarty_tpl->tpl_vars['feParams']->value->listOrderByDir)&&$_smarty_tpl->tpl_vars['feParams']->value->listOrderByDir=="DESC") {?>'desc'<?php } else { ?>'asc'<?php }?> ]],
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
                <?php }?>
            <?php } ?>
        <?php }?>
        'aoColumns': [
            <?php  $_smarty_tpl->tpl_vars['cconf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cconf']->_loop = false;
 $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feParams']->value->listColumns; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cconf']->key => $_smarty_tpl->tpl_vars['cconf']->value) {
$_smarty_tpl->tpl_vars['cconf']->_loop = true;
 $_smarty_tpl->tpl_vars['col']->value = $_smarty_tpl->tpl_vars['cconf']->key;
?>
                <?php if (!is_array($_smarty_tpl->tpl_vars['cconf']->value)||!isset($_smarty_tpl->tpl_vars['cconf']->value['display'])||$_smarty_tpl->tpl_vars['cconf']->value['display']) {?>
                    null,
                <?php }?>
            <?php } ?>
            { 'bSortable': false, "bSearchable": false, "sWidth": "150px" }
        ]
    });
    
    $( '#frontend-list-table' ).show();

});




<?php }} ?>
