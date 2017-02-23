<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-23 12:45:12
         compiled from "/opt/ixpmanager/application/views/customer/overview-tabs/users.phtml" */ ?>
<?php /*%%SmartyHeaderCode:48803763558ae68d8d2b695-26392062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f8566ba088c7a3cd8383da713100b3989d9a72b' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/overview-tabs/users.phtml',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48803763558ae68d8d2b695-26392062',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cust' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58ae68d8d594d0_27870905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ae68d8d594d0_27870905')) {function content_58ae68d8d594d0_27870905($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/ixpmanager/application/../vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
?>
<?php if (count($_smarty_tpl->tpl_vars['cust']->value->getUsers())) {?>

    <table class="table">
        <thead>
            <th>Username</th>
            <th>Type</th>
            <th>Email</th>
            <th>Last Login</th>
            <th>
                
            </th>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cust']->value->getUsers(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->getUsername();?>
</td>
                    <td><?php echo \Entities\User::$PRIVILEGES[$_smarty_tpl->tpl_vars['u']->value->getPrivs()];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->getEmail();?>
</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['u']->value->getPreference('auth.last_login_at')) {?>
                            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['u']->value->getPreference('auth.last_login_at'),"%Y-%m-%d %H:%M:%S");?>

                        <?php } else { ?>
                            <em>Never</em>
                        <?php }?>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-mini" href="<?php echo smarty_function_genUrl(array('controller'=>'contact','action'=>"edit",'uid'=>$_smarty_tpl->tpl_vars['u']->value->getId(),'cid'=>$_smarty_tpl->tpl_vars['cust']->value->getId()),$_smarty_tpl);?>
"><i class="icon-pencil"></i></a>
                            <a class="btn btn-mini" id="usr-list-delete-<?php echo $_smarty_tpl->tpl_vars['u']->value->getId();?>
"
                                    href="<?php echo smarty_function_genUrl(array('controller'=>'contact','action'=>"delete",'id'=>$_smarty_tpl->tpl_vars['u']->value->getContact()->getId()),$_smarty_tpl);?>
">
                                <i class="icon-trash"></i>
                            </a>
                            <a class="btn btn-mini"
                                <?php if ($_smarty_tpl->tpl_vars['u']->value->getDisabled()) {?>disabled="disabled" onclick="return( false );"<?php }?>
                                href="<?php echo smarty_function_genUrl(array('controller'=>'auth','action'=>"switch-user",'id'=>$_smarty_tpl->tpl_vars['u']->value->getId()),$_smarty_tpl);?>
" rel="tooltip" title="Log in as this user...">
                                    <i class="icon-user"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script><?php echo smarty_function_tmplinclude(array('file'=>"customer/js/overview/users.js"),$_smarty_tpl);?>
</script>
<?php } else { ?>

    <p style="padding-left: 40px;">
        No users found.<br><br>
        Users can be added by creating / editing contacts and giving the contact login privileges.
    </p>

<?php }?>
<?php }} ?>
