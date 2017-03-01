<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:39:44
         compiled from "/opt/ixpmanager/application/views/ipv4-address/list-toolbar.phtml" */ ?>
<?php /*%%SmartyHeaderCode:28732319258b715704a7c21-43333895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cc3f761a8f090caa9febe6be689a5a566708041' => 
    array (
      0 => '/opt/ixpmanager/application/views/ipv4-address/list-toolbar.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28732319258b715704a7c21-43333895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'multiIXP' => 0,
    'ixp' => 0,
    'ixpNames' => 0,
    'controller' => 0,
    'action' => 0,
    'xid' => 0,
    'xname' => 0,
    'vid' => 0,
    'vlans' => 0,
    'vname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b715704d4d51_08125302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b715704d4d51_08125302')) {function content_58b715704d4d51_08125302($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><li class="pull-right"  style="margin-top: -6px;"> 
<div class="btn-toolbar" style="display: inline;">

    <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
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
    <?php }?>

    <div class="btn-group" id="vlan-btn-group">
        <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" id="vlan-dd">
            <span id="vlan-dd-text"><?php if (isset($_smarty_tpl->tpl_vars['vid']->value)&&$_smarty_tpl->tpl_vars['vid']->value) {?><?php echo $_smarty_tpl->tpl_vars['vlans']->value[$_smarty_tpl->tpl_vars['vid']->value];?>
<?php } else { ?>Limit to VLAN...<?php }?></span>
            <span class="caret"></span>
        </a>
        <ul id="vlan-dd-ul" class="dropdown-menu pull-right">
            <?php  $_smarty_tpl->tpl_vars['vname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vname']->_loop = false;
 $_smarty_tpl->tpl_vars['vid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vlans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vname']->key => $_smarty_tpl->tpl_vars['vname']->value) {
$_smarty_tpl->tpl_vars['vname']->_loop = true;
 $_smarty_tpl->tpl_vars['vid']->value = $_smarty_tpl->tpl_vars['vname']->key;
?>
                <li> <a id="vlan-<?php echo $_smarty_tpl->tpl_vars['vid']->value;?>
" href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'list','vlan'=>$_smarty_tpl->tpl_vars['vid']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['vname']->value;?>
</a> </li>
            <?php } ?>
        </ul>
    </div>

    <div class="btn-group">
        <a class="btn btn-mini pull-right" href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>"add"),$_smarty_tpl);?>
"><i class="icon-plus"></i></a>
    </div>
</div>
</li>


<?php }} ?>
