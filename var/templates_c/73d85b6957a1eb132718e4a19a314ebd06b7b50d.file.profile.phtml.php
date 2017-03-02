<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:52:52
         compiled from "/opt/ixpmanager/application/views/profile/forms/profile.phtml" */ ?>
<?php /*%%SmartyHeaderCode:85803602958b7a524985632-90316376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73d85b6957a1eb132718e4a19a314ebd06b7b50d' => 
    array (
      0 => '/opt/ixpmanager/application/views/profile/forms/profile.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85803602958b7a524985632-90316376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'element' => 0,
    'groups' => 0,
    'options' => 0,
    'contactGroups' => 0,
    'role_line' => 0,
    'role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7a5249b5632_25392556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7a5249b5632_25392556')) {function content_58b7a5249b5632_25392556($_smarty_tpl) {?><form class="form-horizontal" enctype="application/x-www-form-urlencoded"
        accept-charset="UTF-8" method="post" horizontal="1"
        action="<?php echo $_smarty_tpl->tpl_vars['element']->value->getAction();?>
">

            <?php echo $_smarty_tpl->tpl_vars['element']->value->name;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->position;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->email;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->phone;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->mobile;?>

           
            <?php if (isset($_smarty_tpl->tpl_vars['groups']->value)&&isset($_smarty_tpl->tpl_vars['groups']->value['ROLE'])&&isset($_smarty_tpl->tpl_vars['options']->value['contact']['group']['types']['ROLE'])&&isset($_smarty_tpl->tpl_vars['contactGroups']->value['ROLE'])) {?>
                <?php $_smarty_tpl->tpl_vars['role_line'] = new Smarty_variable(4, null, 0);?>
                <div class="control-group">
                    <label class="control-label" for="role">Role</label>
                    <div class="controls">
                        <?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value['ROLE']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['role']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->_loop = true;
 $_smarty_tpl->tpl_vars['role']->index++;
?>
                            <?php if ($_smarty_tpl->tpl_vars['role']->index%$_smarty_tpl->tpl_vars['role_line']->value==0&&$_smarty_tpl->tpl_vars['role']->index!=0) {?>
                                <br />
                            <?php }?>
                            <label class="checkbox inline" style="width: 55px;" >
                                <input type="checkbox" disabled="disabled" name="role[<?php echo $_smarty_tpl->tpl_vars['role']->index;?>
]" <?php if (isset($_smarty_tpl->tpl_vars['contactGroups']->value)&&isset($_smarty_tpl->tpl_vars['contactGroups']->value['ROLE'][$_smarty_tpl->tpl_vars['role']->value['id']])) {?>checked="checked"<?php }?>
                                    id="role[<?php echo $_smarty_tpl->tpl_vars['role']->index;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['role']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['role']->value['name'];?>

                            </label>
                        <?php } ?>
                    </div>
                </div>
            <?php }?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->current_password;?>

    <div class="form-actions">
        <?php echo $_smarty_tpl->tpl_vars['element']->value->submit;?>

    </div>

    
</form>
<?php }} ?>
