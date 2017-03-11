<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-11 15:16:05
         compiled from "/opt/ixpmanager/application/views/statistics/p2p-single.phtml" */ ?>
<?php /*%%SmartyHeaderCode:153728475658b7703b001bc0-68234792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aa96325cc7edc2b506eea6fe4f59f0a53375672' => 
    array (
      0 => '/opt/ixpmanager/application/views/statistics/p2p-single.phtml',
      1 => 1489216561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153728475658b7703b001bc0-68234792',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7703b0a6db0_14972545',
  'variables' => 
  array (
    'keys' => 0,
    'vals' => 0,
    'countries' => 0,
    'user' => 0,
    'cust' => 0,
    'dstVli' => 0,
    'categories' => 0,
    'category' => 0,
    'cvalue' => 0,
    'cname' => 0,
    'period' => 0,
    'periods' => 0,
    'dcust' => 0,
    'srcVlis' => 0,
    'id' => 0,
    'srcVli' => 0,
    'vli' => 0,
    'protocols' => 0,
    'pvalue' => 0,
    'proto' => 0,
    'pname' => 0,
    'pid' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7703b0a6db0_14972545')) {function content_58b7703b0a6db0_14972545($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
if (!is_callable('smarty_function_genMrtgP2pImgUrl')) include '/opt/ixpmanager/application/../library/inex-smarty/functions/function.genMrtgP2pImgUrl.php';
?><?php $_smarty_tpl->tpl_vars['keys'] = new Smarty_variable(preg_split('/,\s*/','Bits,Packets,Bytes'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['vals'] = new Smarty_variable(preg_split('/,\s*/','bits,pkts,bytes'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['categories'] = new Smarty_variable(array_combine($_smarty_tpl->tpl_vars['keys']->value,$_smarty_tpl->tpl_vars['vals']->value), null, 0);?>


        
       <!-- <?php echo var_dump($_smarty_tpl->tpl_vars['countries']->value);?>
  -->

       
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
            <a href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"p2p",'shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname()),$_smarty_tpl);?>
">Peer to Peer Statistics</a>
            with <a href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"p2p",'shortname'=>$_smarty_tpl->tpl_vars['dstVli']->value->getVirtualInterface()->getCustomer()->getShortname()),$_smarty_tpl);?>
">
                <?php echo $_smarty_tpl->tpl_vars['dstVli']->value->getVirtualInterface()->getCustomer()->getName();?>

            </a>
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
<?php } else { ?>
    <div class="page-content">
        <div class="page-header">
            <h1>IXP Peer to Peer Statistics :: <?php echo $_smarty_tpl->tpl_vars['cust']->value->getName();?>
 <?php if (isset($_smarty_tpl->tpl_vars['dcust']->value)&&$_smarty_tpl->tpl_vars['dcust']->value) {?>&lt;=&gt; <?php echo $_smarty_tpl->tpl_vars['dcust']->value['cname'];?>
<?php }?></h1>
        </div>
<?php }?>

<?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>


<p>
<form action="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"p2p"),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>/shortname/<?php echo $_smarty_tpl->tpl_vars['cust']->value->getShortname();?>
<?php }?>" method="post">
<table>
<tr>
    <td width="20"></td>
    <td valign="middle"><strong>LAN:</strong></td>
    <td>
        &nbsp;
        <select name="svli" style="width: 200px;">
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


        <select name="category" style="width: 100px;">
           
           
            
            
            <?php  $_smarty_tpl->tpl_vars['cvalue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cvalue']->_loop = false;
 $_smarty_tpl->tpl_vars['cname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cvalue']->key => $_smarty_tpl->tpl_vars['cvalue']->value) {
$_smarty_tpl->tpl_vars['cvalue']->_loop = true;
 $_smarty_tpl->tpl_vars['cname']->value = $_smarty_tpl->tpl_vars['cvalue']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['cname']->value!='Errors'&&$_smarty_tpl->tpl_vars['cname']->value!='Discards') {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['cvalue']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value==$_smarty_tpl->tpl_vars['cvalue']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
</option>
                <?php }?>
            <?php } ?>
        </select>
    </td>
    <td width="20"></td>
    <td valign="middle"><strong>Protocol:</strong></td>
    <td>
        &nbsp;
        <select name="proto" style="width: 100px;">
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
        <?php if (isset($_smarty_tpl->tpl_vars['dstVli']->value)) {?><input type="hidden" name="dvli" value="<?php echo $_smarty_tpl->tpl_vars['dstVli']->value->getId();?>
" /><?php }?>
        <input class="btn" type="submit" value="ASubmit &raquo;" />
    </td>
    </tr>
</table>
</form>
</p>


<?php if (isset($_smarty_tpl->tpl_vars['dstVli']->value)&&$_smarty_tpl->tpl_vars['dstVli']->value) {?>
    <div class="row-fluid">
    
    <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['pid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pid']->_loop = false;
 $_smarty_tpl->tpl_vars['pname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['periods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pid']->key => $_smarty_tpl->tpl_vars['pid']->value) {
$_smarty_tpl->tpl_vars['pid']->_loop = true;
 $_smarty_tpl->tpl_vars['pname']->value = $_smarty_tpl->tpl_vars['pid']->key;
?>

        <div class="span6">
    
            <div class="well">
                <h4 style="vertical-align: middle">
                    <?php echo $_smarty_tpl->tpl_vars['pname']->value;?>

                </h4>
    
                <p>
                    <br />
                    <img
                        src="<?php echo smarty_function_genMrtgP2pImgUrl(array('shortname'=>$_smarty_tpl->tpl_vars['cust']->value->getShortname(),'svli'=>$_smarty_tpl->tpl_vars['srcVli']->value->getId(),'dvli'=>$_smarty_tpl->tpl_vars['dstVli']->value->getId(),'category'=>$_smarty_tpl->tpl_vars['category']->value,'proto'=>$_smarty_tpl->tpl_vars['proto']->value,'period'=>$_smarty_tpl->tpl_vars['pid']->value),$_smarty_tpl);?>
"
                        width="600"
                    />
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
    
    </div>

<?php } else { ?> 

    <div class="alert alert-info">
        <h4 class="alert-heading">Uh oh! You or your peer do not have any ports for the selected infrastructure and / or protocol.</h4>
        If you'd like to talk to us about enabling IPv6 or getting a port on the secondary infrastructure, please
        <a href="<?php echo smarty_function_genUrl(array('controller'=>"static",'action'=>"support"),$_smarty_tpl);?>
">contact us</a>.
    </div>

<?php }?> 

<?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()!=\Entities\User::AUTH_SUPERUSER) {?>
</div>
<?php }?>

<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>
<?php }} ?>
