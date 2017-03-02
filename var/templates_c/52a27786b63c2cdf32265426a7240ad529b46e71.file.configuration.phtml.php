<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:54:29
         compiled from "/opt/ixpmanager/application/views/switch/configuration.phtml" */ ?>
<?php /*%%SmartyHeaderCode:90313597958b7a585e9f470-01558226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52a27786b63c2cdf32265426a7240ad529b46e71' => 
    array (
      0 => '/opt/ixpmanager/application/views/switch/configuration.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90313597958b7a585e9f470-01558226',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'multiIXP' => 0,
    'ixps' => 0,
    'iid' => 0,
    'ixpid' => 0,
    'iname' => 0,
    'switches' => 0,
    'sid' => 0,
    'switchid' => 0,
    'sname' => 0,
    'vlans' => 0,
    'vid' => 0,
    'vlanid' => 0,
    'vname' => 0,
    'config' => 0,
    'row' => 0,
    'states' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7a586089c20_55005089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7a586089c20_55005089')) {function content_58b7a586089c20_55005089($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
if (!is_callable('smarty_modifier_asnumber')) include '/opt/ixpmanager/application/../library/inex-smarty/functions/modifier.asnumber.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml"),$_smarty_tpl);?>


<?php if (isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>"switch",'action'=>"list"),$_smarty_tpl);?>
">Switches</a> <span class="divider">/</span>
        </li>
        <li class="active">
            Configuration
        </li>

        <li class="pull-right">
            <form class="form-inline" method="post">
                <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
                    <select data-placeholder="Limit to IXP..." class="chzn-select" name="ixp">
                        <option></option>
                        <?php  $_smarty_tpl->tpl_vars['iname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iname']->_loop = false;
 $_smarty_tpl->tpl_vars['iid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ixps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iname']->key => $_smarty_tpl->tpl_vars['iname']->value) {
$_smarty_tpl->tpl_vars['iname']->_loop = true;
 $_smarty_tpl->tpl_vars['iid']->value = $_smarty_tpl->tpl_vars['iname']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['iid']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['ixpid']->value)&&$_smarty_tpl->tpl_vars['ixpid']->value==$_smarty_tpl->tpl_vars['iid']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['iname']->value;?>
</option>
                        <?php } ?>
                    </select>
                <?php }?>
                <select data-placeholder="Limit to switch..." class="chzn-select-deselect" name="sid">
                    <option></option>
                    <?php  $_smarty_tpl->tpl_vars['sname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sname']->_loop = false;
 $_smarty_tpl->tpl_vars['sid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['switches']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sname']->key => $_smarty_tpl->tpl_vars['sname']->value) {
$_smarty_tpl->tpl_vars['sname']->_loop = true;
 $_smarty_tpl->tpl_vars['sid']->value = $_smarty_tpl->tpl_vars['sname']->key;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['switchid']->value)&&$_smarty_tpl->tpl_vars['switchid']->value==$_smarty_tpl->tpl_vars['sid']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['sname']->value;?>
</option>
                    <?php } ?>
                </select>

                <?php if (count($_smarty_tpl->tpl_vars['vlans']->value)>1) {?>
                    <select data-placeholder="Limit to peering LAN..." class="chzn-select-deselect" name="vid">
                        <option></option>
                        <?php  $_smarty_tpl->tpl_vars['vname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vname']->_loop = false;
 $_smarty_tpl->tpl_vars['vid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vlans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vname']->key => $_smarty_tpl->tpl_vars['vname']->value) {
$_smarty_tpl->tpl_vars['vname']->_loop = true;
 $_smarty_tpl->tpl_vars['vid']->value = $_smarty_tpl->tpl_vars['vname']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['vid']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['vlanid']->value)&&$_smarty_tpl->tpl_vars['vlanid']->value==$_smarty_tpl->tpl_vars['vid']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['vname']->value;?>
</option>
                        <?php } ?>
                    </select>
                <?php }?>

                <button type="submit" class="btn btn-small" style="display: inline-block; position: relative;" >Update</button>
            </form>
        </li>
    </ul>

    <div>
<?php } else { ?>
    <div class="page-content" >

        <div class="page-header" >
            <h1 style="display: inline;">Switch Configuration</h1>

            <span style="float: right; margin-top: -10px;">
                <form class="form-inline" method="post">
                    <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value&&count($_smarty_tpl->tpl_vars['ixps']->value)>1) {?>
                        <select data-placeholder="Limit to IXP..." class="chzn-select" name="ixp">
                            <option></option>
                            <?php  $_smarty_tpl->tpl_vars['iname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iname']->_loop = false;
 $_smarty_tpl->tpl_vars['iid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ixps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iname']->key => $_smarty_tpl->tpl_vars['iname']->value) {
$_smarty_tpl->tpl_vars['iname']->_loop = true;
 $_smarty_tpl->tpl_vars['iid']->value = $_smarty_tpl->tpl_vars['iname']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['iid']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['ixpid']->value)&&$_smarty_tpl->tpl_vars['ixpid']->value==$_smarty_tpl->tpl_vars['iid']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['iname']->value;?>
</option>
                            <?php } ?>
                        </select>
                    <?php }?>

                    <select data-placeholder="Limit to switch..." class="chzn-select-deselect" name="sid">
                        <option></option>
                        <?php  $_smarty_tpl->tpl_vars['sname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sname']->_loop = false;
 $_smarty_tpl->tpl_vars['sid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['switches']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sname']->key => $_smarty_tpl->tpl_vars['sname']->value) {
$_smarty_tpl->tpl_vars['sname']->_loop = true;
 $_smarty_tpl->tpl_vars['sid']->value = $_smarty_tpl->tpl_vars['sname']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['switchid']->value)&&$_smarty_tpl->tpl_vars['switchid']->value==$_smarty_tpl->tpl_vars['sid']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['sname']->value;?>
</option>
                        <?php } ?>
                    </select>

                    <?php if (count($_smarty_tpl->tpl_vars['vlans']->value)>1) {?>
                        <select data-placeholder="Limit to peering LAN..." class="chzn-select-deselect" name="vid">
                            <option></option>
                            <?php  $_smarty_tpl->tpl_vars['vname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vname']->_loop = false;
 $_smarty_tpl->tpl_vars['vid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vlans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vname']->key => $_smarty_tpl->tpl_vars['vname']->value) {
$_smarty_tpl->tpl_vars['vname']->_loop = true;
 $_smarty_tpl->tpl_vars['vid']->value = $_smarty_tpl->tpl_vars['vname']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['vid']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['vlanid']->value)&&$_smarty_tpl->tpl_vars['vlanid']->value==$_smarty_tpl->tpl_vars['vid']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['vname']->value;?>
</option>
                            <?php } ?>
                        </select>
                    <?php }?>

                    <button type="submit" class="btn btn-small" style="display: inline-block; position: relative;" >Update</button>
                </form>
            </span>
        </div>
<?php }?>

    <?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>


    <table id='frontend-list-table' class="table table-bordered">

    <thead>
        <tr>
            <th>Customer</th>
            <?php if (!isset($_smarty_tpl->tpl_vars['switchid']->value)) {?><th>Switch</th><?php }?>
            <th>Port</th>
            <th>Speed</th>
            <?php if (!isset($_smarty_tpl->tpl_vars['vlanid']->value)&&count($_smarty_tpl->tpl_vars['vlans']->value)>1) {?><th>Peering LAN</th><?php }?>
            <th>ASN</th>
            <th>Route Server</th>
            <th>IPv4</th>
            <th>IPv6</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['idx'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['config']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['idx']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
            <tr>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>
                        <a href="<?php echo smarty_function_genUrl(array('controller'=>"customer",'action'=>"view",'id'=>$_smarty_tpl->tpl_vars['row']->value['custid']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['customer'];?>
</a>
                    <?php } else { ?>
                        <a href="<?php echo smarty_function_genUrl(array('controller'=>"customer",'action'=>"detail",'id'=>$_smarty_tpl->tpl_vars['row']->value['custid']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['customer'];?>
</a>
                    <?php }?>
                </td>
                <?php if (!isset($_smarty_tpl->tpl_vars['switchid']->value)) {?>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>
                            <a href="<?php echo smarty_function_genUrl(array('controller'=>"switch",'action'=>"port-report",'id'=>$_smarty_tpl->tpl_vars['row']->value['switchid']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['switchname'];?>
</a>
                        <?php } else { ?>
                            <a href="<?php echo smarty_function_genUrl(array('controller'=>"switch",'action'=>"configuration",'sid'=>$_smarty_tpl->tpl_vars['row']->value['switchid']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['switchname'];?>
</a>
                        <?php }?>
                    </td>
                <?php }?>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ifName'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['speed'];?>
</td>
                <?php if (!isset($_smarty_tpl->tpl_vars['vlanid']->value)&&count($_smarty_tpl->tpl_vars['vlans']->value)>1) {?><td><?php echo $_smarty_tpl->tpl_vars['row']->value['vlan'];?>
</td><?php }?>
                <td><?php echo smarty_modifier_asnumber($_smarty_tpl->tpl_vars['row']->value['asn']);?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['row']->value['rsclient']) {?>Yes<?php } else { ?>No<?php }?></td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ipv4address'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ipv6address'];?>
</td>
                <td><?php if (isset($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['row']->value['portstatus']])) {?><?php echo $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['row']->value['portstatus']];?>
<?php }?></td>
            </tr>
        <?php } ?>
    </tbody>

    </table>
</div>

<script type="text/javascript">
<?php echo smarty_function_tmplinclude(array('file'=>"switch/js/configuration.js"),$_smarty_tpl);?>

</script>
<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>

<?php }} ?>
