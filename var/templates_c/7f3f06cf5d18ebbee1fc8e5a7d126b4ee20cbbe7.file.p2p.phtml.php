<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 09:06:48
         compiled from "/opt/ixpmanager/application/views/statistics/p2p.phtml" */ ?>
<?php /*%%SmartyHeaderCode:4897821058b770288824c0-72900103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f3f06cf5d18ebbee1fc8e5a7d126b4ee20cbbe7' => 
    array (
      0 => '/opt/ixpmanager/application/views/statistics/p2p.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4897821058b770288824c0-72900103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keys' => 0,
    'vals' => 0,
    'user' => 0,
    'cust' => 0,
    'categories' => 0,
    'category' => 0,
    'cvalue' => 0,
    'cname' => 0,
    'period' => 0,
    'periods' => 0,
    'multiIXP' => 0,
    'ixps' => 0,
    'i' => 0,
    'ixp' => 0,
    'srcVlis' => 0,
    'id' => 0,
    'srcVli' => 0,
    'vli' => 0,
    'protocols' => 0,
    'pvalue' => 0,
    'proto' => 0,
    'pname' => 0,
    'dstVlis' => 0,
    'dvli' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b77028965037_93849066',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b77028965037_93849066')) {function content_58b77028965037_93849066($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
if (!is_callable('smarty_function_genMrtgP2pImgUrl')) include '/opt/ixpmanager/application/../library/inex-smarty/functions/function.genMrtgP2pImgUrl.php';
?><?php $_smarty_tpl->tpl_vars['keys'] = new Smarty_variable(preg_split('/,\s*/','Bits,Packets,Bytes'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['vals'] = new Smarty_variable(preg_split('/,\s*/','bits,pkts,bytes'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['categories'] = new Smarty_variable(array_combine($_smarty_tpl->tpl_vars['keys']->value,$_smarty_tpl->tpl_vars['vals']->value), null, 0);?>


<?php echo smarty_function_tmplinclude(array('file'=>"header.phtml"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'statistics','action'=>'members'),$_smarty_tpl);?>
">Statistics</a> <span class="divider">/</span>
        </li>
        <li>
             <a href="<?php echo smarty_function_genUrl(array('controller'=>"customer",'action'=>"overview",'id'=>$_smarty_tpl->tpl_vars['cust']->value->getId()),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['cust']->value->getName();?>
</a> <span class="divider">/</span>
        </li>
        <li class="active">
            Peer to Peer Statistics
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
        <li class="pull-right"  style="margin-top: -6px;">
            <div class="btn-toolbar" style="display: inline;">
                <a class="btn btn-small" href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"member",'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname()),$_smarty_tpl);?>
">
                    Statistics Overview
                </a>
            </div>
        </li>
        
    </ul>
    <div>
<?php } else { ?>
    <div class="page-content">
        <div class="page-header">
            <h1>IXP Peer to Peer Statistics :: <?php echo $_smarty_tpl->tpl_vars['cust']->value->getName();?>
</h1>
        </div>
<?php }?>

<?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>


<p>
<form action="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"p2p"),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>/shortname/<?php echo $_smarty_tpl->tpl_vars['cust']->value->getShortname();?>
<?php }?>" method="post">
<table>
<tr>
    <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
        <td valign="middle"><strong>IXP:</strong></td>
        <td>
            &nbsp;
            <select name="ixp" style="width: 100px;" class="chzn-select" onchange="this.form.submit();">
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ixps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['ixp']->value->getId()==$_smarty_tpl->tpl_vars['i']->value->getId()) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value->getShortname();?>
</option>
                <?php } ?>
            </select>
        </td>
        <td width="20"></td>
    <?php } else { ?>
        <input type="hidden" name="ixp" value="<?php echo $_smarty_tpl->tpl_vars['ixp']->value->getId();?>
" />
    <?php }?>
    
    <td valign="middle"><strong>Network:</strong></td>
    <td>
        &nbsp;
        <select name="svli" style="width: 200px;" class="chzn-select">
            <?php  $_smarty_tpl->tpl_vars['vli'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vli']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['srcVlis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vli']->key => $_smarty_tpl->tpl_vars['vli']->value) {
$_smarty_tpl->tpl_vars['vli']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['vli']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['srcVli']->value==$_smarty_tpl->tpl_vars['vli']->value) {?>selected="selected"<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['vli']->value->getVlan()->getName();?>

                </option>
            <?php } ?>
        </select>
    </td>
    <td width="20"></td>
    <td valign="middle"><strong>Graph Type:</strong></td>
    <td>
        &nbsp;
        <select name="category" style="width: 100px;" class="chzn-select">
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
    </td>
    <td width="20"></td>
    <td valign="middle"><strong>Period:</strong></td>
    <td>
        &nbsp;
        <select name="period" style="width: 100px;" class="chzn-select">
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
    </td>
    <td width="20"></td>
    <td valign="middle"><strong>Protocol:</strong></td>
    <td>
        &nbsp;
        <select name="proto" style="width: 100px;" class="chzn-select">
            <?php  $_smarty_tpl->tpl_vars['pvalue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pvalue']->_loop = false;
 $_smarty_tpl->tpl_vars['pname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['protocols']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pvalue']->key => $_smarty_tpl->tpl_vars['pvalue']->value) {
$_smarty_tpl->tpl_vars['pvalue']->_loop = true;
 $_smarty_tpl->tpl_vars['pname']->value = $_smarty_tpl->tpl_vars['pvalue']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['pvalue']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['proto']->value==$_smarty_tpl->tpl_vars['pvalue']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['pname']->value;?>
</option>
            <?php } ?>
        </select>
    </td>
    <td width="20"></td>
    <td valign="middle">
        <input class="btn" type="submit" value="BSubmit &raquo;" />
    </td>
    </tr>
