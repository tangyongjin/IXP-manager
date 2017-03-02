<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:22:52
         compiled from "/opt/ixpmanager/application/views/statistics/snippets/menu-infra-dropdown.phtml" */ ?>
<?php /*%%SmartyHeaderCode:146097251058b79e1c3458c3-62149182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca6612a8df62a31694f59b7facc9358ee3d3416a' => 
    array (
      0 => '/opt/ixpmanager/application/views/statistics/snippets/menu-infra-dropdown.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146097251058b79e1c3458c3-62149182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infraid' => 0,
    'infra' => 0,
    'controller' => 0,
    'action' => 0,
    'ixp' => 0,
    'inf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b79e1c35ea76_39121185',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b79e1c35ea76_39121185')) {function content_58b79e1c35ea76_39121185($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><div class="btn-group">
    <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" id="vlan-dd">
        <span id="vlan-dd-text">
            <?php if ($_smarty_tpl->tpl_vars['infraid']->value=='aggregate') {?>
                Aggregate Traffic
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['infra']->value->getName();?>

            <?php }?>
        </span>
        <span class="caret"></span>
    </a>
    <ul id="vlan-dd-ul" class="dropdown-menu pull-right">
        <li>
            <a id="vlan-aggregate" href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>$_smarty_tpl->tpl_vars['action']->value,'ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId()),$_smarty_tpl);?>
">Aggregate Traffic</a>
        </li>
        <li class="divider"></li>
        <?php  $_smarty_tpl->tpl_vars['inf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ixp']->value->getInfrastructures(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->key => $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->_loop = true;
?>
            <li>
                <a id="vlan-<?php echo $_smarty_tpl->tpl_vars['inf']->value->getId();?>
" href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>$_smarty_tpl->tpl_vars['action']->value,'ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId(),'infra'=>$_smarty_tpl->tpl_vars['inf']->value->getId()),$_smarty_tpl);?>
">
                    <?php echo $_smarty_tpl->tpl_vars['inf']->value->getName();?>

                </a>
            </li>
        <?php } ?>
    </ul>
</div>
<?php }} ?>
