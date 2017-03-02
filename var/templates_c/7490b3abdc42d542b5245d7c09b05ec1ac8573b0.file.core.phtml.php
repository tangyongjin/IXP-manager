<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 12:56:52
         compiled from "/opt/ixpmanager/application/views/meeting/core.phtml" */ ?>
<?php /*%%SmartyHeaderCode:82694096358b7a61489e005-61298927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7490b3abdc42d542b5245d7c09b05ec1ac8573b0' => 
    array (
      0 => '/opt/ixpmanager/application/views/meeting/core.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82694096358b7a61489e005-61298927',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'entries' => 0,
    'e' => 0,
    'simple' => 0,
    'mi' => 0,
    'inOtherContent' => 0,
    'user' => 0,
    'options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7a614914be5_20366904',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7a614914be5_20366904')) {function content_58b7a614914be5_20366904($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
if (!is_callable('smarty_function_mailto')) include '/opt/ixpmanager/application/../vendor/smarty/smarty/libs/plugins/function.mailto.php';
?>
<div class="meetings">

    <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
    
    <a name="<?php echo $_smarty_tpl->tpl_vars['e']->value->getId();?>
"></a>
    <div class="meeting">
    
        <div class="meeting title">
            <h1><?php echo $_smarty_tpl->tpl_vars['e']->value->getTitle();?>
 &ndash; <?php echo $_smarty_tpl->tpl_vars['e']->value->getDate()->format('l, F jS, Y');?>
</h1>
            <h4>
                In <?php if ($_smarty_tpl->tpl_vars['e']->value->getVenueUrl()!='') {?><a href="<?php echo $_smarty_tpl->tpl_vars['e']->value->getVenueUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value->getVenue();?>
</a><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['e']->value->getVenue();?>
<?php }?> at <?php echo $_smarty_tpl->tpl_vars['e']->value->getTime()->format('H:i');?>

                <?php if (!$_smarty_tpl->tpl_vars['simple']->value&&$_smarty_tpl->tpl_vars['e']->value->getVenueUrl()!='') {?>
                    &nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['e']->value->getVenueUrl();?>
" target="_blank">
                        <img width="16" height="16" border="0" alt="[LINK]"
                            title="Visit venue site" src="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/images/joomla-admin/menu/globe1.png" />
                    </a>
                <?php }?>
            </h4>
        </div>
    
        <div class="meeting content"><?php echo $_smarty_tpl->tpl_vars['e']->value->getBeforeText();?>
</div>
    
        <div class="meetingitem">
    
            <dl>
            
                <?php $_smarty_tpl->tpl_vars['inOtherContent'] = new Smarty_variable(0, null, 0);?>
            
                <?php  $_smarty_tpl->tpl_vars['mi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mi']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['e']->value->getMeetingItems(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mi']->key => $_smarty_tpl->tpl_vars['mi']->value) {
$_smarty_tpl->tpl_vars['mi']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['mi']->key;
?>
            
                <?php if ($_smarty_tpl->tpl_vars['mi']->value->getOtherContent()&&!$_smarty_tpl->tpl_vars['inOtherContent']->value) {?>
                    </dl>
            
                    <p>
                    Other meeting content also includes:
                    </p>
            
                    <dl>
            
                    <?php $_smarty_tpl->tpl_vars['inOtherContent'] = new Smarty_variable(1, null, 0);?>
                <?php }?>
            
                <dt>
            
            		<div class="meetingitem title">
            
            		    <div class="meetingitem title icons">
            		    <?php if (!$_smarty_tpl->tpl_vars['simple']->value) {?>
                            <?php if ($_smarty_tpl->tpl_vars['mi']->value->getPresentation()!='') {?>
                                <a href="<?php echo smarty_function_genUrl(array('controller'=>'meeting-item','action'=>'get-presentation','id'=>$_smarty_tpl->tpl_vars['mi']->value->getId()),$_smarty_tpl);?>
">
                                    <img src="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/images/22x22/presentation.png" width="22" height="22"
                                            alt="[VIDEO]" class="meetingitem title icons" />
                                </a>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['mi']->value->getVideoUrl()!='') {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['mi']->value->getVideoUrl();?>
">
                                    <img src="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
/images/22x22/video.png" width="22" height="22"
                                            alt="[VIDEO]" class="meetingitem title icons" />
                                </a>
                            <?php }?>
                        <?php }?>
            		    </div>
            
            		    <h1>
            		        <?php echo $_smarty_tpl->tpl_vars['mi']->value->getTitle();?>
 &ndash;
            
            		        <?php if (!$_smarty_tpl->tpl_vars['simple']->value&&$_smarty_tpl->tpl_vars['mi']->value->getEmail()!='') {?>
            		            <?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['mi']->value->getEmail(),'encode'=>'javascript','text'=>$_smarty_tpl->tpl_vars['mi']->value->getName()),$_smarty_tpl);?>

            		        <?php } else { ?>
            		            <?php echo $_smarty_tpl->tpl_vars['mi']->value->getName();?>

            		        <?php }?>
            		    </h1>
            
            		    <h4>
            		        <?php if ($_smarty_tpl->tpl_vars['mi']->value->getRole()!='') {?><?php echo $_smarty_tpl->tpl_vars['mi']->value->getRole();?>
, <?php }?>
            		        <?php if ($_smarty_tpl->tpl_vars['mi']->value->getCompanyUrl()!='') {?>
            		            <a href="<?php echo $_smarty_tpl->tpl_vars['mi']->value->getCompanyUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['mi']->value->getCompany();?>
</a>
            		        <?php } else { ?>
                		        <?php echo $_smarty_tpl->tpl_vars['mi']->value->getCompany();?>

                		    <?php }?>
            		    </h4>
            		</div>
            
                </dt>
            
                <dd>
                    <?php echo $_smarty_tpl->tpl_vars['mi']->value->getSummary();?>

                </dd>
            
                <?php } ?>
            
            </dl>
    
        </div>
    
        <div class="meeting content"><?php echo $_smarty_tpl->tpl_vars['e']->value->getAfterText();?>
</div>

	<?php if (!$_smarty_tpl->tpl_vars['simple']->value&&time()<$_smarty_tpl->tpl_vars['e']->value->getDate()->format('U')&&$_smarty_tpl->tpl_vars['user']->value->getPrivs()==1) {?>
        <p class="alert alert-info">
            <strong>
		Please RSVP for this meeting: 
                <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['options']->value['meeting']['rsvp_to_email'];?>
"><?php echo $_smarty_tpl->tpl_vars['options']->value['meeting']['rsvp_to_email'];?>
</a>
            </strong>
        </p>
        <?php }?>    
        

    </div>
        
    <?php } ?>

</div>
<?php }} ?>
