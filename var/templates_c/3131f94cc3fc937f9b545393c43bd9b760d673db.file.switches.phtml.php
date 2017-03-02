<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:53:14
         compiled from "/opt/ixpmanager/application/views/statistics/switches.phtml" */ ?>
<?php /*%%SmartyHeaderCode:105434623058b7a53a4f7b91-36161529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3131f94cc3fc937f9b545393c43bd9b760d673db' => 
    array (
      0 => '/opt/ixpmanager/application/views/statistics/switches.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105434623058b7a53a4f7b91-36161529',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'switch' => 0,
    'switches' => 0,
    'categories' => 0,
    'category' => 0,
    'cvalue' => 0,
    'cname' => 0,
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
  'unifunc' => 'content_58b7a53a55b3c9_61863151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7a53a55b3c9_61863151')) {function content_58b7a53a55b3c9_61863151($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
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
        <li>
            Switch Aggregate Graphs <span class="divider">/</span>
        </li>
        <li class="active">
            <?php echo $_smarty_tpl->tpl_vars['switches']->value[$_smarty_tpl->tpl_vars['switch']->value]['name'];?>
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
<?php } else { ?>
    <div class="page-content">
        <div class="page-header">
            <h1>Switch Aggregate Graphs - <?php echo $_smarty_tpl->tpl_vars['switches']->value[$_smarty_tpl->tpl_vars['switch']->value]['name'];?>
 (<?php  $_smarty_tpl->tpl_vars['cvalue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cvalue']->_loop = false;
 $_smarty_tpl->tpl_vars['cname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cvalue']->key => $_smarty_tpl->tpl_vars['cvalue']->value) {
$_smarty_tpl->tpl_vars['cvalue']->_loop = true;
 $_smarty_tpl->tpl_vars['cname']->value = $_smarty_tpl->tpl_vars['cvalue']->key;
?><?php if ($_smarty_tpl->tpl_vars['category']->value==$_smarty_tpl->tpl_vars['cvalue']->value) {?><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
<?php }?><?php } ?>)</h1>
        </div>
<?php }?>


<?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>


<div class="row-fluid">
    <div class="span12">
        <form action="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"switches"),$_smarty_tpl);?>
" method="post" class="form-horizontal">
            <strong>Select Switch:</strong>
            <select name="switch" onchange="this.form.submit();" class="chzn-select">
                <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['switches']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['switch']->value==$_smarty_tpl->tpl_vars['id']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</option>
                <?php } ?>
            </select>
            <strong>Category:</strong>
            <select name="category" onchange="this.form.submit();" class="chzn-select">
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
            <?php echo smarty_function_genMrtgGraphBox(array('shortname'=>'X_SwitchAggregate','period'=>$_smarty_tpl->tpl_vars['pvalue']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value,'values'=>$_smarty_tpl->tpl_vars['stats']->value[$_smarty_tpl->tpl_vars['pvalue']->value],'graph'=>$_smarty_tpl->tpl_vars['switches']->value[$_smarty_tpl->tpl_vars['switch']->value]['name']),$_smarty_tpl);?>

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
