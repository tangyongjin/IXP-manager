<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-03 11:40:30
         compiled from "/opt/ixpmanager/application/views/virtual-interface/forms/add-wizard.phtml" */ ?>
<?php /*%%SmartyHeaderCode:34752385658b8e5aef34e26-23969225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8348b8993eba513e8e77abefdeb7f971816ec70' => 
    array (
      0 => '/opt/ixpmanager/application/views/virtual-interface/forms/add-wizard.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34752385658b8e5aef34e26-23969225',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'element' => 0,
    'as112UiActive' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b8e5af026c27_96402301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8e5af026c27_96402301')) {function content_58b8e5af026c27_96402301($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?>
<form class="form-horizontal" enctype="application/x-www-form-urlencoded"
        accept-charset="UTF-8" method="post" horizontal="1"
        action="<?php echo smarty_function_genUrl(array('controller'=>"virtual-interface",'action'=>"add-wizard"),$_smarty_tpl);?>
"
>

<div class="row-fluid">
    <div class="span4">

        <fieldset>
            <legend>General Interface Settings</legend>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->custid;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->vlanid;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->trunk;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->ipv4enabled;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->ipv6enabled;?>


        </fieldset>

    </div>
    <div class="span4">

        <fieldset>
            <legend>Physical Interface Settings</legend>
            <?php if ($_smarty_tpl->tpl_vars['element']->value->fanout) {?>
                <div id="fanoutbox" class="hide">
                    <?php echo $_smarty_tpl->tpl_vars['element']->value->fanout;?>

                </div>
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['element']->value->switchid;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->switchportid;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->status;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->speed;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->duplex;?>


        </fieldset>

    </div>

    <div class="span4">

        <fieldset>
            <legend>General VLAN Settings</legend>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->maxbgpprefix;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->irrdbfilter;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->mcastenabled;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->rsclient;?>

            <?php if ($_smarty_tpl->tpl_vars['as112UiActive']->value) {?>
                <?php echo $_smarty_tpl->tpl_vars['element']->value->as112client;?>

            <?php }?>

        </fieldset>

    </div>
</div>

<div class="row-fluid">

    <div class="span4">
        <div id="ipv4details" class="hide">
            <?php echo $_smarty_tpl->tpl_vars['element']->value->ipv4DisplayGroup;?>

        </div>
    </div>

    <div class="span4">
        <div id="ipv6details" class="hide">
            <?php echo $_smarty_tpl->tpl_vars['element']->value->ipv6DisplayGroup;?>

        </div>
    </div>

    <div class="span4">
         <div id="fanoutdetails" class="hide">
            <?php echo $_smarty_tpl->tpl_vars['element']->value->fanoutDisplayGroup;?>

        </div>
    </div>

</div>


<?php echo $_smarty_tpl->tpl_vars['element']->value->preselectIPv4Address;?>

<?php echo $_smarty_tpl->tpl_vars['element']->value->preselectIPv6Address;?>

<?php echo $_smarty_tpl->tpl_vars['element']->value->preselectVlanInterface;?>

<?php echo $_smarty_tpl->tpl_vars['element']->value->preselectSwitchPort;?>

<?php echo $_smarty_tpl->tpl_vars['element']->value->preselectPhysicalInterface;?>


<div class="form-actions">
    <?php echo $_smarty_tpl->tpl_vars['element']->value->cancel;?>

    <?php echo $_smarty_tpl->tpl_vars['element']->value->submit;?>

</div>


</form>
<?php }} ?>
