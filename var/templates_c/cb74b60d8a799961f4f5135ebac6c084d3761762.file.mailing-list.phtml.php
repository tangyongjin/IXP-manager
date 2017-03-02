<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:52:52
         compiled from "/opt/ixpmanager/application/views/profile/mailing-list.phtml" */ ?>
<?php /*%%SmartyHeaderCode:117326554358b7a524957a36-83493647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb74b60d8a799961f4f5135ebac6c084d3761762' => 
    array (
      0 => '/opt/ixpmanager/application/views/profile/mailing-list.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117326554358b7a524957a36-83493647',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'options' => 0,
    'user' => 0,
    'ml' => 0,
    'name' => 0,
    'mlsubs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7a524981dd0_65110029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7a524981dd0_65110029')) {function content_58b7a524981dd0_65110029($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_mailto')) include '/opt/ixpmanager/application/../vendor/smarty/smarty/libs/plugins/function.mailto.php';
?><?php if (isset($_smarty_tpl->tpl_vars['options']->value['mailinglist']['enabled'])&&$_smarty_tpl->tpl_vars['options']->value['mailinglist']['enabled']) {?>
    <h3>Your Mailing List Subscriptions</h3>
    <p>
        <br />
        <?php echo $_smarty_tpl->tpl_vars['options']->value['identity']['orgname'];?>
 operates the below mailing lists to help us interact with our
        members and for our members to interact with each other.
    </p>
    <p>
        There are also links below to the list archives - for which your username is
        <?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
 and your password is the same as your IXP Manager password.
    </p>
    <p>
        The below are your subscriptions for <strong><?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
</strong>.
    </p>
    <br />
    <form action="<?php echo smarty_function_genUrl(array('controller'=>"profile",'action'=>"update-mailing-lists"),$_smarty_tpl);?>
" method="post" class="form">
    <fieldset>

        <?php  $_smarty_tpl->tpl_vars['ml'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ml']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value['mailinglists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ml']->key => $_smarty_tpl->tpl_vars['ml']->value) {
$_smarty_tpl->tpl_vars['ml']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['ml']->key;
?>

        <?php if ($_smarty_tpl->tpl_vars['user']->value->getCustomer()->getType()!=\Entities\Customer::TYPE_ASSOCIATE||(isset($_smarty_tpl->tpl_vars['ml']->value['associates'])&&$_smarty_tpl->tpl_vars['ml']->value['associates'])) {?>

                <div class="control-group">
                    <label class="checkbox">
                        <input type="checkbox" name="ml_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['mlsubs']->value[$_smarty_tpl->tpl_vars['name']->value]) {?>checked="checked"<?php }?>>
                            <strong><?php echo $_smarty_tpl->tpl_vars['ml']->value['name'];?>
</strong> - <?php echo $_smarty_tpl->tpl_vars['ml']->value['desc'];?>

                            (<?php if ($_smarty_tpl->tpl_vars['ml']->value['email']) {?><?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['ml']->value['email']),$_smarty_tpl);?>
 - <?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['ml']->value['archive'];?>
">archives</a>)
                    </label>
                </div>
            <?php }?>

        <?php } ?>
    
        <div class="form-actions">
            <input type="submit" class="btn btn-primary" value="Update My Subscriptions" id="submit" name="submit">
        </div>
    
    </fieldset>
    </form>
<?php }?>
<?php }} ?>
