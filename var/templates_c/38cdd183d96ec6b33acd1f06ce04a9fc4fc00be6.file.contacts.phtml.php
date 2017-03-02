<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 09:06:46
         compiled from "/opt/ixpmanager/application/views/customer/overview-tabs/contacts.phtml" */ ?>
<?php /*%%SmartyHeaderCode:73175651658b77026b25f29-07581759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38cdd183d96ec6b33acd1f06ce04a9fc4fc00be6' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/overview-tabs/contacts.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73175651658b77026b25f29-07581759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cust' => 0,
    'c' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b77026b689f4_19764751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b77026b689f4_19764751')) {function content_58b77026b689f4_19764751($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
?>
<?php if (count($_smarty_tpl->tpl_vars['cust']->value->getContacts())) {?>

    <table class="table">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role(s)</th>
            <th><a class="btn btn-mini" href="<?php echo smarty_function_genUrl(array('controller'=>'contact','action'=>"add",'custid'=>$_smarty_tpl->tpl_vars['cust']->value->getId(),'cid'=>$_smarty_tpl->tpl_vars['cust']->value->getId()),$_smarty_tpl);?>
"><i class="icon-plus"></i> Add new...</a></th>        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cust']->value->getContacts(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->getName();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->getEmail();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->getPhone();?>
<?php if ($_smarty_tpl->tpl_vars['c']->value->getPhone()&&$_smarty_tpl->tpl_vars['c']->value->getMobile()) {?> / <?php }?><?php echo $_smarty_tpl->tpl_vars['c']->value->getMobile();?>
</td>
                    <td>
                        <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['c']->value->getGroups(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['group']->value->getType()=='ROLE') {?>
                                <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['group']->value->getName();?>
</span>
                            <?php }?>
                        <?php } ?>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-mini" href="<?php echo smarty_function_genUrl(array('controller'=>'contact','action'=>"edit",'id'=>$_smarty_tpl->tpl_vars['c']->value->getId(),'cid'=>$_smarty_tpl->tpl_vars['cust']->value->getId()),$_smarty_tpl);?>
"><i class="icon-pencil"></i></a>
                            <a class="btn btn-mini" id="cont-list-delete-<?php echo $_smarty_tpl->tpl_vars['c']->value->getId();?>
" data-hasuser="<?php if ($_smarty_tpl->tpl_vars['c']->value->getUser()) {?>1<?php } else { ?>0<?php }?>"
                                    href="<?php echo smarty_function_genUrl(array('controller'=>'contact','action'=>"delete",'id'=>$_smarty_tpl->tpl_vars['c']->value->getId()),$_smarty_tpl);?>
">
                                <i class="icon-trash"></i>
                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['c']->value->getUser()) {?>
                                <a class="btn btn-mini"
                                    <?php if ($_smarty_tpl->tpl_vars['c']->value->getUser()->getDisabled()) {?>disabled="disabled" onclick="return( false );"<?php }?>
                                    href="<?php echo smarty_function_genUrl(array('controller'=>'auth','action'=>"switch-user",'id'=>$_smarty_tpl->tpl_vars['c']->value->getUser()->getId()),$_smarty_tpl);?>
" rel="tooltip" title="Log in as this user...">
                                        <i class="icon-user"></i>
                                </a>
                            <?php }?>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script><?php echo smarty_function_tmplinclude(array('file'=>"customer/js/overview/contacts.js"),$_smarty_tpl);?>
</script>
<?php } else { ?>

    <p style="padding-left: 40px;">
        No contacts found.
        <a href="<?php echo smarty_function_genUrl(array('controller'=>'contact','action'=>"add",'custid'=>$_smarty_tpl->tpl_vars['cust']->value->getId()),$_smarty_tpl);?>
">Add a new contact...</a>
    </p>

<?php }?>

<?php }} ?>
