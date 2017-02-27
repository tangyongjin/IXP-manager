<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-26 17:46:13
         compiled from "/opt/ixpmanager/application/views/admin/index.phtml" */ ?>
<?php /*%%SmartyHeaderCode:132265604358b2a3e5d20128-77305864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd556016874476ebd1d0d3d15ab32bef805b68b3b' => 
    array (
      0 => '/opt/ixpmanager/application/views/admin/index.phtml',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132265604358b2a3e5d20128-77305864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ctypes' => 0,
    't' => 0,
    'c' => 0,
    'multiIXP' => 0,
    'speeds' => 0,
    'k' => 0,
    'byixp' => 0,
    'n' => 0,
    'spds' => 0,
    'rowcount' => 0,
    'colcount' => 0,
    'i' => 0,
    'bylocation' => 0,
    'bylan' => 0,
    'rowcap' => 0,
    'graphs' => 0,
    'data' => 0,
    'id' => 0,
    'stats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b2a3e5df23f8_13019278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b2a3e5df23f8_13019278')) {function content_58b2a3e5df23f8_13019278($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
if (!is_callable('smarty_function_genMrtgGraphBox')) include '/opt/ixpmanager/application/../library/inex-smarty/functions/function.genMrtgGraphBox.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml",'pageTitle'=>"IXP Manager :: Administrator's Home"),$_smarty_tpl);?>


<ul class="breadcrumb">
    <li class="active">
        <a href="<?php echo smarty_function_genUrl(array('controller'=>'admin','action'=>'index'),$_smarty_tpl);?>
">Home</a>
    </li>
</ul>

<?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>


<div class="row-fluid">

<div class="span6">

    <div class="row-fluid">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Customer Type</th>
                    <th>Count</th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ctypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['t']->value = $_smarty_tpl->tpl_vars['c']->key;
?>

                    <tr>
                        <td><?php echo \Entities\Customer::$CUST_TYPES_TEXT[$_smarty_tpl->tpl_vars['t']->value];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['c']->value;?>
</td>
                    </tr>

                <?php } ?>
            </tbody>

        </table>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
        <br />
        <h3>Customer Ports by IXP</h3>

        <div class="row-fluid">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>IXP</th>

                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['speeds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                            <th><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</th>
                        <?php } ?>

                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $_smarty_tpl->tpl_vars['colcount'] = new Smarty_variable(0, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['spds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['spds']->_loop = false;
 $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['byixp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['spds']->key => $_smarty_tpl->tpl_vars['spds']->value) {
$_smarty_tpl->tpl_vars['spds']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['spds']->key;
?>
                        <?php $_smarty_tpl->tpl_vars['rowcount'] = new Smarty_variable(0, null, 0);?>

                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['n']->value;?>
</td>
                            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['speeds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                                <td>
                                    <?php if (isset($_smarty_tpl->tpl_vars['spds']->value[$_smarty_tpl->tpl_vars['k']->value])) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['spds']->value[$_smarty_tpl->tpl_vars['k']->value];?>

                                        <?php $_smarty_tpl->tpl_vars['rowcount'] = new Smarty_variable($_smarty_tpl->tpl_vars['rowcount']->value+$_smarty_tpl->tpl_vars['spds']->value[$_smarty_tpl->tpl_vars['k']->value], null, 0);?>
                                        <?php } else { ?>
                                        0
                                    <?php }?>
                                </td>
                            <?php } ?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rowcount']->value;?>
</td>
                        </tr>
                        <?php $_smarty_tpl->tpl_vars['colcount'] = new Smarty_variable($_smarty_tpl->tpl_vars['rowcount']->value+$_smarty_tpl->tpl_vars['colcount']->value, null, 0);?>

                    <?php } ?>

                    <tr>
                        <td><strong>Totals</strong></td>
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['speeds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                            <td>
                                <strong><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</strong>
                            </td>
                        <?php } ?>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['colcount']->value;?>
</strong></td>
                    </tr>
                </tbody>

            </table>
        </div>
    <?php }?>

    <br />
    <h3>Customer Ports by Location</h3>

    <div class="row-fluid">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Location</th>

                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['speeds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                        <th><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</th>
                    <?php } ?>

                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $_smarty_tpl->tpl_vars['colcount'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['spds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['spds']->_loop = false;
 $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bylocation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['spds']->key => $_smarty_tpl->tpl_vars['spds']->value) {
$_smarty_tpl->tpl_vars['spds']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['spds']->key;
?>
                    <?php $_smarty_tpl->tpl_vars['rowcount'] = new Smarty_variable(0, null, 0);?>

                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['n']->value;?>
</td>
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['speeds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                            <td>
                                <?php if (isset($_smarty_tpl->tpl_vars['spds']->value[$_smarty_tpl->tpl_vars['k']->value])) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['spds']->value[$_smarty_tpl->tpl_vars['k']->value];?>

                                    <?php $_smarty_tpl->tpl_vars['rowcount'] = new Smarty_variable($_smarty_tpl->tpl_vars['rowcount']->value+$_smarty_tpl->tpl_vars['spds']->value[$_smarty_tpl->tpl_vars['k']->value], null, 0);?>
                                    <?php } else { ?>
                                    0
                                <?php }?>
                            </td>
                        <?php } ?>
                        <td><?php echo $_smarty_tpl->tpl_vars['rowcount']->value;?>
</td>
                    </tr>
                    <?php $_smarty_tpl->tpl_vars['colcount'] = new Smarty_variable($_smarty_tpl->tpl_vars['rowcount']->value+$_smarty_tpl->tpl_vars['colcount']->value, null, 0);?>

                <?php } ?>

                <tr>
                    <td><strong>Totals</strong></td>
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['speeds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                        <td>
                            <strong><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</strong>
                        </td>
                    <?php } ?>
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['colcount']->value;?>
</strong></td>
                </tr>
            </tbody>

        </table>
    </div>

    <br />
    <h3>Customer Ports by Infrastructure</h3>

    <div class="row-fluid">
        <table class="table  table-bordered table-striped">
            <thead>
                <tr>
                    <th>Infrastructure</th>

                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['speeds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                        <th><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</th>
                    <?php } ?>

                    <th>Total</th>
                    <th>Connected<br>Capacity</th>
                </tr>
            </thead>
            <tbody>
                <?php $_smarty_tpl->tpl_vars['colcount'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['spds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['spds']->_loop = false;
 $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bylan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['spds']->key => $_smarty_tpl->tpl_vars['spds']->value) {
$_smarty_tpl->tpl_vars['spds']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['spds']->key;
?>

                    <?php $_smarty_tpl->tpl_vars['rowcount'] = new Smarty_variable(0, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['rowcap'] = new Smarty_variable(0, null, 0);?>

                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['n']->value;?>
</td>
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['speeds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                            <td>
                                <?php if (isset($_smarty_tpl->tpl_vars['spds']->value[$_smarty_tpl->tpl_vars['k']->value])) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['spds']->value[$_smarty_tpl->tpl_vars['k']->value];?>

                                    <?php $_smarty_tpl->tpl_vars['rowcount'] = new Smarty_variable($_smarty_tpl->tpl_vars['rowcount']->value+$_smarty_tpl->tpl_vars['spds']->value[$_smarty_tpl->tpl_vars['k']->value], null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['rowcap'] = new Smarty_variable($_smarty_tpl->tpl_vars['rowcap']->value+$_smarty_tpl->tpl_vars['spds']->value[$_smarty_tpl->tpl_vars['k']->value]*$_smarty_tpl->tpl_vars['k']->value, null, 0);?>
                                <?php } else { ?>
                                    0
                                <?php }?>
                            </td>
                        <?php } ?>
                        <td><?php echo $_smarty_tpl->tpl_vars['rowcount']->value;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['rowcap']->value/1000;?>
G</td>
                    </tr>
                    <?php $_smarty_tpl->tpl_vars['colcount'] = new Smarty_variable($_smarty_tpl->tpl_vars['rowcount']->value+$_smarty_tpl->tpl_vars['colcount']->value, null, 0);?>
                <?php } ?>

                <tr>
                    <td><strong>Totals</strong></td>
                    <?php $_smarty_tpl->tpl_vars['rowcap'] = new Smarty_variable(0, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['speeds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                        <?php $_smarty_tpl->tpl_vars['rowcap'] = new Smarty_variable($_smarty_tpl->tpl_vars['rowcap']->value+$_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['k']->value, null, 0);?>
                        <td>
                            <strong><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</strong>
                        </td>
                    <?php } ?>
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['colcount']->value;?>
</strong></td>
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['rowcap']->value/1000;?>
G</strong></td>
                </tr>

            </tbody>

        </table>
    </div>

</div>

<div class="span6">

        <?php if (isset($_smarty_tpl->tpl_vars['graphs']->value)&&count($_smarty_tpl->tpl_vars['graphs']->value)) {?>
            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['graphs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
                <div class="row-fluid">
                    <div class="well">
                        <h3><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h3>

                        <p>
                            <?php echo smarty_function_genMrtgGraphBox(array('ixp'=>$_smarty_tpl->tpl_vars['id']->value,'shortname'=>'X_Peering','period'=>'month','category'=>'bits','values'=>$_smarty_tpl->tpl_vars['stats']->value[$_smarty_tpl->tpl_vars['id']->value],'graph'=>$_smarty_tpl->tpl_vars['data']->value['name']),$_smarty_tpl);?>

                        </p>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="row-fluid">
               <div class="well">
                   <h3>Configure Your Aggregate Graph(s)</h3>

                   <p>
                       Aggregate graphs have not been configured.
                       Please see <a href="https://github.com/inex/IXP-Manager/wiki/MRTG---Traffic-Graphs">this documentation</a>.
                   </p>
               </div>
            </div>
        <?php }?>
</div>
</div>





<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>

<?php }} ?>
