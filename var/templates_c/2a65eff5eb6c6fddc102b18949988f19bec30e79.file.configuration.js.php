<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:54:30
         compiled from "/opt/ixpmanager/application/views/switch/js/configuration.js" */ ?>
<?php /*%%SmartyHeaderCode:148355640458b7a58609fa12-07816465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a65eff5eb6c6fddc102b18949988f19bec30e79' => 
    array (
      0 => '/opt/ixpmanager/application/views/switch/js/configuration.js',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148355640458b7a58609fa12-07816465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'switchid' => 0,
    'vlanid' => 0,
    'vlans' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7a5860ac198_04947179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7a5860ac198_04947179')) {function content_58b7a5860ac198_04947179($_smarty_tpl) {?>

var oDataTable;

$(document).ready(function() {

	oDataTable = $( '#frontend-list-table' ).dataTable({
        "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
        "iDisplayLength": 50,
        "sPaginationType": "bootstrap",
        "aoColumns": [
            null,
            <?php if (!isset($_smarty_tpl->tpl_vars['switchid']->value)) {?>null,<?php }?>
            null,
            { "sSortDataType": "dom-text", "sType": "numeric" },
            <?php if (!isset($_smarty_tpl->tpl_vars['vlanid']->value)&&count($_smarty_tpl->tpl_vars['vlans']->value)>1) {?>null,<?php }?>
            { "sSortDataType": "dom-text", "sType": "html" },
            null,
            null,
            null,
            null
        ]
    });
    $( '#frontend-list-table' ).show();

});




<?php }} ?>
