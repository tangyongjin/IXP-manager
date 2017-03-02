<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:53:58
         compiled from "/opt/ixpmanager/application/views/peering-matrix/index.phtml" */ ?>
<?php /*%%SmartyHeaderCode:189108151958b7a5669629a5-36723647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee2e86ef5b38f116aa19f0fd2b51758a2f8d64c3' => 
    array (
      0 => '/opt/ixpmanager/application/views/peering-matrix/index.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189108151958b7a5669629a5-36723647',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hasIdentity' => 0,
    'options' => 0,
    'vid' => 0,
    'vlans' => 0,
    'proto' => 0,
    'protos' => 0,
    'id' => 0,
    'vname' => 0,
    'name' => 0,
    'custs' => 0,
    'x_as' => 0,
    'asnStringFormat' => 0,
    'asn' => 0,
    'len' => 0,
    'pos' => 0,
    'x' => 0,
    'y_as' => 0,
    'y' => 0,
    'sessions' => 0,
    'inner' => 0,
    'outer' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7a566a06d01_52027346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7a566a06d01_52027346')) {function content_58b7a566a06d01_52027346($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_modifier_truncate')) include '/opt/ixpmanager/application/../vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_replace')) include '/opt/ixpmanager/application/../vendor/smarty/smarty/libs/plugins/modifier.replace.php';
?><?php if (isset($_smarty_tpl->tpl_vars['hasIdentity']->value)&&$_smarty_tpl->tpl_vars['hasIdentity']->value) {?>
    <?php echo smarty_function_tmplinclude(array('file'=>"header.phtml",'mode'=>"fluid"),$_smarty_tpl);?>

<?php } else { ?>
    <?php echo smarty_function_tmplinclude(array('file'=>"header.phtml",'mode'=>"fluid",'brand'=>((string)$_smarty_tpl->tpl_vars['options']->value['identity']['orgname'])." - ".((string)$_smarty_tpl->tpl_vars['options']->value['identity']['name'])." - Peering Matrix"),$_smarty_tpl);?>

<?php }?>

<ul class="breadcrumb">
    <li>
        <a href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
">Home</a> <span class="divider">/</span>
    </li>
    <li>
        <a href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
">Peering Matrices</a>
    </li>
    <li class="active">
        for the <?php echo $_smarty_tpl->tpl_vars['vlans']->value[$_smarty_tpl->tpl_vars['vid']->value];?>
 using <?php echo $_smarty_tpl->tpl_vars['protos']->value[$_smarty_tpl->tpl_vars['proto']->value];?>

    </li>

    <li class="pull-right">
        <div class="btn-toolbar" style="display: inline; margin-top: -12px;">
            <div class="btn-group" id="peer-btn-group">
                <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" id="peer-dd" >
                    <span id="peer-dd-text">All Peerings</span>
                    <span class="caret"></span>
                </a>
                <ul id="peer-dd-ul" class="dropdown-menu">
                    <li> <a id="peer-filter-all" >All Peerings</a> </li>
                    <li> <a id="peer-filter-bi">Bilateral Peerings</a> </li>
                    <li> <a id="peer-filter-rs">Route Server Peerings</a> </li>
                </ul>
            </div>
            <?php if (count($_smarty_tpl->tpl_vars['vlans']->value)>1) {?>
                <div class="btn-group">
                    <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php echo $_smarty_tpl->tpl_vars['vlans']->value[$_smarty_tpl->tpl_vars['vid']->value];?>

                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php  $_smarty_tpl->tpl_vars['vname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vname']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vlans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vname']->key => $_smarty_tpl->tpl_vars['vname']->value) {
$_smarty_tpl->tpl_vars['vname']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['vname']->key;
?>
                            <li> <a href="<?php echo smarty_function_genUrl(array('controller'=>"peering-matrix",'action'=>"index",'vid'=>$_smarty_tpl->tpl_vars['id']->value,'proto'=>$_smarty_tpl->tpl_vars['proto']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['vname']->value;?>
</a> </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php }?>
            <div class="btn-group">
                <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php echo $_smarty_tpl->tpl_vars['protos']->value[$_smarty_tpl->tpl_vars['proto']->value];?>

                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['protos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                        <li> <a href="<?php echo smarty_function_genUrl(array('controller'=>"peering-matrix",'action'=>"index",'vid'=>$_smarty_tpl->tpl_vars['vid']->value,'proto'=>$_smarty_tpl->tpl_vars['id']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a> </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="btn-group">
                <button id="btn-zoom-out" class="btn btn-mini"><i class="icon-zoom-out"></i></button>
                <button id="btn-zoom-in"  class="btn btn-mini"><i class="icon-zoom-in"></i></button>
            </div>
        </div>
    </li>
</ul>

<div class="row-fluid">



<table id="table-pm" class="pm-table">

<colgroup id="cg-name"></colgroup>
<colgroup id="cg-asn"></colgroup>
<?php  $_smarty_tpl->tpl_vars['peers'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['peers']->_loop = false;
 $_smarty_tpl->tpl_vars['x_as'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['custs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['peers']->key => $_smarty_tpl->tpl_vars['peers']->value) {
$_smarty_tpl->tpl_vars['peers']->_loop = true;
 $_smarty_tpl->tpl_vars['x_as']->value = $_smarty_tpl->tpl_vars['peers']->key;
?>
    <colgroup id="cg-as-<?php echo $_smarty_tpl->tpl_vars['x_as']->value;?>
"></colgroup>
<?php } ?>

<thead>

    <tr>

        <th id="th-name" class="name zoom3"></th>
        <th id="th-asn" class="asn zoom3"></th>

        <?php  $_smarty_tpl->tpl_vars['peers'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['peers']->_loop = false;
 $_smarty_tpl->tpl_vars['x_as'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['custs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['peers']->key => $_smarty_tpl->tpl_vars['peers']->value) {
$_smarty_tpl->tpl_vars['peers']->_loop = true;
 $_smarty_tpl->tpl_vars['x_as']->value = $_smarty_tpl->tpl_vars['peers']->key;
?>

            <th id="th-as-<?php echo $_smarty_tpl->tpl_vars['x_as']->value;?>
" class="zoom3 asn">
                <?php $_smarty_tpl->tpl_vars['asn'] = new Smarty_variable(sprintf($_smarty_tpl->tpl_vars['asnStringFormat']->value,$_smarty_tpl->tpl_vars['x_as']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['len'] = new Smarty_variable(strlen($_smarty_tpl->tpl_vars['asn']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['pos'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['pos']->step = 1;$_smarty_tpl->tpl_vars['pos']->total = (int) ceil(($_smarty_tpl->tpl_vars['pos']->step > 0 ? $_smarty_tpl->tpl_vars['len']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['len']->value)+1)/abs($_smarty_tpl->tpl_vars['pos']->step));
if ($_smarty_tpl->tpl_vars['pos']->total > 0) {
for ($_smarty_tpl->tpl_vars['pos']->value = 0, $_smarty_tpl->tpl_vars['pos']->iteration = 1;$_smarty_tpl->tpl_vars['pos']->iteration <= $_smarty_tpl->tpl_vars['pos']->total;$_smarty_tpl->tpl_vars['pos']->value += $_smarty_tpl->tpl_vars['pos']->step, $_smarty_tpl->tpl_vars['pos']->iteration++) {
$_smarty_tpl->tpl_vars['pos']->first = $_smarty_tpl->tpl_vars['pos']->iteration == 1;$_smarty_tpl->tpl_vars['pos']->last = $_smarty_tpl->tpl_vars['pos']->iteration == $_smarty_tpl->tpl_vars['pos']->total;?>
                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['asn']->value,1,'');?>
<?php if ($_smarty_tpl->tpl_vars['pos']->value<$_smarty_tpl->tpl_vars['len']->value) {?><br /><?php }?>
                    <?php $_smarty_tpl->tpl_vars['asn'] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['asn']->value,1), null, 0);?>
                <?php }} ?>
            </th>

        <?php } ?>

    </tr>

</thead>

<tbody id="tbody-pm" class="zoom3">

<?php $_smarty_tpl->tpl_vars['outer'] = new Smarty_variable(0, null, 0);?>

<?php  $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->_loop = false;
 $_smarty_tpl->tpl_vars['x_as'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['custs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['x']->key => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
 $_smarty_tpl->tpl_vars['x_as']->value = $_smarty_tpl->tpl_vars['x']->key;
?>


	<tr id="tr-name-<?php echo $_smarty_tpl->tpl_vars['x_as']->value;?>
">

	    <td id="td-name-<?php echo $_smarty_tpl->tpl_vars['x_as']->value;?>
" class="name zoom3"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['x']->value['name']," ","&nbsp;");?>
</td>
	    <td id="td-asn-<?php echo $_smarty_tpl->tpl_vars['x_as']->value;?>
" class="asn zoom3"><?php echo $_smarty_tpl->tpl_vars['x']->value['autsys'];?>
</td>

        <?php $_smarty_tpl->tpl_vars['inner'] = new Smarty_variable(0, null, 0);?>

	    <?php  $_smarty_tpl->tpl_vars['y'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['y']->_loop = false;
 $_smarty_tpl->tpl_vars['y_as'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['custs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['y']->key => $_smarty_tpl->tpl_vars['y']->value) {
$_smarty_tpl->tpl_vars['y']->_loop = true;
 $_smarty_tpl->tpl_vars['y_as']->value = $_smarty_tpl->tpl_vars['y']->key;
?>

		    <td id="td-<?php echo $_smarty_tpl->tpl_vars['x_as']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['y_as']->value;?>
" class="col-yasn-<?php echo $_smarty_tpl->tpl_vars['y_as']->value;?>
 peering
		        <?php if ($_smarty_tpl->tpl_vars['y']->value['autsys']!=$_smarty_tpl->tpl_vars['x']->value['autsys']) {?>
    		        <?php if (isset($_smarty_tpl->tpl_vars['sessions']->value[$_smarty_tpl->tpl_vars['x_as']->value]['peers'][$_smarty_tpl->tpl_vars['y_as']->value])&&$_smarty_tpl->tpl_vars['x']->value['rsclient']&&$_smarty_tpl->tpl_vars['y']->value['rsclient']) {?>
    		             peered bilateral-rs
		            <?php } elseif (isset($_smarty_tpl->tpl_vars['sessions']->value[$_smarty_tpl->tpl_vars['x_as']->value]['peers'][$_smarty_tpl->tpl_vars['y_as']->value])) {?>
    		             peered bilateral-only
    		        <?php } elseif ($_smarty_tpl->tpl_vars['x']->value['rsclient']&&$_smarty_tpl->tpl_vars['y']->value['rsclient']) {?>
    		             peered rs-only
    	            <?php } else { ?>
    		            not-peered
    		        <?php }?>
		        <?php }?>
		        zoom3">
		    </td>

        <?php $_smarty_tpl->tpl_vars['inner'] = new Smarty_variable($_smarty_tpl->tpl_vars['inner']->value+1, null, 0);?>

        
        <?php if ($_smarty_tpl->tpl_vars['outer']->value==count($_smarty_tpl->tpl_vars['custs']->value)&&$_smarty_tpl->tpl_vars['inner']->value==count($_smarty_tpl->tpl_vars['custs']->value)) {?>
            <td></td>
        <?php }?>
	    <?php } ?>

	</tr>

<?php $_smarty_tpl->tpl_vars['outer'] = new Smarty_variable($_smarty_tpl->tpl_vars['outer']->value+1, null, 0);?>

<?php } ?>

</tbody>

</table>

<div class="row-fluid" style="margin-top: 40px;">

    <div class="span2">&nbsp;</div>

    <div class="span8">

        <div class="well">

            <h3>Notes on the Peering Matrix</h3>

            <ul>
                <li>
                    Clicking the AS number in the table header will isolate that column. Clicking individual
                    cells in the body will freeze the dynamic highlighting.
                </li>
                <li>
                    Where a <?php echo $_smarty_tpl->tpl_vars['options']->value['identity']['orgname'];?>
 member is not listed on this peering matrix, it is because they are
                    currently not actively peering at <?php echo $_smarty_tpl->tpl_vars['options']->value['identity']['orgname'];?>
, or because they have opted out of presenting
                    their peering information in this database.
                </li>
                <li>
                    This peering matrix is based on sflow traffic accounting data from the <?php echo $_smarty_tpl->tpl_vars['options']->value['identity']['orgname'];?>
 peering
                    LANs and route server BGP peerings.
                </li>
                <li>
                    This peering matrix only detects if there is bidirectional TCP flow between routers at
                    <?php echo $_smarty_tpl->tpl_vars['options']->value['identity']['orgname'];?>
. It cannot detect whether there are actually prefixes swapped between routers.
                </li>
            </ul>

        </div>

    </div>

    <div class="span2">&nbsp;</div>

</div>

<?php if (isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value->getPrivs()==3) {?>
</div>
<?php }?>

<script type="text/javascript">
<?php echo smarty_function_tmplinclude(array('file'=>"peering-matrix/index.js"),$_smarty_tpl);?>

</script>

<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>

<?php }} ?>
