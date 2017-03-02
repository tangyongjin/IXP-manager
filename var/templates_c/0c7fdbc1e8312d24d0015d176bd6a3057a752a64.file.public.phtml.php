<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:52:05
         compiled from "/opt/ixpmanager/application/views/statistics/public.phtml" */ ?>
<?php /*%%SmartyHeaderCode:84748570558b7a4f5588329-80304716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c7fdbc1e8312d24d0015d176bd6a3057a752a64' => 
    array (
      0 => '/opt/ixpmanager/application/views/statistics/public.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84748570558b7a4f5588329-80304716',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'options' => 0,
    'graph' => 0,
    'graphs' => 0,
    'categories' => 0,
    'category' => 0,
    'cvalue' => 0,
    'cname' => 0,
    'multiIXP' => 0,
    'id' => 0,
    'data' => 0,
    'cval' => 0,
    'periods' => 0,
    'pname' => 0,
    'pvalue' => 0,
    'stats' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7a4f55e3517_01098236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7a4f55e3517_01098236')) {function content_58b7a4f55e3517_01098236($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
if (!is_callable('smarty_function_genMrtgGraphBox')) include '/opt/ixpmanager/application/../library/inex-smarty/functions/function.genMrtgGraphBox.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==3) {?>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
">Home</a> <span class="divider">/</span>
        </li>
        <li class="active">
            <?php echo $_smarty_tpl->tpl_vars['options']->value['identity']['orgname'];?>
 Public Traffic Statistics
        </li>
    </ul>
<?php } else { ?>
    <div class="page-content">
        <div class="page-header">
            <h1><?php echo $_smarty_tpl->tpl_vars['options']->value['identity']['orgname'];?>
 Public Traffic Statistics</h1>
        </div>
<?php }?>

<h3><?php echo $_smarty_tpl->tpl_vars['graphs']->value[$_smarty_tpl->tpl_vars['graph']->value]['title'];?>
 :: <?php  $_smarty_tpl->tpl_vars['cvalue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cvalue']->_loop = false;
 $_smarty_tpl->tpl_vars['cname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cvalue']->key => $_smarty_tpl->tpl_vars['cvalue']->value) {
$_smarty_tpl->tpl_vars['cvalue']->_loop = true;
 $_smarty_tpl->tpl_vars['cname']->value = $_smarty_tpl->tpl_vars['cvalue']->key;
?><?php if ($_smarty_tpl->tpl_vars['category']->value==$_smarty_tpl->tpl_vars['cvalue']->value) {?><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
<?php }?><?php } ?></h3>

<?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>


<p>
<form action="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"public"),$_smarty_tpl);?>
" method="post" class="form-horizontal">
<table>
<tr>
    <td width="20"></td>
    <td valign="middle"><strong>Select <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>IXP / <?php }?>Infrastructure:&nbsp;</strong></td>
    <td>
        <select name="graph" class="chzn-select" onchange="this.form.submit();">
            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['graphs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['graph']->value==$_smarty_tpl->tpl_vars['id']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</option>
            <?php } ?>
        </select>
    </td>
    <td width="20"></td>
    <td valign="middle"><strong>Category:&nbsp;</strong></td>
    <td>
        <select name="category" class="chzn-select" onchange="this.form.submit();">
            <?php  $_smarty_tpl->tpl_vars['cval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cval']->_loop = false;
 $_smarty_tpl->tpl_vars['cname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cval']->key => $_smarty_tpl->tpl_vars['cval']->value) {
$_smarty_tpl->tpl_vars['cval']->_loop = true;
 $_smarty_tpl->tpl_vars['cname']->value = $_smarty_tpl->tpl_vars['cval']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['cval']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value==$_smarty_tpl->tpl_vars['cval']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
</option>
            <?php } ?>
        </select>
    </td>
</tr>
</table>
</form>
</p>

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
                <?php echo smarty_function_genMrtgGraphBox(array('shortname'=>'X_Peering','period'=>$_smarty_tpl->tpl_vars['pvalue']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value,'values'=>$_smarty_tpl->tpl_vars['stats']->value[$_smarty_tpl->tpl_vars['pvalue']->value],'graph'=>$_smarty_tpl->tpl_vars['graphs']->value[$_smarty_tpl->tpl_vars['graph']->value]['name']),$_smarty_tpl);?>

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


<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>


<?php }} ?>