</table>
</form>
</p>


<div class="row-fluid">

<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>


    <?php  $_smarty_tpl->tpl_vars['dvli'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dvli']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dstVlis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dvli']->key => $_smarty_tpl->tpl_vars['dvli']->value) {
$_smarty_tpl->tpl_vars['dvli']->_loop = true;
?>
        <div class="span3">
    
            <div class="well">
                <h4 style="vertical-align: middle">
                    <?php echo $_smarty_tpl->tpl_vars['dvli']->value->getVirtualInterface()->getCustomer()->getName();?>

                </h4>
    
                <p>
                    <br />
                    <a href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"p2p",'ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId(),'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname(),'svli'=>$_smarty_tpl->tpl_vars['srcVli']->value->getId(),'dvli'=>$_smarty_tpl->tpl_vars['dvli']->value->getId(),'category'=>$_smarty_tpl->tpl_vars['category']->value,'period'=>$_smarty_tpl->tpl_vars['period']->value,'proto'=>$_smarty_tpl->tpl_vars['proto']->value),$_smarty_tpl);?>
">
                        <img
                            src="<?php echo smarty_function_genMrtgP2pImgUrl(array('ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId(),'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname(),'svli'=>$_smarty_tpl->tpl_vars['srcVli']->value->getId(),'dvli'=>$_smarty_tpl->tpl_vars['dvli']->value->getId(),'category'=>$_smarty_tpl->tpl_vars['category']->value,'period'=>$_smarty_tpl->tpl_vars['period']->value,'proto'=>$_smarty_tpl->tpl_vars['proto']->value),$_smarty_tpl);?>
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
    
    
<?php } else { ?>


    <?php  $_smarty_tpl->tpl_vars['dvli'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dvli']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dstVlis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dvli']->key => $_smarty_tpl->tpl_vars['dvli']->value) {
$_smarty_tpl->tpl_vars['dvli']->_loop = true;
?>
    
        <div class="span6">
    
            <div class="well">
                <h4 style="vertical-align: middle">
                    <?php echo $_smarty_tpl->tpl_vars['dvli']->value->getVirtualInterface()->getCustomer()->getName();?>

                </h4>
    
                <p>
                    <br />
                    <a href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"p2p",'ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId(),'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname(),'svli'=>$_smarty_tpl->tpl_vars['srcVli']->value->getId(),'dvli'=>$_smarty_tpl->tpl_vars['dvli']->value->getId(),'category'=>$_smarty_tpl->tpl_vars['category']->value,'period'=>$_smarty_tpl->tpl_vars['period']->value,'proto'=>$_smarty_tpl->tpl_vars['proto']->value),$_smarty_tpl);?>
">
                        <img
                            src="<?php echo smarty_function_genMrtgP2pImgUrl(array('ixp'=>$_smarty_tpl->tpl_vars['ixp']->value->getId(),'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname(),'svli'=>$_smarty_tpl->tpl_vars['srcVli']->value->getId(),'dvli'=>$_smarty_tpl->tpl_vars['dvli']->value->getId(),'category'=>$_smarty_tpl->tpl_vars['category']->value,'proto'=>$_smarty_tpl->tpl_vars['proto']->value,'period'=>$_smarty_tpl->tpl_vars['period']->value),$_smarty_tpl);?>
"
                            width="600"
                        />
                    </a>
                </p>
            </div>
    
        </div>
    
        <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
    
        <?php if ($_smarty_tpl->tpl_vars['count']->value%2==0) {?>
            </div><br /><div class="row-fluid">
        <?php }?>

    <?php } ?>
    
    <?php if ($_smarty_tpl->tpl_vars['count']->value%2!=0) {?>
        <div class="span6"></div>
        <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
    <?php }?>
    
    
<?php }?>
    
</div>

</div>

<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>
<?php }} ?>
