<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-03 11:40:52
         compiled from "/opt/ixpmanager/application/views/virtual-interface/add-postamble.phtml" */ ?>
<?php /*%%SmartyHeaderCode:148998921658b8e5c433a0f9-49897418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '964f093a41afe87d8d404955eadd3fb29edd977c' => 
    array (
      0 => '/opt/ixpmanager/application/views/virtual-interface/add-postamble.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148998921658b8e5c433a0f9-49897418',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isEdit' => 0,
    'object' => 0,
    'physInts' => 0,
    'int' => 0,
    'controller' => 0,
    'action' => 0,
    'vlanInts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b8e5c43c93c7_16330472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8e5c43c93c7_16330472')) {function content_58b8e5c43c93c7_16330472($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?></div>

<?php if ($_smarty_tpl->tpl_vars['isEdit']->value) {?>

<div class="row-fluid">

    <h3>
        Physical Interfaces
        <a class="btn btn-mini"
            href="<?php echo smarty_function_genUrl(array('controller'=>'physical-interface','action'=>'add','vintid'=>$_smarty_tpl->tpl_vars['object']->value->getId()),$_smarty_tpl);?>
"><i class="icon-plus"></i></a>
    </h3>

</div>

<div class="row-fluid">

    <div class="span9">
        <?php if (count($_smarty_tpl->tpl_vars['physInts']->value)) {?>
            <table class="table">
        
            <thead>
                <tr>
                    <th>Location</th>
                    <th>Peering Port</th>
                    <th>Fanout Port</th>
                    <th>Speed/Duplex</th>
                    <th></th>
                </tr>
            </thead>
        
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['int'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['int']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['physInts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['int']->key => $_smarty_tpl->tpl_vars['int']->value) {
$_smarty_tpl->tpl_vars['int']->_loop = true;
?>
        
                <tr>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['int']->value->getSwitchPort()->getSwitcher()->getCabinet()) {?><?php echo $_smarty_tpl->tpl_vars['int']->value->getSwitchPort()->getSwitcher()->getCabinet()->getLocation()->getName();?>
<?php }?>
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['int']->value->getSwitchPort()->getType()!=\Entities\SwitchPort::TYPE_FANOUT) {?>
                            <?php echo $_smarty_tpl->tpl_vars['int']->value->getSwitchPort()->getSwitcher()->getName();?>
::<?php echo $_smarty_tpl->tpl_vars['int']->value->getSwitchPort()->getIfName();?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['int']->value->getPeeringPhysicalInterface()) {?>
                            <a href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>$_smarty_tpl->tpl_vars['action']->value,'id'=>$_smarty_tpl->tpl_vars['int']->value->getPeeringPhysicalInterface()->getVirtualInterface()->getId()),$_smarty_tpl);?>
">
                                <?php echo $_smarty_tpl->tpl_vars['int']->value->getPeeringPhysicalInterface()->getSwitchPort()->getSwitcher()->getName();?>
::<?php echo $_smarty_tpl->tpl_vars['int']->value->getPeeringPhysicalInterface()->getSwitchPort()->getIfName();?>

                            </a>
                        <?php }?>
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['int']->value->getSwitchPort()->getType()==\Entities\SwitchPort::TYPE_FANOUT) {?>
                            <?php echo $_smarty_tpl->tpl_vars['int']->value->getSwitchPort()->getSwitcher()->getName();?>
::<?php echo $_smarty_tpl->tpl_vars['int']->value->getSwitchPort()->getIfName();?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['int']->value->getFanoutPhysicalInterface()) {?>
                            <a href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>$_smarty_tpl->tpl_vars['action']->value,'id'=>$_smarty_tpl->tpl_vars['int']->value->getFanoutPhysicalInterface()->getVirtualInterface()->getId()),$_smarty_tpl);?>
">
                                <?php echo $_smarty_tpl->tpl_vars['int']->value->getFanoutPhysicalInterface()->getSwitchPort()->getSwitcher()->getName();?>
::<?php echo $_smarty_tpl->tpl_vars['int']->value->getFanoutPhysicalInterface()->getSwitchPort()->getIfName();?>

                            </a>
                        <?php }?>
                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['int']->value->getSpeed();?>
/<?php echo $_smarty_tpl->tpl_vars['int']->value->getDuplex();?>

                    </td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-mini" href="<?php echo smarty_function_genUrl(array('controller'=>'physical-interface','action'=>'edit','id'=>$_smarty_tpl->tpl_vars['int']->value->getId(),'vintid'=>$_smarty_tpl->tpl_vars['object']->value->getId()),$_smarty_tpl);?>
"><i class="icon-pencil"></i></a>
                            <a data-url="<?php echo smarty_function_genUrl(array('controller'=>'physical-interface','action'=>'delete','id'=>$_smarty_tpl->tpl_vars['int']->value->getId(),'vintid'=>$_smarty_tpl->tpl_vars['object']->value->getId()),$_smarty_tpl);?>
"
                                class="btn btn-mini" id="object-delete-<?php echo $_smarty_tpl->tpl_vars['int']->value->getId();?>
"><i class="icon-trash"></i></a>
                        </div>
                    </td>
                </tr>
        
            <?php } ?>
        
            </tbody>
        
            </table>
            
        <?php } else { ?>
        
            <p>
                There are no physical interfaces defined for this virtual interface.
                <a href="<?php echo smarty_function_genUrl(array('controller'=>"physical-interface",'action'=>"add",'vintid'=>$_smarty_tpl->tpl_vars['object']->value->getId()),$_smarty_tpl);?>
">Add one now...</a>
            </p>
            
        <?php }?>

    </div>
    <br />
</div>


<div class="row-fluid">

    <h3>
        VLAN Interfaces
        <a class="btn btn-mini"
            href="<?php echo smarty_function_genUrl(array('controller'=>'vlan-interface','action'=>'add','vintid'=>$_smarty_tpl->tpl_vars['object']->value->getId()),$_smarty_tpl);?>
"><i class="icon-plus"></i></a>
    </h3>
</div>

<div class="row-fluid">
    <div class="span9">
    <?php if (count($_smarty_tpl->tpl_vars['vlanInts']->value)) {?>
    
        <table class="table">
    
            <thead>
                <tr>
                    <th>VLAN Name</th>
                    <th>VLAN ID</th>
                    <th>IPv4 Address</th>
                    <th>IPv6 Address</th>
                    <th></th>
                </tr>
            </thead>
    
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['int'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['int']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vlanInts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['int']->key => $_smarty_tpl->tpl_vars['int']->value) {
$_smarty_tpl->tpl_vars['int']->_loop = true;
?>
    
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['int']->value->getVlan()->getName();?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['int']->value->getVlan()->getNumber();?>

                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['int']->value->getIPv4Enabled()&&$_smarty_tpl->tpl_vars['int']->value->getIPv4Address()) {?>
                            <?php echo $_smarty_tpl->tpl_vars['int']->value->getIPv4Address()->getAddress();?>

                        <?php }?>
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['int']->value->getIPv6Enabled()&&$_smarty_tpl->tpl_vars['int']->value->getIPv6Address()) {?>
                            <?php echo $_smarty_tpl->tpl_vars['int']->value->getIPv6Address()->getAddress();?>

                        <?php }?>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-mini" href="<?php echo smarty_function_genUrl(array('controller'=>'vlan-interface','action'=>'edit','id'=>$_smarty_tpl->tpl_vars['int']->value->getId(),'vintid'=>$_smarty_tpl->tpl_vars['object']->value->getId()),$_smarty_tpl);?>
"><i class="icon-pencil"></i></a>
                            <a data-url="<?php echo smarty_function_genUrl(array('controller'=>'vlan-interface','action'=>'delete','id'=>$_smarty_tpl->tpl_vars['int']->value->getId(),'vintid'=>$_smarty_tpl->tpl_vars['object']->value->getId()),$_smarty_tpl);?>
"
                                class="btn btn-mini" id="object-delete-<?php echo $_smarty_tpl->tpl_vars['int']->value->getId();?>
"><i class="icon-trash"></i></a>
                        </div>
                    </td>
                </tr>
    
            <?php } ?>
    
            </tbody>
    
        </table>

    <?php } else { ?>
    
        <p>
            There are no VLAN interfaces defined for this virtual interface.
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'vlan-interface','action'=>'add','vintid'=>$_smarty_tpl->tpl_vars['object']->value->getId()),$_smarty_tpl);?>
">Add one now...</a>
        </p>
        
    <?php }?>
    </div>
</div>

<?php }?>
<?php }} ?>
