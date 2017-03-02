<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 17:43:57
         compiled from "/opt/ixpmanager/application/views/batch-ping/list.phtml" */ ?>
<?php /*%%SmartyHeaderCode:88068175758b7d5506923b8-06727645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9850bb204610d9a0c02571245e0e32182d50dccf' => 
    array (
      0 => '/opt/ixpmanager/application/views/batch-ping/list.phtml',
      1 => 1488447835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88068175758b7d5506923b8-06727645',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7d55076c403_20626890',
  'variables' => 
  array (
    'user' => 0,
    'controller' => 0,
    'feParams' => 0,
    'listToolbar' => 0,
    'module' => 0,
    'listPreamble' => 0,
    'data' => 0,
    'cconf' => 0,
    'row' => 0,
    'col' => 0,
    'FE_COL_TYPES' => 0,
    'hasOneId' => 0,
    'listRowMenu' => 0,
    'listPostamble' => 0,
    'listScript' => 0,
    'listAddonScript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7d55076c403_20626890')) {function content_58b7d55076c403_20626890($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_OSS_Message')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.OSS_Message.php';
if (!is_callable('smarty_modifier_date_format')) include '/opt/ixpmanager/application/../vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
?>
        
<?php echo smarty_function_tmplinclude(array('file'=>"header.phtml"),$_smarty_tpl);?>


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
            List
        </li>
        
        

        <?php if ($_smarty_tpl->tpl_vars['listToolbar']->value) {?>
            <?php echo smarty_function_tmplinclude(array('file'=>$_smarty_tpl->tpl_vars['listToolbar']->value),$_smarty_tpl);?>

        <?php } else { ?>
            <li class="pull-right">
                <?php if (!isset($_smarty_tpl->tpl_vars['feParams']->value->readonly)||!$_smarty_tpl->tpl_vars['feParams']->value->readonly) {?>
                    <a class="btn btn-mini pull-right" href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>"add"),$_smarty_tpl);?>
"><i class="icon-plus"></i></a>
                <?php }?>
            </li>
        <?php }?>
    </ul>

    <div>
<?php } else { ?>
    <div class="page-content" >
    
        <div class="page-header" >
            <h1 style="display: inline;"><?php echo $_smarty_tpl->tpl_vars['feParams']->value->pagetitle;?>
</h1>
            
            <span style="float: right; margin-top: -10px;">
                
                <?php if ($_smarty_tpl->tpl_vars['listToolbar']->value) {?>
                    <?php echo smarty_function_tmplinclude(array('file'=>$_smarty_tpl->tpl_vars['listToolbar']->value),$_smarty_tpl);?>

                <?php } else { ?>
                    <div class="btn-toolbar">
                        <div class="btn-group">
                            <?php if (!isset($_smarty_tpl->tpl_vars['feParams']->value->readonly)||!$_smarty_tpl->tpl_vars['feParams']->value->readonly) {?>
                                <a class="btn" href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'add'),$_smarty_tpl);?>
"><i class="icon-plus"></i></a>
                            <?php }?>
                        </div>
                    </div>
                <?php }?>
            </span>
        </div>
<?php }?>
    
    <?php echo smarty_function_OSS_Message(array(),$_smarty_tpl);?>


    
    <?php if ($_smarty_tpl->tpl_vars['listPreamble']->value) {?><?php echo smarty_function_tmplinclude(array('file'=>$_smarty_tpl->tpl_vars['listPreamble']->value),$_smarty_tpl);?>
<?php }?>

    <?php if (count($_smarty_tpl->tpl_vars['data']->value)) {?>
     
    
    <table id='frontend-list-table' class="table  ">
    
    <thead>

        <tr>
            <?php  $_smarty_tpl->tpl_vars['cconf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cconf']->_loop = false;
 $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feParams']->value->listColumns; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cconf']->key => $_smarty_tpl->tpl_vars['cconf']->value) {
$_smarty_tpl->tpl_vars['cconf']->_loop = true;
 $_smarty_tpl->tpl_vars['col']->value = $_smarty_tpl->tpl_vars['cconf']->key;
?>

                <?php if (!is_array($_smarty_tpl->tpl_vars['cconf']->value)||!isset($_smarty_tpl->tpl_vars['cconf']->value['display'])||$_smarty_tpl->tpl_vars['cconf']->value['display']) {?>
            
                    <th><?php if (is_array($_smarty_tpl->tpl_vars['cconf']->value)) {?><?php echo $_smarty_tpl->tpl_vars['cconf']->value['title'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['cconf']->value;?>
<?php }?></th>
            
                <?php }?>
            


            <?php } ?>
            <th></th>
        </tr>
    </thead>
    
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['idx'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['idx']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
           <!-- <td><?php echo $_smarty_tpl->tpl_vars['row']->value['packetloss'];?>
</td> -->
           <!-- <?php echo $_smarty_tpl->tpl_vars['row']->value['packetloss'];?>
 -->

          


        <tr  style="color:<?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
;">
           

            <?php  $_smarty_tpl->tpl_vars['cconf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cconf']->_loop = false;
 $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feParams']->value->listColumns; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cconf']->key => $_smarty_tpl->tpl_vars['cconf']->value) {
$_smarty_tpl->tpl_vars['cconf']->_loop = true;
 $_smarty_tpl->tpl_vars['col']->value = $_smarty_tpl->tpl_vars['cconf']->key;
?>
                <?php if (!is_array($_smarty_tpl->tpl_vars['cconf']->value)) {?>

                   <?php $_smarty_tpl->tpl_vars['cellcolor'] = new Smarty_variable('red', null, 0);?> 


                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value];?>
</td>

                <?php } elseif (!isset($_smarty_tpl->tpl_vars['cconf']->value['display'])||$_smarty_tpl->tpl_vars['cconf']->value['display']) {?>
                    <?php if (isset($_smarty_tpl->tpl_vars['cconf']->value['type'])) {?>
                        <?php if ($_smarty_tpl->tpl_vars['cconf']->value['type']==$_smarty_tpl->tpl_vars['FE_COL_TYPES']->value['HAS_ONE']) {?>
                            <td>
                                <?php $_smarty_tpl->tpl_vars['hasOneId'] = new Smarty_variable($_smarty_tpl->tpl_vars['cconf']->value['idField'], null, 0);?>
                                <a href="<?php echo smarty_function_genUrl(array('controller'=>$_smarty_tpl->tpl_vars['cconf']->value['controller'],'action'=>$_smarty_tpl->tpl_vars['cconf']->value['action'],'id'=>$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['hasOneId']->value]),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value];?>
</a>
                            </td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['cconf']->value['type']==$_smarty_tpl->tpl_vars['FE_COL_TYPES']->value['XLATE']) {?>
                            <td>
                                <?php if (isset($_smarty_tpl->tpl_vars['cconf']->value['xlator'][$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value]])) {?><?php echo $_smarty_tpl->tpl_vars['cconf']->value['xlator'][$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value]];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value];?>
<?php }?>
                            </td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['cconf']->value['type']==$_smarty_tpl->tpl_vars['FE_COL_TYPES']->value['YES_NO']) {?>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value]) {?>Yes<?php } else { ?>No<?php }?>
                            </td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['cconf']->value['type']==$_smarty_tpl->tpl_vars['FE_COL_TYPES']->value['DATETIME']) {?>
                            <td>
                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value],'%Y-%m-%d %H:%M:%S');?>

                            </td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['cconf']->value['type']==$_smarty_tpl->tpl_vars['FE_COL_TYPES']->value['DATE']) {?>
                            <td>
                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value],'%Y-%m-%d');?>

                            </td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['cconf']->value['type']==$_smarty_tpl->tpl_vars['FE_COL_TYPES']->value['TIME']) {?>
                            <td>
                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value],'%H:%M:%S');?>

                            </td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['cconf']->value['type']==$_smarty_tpl->tpl_vars['FE_COL_TYPES']->value['SCRIPT']) {?>
                            <?php echo smarty_function_tmplinclude(array('file'=>$_smarty_tpl->tpl_vars['cconf']->value['script']),$_smarty_tpl);?>

                        <?php } else { ?>
                            <td>Type?</td>
                        <?php }?>
                    <?php } else { ?>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['col']->value];?>
</td>
                    <?php }?>
                <?php }?>
            <?php } ?>
            <td>
                
                <?php if (!$_smarty_tpl->tpl_vars['listRowMenu']->value) {?>
                    <div class="btn-group">
                        <a class="btn btn-mini have-tooltip-below" href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'view','id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" title="Preview"><i class="icon-eye-open"></i></a>
                        <?php if (!isset($_smarty_tpl->tpl_vars['feParams']->value->readonly)||!$_smarty_tpl->tpl_vars['feParams']->value->readonly) {?>
                            <a class="btn btn-mini have-tooltip-below" href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'edit','id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" title="Edit"><i class="icon-pencil"></i></a>
                            <a class="btn btn-mini have-tooltip-below" id='list-delete-<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
' href="<?php echo smarty_function_genUrl(array('module'=>$_smarty_tpl->tpl_vars['module']->value,'controller'=>$_smarty_tpl->tpl_vars['controller']->value,'action'=>'delete','id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" title="Delete"><i class="icon-trash"></i></a>
                        <?php }?>
                    </div>
                <?php } else { ?>
                    <?php echo smarty_function_tmplinclude(array('file'=>$_smarty_tpl->tpl_vars['listRowMenu']->value),$_smarty_tpl);?>

                <?php }?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    
    </table>
       
    <?php }?> 
    
    
    
    <?php if ($_smarty_tpl->tpl_vars['listPostamble']->value) {?><?php echo smarty_function_tmplinclude(array('file'=>$_smarty_tpl->tpl_vars['listPostamble']->value),$_smarty_tpl);?>
<?php }?>
    
</div>


<?php if ($_smarty_tpl->tpl_vars['listScript']->value) {?><script><?php echo smarty_function_tmplinclude(array('file'=>$_smarty_tpl->tpl_vars['listScript']->value),$_smarty_tpl);?>
</script><?php }?>
<?php if ($_smarty_tpl->tpl_vars['listAddonScript']->value) {?><script><?php echo smarty_function_tmplinclude(array('file'=>$_smarty_tpl->tpl_vars['listAddonScript']->value),$_smarty_tpl);?>
</script><?php }?>
<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>
<?php }} ?>
