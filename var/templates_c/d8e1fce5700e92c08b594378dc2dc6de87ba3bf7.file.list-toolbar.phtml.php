<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 17:50:33
         compiled from "/opt/ixpmanager/application/views/switch/list-toolbar.phtml" */ ?>
<?php /*%%SmartyHeaderCode:168292559058b7eae9465fc0-33875091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8e1fce5700e92c08b594378dc2dc6de87ba3bf7' => 
    array (
      0 => '/opt/ixpmanager/application/views/switch/list-toolbar.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168292559058b7eae9465fc0-33875091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stype' => 0,
    'switchTypes' => 0,
    'action' => 0,
    'stypeid' => 0,
    'stypename' => 0,
    'activeOnly' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7eae9499d77_24327296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7eae9499d77_24327296')) {function content_58b7eae9499d77_24327296($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><li class="pull-right"  style="margin-top: -6px;">
<div class="btn-toolbar" style="display: inline;">

    <div class="btn-group">
        <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
            <?php if (isset($_smarty_tpl->tpl_vars['stype']->value)&&$_smarty_tpl->tpl_vars['stype']->value) {?>Type: <?php echo $_smarty_tpl->tpl_vars['switchTypes']->value[$_smarty_tpl->tpl_vars['stype']->value];?>
<?php } else { ?>Limit to type...<?php }?>
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu pull-right">
            <li <?php if (!$_smarty_tpl->tpl_vars['stype']->value) {?>class="active"<?php }?>> 
                <a href="<?php echo smarty_function_genUrl(array('controller'=>'switch','action'=>$_smarty_tpl->tpl_vars['action']->value,'stype'=>0),$_smarty_tpl);?>
">All types</a> </li>
            <li class="divider"></li>
            <?php  $_smarty_tpl->tpl_vars['stypename'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stypename']->_loop = false;
 $_smarty_tpl->tpl_vars['stypeid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['switchTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stypename']->key => $_smarty_tpl->tpl_vars['stypename']->value) {
$_smarty_tpl->tpl_vars['stypename']->_loop = true;
 $_smarty_tpl->tpl_vars['stypeid']->value = $_smarty_tpl->tpl_vars['stypename']->key;
?>
                <li <?php if ($_smarty_tpl->tpl_vars['stype']->value==$_smarty_tpl->tpl_vars['stypeid']->value) {?>class="active"<?php }?>> <a href="<?php echo smarty_function_genUrl(array('controller'=>'switch','action'=>$_smarty_tpl->tpl_vars['action']->value,'stype'=>$_smarty_tpl->tpl_vars['stypeid']->value),$_smarty_tpl);?>
">
                    <?php echo $_smarty_tpl->tpl_vars['stypename']->value;?>
</a> </li>
            <?php } ?>
        </ul>
    </div>

    <div class="btn-group">
        <?php if ($_smarty_tpl->tpl_vars['activeOnly']->value) {?>
            <a class="btn btn-mini pull-right" href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>$_smarty_tpl->tpl_vars['action']->value,'activeOnly'=>0),$_smarty_tpl);?>
">
                Include Inactive
            </a>
        <?php } else { ?>
            <a class="btn btn-mini pull-right" href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>$_smarty_tpl->tpl_vars['action']->value,'activeOnly'=>1),$_smarty_tpl);?>
">
                Show Active
            </a>
        <?php }?>
    </div>

    <div class="btn-group">
        <?php if ($_smarty_tpl->tpl_vars['action']->value=='os-view') {?>
            <a class="btn btn-mini pull-right" href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>"list"),$_smarty_tpl);?>
">Standard View</a>
        <?php } else { ?>
            <a class="btn btn-mini pull-right" href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>"os-view"),$_smarty_tpl);?>
">OS View</a>
        <?php }?>
    </div>

    <div class="btn-group">
        <a class="btn btn-mini pull-right"
            href="https://github.com/inex/IXP-Manager/wiki/Switch-and-Switch-Port-Management"
            target="ixp-help">Help</a>
    </div>

    
    <div class="btn-group">
        <a class="btn btn-mini pull-right" href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>"add-by-snmp"),$_smarty_tpl);?>
"><i class="icon-plus"></i></a>
    </div>
</div>
</li>
<?php }} ?>
