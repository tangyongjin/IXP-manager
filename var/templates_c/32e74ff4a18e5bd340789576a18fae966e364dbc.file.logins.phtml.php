<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 09:06:46
         compiled from "/opt/ixpmanager/application/views/customer/overview-tabs/logins.phtml" */ ?>
<?php /*%%SmartyHeaderCode:56963905958b77026b6c4f0-79064330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32e74ff4a18e5bd340789576a18fae966e364dbc' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/overview-tabs/logins.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56963905958b77026b6c4f0-79064330',
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
  'unifunc' => 'content_58b77026b9b915_79037350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b77026b9b915_79037350')) {function content_58b77026b9b915_79037350($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_modifier_date_format')) include '/opt/ixpmanager/application/../vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
?>
<?php if (count($_smarty_tpl->tpl_vars['cust']->value->getUsers())) {?>

    <table class="table">
        <thead>
            <th>Username</th>
            <th>Email</th>
            <th>Last Login</th>
            <th>Last Login From</th>
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
                    <td>
                        <a href="<?php echo smarty_function_genUrl(array('controller'=>"contact",'action'=>"edit",'id'=>$_smarty_tpl->tpl_vars['u']->value->getContact()->getId(),'cid'=>$_smarty_tpl->tpl_vars['u']->value->getCustomer()->getId()),$_smarty_tpl);?>
">
                            <?php echo $_smarty_tpl->tpl_vars['u']->value->getUsername();?>

                        </a>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->getEmail();?>
</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['u']->value->getPreference('auth.last_login_at')) {?>
                            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['u']->value->getPreference('auth.last_login_at'),"%Y-%m-%d %H:%M:%S");?>

                            <a class="btn btn-mini have-tooltip" title="History" href="<?php echo smarty_function_genUrl(array('controller'=>'login-history','action'=>"list",'uid'=>$_smarty_tpl->tpl_vars['u']->value->getId(),'limit'=>1),$_smarty_tpl);?>
">
                                <i class="icon-time"></i>
                            </a>
                        <?php } else { ?>
                            <em>Never</em>
                        <?php }?>
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['u']->value->getPreference('auth.last_login_from')) {?>
                            <?php echo $_smarty_tpl->tpl_vars['u']->value->getPreference('auth.last_login_from');?>

                        <?php }?>
                    </td>
                    <td>
                        <?php if (count($_smarty_tpl->tpl_vars['u']->value->getLastLogins())>0) {?>
                            <div class="btn-group">
                                <a class="btn btn-mini have-tooltip" title="History" href="<?php echo smarty_function_genUrl(array('controller'=>'login-history','action'=>"list",'uid'=>$_smarty_tpl->tpl_vars['u']->value->getId()),$_smarty_tpl);?>
"><i class="icon-time"></i></a>
                            </div>
                        <?php }?>
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
