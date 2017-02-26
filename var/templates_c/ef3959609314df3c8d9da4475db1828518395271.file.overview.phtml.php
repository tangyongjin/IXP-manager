<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-26 16:54:30
         compiled from "/opt/ixpmanager/application/views/customer/overview-tabs/overview.phtml" */ ?>
<?php /*%%SmartyHeaderCode:114443876658b297c637e884-79088603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef3959609314df3c8d9da4475db1828518395271' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/overview-tabs/overview.phtml',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114443876658b297c637e884-79088603',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hasAggregateGraph' => 0,
    'multiIXP' => 0,
    'cust' => 0,
    'rsclient' => 0,
    'as112UiActive' => 0,
    'as112client' => 0,
    'options' => 0,
    'vi' => 0,
    'vli' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b297c6408de4_10043390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b297c6408de4_10043390')) {function content_58b297c6408de4_10043390($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_genMrtgImgUrlTag')) include '/opt/ixpmanager/application/../library/inex-smarty/functions/function.genMrtgImgUrlTag.php';
if (!is_callable('smarty_function_mailto')) include '/opt/ixpmanager/application/../vendor/smarty/smarty/libs/plugins/function.mailto.php';
if (!is_callable('smarty_modifier_asnumber')) include '/opt/ixpmanager/application/../library/inex-smarty/functions/modifier.asnumber.php';
if (!is_callable('smarty_modifier_replace')) include '/opt/ixpmanager/application/../vendor/smarty/smarty/libs/plugins/modifier.replace.php';
?>
<?php if ($_smarty_tpl->tpl_vars['hasAggregateGraph']->value&&!$_smarty_tpl->tpl_vars['multiIXP']->value) {?>
    <div class="row-fluid">

        <div class="well">
             <h3>Aggregate Traffic Statistics</h3>

             <p>
                 <br />
                 <a href="<?php echo smarty_function_genUrl(array('controller'=>'statistics','action'=>'member-drilldown','monitorindex'=>'aggregate','category'=>'bits','shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname()),$_smarty_tpl);?>
">
                     <?php echo smarty_function_genMrtgImgUrlTag(array('shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname(),'category'=>'bits','monitorindex'=>'aggregate'),$_smarty_tpl);?>

                 </a>
             </p>
         </div>

     </div>
<?php }?>


<table class="table">
    <tbody>
        <tr>
            <td><strong>Abbreviated Name</strong></td>
            <td><?php echo $_smarty_tpl->tpl_vars['cust']->value->getAbbreviatedName();?>
</td>
            <td colspan="2">
                <?php if (!$_smarty_tpl->tpl_vars['cust']->value->isTypeAssociate()) {?>
                    <span class="label label-<?php if ($_smarty_tpl->tpl_vars['rsclient']->value) {?>success<?php } else { ?>important<?php }?>">RS Client</span>
                    <?php if ($_smarty_tpl->tpl_vars['as112UiActive']->value) {?>
                        &nbsp;&nbsp;&nbsp;
                        <span class="label label-<?php if ($_smarty_tpl->tpl_vars['as112client']->value) {?>success<?php } else { ?>important<?php }?>">AS112</span>
                    <?php }?>
                <?php }?>
            </td>
        </tr>
        <tr>
            <td><strong>Corporate Site</strong></td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['cust']->value->getCorpwww();?>
"><?php echo $_smarty_tpl->tpl_vars['cust']->value->getCorpwww();?>
</a></td>
            <?php if ($_smarty_tpl->tpl_vars['cust']->value->isTypeAssociate()) {?>
                <td colspan="2"></td>
            <?php } else { ?>
                <td><strong>Peering Email</strong></td>
                <td><?php if ($_smarty_tpl->tpl_vars['cust']->value->getpeeringemail()) {?><?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['cust']->value->getpeeringemail()),$_smarty_tpl);?>
<?php }?></td>
            <?php }?>
        </tr>
        <tr>
            <td><strong>Status</strong></td>
            <td><?php echo \Entities\Customer::$CUST_STATUS_TEXT[$_smarty_tpl->tpl_vars['cust']->value->getStatus()];?>
</td>
            <td><strong>Joined</strong></td>
            <td><?php if ($_smarty_tpl->tpl_vars['cust']->value->getDatejoin()) {?><?php echo $_smarty_tpl->tpl_vars['cust']->value->getDatejoin()->format('Y-m-d');?>
<?php }?></td>
        </tr>
        <tr>
            <td><strong>Type</strong></td>
            <td><?php echo \Entities\Customer::$CUST_TYPES_TEXT[$_smarty_tpl->tpl_vars['cust']->value->getType()];?>
</td>
            <td><strong>Left</strong></td>
            <td><?php if ($_smarty_tpl->tpl_vars['cust']->value->hasLeft()) {?><?php echo $_smarty_tpl->tpl_vars['cust']->value->getDateleave()->format('Y-m-d');?>
<?php }?></td>
        </tr>
        <?php if (!$_smarty_tpl->tpl_vars['cust']->value->isTypeAssociate()) {?>
            <tr>
                <td><strong>Peering Policy</strong></td>
                <td><?php echo $_smarty_tpl->tpl_vars['cust']->value->getPeeringpolicy();?>
</td>
                <td><strong>ASN</strong></td>
                <td><?php echo smarty_modifier_asnumber($_smarty_tpl->tpl_vars['cust']->value->getAutsys());?>
</td>
            </tr>
            <tr>
                <td><strong>PeeringDB</strong></td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['cust']->value->getPeeringDb()) {?>
                        <em>
                            <a onclick="$.colorbox({href:&quot;<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['options']->value['peeringdb']['url'],'%ID%',$_smarty_tpl->tpl_vars['cust']->value->getPeeringDb()),'%ASN%',$_smarty_tpl->tpl_vars['cust']->value->getAutsys());?>
&quot;, iframe: true, width: &quot;75%&quot;, height: &quot;75%&quot;});return false;">Click to view...</a>
                        </em>
                    <?php }?>
                </td>
                <td><strong>IPv4 AS-SET</strong></td>
                <td><?php echo $_smarty_tpl->tpl_vars['cust']->value->getPeeringmacro();?>
</td>
            </tr>
            <tr>
                <td><strong>IRRDB</strong></td>
                <td><?php if ($_smarty_tpl->tpl_vars['cust']->value->getIRRDB()) {?><?php echo $_smarty_tpl->tpl_vars['cust']->value->getIRRDB()->getSource();?>
<?php }?></td>
                <td><strong>IPv6 AS-SET</strong></td>
                <td><?php echo $_smarty_tpl->tpl_vars['cust']->value->getPeeringmacrov6();?>
</td>
            </tr>
        <?php }?>
        <tr>
            <td><?php if (!$_smarty_tpl->tpl_vars['cust']->value->isTypeAssociate()) {?><strong>NOC Details</strong><?php }?></td>
            <td>
                <?php if (!$_smarty_tpl->tpl_vars['cust']->value->isTypeAssociate()) {?>
                    <?php if ($_smarty_tpl->tpl_vars['cust']->value->getNochours()) {?>    <?php echo $_smarty_tpl->tpl_vars['cust']->value->getNochours();?>
<br />    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['cust']->value->getNocemail()) {?>    <?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['cust']->value->getNocemail()),$_smarty_tpl);?>
<br /><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['cust']->value->getNocwww()) {?>      <a href="<?php echo $_smarty_tpl->tpl_vars['cust']->value->getNocwww();?>
"><?php echo $_smarty_tpl->tpl_vars['cust']->value->getNocwww();?>
</a><br />      <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['cust']->value->getNocphone()) {?>    <?php echo $_smarty_tpl->tpl_vars['cust']->value->getNocphone();?>
<br />    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['cust']->value->getNoc24hphone()) {?> <?php echo $_smarty_tpl->tpl_vars['cust']->value->getNoc24hphone();?>
 (24h) <?php }?>
                <?php }?>
            </td>
            <td><strong>Max Prefixes</strong></td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['cust']->value->getMaxprefixes();?>

                <?php if (count($_smarty_tpl->tpl_vars['cust']->value->getVirtualInterfaces())) {?>
                    (<?php  $_smarty_tpl->tpl_vars['vi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cust']->value->getVirtualInterfaces(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['vi']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['vi']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['vi']->key => $_smarty_tpl->tpl_vars['vi']->value) {
$_smarty_tpl->tpl_vars['vi']->_loop = true;
 $_smarty_tpl->tpl_vars['vi']->iteration++;
 $_smarty_tpl->tpl_vars['vi']->last = $_smarty_tpl->tpl_vars['vi']->iteration === $_smarty_tpl->tpl_vars['vi']->total;
?>
                        <?php  $_smarty_tpl->tpl_vars['vli'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vli']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vi']->value->getVlanInterfaces(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['vli']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['vli']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['vli']->key => $_smarty_tpl->tpl_vars['vli']->value) {
$_smarty_tpl->tpl_vars['vli']->_loop = true;
 $_smarty_tpl->tpl_vars['vli']->iteration++;
 $_smarty_tpl->tpl_vars['vli']->last = $_smarty_tpl->tpl_vars['vli']->iteration === $_smarty_tpl->tpl_vars['vli']->total;
?>
                            <?php echo $_smarty_tpl->tpl_vars['vli']->value->getMaxbgpprefix();?>
<?php if (!($_smarty_tpl->tpl_vars['vi']->last&&$_smarty_tpl->tpl_vars['vli']->last)) {?>, <?php }?>
                        <?php } ?>
                    <?php } ?>)
                <?php }?>
            </td>
        </tr>

    </tbody>
</table>
<?php }} ?>
