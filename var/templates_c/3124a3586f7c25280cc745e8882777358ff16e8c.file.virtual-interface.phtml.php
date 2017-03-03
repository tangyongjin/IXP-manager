<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-03 11:40:52
         compiled from "/opt/ixpmanager/application/views/virtual-interface/forms/virtual-interface.phtml" */ ?>
<?php /*%%SmartyHeaderCode:203393940458b8e5c42db801-67389768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3124a3586f7c25280cc745e8882777358ff16e8c' => 
    array (
      0 => '/opt/ixpmanager/application/views/virtual-interface/forms/virtual-interface.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203393940458b8e5c42db801-67389768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'element' => 0,
    'type' => 0,
    'ptypes' => 0,
    'physInts' => 0,
    'int' => 0,
    'controller' => 0,
    'action' => 0,
    'isEdit' => 0,
    'cust' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b8e5c43267a4_67546961',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8e5c43267a4_67546961')) {function content_58b8e5c43267a4_67546961($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?>
<form class="form-horizontal" enctype="application/x-www-form-urlencoded"
        accept-charset="UTF-8" method="post"
        >
            
<div class="row-fluid">

    <div class="span6">
    
        <fieldset>
            <legend>Virtual Interface Details</legend>
            
            <?php echo $_smarty_tpl->tpl_vars['element']->value->custid;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->trunk;?>

            <?php if (isset($_smarty_tpl->tpl_vars['type']->value)&&$_smarty_tpl->tpl_vars['type']->value) {?>
                <div class="control-group">
                    <label class="control-label">Type</label>
                    <div class="controls">
                        <span class="label <?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?>label-success<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==6) {?>label-inverse<?php }?>"><?php echo strtoupper($_smarty_tpl->tpl_vars['ptypes']->value[$_smarty_tpl->tpl_vars['type']->value]);?>
</span>
                        <?php if (count($_smarty_tpl->tpl_vars['physInts']->value)) {?>
                            <?php  $_smarty_tpl->tpl_vars['int'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['int']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['physInts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['int']->key => $_smarty_tpl->tpl_vars['int']->value) {
$_smarty_tpl->tpl_vars['int']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['type']->value==1&&$_smarty_tpl->tpl_vars['int']->value->getFanoutPhysicalInterface()) {?>
                                        <span style="margin-left: 15px;">
                                            <a href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>$_smarty_tpl->tpl_vars['action']->value,'id'=>$_smarty_tpl->tpl_vars['int']->value->getFanoutPhysicalInterface()->getVirtualInterface()->getId()),$_smarty_tpl);?>
">
                                                See <?php echo strtolower($_smarty_tpl->tpl_vars['ptypes']->value[6]);?>
 port
                                            </a>
                                        </span>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['type']->value==6&&$_smarty_tpl->tpl_vars['int']->value->getPeeringPhysicalInterface()) {?>
                                        <span style="margin-left: 15px;">
                                            <a href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>$_smarty_tpl->tpl_vars['action']->value,'id'=>$_smarty_tpl->tpl_vars['int']->value->getPeeringPhysicalInterface()->getVirtualInterface()->getId()),$_smarty_tpl);?>
">
                                                See <?php echo strtolower($_smarty_tpl->tpl_vars['ptypes']->value[1]);?>
 port
                                            </a>
                                        </span>
                                    <?php }?>
                            <?php } ?>
                     
                        <?php }?>
                    </div>
                </div>
            <?php }?>
            
        </fieldset>
        
    </div>

    <div class="span6">
    
        <fieldset>
            <legend>&nbsp;</legend>
            
            <div id="advanced-options" class="hide">
            
                <?php echo $_smarty_tpl->tpl_vars['element']->value->name;?>

                <?php echo $_smarty_tpl->tpl_vars['element']->value->description;?>

                <?php echo $_smarty_tpl->tpl_vars['element']->value->channelgroup;?>

                <?php echo $_smarty_tpl->tpl_vars['element']->value->mtu;?>

                
            </div>
            
        </fieldset>
        
    </div>

    
</div>
        


<div class="form-actions">
    <input type="submit" name="commit" id="commit" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value) {?>Save Changes<?php } else { ?>Add<?php }?>" class="btn btn-primary">
    <?php if (isset($_smarty_tpl->tpl_vars['cust']->value)) {?>
        <a class="btn btn-success" href="<?php echo smarty_function_genUrl(array('controller'=>'customer','action'=>'overview','tab'=>'ports','id'=>$_smarty_tpl->tpl_vars['cust']->value->getId()),$_smarty_tpl);?>
">Return to Customer Overview</a>
    <?php } else { ?>
        <a class="btn btn-success" href="<?php echo smarty_function_genUrl(array('controller'=>'virtual-interface','action'=>'add-wizard'),$_smarty_tpl);?>
">Wizard Add</a>
        <a class="btn" href="<?php echo smarty_function_genUrl(array('controller'=>"virtual-interface",'action'=>"list"),$_smarty_tpl);?>
">Return</a>
    <?php }?>

    <button class="btn" id="btn-advanced-options">Advanced Options</button>
</div>

    
</form>


<script type="text/javascript">

$(document).ready( function(){

	$( '#btn-advanced-options' ).on( 'click', function( event ){

		if( $( '#btn-advanced-options' ).hasClass( 'active' ) )
		    $( '#advanced-options' ).slideUp();
		else
			$( '#advanced-options' ).slideDown();
		
		$( '#btn-advanced-options' ).button( 'toggle' );
		return false;
	});
	
});

</script>

<?php }} ?>
