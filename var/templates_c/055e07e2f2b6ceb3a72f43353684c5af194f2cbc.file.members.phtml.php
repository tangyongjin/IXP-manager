<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:22:52
         compiled from "/opt/ixpmanager/application/views/statistics/members.phtml" */ ?>
<?php /*%%SmartyHeaderCode:21024134858b79e1c26c567-97142115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '055e07e2f2b6ceb3a72f43353684c5af194f2cbc' => 
    array (
      0 => '/opt/ixpmanager/application/views/statistics/members.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21024134858b79e1c26c567-97142115',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
    'cvalue' => 0,
    'cname' => 0,
    'periods' => 0,
    'period' => 0,
    'multiIXP' => 0,
    'ixps' => 0,
    'i' => 0,
    'ixp' => 0,
    'infraid' => 0,
    'custs' => 0,
    'cust' => 0,
    'vi' => 0,
    'pi' => 0,
    'mi' => 0,
    'monindexes' => 0,
    'options' => 0,
    'infra' => 0,
    'monindex' => 0,
    'portdetails' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b79e1c338b56_71259980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b79e1c338b56_71259980')) {function content_58b79e1c338b56_71259980($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
if (!is_callable('smarty_function_genMrtgImgUrl')) include '/opt/ixpmanager/application/../library/inex-smarty/functions/function.genMrtgImgUrl.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml"),$_smarty_tpl);?>


<ul class="breadcrumb">
    <li>
        <a href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
">Home</a> <span class="divider">/</span>
    </li>
    <li>
        Statistics <span class="divider">/</span>
    </li>
    <li class="active">
        Graphs
        (
         <?php  $_smarty_tpl->tpl_vars['cvalue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cvalue']->_loop = false;
 $_smarty_tpl->tpl_vars['cname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cvalue']->key => $_smarty_tpl->tpl_vars['cvalue']->value) {
$_smarty_tpl->tpl_vars['cvalue']->_loop = true;
 $_smarty_tpl->tpl_vars['cname']->value = $_smarty_tpl->tpl_vars['cvalue']->key;
?><?php if ($_smarty_tpl->tpl_vars['category']->value==$_smarty_tpl->tpl_vars['cvalue']->value) {?><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
<?php }?><?php } ?>
        /
         <?php  $_smarty_tpl->tpl_vars['cvalue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cvalue']->_loop = false;
 $_smarty_tpl->tpl_vars['cname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['periods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cvalue']->key => $_smarty_tpl->tpl_vars['cvalue']->value) {
$_smarty_tpl->tpl_vars['cvalue']->_loop = true;
 $_smarty_tpl->tpl_vars['cname']->value = $_smarty_tpl->tpl_vars['cvalue']->key;
?><?php if ($_smarty_tpl->tpl_vars['period']->value==$_smarty_tpl->tpl_vars['cvalue']->value) {?><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
<?php }?><?php } ?>
        )
    </li>
    <li class="pull-right"  style="margin-top: -6px;">
        <div class="btn-toolbar" style="display: inline;">
            <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ('statistics/snippets/menu-ixp-dropdown.phtml', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>
            
            <?php echo $_smarty_tpl->getSubTemplate ('statistics/snippets/menu-infra-dropdown.phtml', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    </li>

</ul>

<?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>


<div class="row-fluid">
    <div class="span12">
        <form action="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"members"),$_smarty_tpl);?>
" method="post" class="form-horizontal">
        
            <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
                <strong>IXP:</strong>
                <select name="ixp" class="chzn-select" onchange="this.form.submit();">
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ixps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['ixp']->value->getId()==$_smarty_tpl->tpl_vars['i']->value->getId()) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value->getName();?>
</option>
                    <?php } ?>
                </select>
            <?php } else { ?>
                <input type="hidden" name="ixp" value="<?php echo $_smarty_tpl->tpl_vars['ixp']->value->getId();?>
" />
            <?php }?>
            
            <strong>Infrastructure:</strong>
            <select name="infra" class="chzn-select" onchange="this.form.submit();">
                <option value="aggregate" <?php if ($_smarty_tpl->tpl_vars['infraid']->value=='aggregate') {?>selected<?php }?>>Aggregate Traffic</option>
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ixp']->value->getInfrastructures(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['infraid']->value==$_smarty_tpl->tpl_vars['i']->value->getId()) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value->getName();?>
</option>
                <?php } ?>
            </select>
        
            
            <strong>Graph Type:</strong>
            <select name="category" class="chzn-select" onchange="this.form.submit();">
                <?php  $_smarty_tpl->tpl_vars['cvalue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cvalue']->_loop = false;
 $_smarty_tpl->tpl_vars['cname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cvalue']->key => $_smarty_tpl->tpl_vars['cvalue']->value) {
$_smarty_tpl->tpl_vars['cvalue']->_loop = true;
 $_smarty_tpl->tpl_vars['cname']->value = $_smarty_tpl->tpl_vars['cvalue']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['cvalue']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value==$_smarty_tpl->tpl_vars['cvalue']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
</option>
                <?php } ?>
            </select>
            <strong>Period:</strong>
            <select name="period" class="chzn-select" onchange="this.form.submit();">
                <?php  $_smarty_tpl->tpl_vars['cvalue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cvalue']->_loop = false;
 $_smarty_tpl->tpl_vars['cname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['periods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cvalue']->key => $_smarty_tpl->tpl_vars['cvalue']->value) {
$_smarty_tpl->tpl_vars['cvalue']->_loop = true;
 $_smarty_tpl->tpl_vars['cname']->value = $_smarty_tpl->tpl_vars['cvalue']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['cvalue']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['period']->value==$_smarty_tpl->tpl_vars['cvalue']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
</option>
                <?php } ?>
            </select>
        </form>
    </div>
</div>


<div class="row-fluid">

<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['cust'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cust']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['custs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cust']->key => $_smarty_tpl->tpl_vars['cust']->value) {
$_smarty_tpl->tpl_vars['cust']->_loop = true;
?>

    

    <?php $_smarty_tpl->tpl_vars['monindexes'] = new Smarty_variable(array(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['portdetails'] = new Smarty_variable(array(), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['infraid']->value=='aggregate') {?>
    
        <?php $_smarty_tpl->createLocalArrayVariable('monindexes', null, 0);
$_smarty_tpl->tpl_vars['monindexes']->value[] = 'aggregate';?>
        
    <?php } else { ?>
        
        
        
        <?php  $_smarty_tpl->tpl_vars['vi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cust']->value->getVirtualInterfaces(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vi']->key => $_smarty_tpl->tpl_vars['vi']->value) {
$_smarty_tpl->tpl_vars['vi']->_loop = true;
?>

            <?php  $_smarty_tpl->tpl_vars['pi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vi']->value->getPhysicalInterfaces(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pi']->key => $_smarty_tpl->tpl_vars['pi']->value) {
$_smarty_tpl->tpl_vars['pi']->_loop = true;
?>
            
                <?php if ($_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getSwitcher()->getInfrastructure()->getId()==$_smarty_tpl->tpl_vars['infraid']->value) {?>
                
                    <?php $_smarty_tpl->createLocalArrayVariable('monindexes', null, 0);
$_smarty_tpl->tpl_vars['monindexes']->value[] = $_smarty_tpl->tpl_vars['pi']->value->getMonitorindex();?>
                    <?php $_smarty_tpl->tpl_vars['mi'] = new Smarty_variable($_smarty_tpl->tpl_vars['pi']->value->getMonitorindex(), null, 0);?>
                    
                    <?php $_smarty_tpl->createLocalArrayVariable('portdetails', null, 0);
$_smarty_tpl->tpl_vars['portdetails']->value[$_smarty_tpl->tpl_vars['mi']->value]['switch'] = $_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getSwitcher()->getName();?>
                    <?php $_smarty_tpl->createLocalArrayVariable('portdetails', null, 0);
$_smarty_tpl->tpl_vars['portdetails']->value[$_smarty_tpl->tpl_vars['mi']->value]['switchport'] = $_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getName();?>
                    
                <?php }?>
            
            <?php } ?>
        
        <?php } ?>
        
    <?php }?>

    <?php  $_smarty_tpl->tpl_vars['monindex'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['monindex']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['monindexes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['monindex']->key => $_smarty_tpl->tpl_vars['monindex']->value) {
$_smarty_tpl->tpl_vars['monindex']->_loop = true;
?>
    
        <div class="span3">
    
            <div class="well">
                <h4 style="vertical-align: middle">
                    <?php echo $_smarty_tpl->tpl_vars['cust']->value->getName();?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['options']->value['sflow']['enabled'])&&$_smarty_tpl->tpl_vars['options']->value['sflow']['enabled'])&&($_smarty_tpl->tpl_vars['category']->value=='bits'||$_smarty_tpl->tpl_vars['category']->value=='pkts')) {?>
                        <span class="btn btn-mini" style="float: right">
                            <a href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"p2p",'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname(),'category'=>$_smarty_tpl->tpl_vars['category']->value,'period'=>$_smarty_tpl->tpl_vars['period']->value),$_smarty_tpl);?>
"><i class="icon-random"></i></a>
                        </span>
                    <?php }?>
                </h4>
                
                <?php if ($_smarty_tpl->tpl_vars['infra']->value!='aggregate') {?>
                    <h5><?php echo $_smarty_tpl->tpl_vars['portdetails']->value[$_smarty_tpl->tpl_vars['monindex']->value]['switch'];?>
 / <?php echo $_smarty_tpl->tpl_vars['portdetails']->value[$_smarty_tpl->tpl_vars['monindex']->value]['switchport'];?>
</h5>
                <?php }?>
    
                <p>
                    <br />
                    <a href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"member",'ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId(),'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname(),'monitorindex'=>'aggregate','category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl);?>
">
                        <img
                            src="<?php echo smarty_function_genMrtgImgUrl(array('ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId(),'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname(),'category'=>$_smarty_tpl->tpl_vars['category']->value,'period'=>$_smarty_tpl->tpl_vars['period']->value,'monitorindex'=>$_smarty_tpl->tpl_vars['monindex']->value),$_smarty_tpl);?>
"
                            width="300"
                        />
                    </a>
                </p>
            </div>
    
        </div>
    
        <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
    
        <?php if ($_smarty_tpl->tpl_vars['count']->value%4==0) {?>
            </div><br /><div class="row-fluid">
        <?php }?>
        
    <?php } ?>

<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['count']->value%4!=0) {?>
    <div class="span3"></div>
    <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['count']->value%4!=0) {?>
        <div class="span3"></div>
        <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['count']->value%4!=0) {?>
            <div class="span3"></div>
            <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
        <?php }?>
    <?php }?>
<?php }?>

</div>


<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>
<?php }} ?>
