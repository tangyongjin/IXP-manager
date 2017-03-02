<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 09:06:46
         compiled from "/opt/ixpmanager/application/views/customer/overview-tabs/notes.phtml" */ ?>
<?php /*%%SmartyHeaderCode:86815321658b77026b9dc68-87745923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2801b1432e0f0d0aac2c603ea527f4dda1b770aa' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/overview-tabs/notes.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86815321658b77026b9dc68-87745923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'custNotes' => 0,
    'user' => 0,
    'cust' => 0,
    'co_notify_all' => 0,
    'n' => 0,
    'notesLastRead' => 0,
    'notesReadUpto' => 0,
    'co_notify' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b77026c03612_02882689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b77026c03612_02882689')) {function content_58b77026c03612_02882689($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
?>
<table class="table <?php if (!count($_smarty_tpl->tpl_vars['custNotes']->value)) {?>hide<?php }?>" id="co-notes-table">
    <thead>
        <th>Title</th>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>
            <th>Visibility</th>
        <?php }?>
        <th>Updated</th>
        <th>
            <div class="btn-group">
                <?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>
                    <button id="co-notes-add-btn" class="btn btn-small"><i class="icon-plus"></i></button>
                    <button id="co-cust-notify-<?php echo $_smarty_tpl->tpl_vars['cust']->value->getId();?>
"  class="btn btn-small <?php if (isset($_smarty_tpl->tpl_vars['co_notify_all']->value)&&$_smarty_tpl->tpl_vars['co_notify_all']->value) {?>active<?php }?>"><i class="icon-eye-open"></i></button>
                <?php }?>
            </div>
        </th>
    </thead>
    <tbody id="co-notes-table-tbody">
        <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['custNotes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER||!$_smarty_tpl->tpl_vars['n']->value->getPrivate()) {?>
                <tr id="co-notes-table-row-<?php echo $_smarty_tpl->tpl_vars['n']->value->getId();?>
">
                    <td id="co-notes-table-row-title-<?php echo $_smarty_tpl->tpl_vars['n']->value->getId();?>
">
                        <?php if ((!$_smarty_tpl->tpl_vars['notesLastRead']->value||$_smarty_tpl->tpl_vars['n']->value->getUpdated()->format('U')>$_smarty_tpl->tpl_vars['notesLastRead']->value)&&(!$_smarty_tpl->tpl_vars['notesReadUpto']->value||$_smarty_tpl->tpl_vars['n']->value->getUpdated()->format('U')>$_smarty_tpl->tpl_vars['notesReadUpto']->value)) {?>
                            <span class="label label-success">
                                <?php if ($_smarty_tpl->tpl_vars['n']->value->getUpdated()==$_smarty_tpl->tpl_vars['n']->value->getCreated()) {?>
                                    NEW
                                <?php } else { ?>
                                    UPDATED
                                <?php }?>
                            </span>
                        <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['n']->value->getTitle();?>

                    </td>
    
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>
                        <td id="co-notes-table-row-public-<?php echo $_smarty_tpl->tpl_vars['n']->value->getId();?>
">
                            <span class="label label-<?php if (!$_smarty_tpl->tpl_vars['n']->value->getPrivate()) {?>success">PUBLIC<?php } else { ?>important">PRIVATE<?php }?></span>
                        </td>
                    <?php }?>
                    <td id="co-notes-table-row-updated-<?php echo $_smarty_tpl->tpl_vars['n']->value->getId();?>
">
                        <?php echo $_smarty_tpl->tpl_vars['n']->value->getUpdated()->format('Y-m-d H:i');?>

                    </td>
                    <td>
                        <div class="btn-group">
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>
                                <button id="co-notes-notify-<?php echo $_smarty_tpl->tpl_vars['n']->value->getId();?>
"  class="btn btn-small <?php if (isset($_smarty_tpl->tpl_vars['co_notify']->value[$_smarty_tpl->tpl_vars['n']->value->getId()])&&$_smarty_tpl->tpl_vars['co_notify']->value[$_smarty_tpl->tpl_vars['n']->value->getId()]) {?>active<?php }?>"><i class="icon-eye-open"></i></button>
                            <?php }?>
                            <button id="co-notes-view-<?php echo $_smarty_tpl->tpl_vars['n']->value->getId();?>
"  class="btn btn-small"><i class="icon-zoom-in"></i></button>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>
                                <button id="co-notes-edit-<?php echo $_smarty_tpl->tpl_vars['n']->value->getId();?>
"  class="btn btn-small"><i class="icon-pencil"></i></button>
                                <button id="co-notes-trash-<?php echo $_smarty_tpl->tpl_vars['n']->value->getId();?>
" class="btn btn-small"><i class="icon-trash"></i></button>
                            <?php }?>
                        </div>
                    </td>
                </tr>
            <?php }?>
        <?php } ?>
    </tbody>
</table>

<?php if (!count($_smarty_tpl->tpl_vars['custNotes']->value)) {?>
    <p id="co-notes-no-notes-msg">
        There are no notes for this customer. <a href="#" id="co-notes-add-link">Add one...</a>
    </p>
<?php }?>
    
<script><?php echo smarty_function_tmplinclude(array('file'=>"customer/js/overview/notes.js"),$_smarty_tpl);?>
</script>

<?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>

<div class="modal hide" id="co-notes-dialog">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3><span id="co-notes-dialog-title-action">Add a</span> Note for <?php echo $_smarty_tpl->tpl_vars['cust']->value->getName();?>
</h3>
    </div>
    <div class="modal-body">
        <div class="alert hide" id="co-notes-warning">
            <strong>Warning!</strong> Your customer will be able to read this note!
        </div>
        <form class="form" id="co-notes-form">
            <input type="text" placeholder="Title" class="span12" name="title" id="co-notes-ftitle" />
            <br />
            <textarea rows="6" class="span12" name="note" id="co-notes-fnote"></textarea>
            <br />
            <label class="checkbox">
                <input type="checkbox" name="public" id="co-notes-fpublic" value="makePublic" />
                Make note visible to customer
            </label>
            <input type="hidden" name="custid" value="<?php echo $_smarty_tpl->tpl_vars['cust']->value->getId();?>
" />
            <input type="hidden" id="notes-dialog-noteid" name="noteid" value="0" />
        </form>
    </div>
    <div class="modal-footer">
        <span class="pull-left"  id="co-notes-dialog-date"></span>
        <a href="#" data-dismiss="modal" class="btn">Cancel</a>
        <a href="#" id="co-notes-fadd" class="btn btn-primary">Add</a>
    </div>
</div>

<?php }?>

<div class="modal hide" data-keyboard="true" id="co-notes-view-dialog">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3><span id="co-notes-view-dialog-title"></span></h3>
    </div>
    <div class="modal-body">
        <div id="co-notes-view-dialog-note"></div>
    </div>
    <div class="modal-footer">
        <span class="pull-left"  id="co-notes-view-dialog-date"></span>
        <a href="#" data-dismiss="modal" class="btn">Close</a>
    </div>
</div>
<?php }} ?>
