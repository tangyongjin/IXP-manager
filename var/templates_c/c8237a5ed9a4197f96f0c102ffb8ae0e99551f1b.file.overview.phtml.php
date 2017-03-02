<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:50:18
         compiled from "/opt/ixpmanager/application/views/dashboard/index-tabs/overview.phtml" */ ?>
<?php /*%%SmartyHeaderCode:56918510858b7a48a6c69c4-47333873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8237a5ed9a4197f96f0c102ffb8ae0e99551f1b' => 
    array (
      0 => '/opt/ixpmanager/application/views/dashboard/index-tabs/overview.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56918510858b7a48a6c69c4-47333873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'multiIXP' => 0,
    'cust' => 0,
    'ixp' => 0,
    'user' => 0,
    'i' => 0,
    'recentMembers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7a48a7082d5_18801137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7a48a7082d5_18801137')) {function content_58b7a48a7082d5_18801137($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_genMrtgImgUrlTag')) include '/opt/ixpmanager/application/../library/inex-smarty/functions/function.genMrtgImgUrlTag.php';
if (!is_callable('smarty_modifier_asnumber')) include '/opt/ixpmanager/application/../library/inex-smarty/functions/modifier.asnumber.php';
if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
?>
<div class="row-fluid">

    <div class="span6">
        <h3>Aggregate Peering Statistics</h3>
        
        <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
            <?php  $_smarty_tpl->tpl_vars['ixp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ixp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cust']->value->getIXPs(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ixp']->key => $_smarty_tpl->tpl_vars['ixp']->value) {
$_smarty_tpl->tpl_vars['ixp']->_loop = true;
?>
                <br />
                <div class="well">
                    <h3><?php echo $_smarty_tpl->tpl_vars['ixp']->value->getName();?>
</h3>
                	<a href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"member-drilldown",'ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId(),'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname(),'category'=>'bits','monitorindex'=>'aggregate'),$_smarty_tpl);?>
">
                        <?php echo smarty_function_genMrtgImgUrlTag(array('ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId(),'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname(),'category'=>'bits','monitorindex'=>'aggregate'),$_smarty_tpl);?>

                    </a>
                </div>
            <?php } ?>
        <?php } else { ?>
            <br />
            <div class="well">
            	<a href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"member-drilldown",'shortname'=>$_smarty_tpl->tpl_vars['user']->value->getCustomer()->getShortname(),'category'=>'bits','monitorindex'=>'aggregate'),$_smarty_tpl);?>
">
                    <?php echo smarty_function_genMrtgImgUrlTag(array('shortname'=>$_smarty_tpl->tpl_vars['user']->value->getCustomer()->getShortname(),'category'=>'bits','monitorindex'=>'aggregate'),$_smarty_tpl);?>

                </a>
            </div>
        <?php }?>
    </div>
    
    <div class="span6">

        <h3>Recent Members</h3>

        <p>Our three most recent members are listed below. <?php if (!$_smarty_tpl->tpl_vars['user']->value->getCustomer()->isTypeAssociate()) {?>Have you arranged peering with them yet?<?php }?></p>

        <table id="recentMembersTable" class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>AS Number</th>
                    <th>Date Joined</th>
                    <?php if (!$_smarty_tpl->tpl_vars['user']->value->getCustomer()->isTypeAssociate()) {?>
                        <th>Peering Contact</th>
                    <?php }?>
                </tr>
            </thead>
            <tbody>

                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2+1 - (0) : 0-(2)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                    <?php if (isset($_smarty_tpl->tpl_vars['recentMembers']->value[$_smarty_tpl->tpl_vars['i']->value])) {?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['recentMembers']->value[$_smarty_tpl->tpl_vars['i']->value]->getName();?>
</td>
                            <td><?php echo smarty_modifier_asnumber($_smarty_tpl->tpl_vars['recentMembers']->value[$_smarty_tpl->tpl_vars['i']->value]->getAutsys());?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['recentMembers']->value[$_smarty_tpl->tpl_vars['i']->value]->getDatejoin()->format('Y-m-d');?>
</td>
                            <td>
                                <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['recentMembers']->value[$_smarty_tpl->tpl_vars['i']->value]->getPeeringemail();?>
"><?php echo $_smarty_tpl->tpl_vars['recentMembers']->value[$_smarty_tpl->tpl_vars['i']->value]->getPeeringemail();?>
</a>
                            </td>
                        </tr>
                    <?php }?>
                <?php }} ?>

            </tbody>
        </table>

    </div>
</div>
        
<?php echo smarty_function_tmplinclude(array('file'=>"dashboard/index-tabs/overview-news.phtml"),$_smarty_tpl);?>

        
<?php }} ?>
