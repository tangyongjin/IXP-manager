<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:22:58
         compiled from "/opt/ixpmanager/application/views/statistics/member.phtml" */ ?>
<?php /*%%SmartyHeaderCode:44589671058b79e22a59fe9-90048325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3eb69b5a55db308615c20c096dd2ca5ff8e5c740' => 
    array (
      0 => '/opt/ixpmanager/application/views/statistics/member.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44589671058b79e22a59fe9-90048325',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'cust' => 0,
    'categories' => 0,
    'category' => 0,
    'cvalue' => 0,
    'cname' => 0,
    'period' => 0,
    'periods' => 0,
    'multiIXP' => 0,
    'ixp' => 0,
    'resellerMode' => 0,
    'options' => 0,
    'ixps' => 0,
    'i' => 0,
    'vi' => 0,
    'pi' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b79e22b59c20_25952345',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b79e22b59c20_25952345')) {function content_58b79e22b59c20_25952345($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
if (!is_callable('smarty_function_genMrtgImgUrlTag')) include '/opt/ixpmanager/application/../library/inex-smarty/functions/function.genMrtgImgUrlTag.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml",'pageTitle'=>"IXP Manager :: Member Dashboard"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==3) {?>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'customer','action'=>'list'),$_smarty_tpl);?>
">Customers</a> <span class="divider">/</span>
        </li>
        <li>
             <a href="<?php echo smarty_function_genUrl(array('controller'=>'customer','action'=>'overview','id'=>$_smarty_tpl->tpl_vars['cust']->value->getId()),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['cust']->value->getName();?>
</a> <span class="divider">/</span>
        </li>
        <li class="active">
            Statistics
            (
             <?php  $_smarty_tpl->tpl_vars['cvalue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cvalue']->_loop = false;
 $_smarty_tpl->tpl_vars['cname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cvalue']->key => $_smarty_tpl->tpl_vars['cvalue']->value) {
$_smarty_tpl->tpl_vars['cvalue']->_loop = true;
 $_smarty_tpl->tpl_vars['cname']->value = $_smarty_tpl->tpl_vars['cvalue']->key;
?><?php if ($_smarty_tpl->tpl_vars['category']->value==$_smarty_tpl->tpl_vars['cvalue']->value) {?><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
<?php }?><?php } ?>
             <?php if (isset($_smarty_tpl->tpl_vars['period']->value)) {?>
                /
                 <?php  $_smarty_tpl->tpl_vars['cvalue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cvalue']->_loop = false;
 $_smarty_tpl->tpl_vars['cname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['periods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cvalue']->key => $_smarty_tpl->tpl_vars['cvalue']->value) {
$_smarty_tpl->tpl_vars['cvalue']->_loop = true;
 $_smarty_tpl->tpl_vars['cname']->value = $_smarty_tpl->tpl_vars['cvalue']->key;
?><?php if ($_smarty_tpl->tpl_vars['period']->value==$_smarty_tpl->tpl_vars['cvalue']->value) {?><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
<?php }?><?php } ?>
             <?php }?>
            )
        </li>
    </ul>

    <div>
<?php } else { ?>
    <div class="page-content">
        <div class="page-header">
            <h1>
                IXP Interface Statistics
                <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
                    @ <?php echo $_smarty_tpl->tpl_vars['ixp']->value->getShortname();?>

                <?php } else { ?>
                    :: <?php echo $_smarty_tpl->tpl_vars['cust']->value->getName();?>

                <?php }?>
            </h1>
        </div>
<?php }?>

<?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>


<div class="row-fluid">

    <div class="span6">

        <div class="well">
            <h3>
                <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?><?php echo $_smarty_tpl->tpl_vars['ixp']->value->getShortname();?>
 :: <?php }?> Aggregate Peering Traffic
                <?php if ($_smarty_tpl->tpl_vars['resellerMode']->value&&$_smarty_tpl->tpl_vars['cust']->value->isReseller()) {?>
                    
                    <small><em>(Peering ports only)</em></small>
                <?php }?>
            </h3>

            <p>
                <br />
                <a href="<?php echo smarty_function_genUrl(array('controller'=>'statistics','action'=>'member-drilldown','ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId(),'monitorindex'=>'aggregate','category'=>$_smarty_tpl->tpl_vars['category']->value,'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname()),$_smarty_tpl);?>
">
                    <?php echo smarty_function_genMrtgImgUrlTag(array('ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId(),'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname(),'category'=>$_smarty_tpl->tpl_vars['category']->value,'monitorindex'=>'aggregate'),$_smarty_tpl);?>

                </a>
            </p>
        </div>

    </div>

    <div class="span6 well">

        <h3>
            <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
                Graphs for <?php echo $_smarty_tpl->tpl_vars['ixp']->value->getName();?>

            <?php } else { ?>
                Graph Options
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['options']->value['sflow']['enabled'])&&$_smarty_tpl->tpl_vars['options']->value['sflow']['enabled']) {?>
                <a class="btn btn-primary pull-right" href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"p2p",'ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId(),'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname()),$_smarty_tpl);?>
">
                    See Peer to Peer Graphs
                </a>
            <?php }?>
        </h3>

        <p>
            Click on a graph for longer term statistics (daily, weekly, monthly and yearly).
            Change the graph type in the drop down below.
        </p>

        <form action="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"member"),$_smarty_tpl);?>
" method="post" class="form-inline">
            <input type="hidden" name="shortname" value="<?php echo $_smarty_tpl->tpl_vars['cust']->value->getShortname();?>
" />

            <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
                <strong>IXP:</strong>
                <select name="ixp" class="chzn-select span3" onchange="this.form.submit();">
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ixps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['ixp']->value->getId()==$_smarty_tpl->tpl_vars['i']->value->getId()) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value->getShortname();?>
</option>
                    <?php } ?>
                </select>
            <?php } else { ?>
                <input type="hidden" name="ixp" value="<?php echo $_smarty_tpl->tpl_vars['ixp']->value->getId();?>
" />
            <?php }?>

            <strong>Graph Type:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="category" onchange="this.form.submit();" class="chzn-select span3">
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
        </form>
    </div>

</div>


<div class="row-fluid">

<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>

<?php  $_smarty_tpl->tpl_vars['vi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cust']->value->getVirtualInterfaces(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vi']->key => $_smarty_tpl->tpl_vars['vi']->value) {
$_smarty_tpl->tpl_vars['vi']->_loop = true;
?>

    
    <?php $_smarty_tpl->tpl_vars['pi'] = new Smarty_variable($_smarty_tpl->tpl_vars['vi']->value->getPhysicalInterfaces(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['pi'] = new Smarty_variable($_smarty_tpl->tpl_vars['pi']->value[0], null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['pi']->value->getSwitchport()->getSwitcher()->getInfrastructure()->getIXP()!=$_smarty_tpl->tpl_vars['ixp']->value) {?>
        <?php continue 1?>
    <?php }?>

    <?php if (count($_smarty_tpl->tpl_vars['vi']->value->getPhysicalInterfaces())>1) {?>

        <div class="span6">

            <div class="well">

                <h4>
                    LAG on <?php echo $_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getSwitcher()->getCabinet()->getLocation()->getName();?>

                        / <?php echo $_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getSwitcher()->getName();?>

                    <small>
                        <br />
                        Ports:
                        <?php  $_smarty_tpl->tpl_vars['pi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vi']->value->getPhysicalInterfaces(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pi']->key => $_smarty_tpl->tpl_vars['pi']->value) {
$_smarty_tpl->tpl_vars['pi']->_loop = true;
?>
                            <?php echo $_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getName();?>

                        <?php } ?>
                    </small>
                </h4>

                <p>
                    <br />
                    <a href="<?php echo smarty_function_genUrl(array('controller'=>'statistics','action'=>'member-drilldown','ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId(),'monitorindex'=>"lag-viid-".((string)$_smarty_tpl->tpl_vars['vi']->value->getId()),'category'=>$_smarty_tpl->tpl_vars['category']->value,'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname()),$_smarty_tpl);?>
">
                        <?php echo smarty_function_genMrtgImgUrlTag(array('ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId(),'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname(),'category'=>$_smarty_tpl->tpl_vars['category']->value,'monitorindex'=>"lag-viid-".((string)$_smarty_tpl->tpl_vars['vi']->value->getId())),$_smarty_tpl);?>

                    </a>
                </p>

            </div>

        </div>

        <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['count']->value%2==0) {?>
            </div><br /><div class="row-fluid">
        <?php }?>

    <?php }?>

    <?php  $_smarty_tpl->tpl_vars['pi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vi']->value->getPhysicalInterfaces(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pi']->key => $_smarty_tpl->tpl_vars['pi']->value) {
$_smarty_tpl->tpl_vars['pi']->_loop = true;
?>

        <div class="span6">

            <div class="well">

                <h4>
                    <?php echo $_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getSwitcher()->getCabinet()->getLocation()->getName();?>

                        / <?php echo $_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getSwitcher()->getName();?>

                        / <?php echo $_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getName();?>
 (<?php echo $_smarty_tpl->tpl_vars['pi']->value->getSpeed();?>
Mbps)

                    <?php if ($_smarty_tpl->tpl_vars['resellerMode']->value&&$_smarty_tpl->tpl_vars['cust']->value->isReseller()) {?>
                        <br /><small>
                        <?php if ($_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getType()==\Entities\SwitchPort::TYPE_PEERING) {?>
                            Peering Port
                        <?php } elseif ($_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getType()==\Entities\SwitchPort::TYPE_FANOUT) {?>
                            Fanout Port for <a href="<?php echo smarty_function_genUrl(array('controller'=>'customer','action'=>'overview','id'=>$_smarty_tpl->tpl_vars['pi']->value->getRelatedInterface()->getVirtualInterface()->getCustomer()->getId()),$_smarty_tpl);?>
">
                                <?php echo $_smarty_tpl->tpl_vars['pi']->value->getRelatedInterface()->getVirtualInterface()->getCustomer()->getAbbreviatedName();?>

                            </a>
                        <?php } elseif ($_smarty_tpl->tpl_vars['pi']->value->getSwitchPort()->getType()==\Entities\SwitchPort::TYPE_RESELLER) {?>
                            Reseller Uplink Port
                        <?php }?>
                        </small>
                    <?php }?>

                </h4>

                <p>
                    <br />
                    <a href="<?php echo smarty_function_genUrl(array('controller'=>'statistics','action'=>'member-drilldown','ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId(),'monitorindex'=>$_smarty_tpl->tpl_vars['pi']->value->getMonitorindex(),'category'=>$_smarty_tpl->tpl_vars['category']->value,'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname()),$_smarty_tpl);?>
">
                        <?php echo smarty_function_genMrtgImgUrlTag(array('ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId(),'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname(),'category'=>$_smarty_tpl->tpl_vars['category']->value,'monitorindex'=>$_smarty_tpl->tpl_vars['pi']->value->getMonitorindex()),$_smarty_tpl);?>

                    </a>
                </p>

            </div>

        </div>

        <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['count']->value%2==0) {?>
            </div><br /><div class="row-fluid">
        <?php }?>

    <?php } ?>

<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['count']->value%2!=0) {?>
    <div class="span6"></div>
<?php }?>

</div>
</div>

<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>

<?php }} ?>
