<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-26 16:06:48
         compiled from "/opt/ixpmanager/application/views/customer/list-postamble.phtml" */ ?>
<?php /*%%SmartyHeaderCode:52975443858b28c98ae6196-29859266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0307547114122af557d34fa6f840b8c33355f2dc' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/list-postamble.phtml',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52975443858b28c98ae6196-29859266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'validCustomers' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b28c98af2310_20217416',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b28c98af2310_20217416')) {function content_58b28c98af2310_20217416($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['validCustomers']->value)) {?>
    <div class="modal hide fade" id="cust-assign-dialog">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Assign Customer</h3>
        </div>
        <div class="modal-body" style="min-height: 20px;">
            <form class="form-horizontal" style="position: fixed; z-index: 10px">
                <div class="control-group">
                    <label class="control-label" for="customer">Customer</label>
                    <div class="controls">
                        <select id="customer" class="chzn-select" chzn-fix-width=1 >
                            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['validCustomers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->getName();?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <span id="cust-assign-dialog-close" class="btn">Close</span>
            <span id="cust-assign-dialog-assign" class="btn btn-primary">Assign</span>
        </div>
    </div>
<?php }?>
<?php }} ?>
