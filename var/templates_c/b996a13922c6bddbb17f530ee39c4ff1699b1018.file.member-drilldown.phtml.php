<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-03 09:15:44
         compiled from "/opt/ixpmanager/application/views/statistics/member-drilldown.phtml" */ ?>
<?php /*%%SmartyHeaderCode:10277296658b8c3c09fd823-95376165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b996a13922c6bddbb17f530ee39c4ff1699b1018' => 
    array (
      0 => '/opt/ixpmanager/application/views/statistics/member-drilldown.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10277296658b8c3c09fd823-95376165',
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
    'multiIXP' => 0,
    'ixp' => 0,
    'isAggregate' => 0,
    'isLAG' => 0,
    'switchname' => 0,
    'portname' => 0,
    'resellerMode' => 0,
    'pi' => 0,
    'monitorindex' => 0,
    'isPort' => 0,
    'vli' => 0,
    'canPing' => 0,
    'periods' => 0,
    'pname' => 0,
    'pvalue' => 0,
    'stats' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b8c3c0ae43f1_71185545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8c3c0ae43f1_71185545')) {function content_58b8c3c0ae43f1_71185545($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
if (!is_callable('smarty_function_genMrtgGraphBox')) include '/opt/ixpmanager/application/../library/inex-smarty/functions/function.genMrtgGraphBox.php';
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
            (<?php  $_smarty_tpl->tpl_vars['cvalue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cvalue']->_loop = false;
 $_smarty_tpl->tpl_vars['cname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cvalue']->key => $_smarty_tpl->tpl_vars['cvalue']->value) {
$_smarty_tpl->tpl_vars['cvalue']->_loop = true;
 $_smarty_tpl->tpl_vars['cname']->value = $_smarty_tpl->tpl_vars['cvalue']->key;
?><?php if ($_smarty_tpl->tpl_vars['category']->value==$_smarty_tpl->tpl_vars['cvalue']->value) {?><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
<?php }?><?php } ?>)
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

                (<?php  $_smarty_tpl->tpl_vars['cvalue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cvalue']->_loop = false;
 $_smarty_tpl->tpl_vars['cname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cvalue']->key => $_smarty_tpl->tpl_vars['cvalue']->value) {
$_smarty_tpl->tpl_vars['cvalue']->_loop = true;
 $_smarty_tpl->tpl_vars['cname']->value = $_smarty_tpl->tpl_vars['cvalue']->key;
?><?php if ($_smarty_tpl->tpl_vars['category']->value==$_smarty_tpl->tpl_vars['cvalue']->value) {?><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
<?php }?><?php } ?>)
            </h1>
        </div>
<?php }?>


<?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>


<div class="row-fluid">

    <div class="span6">

        <?php if ($_smarty_tpl->tpl_vars['isAggregate']->value) {?>
            <h3>
                Aggregate Statistics for

                <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
                    <?php echo $_smarty_tpl->tpl_vars['ixp']->value->getShortname();?>

                <?php } else { ?>
                    All Peering Ports
                <?php }?>
            </h3>
        <?php } elseif ($_smarty_tpl->tpl_vars['isLAG']->value) {?>
            <h3>
                LAG
                <small>
                    <?php echo $_smarty_tpl->tpl_vars['switchname']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['portname']->value;?>

                </small>
            </h3>
        <?php } else { ?>
            <h3>
                Port: <?php echo $_smarty_tpl->tpl_vars['switchname']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['portname']->value;?>


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
            </h3>
        <?php }?>

    </div>
    <div class="span6">

        <form action="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"member-drilldown",'ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId(),'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname(),'monitorindex'=>$_smarty_tpl->tpl_vars['monitorindex']->value),$_smarty_tpl);?>
" method="post" class="form-horizontal">

            <strong>Graph Type:&nbsp;&nbsp;&nbsp;</strong>

            <select name="category" onchange="this.form.submit();" class="chzn-select span2">
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
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn btn-primary" href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"member",'ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId()),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==3) {?>/shortname/<?php echo $_smarty_tpl->tpl_vars['cust']->value->getShortname();?>
<?php }?>">
                Statistics Overview
            </a>
            <?php if ($_smarty_tpl->tpl_vars['ixp']->value->getSmokeping()&&$_smarty_tpl->tpl_vars['isPort']->value!='') {?>
                <?php $_smarty_tpl->tpl_vars['canPing'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['vli'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vli']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pi']->value->getVirtualInterface()->getVlanInterfaces(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vli']->key => $_smarty_tpl->tpl_vars['vli']->value) {
$_smarty_tpl->tpl_vars['vli']->_loop = true;
?>
                    <?php if (($_smarty_tpl->tpl_vars['vli']->value->getIpv4enabled()&&$_smarty_tpl->tpl_vars['vli']->value->getIpv4canping())||($_smarty_tpl->tpl_vars['vli']->value->getIpv6enabled()&&$_smarty_tpl->tpl_vars['vli']->value->getIpv6canping())) {?>
                        <?php $_smarty_tpl->tpl_vars['canPing'] = new Smarty_variable(1, null, 0);?>
                        <?php break 1?>
                    <?php }?>
                <?php } ?>
                <?php if ($_smarty_tpl->tpl_vars['canPing']->value) {?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-primary" href="<?php echo smarty_function_genUrl(array('controller'=>"smokeping",'action'=>"member-drilldown",'ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId(),'vi'=>$_smarty_tpl->tpl_vars['pi']->value->getVirtualInterface()->getId()),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==3) {?><?php }?>">
                        Smokeping
                    </a>
                <?php }?>
            <?php }?>
        </form>

    </div>
</div>

<div class="row-fluid">

<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['pvalue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pvalue']->_loop = false;
 $_smarty_tpl->tpl_vars['pname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['periods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pvalue']->key => $_smarty_tpl->tpl_vars['pvalue']->value) {
$_smarty_tpl->tpl_vars['pvalue']->_loop = true;
 $_smarty_tpl->tpl_vars['pname']->value = $_smarty_tpl->tpl_vars['pvalue']->key;
?>

    <div class="span6">

        <div class="well">

            <h3><?php echo $_smarty_tpl->tpl_vars['pname']->value;?>
 Graph</h3>

            <p>
                <?php echo smarty_function_genMrtgGraphBox(array('ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId(),'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname(),'category'=>$_smarty_tpl->tpl_vars['category']->value,'monitorindex'=>$_smarty_tpl->tpl_vars['monitorindex']->value,'period'=>$_smarty_tpl->tpl_vars['pvalue']->value,'values'=>$_smarty_tpl->tpl_vars['stats']->value[$_smarty_tpl->tpl_vars['pvalue']->value]),$_smarty_tpl);?>

            </p>

        </div>
    </div>

    <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['count']->value%2==0) {?>
        </div><br /><div class="row-fluid">
    <?php }?>


    <?php } ?>

<?php if ($_smarty_tpl->tpl_vars['count']->value%2!=0) {?>
    <div class="span3"></div>
<?php }?>

</div>
</div>

<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>

<?php }} ?>
