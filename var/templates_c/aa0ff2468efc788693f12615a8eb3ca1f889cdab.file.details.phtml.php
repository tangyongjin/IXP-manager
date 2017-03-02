<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:56:20
         compiled from "/opt/ixpmanager/application/views/customer/details.phtml" */ ?>
<?php /*%%SmartyHeaderCode:83430531758b7a5f425bb44-75317252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa0ff2468efc788693f12615a8eb3ca1f889cdab' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/details.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83430531758b7a5f425bb44-75317252',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'multiIXP' => 0,
    'ixp' => 0,
    'ixpNames' => 0,
    'controller' => 0,
    'action' => 0,
    'xid' => 0,
    'xname' => 0,
    'details' => 0,
    'md' => 0,
    'hasIdentity' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7a5f42b6244_58377629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7a5f42b6244_58377629')) {function content_58b7a5f42b6244_58377629($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
if (!is_callable('smarty_modifier_asnumber')) include '/opt/ixpmanager/application/../library/inex-smarty/functions/modifier.asnumber.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml",'pageTitle'=>"IXP Manager :: Member Dashboard"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==3) {?>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>"customer",'action'=>"list"),$_smarty_tpl);?>
">Customers</a> <span class="divider">/</span>
        </li>
        <li class="active">
            Details
        </li>

        <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
            <li class="pull-right" style="margin-top: -12px;">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
                            <?php if (isset($_smarty_tpl->tpl_vars['ixp']->value)) {?><?php echo $_smarty_tpl->tpl_vars['ixp']->value->getName();?>
<?php } else { ?>Limit to IXP...<?php }?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <?php  $_smarty_tpl->tpl_vars['xname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xname']->_loop = false;
 $_smarty_tpl->tpl_vars['xid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ixpNames']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xname']->key => $_smarty_tpl->tpl_vars['xname']->value) {
$_smarty_tpl->tpl_vars['xname']->_loop = true;
 $_smarty_tpl->tpl_vars['xid']->value = $_smarty_tpl->tpl_vars['xname']->key;
?>
                                <li> <a href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>$_smarty_tpl->tpl_vars['action']->value,'ixp'=>$_smarty_tpl->tpl_vars['xid']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['xname']->value;?>
</a> </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </li>
        <?php }?>
    </ul>
    
    <div>
<?php } else { ?>
    <div class="page-content">
    
        <div class="page-header">

            <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value&&isset($_smarty_tpl->tpl_vars['ixpNames']->value)&&count($_smarty_tpl->tpl_vars['ixpNames']->value)>1) {?>
                <div class="pull-right">
                    <div class="btn-toolbar">
                        <div class="btn-group">
                            <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
                                <?php if (isset($_smarty_tpl->tpl_vars['ixp']->value)) {?><?php echo $_smarty_tpl->tpl_vars['ixp']->value->getName();?>
<?php } else { ?>Limit to IXP...<?php }?>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <?php  $_smarty_tpl->tpl_vars['xname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xname']->_loop = false;
 $_smarty_tpl->tpl_vars['xid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ixpNames']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xname']->key => $_smarty_tpl->tpl_vars['xname']->value) {
$_smarty_tpl->tpl_vars['xname']->_loop = true;
 $_smarty_tpl->tpl_vars['xid']->value = $_smarty_tpl->tpl_vars['xname']->key;
?>
                                    <li> <a href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>$_smarty_tpl->tpl_vars['action']->value,'ixp'=>$_smarty_tpl->tpl_vars['xid']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['xname']->value;?>
</a> </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php }?>

            <h1>Member Details</h1>
        </div>
        
<?php }?>
    
<?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>


<table id="ixpDataTable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Member</th>
            <th>Peering Email</th>
            <th>ASN</th>
            <th>NOC Phone</th>
            <th>NOC Hours</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

    <?php  $_smarty_tpl->tpl_vars['md'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['md']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['details']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['md']->key => $_smarty_tpl->tpl_vars['md']->value) {
$_smarty_tpl->tpl_vars['md']->_loop = true;
?>

        <tr>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['md']->value['corpwww'];?>
"><?php echo $_smarty_tpl->tpl_vars['md']->value['name'];?>
</a></td>
            <td><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['md']->value['peeringemail'];?>
"><?php echo $_smarty_tpl->tpl_vars['md']->value['peeringemail'];?>
</a></td>
            <td><?php if ($_smarty_tpl->tpl_vars['md']->value['type']==\Entities\Customer::TYPE_ASSOCIATE) {?><em>(associate)</em><?php } else { ?><?php echo smarty_modifier_asnumber($_smarty_tpl->tpl_vars['md']->value['autsys']);?>
<?php }?></td>
            <td><?php echo $_smarty_tpl->tpl_vars['md']->value['nocphone'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['md']->value['nochours'];?>
</td>
            <td><a href="<?php echo smarty_function_genUrl(array('controller'=>'customer','action'=>"detail",'id'=>$_smarty_tpl->tpl_vars['md']->value['id']),$_smarty_tpl);?>
">view</a></td>
        </tr>

    <?php } ?>

    </tbody>
</table>

<script>
$(document).ready(function() {

    oTable = $('#ixpDataTable').dataTable({
        <?php if ($_smarty_tpl->tpl_vars['hasIdentity']->value&&$_smarty_tpl->tpl_vars['user']->value->getPrivs()==3) {?>
            "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
        <?php } else { ?>
            "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
        <?php }?>
        "sPaginationType": "bootstrap",
    	"iDisplayLength": 100
    });

});
</script>

</div>

<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>

<?php }} ?>
