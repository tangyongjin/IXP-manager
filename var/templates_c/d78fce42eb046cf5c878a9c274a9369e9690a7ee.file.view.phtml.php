<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 16:16:50
         compiled from "/opt/ixpmanager/application/views/frontend/view.phtml" */ ?>
<?php /*%%SmartyHeaderCode:140522712858b7d4f214ef29-14081312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd78fce42eb046cf5c878a9c274a9369e9690a7ee' => 
    array (
      0 => '/opt/ixpmanager/application/views/frontend/view.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140522712858b7d4f214ef29-14081312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'controller' => 0,
    'feParams' => 0,
    'viewToolbar' => 0,
    'object' => 0,
    'viewPreamble' => 0,
    'cconf' => 0,
    'col' => 0,
    'FE_COL_TYPES' => 0,
    'hasOneId' => 0,
    'row' => 0,
    'viewPostamble' => 0,
    'viewScript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7d4f21f0a79_39569150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7d4f21f0a79_39569150')) {function content_58b7d4f21f0a79_39569150($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
if (!is_callable('smarty_modifier_date_format')) include '/opt/ixpmanager/application/../vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml"),$_smarty_tpl);?>


<?php if (isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>"list"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['feParams']->value->pagetitle;?>
</a> <span class="divider">/</span>
        </li>
        <li class="active">
            View <?php echo $_smarty_tpl->tpl_vars['feParams']->value->titleSingular;?>

        </li>
        
        <li class="pull-right">
            
            <?php if ($_smarty_tpl->tpl_vars['viewToolbar']->value) {?>
                <?php echo smarty_function_tmplinclude(array('file'=>$_smarty_tpl->tpl_vars['viewToolbar']->value),$_smarty_tpl);?>

            <?php } else { ?>
                <div class="btn-group">
                    <a class="btn btn-mini" href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'list'),$_smarty_tpl);?>
"><i class="icon-list"></i></a>
                    <?php if (!isset($_smarty_tpl->tpl_vars['feParams']->value->readonly)||!$_smarty_tpl->tpl_vars['feParams']->value->readonly) {?>
                        <a class="btn btn-mini" href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'edit','id'=>$_smarty_tpl->tpl_vars['object']->value['id']),$_smarty_tpl);?>
"><i class="icon-pencil"></i></a>
                        <a class="btn btn-mini" href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'add'),$_smarty_tpl);?>
"><i class="icon-plus"></i></a>
                    <?php }?>
                </div>
            <?php }?>
        </li>
    </ul>

    <div>
<?php } else { ?>
    <div class="page-content" >
    
        <div class="page-header" >
            <h1 style="display: inline;"><?php echo $_smarty_tpl->tpl_vars['feParams']->value->pagetitle;?>
</h1>
            
            <span style="float: right; margin-top: -10px;">
                
                <?php if ($_smarty_tpl->tpl_vars['viewToolbar']->value) {?>
                    <?php echo smarty_function_tmplinclude(array('file'=>$_smarty_tpl->tpl_vars['viewToolbar']->value),$_smarty_tpl);?>

                <?php } else { ?>
                    <div class="btn-toolbar">
                    	<div class="btn-group">
                            <a class="btn" href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'list'),$_smarty_tpl);?>
"><i class="icon-list"></i></a>
                            <a class="btn" href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'edit','id'=>$_smarty_tpl->tpl_vars['object']->value['id']),$_smarty_tpl);?>
"><i class="icon-pencil"></i></a>
                            <a class="btn" href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'add'),$_smarty_tpl);?>
"><i class="icon-plus"></i></a>
                        </div>
                    </div>
                <?php }?>
            </span>
        </div>
<?php }?>
    
    <?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>


    
    <?php if ($_smarty_tpl->tpl_vars['viewPreamble']->value) {?><?php echo smarty_function_tmplinclude(array('file'=>$_smarty_tpl->tpl_vars['viewPreamble']->value),$_smarty_tpl);?>
<?php }?>

    <dl>
        <?php  $_smarty_tpl->tpl_vars['cconf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cconf']->_loop = false;
 $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feParams']->value->viewColumns; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cconf']->key => $_smarty_tpl->tpl_vars['cconf']->value) {
$_smarty_tpl->tpl_vars['cconf']->_loop = true;
 $_smarty_tpl->tpl_vars['col']->value = $_smarty_tpl->tpl_vars['cconf']->key;
?>
            <?php if (!is_array($_smarty_tpl->tpl_vars['cconf']->value)||!isset($_smarty_tpl->tpl_vars['cconf']->value['display'])||$_smarty_tpl->tpl_vars['cconf']->value['display']) {?>
                <dt>
                    <?php if (!is_array($_smarty_tpl->tpl_vars['cconf']->value)) {?><?php echo $_smarty_tpl->tpl_vars['cconf']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['cconf']->value['title'];?>
<?php }?>
                </dt>
                <dd>
                    <?php if (!is_array($_smarty_tpl->tpl_vars['cconf']->value)) {?>
                        <?php if ($_smarty_tpl->tpl_vars['object']->value[$_smarty_tpl->tpl_vars['col']->value]==false) {?>0<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['object']->value[$_smarty_tpl->tpl_vars['col']->value];?>
<?php }?>
                    <?php } elseif (isset($_smarty_tpl->tpl_vars['cconf']->value['type'])) {?>
                        <?php if ($_smarty_tpl->tpl_vars['cconf']->value['type']==$_smarty_tpl->tpl_vars['FE_COL_TYPES']->value['HAS_ONE']) {?>
                            <?php $_smarty_tpl->tpl_vars['hasOneId'] = new Smarty_variable($_smarty_tpl->tpl_vars['cconf']->value['idField'], null, 0);?>
                            <a href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['cconf']->value['controller'],'action'=>$_smarty_tpl->tpl_vars['cconf']->value['action'],'id'=>$_smarty_tpl->tpl_vars['object']->value[$_smarty_tpl->tpl_vars['hasOneId']->value]),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['object']->value[$_smarty_tpl->tpl_vars['col']->value];?>
</a>
                        <?php } elseif ($_smarty_tpl->tpl_vars['cconf']->value['type']==$_smarty_tpl->tpl_vars['FE_COL_TYPES']->value['XLATE']) {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['cconf']->value['xlator'][$_smarty_tpl->tpl_vars['object']->value[$_smarty_tpl->tpl_vars['col']->value]])) {?><?php echo $_smarty_tpl->tpl_vars['cconf']->value['xlator'][$_smarty_tpl->tpl_vars['object']->value[$_smarty_tpl->tpl_vars['col']->value]];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['object']->value[$_smarty_tpl->tpl_vars['col']->value];?>
<?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['cconf']->value['type']==$_smarty_tpl->tpl_vars['FE_COL_TYPES']->value['DATETIME']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['object']->value[$_smarty_tpl->tpl_vars['col']->value]) {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['object']->value[$_smarty_tpl->tpl_vars['col']->value],'%Y-%m-%d %H:%M:%S');?>
<?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['cconf']->value['type']==$_smarty_tpl->tpl_vars['FE_COL_TYPES']->value['DATE']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['object']->value[$_smarty_tpl->tpl_vars['col']->value]) {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value],'%Y-%m-%d');?>
<?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['cconf']->value['type']==$_smarty_tpl->tpl_vars['FE_COL_TYPES']->value['TIME']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['object']->value[$_smarty_tpl->tpl_vars['col']->value]) {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value],'%H:%M:%S');?>
<?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['cconf']->value['type']==$_smarty_tpl->tpl_vars['FE_COL_TYPES']->value['SCRIPT']) {?>
                            <?php echo smarty_function_tmplinclude(array('file'=>$_smarty_tpl->tpl_vars['cconf']->value['script']),$_smarty_tpl);?>

                        <?php } else { ?>
                            Type?
                        <?php }?>
                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['object']->value[$_smarty_tpl->tpl_vars['col']->value];?>

                    <?php }?>
                </dd>
            <?php }?>
        <?php } ?>
    </dl>
    
    
    <?php if ($_smarty_tpl->tpl_vars['viewPostamble']->value) {?><?php echo smarty_function_tmplinclude(array('file'=>$_smarty_tpl->tpl_vars['viewPostamble']->value),$_smarty_tpl);?>
<?php }?>
    
</div>


<?php if ($_smarty_tpl->tpl_vars['viewScript']->value) {?><script><?php echo smarty_function_tmplinclude(array('file'=>$_smarty_tpl->tpl_vars['viewScript']->value),$_smarty_tpl);?>
</script><?php }?>
<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>
<?php }} ?>
