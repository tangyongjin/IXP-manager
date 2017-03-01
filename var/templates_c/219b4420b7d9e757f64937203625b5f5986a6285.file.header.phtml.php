<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:39:22
         compiled from "/opt/ixpmanager/application/views/header.phtml" */ ?>
<?php /*%%SmartyHeaderCode:68321329758b7155a9be060-26252917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '219b4420b7d9e757f64937203625b5f5986a6285' => 
    array (
      0 => '/opt/ixpmanager/application/views/header.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68321329758b7155a9be060-26252917',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hasIdentity' => 0,
    'user' => 0,
    'options' => 0,
    'controller' => 0,
    'action' => 0,
    'k' => 0,
    'w' => 0,
    'customers' => 0,
    'i' => 0,
    'session' => 0,
    'mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7155aaadc38_25560970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7155aaadc38_25560970')) {function content_58b7155aaadc38_25560970($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header-base.phtml"),$_smarty_tpl);?>


<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="<?php if (isset($_smarty_tpl->tpl_vars['hasIdentity']->value)&&$_smarty_tpl->tpl_vars['hasIdentity']->value&&$_smarty_tpl->tpl_vars['user']->value->getPrivs()==3) {?>container-fluid<?php } else { ?>container<?php }?>">
             <a id="collapsed_menu" class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
">
                <?php if (@constant('MAINTENANCE_MODE')) {?>
                    MAINTENANCE MODE
                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['options']->value['identity']['sitename'];?>

                <?php }?>
            </a>
            <?php if (isset($_smarty_tpl->tpl_vars['hasIdentity']->value)&&$_smarty_tpl->tpl_vars['hasIdentity']->value) {?>
                <div class="nav-collapse">
                     <ul class="nav">
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==1) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="dashboard") {?>class="active"<?php }?>>
                                <a href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
">Home</a>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()!=2) {?>
                            <li class="dropdown <?php if ($_smarty_tpl->tpl_vars['action']->value=='switch-configuration'||$_smarty_tpl->tpl_vars['action']->value=='members-details-list'||($_smarty_tpl->tpl_vars['controller']->value=='meeting'&&$_smarty_tpl->tpl_vars['action']->value=='read')) {?>active<?php }?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Member Information <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo smarty_function_genUrl(array('controller'=>"switch",'action'=>"configuration"),$_smarty_tpl);?>
">Switch Configuration</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo smarty_function_genUrl(array('controller'=>"customer",'action'=>"details"),$_smarty_tpl);?>
">Member Details</a>
                                    </li>
                                    <?php if (!isset($_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['meeting'])||!$_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['meeting']) {?>
                                        <li>
                                            <a href="<?php echo smarty_function_genUrl(array('controller'=>"meeting",'action'=>"read"),$_smarty_tpl);?>
">Meetings</a>
                                        </li>
                                    <?php }?>
                                </ul>
                            </li>
                            <li class="dropdown <?php if ($_smarty_tpl->tpl_vars['controller']->value=='peering-manager'||$_smarty_tpl->tpl_vars['controller']->value=='rs-prefixes'||$_smarty_tpl->tpl_vars['controller']->value=='peering-matrix') {?>active<?php }?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Peering<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==1&&$_smarty_tpl->tpl_vars['user']->value->getCustomer()->getType()!=\Entities\Customer::TYPE_ASSOCIATE) {?>
                                        <?php if (!isset($_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['peering-manager'])||!$_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['peering-manager']) {?>
                                            <li><a href="<?php echo smarty_function_genUrl(array('controller'=>"peering-manager"),$_smarty_tpl);?>
">Peering Manager</a></li>
                                        <?php }?>
                                        <?php if (!isset($_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['rs-prefixes'])||!$_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['rs-prefixes']) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['user']->value->getCustomer()->isRouteServerClient()) {?>
                                                <li><a href="<?php echo smarty_function_genUrl(array('controller'=>"rs-prefixes",'action'=>"list"),$_smarty_tpl);?>
">Route Server Prefixes</a></li>
                                            <?php }?>
                                        <?php }?>
                                    <?php }?>
                                    <?php if (!isset($_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['peering-matrix'])||!$_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['peering-matrix']) {?>
                                        <li><a href="<?php echo smarty_function_genUrl(array('controller'=>"peering-matrix"),$_smarty_tpl);?>
">Public Peering Matrix</a></li>
                                    <?php }?>
                                </ul>
                            </li>

                            
                            
                            <?php echo smarty_function_tmplinclude(array('file'=>"header-documentation.phtml"),$_smarty_tpl);?>


                            <li class="dropdown <?php if ($_smarty_tpl->tpl_vars['controller']->value=='statistics'||substr($_smarty_tpl->tpl_vars['action']->value,0,9)=='statistic'||$_smarty_tpl->tpl_vars['action']->value=='traffic-stats'||$_smarty_tpl->tpl_vars['action']->value=='trunk-graphs'||$_smarty_tpl->tpl_vars['action']->value=='switch-graphs'||$_smarty_tpl->tpl_vars['controller']->value=='weather-map') {?>active<?php }?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Statistics<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_CUSTUSER&&!$_smarty_tpl->tpl_vars['user']->value->getCustomer()->isTypeAssociate()) {?>
                                        <li>
                                            <a href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"member"),$_smarty_tpl);?>
">My Statistics</a>
                                        </li>

                                        <?php if (isset($_smarty_tpl->tpl_vars['options']->value['sflow']['enabled'])&&$_smarty_tpl->tpl_vars['options']->value['sflow']['enabled']) {?>
                                            <li>
                                                <a href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"p2p"),$_smarty_tpl);?>
">My Peer to Peer Traffic</a>
                                            </li>
                                        <?php }?>
                                        
                                        <li class="divider"></li>
                                    <?php }?>
                                    <li>
                                        <a href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"public"),$_smarty_tpl);?>
">Overall Peering Graphs</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"trunks"),$_smarty_tpl);?>
">Inter-Switch / PoP Graphs</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo smarty_function_genUrl(array('controller'=>"statistics",'action'=>"switches"),$_smarty_tpl);?>
">Switch Aggregate Graphs</a>
                                    </li>
                                    <?php if (isset($_smarty_tpl->tpl_vars['options']->value['weathermap'])) {?>
                                        <?php  $_smarty_tpl->tpl_vars['w'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['w']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value['weathermap']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['w']->key => $_smarty_tpl->tpl_vars['w']->value) {
$_smarty_tpl->tpl_vars['w']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['w']->key;
?>
                                            <li>
                                                <a href="<?php echo smarty_function_genUrl(array('controller'=>"weather-map",'action'=>"index",'id'=>$_smarty_tpl->tpl_vars['k']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['w']->value['menu'];?>
</a>
                                            </li>
                                        <?php } ?>
                                    <?php }?>
                                </ul>
                            </li>
                        <?php }?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['controller']->value=='static'&&$_smarty_tpl->tpl_vars['action']->value=='support') {?>active<?php }?>">
                            <a href="<?php echo smarty_function_genUrl(array('controller'=>"static",'action'=>"support"),$_smarty_tpl);?>
">Support</a>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==\Entities\User::AUTH_SUPERUSER) {?>
                            <?php echo smarty_function_tmplinclude(array('file'=>"staff-links.phtml"),$_smarty_tpl);?>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()!=3) {?>
	                        <li class="dropdown">
							    <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account<b class="caret"></b></a>
							    <ul class="dropdown-menu">
							        <li>
							            <a href="<?php echo smarty_function_genUrl(array('controller'=>"profile"),$_smarty_tpl);?>
">Profile</a>
							        </li>
							        <li>
							            <a href="<?php echo smarty_function_genUrl(array('controller'=>"api-key"),$_smarty_tpl);?>
">API Keys</a>
							        </li>
							        <li class="divider"></li>
							        <li>
		                                <a href="<?php echo smarty_function_genUrl(array('controller'=>"auth",'action'=>"logout"),$_smarty_tpl);?>
">Logout</a>
        							</li>
							    </ul>
							</li>
                        <?php }?>

                    </ul>
                    <ul class="nav pull-right">
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==3) {?>
                            <form class="navbar-search pull-left">
                                <select data-placeholder="View a Customer..." id="menu-select-customer" type="select" name="id" class="chzn-select">
                                    <option></option>
                                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                    <?php } ?>
                                </select>
                            </form>
                        <?php }?>

                        <?php if (isset($_smarty_tpl->tpl_vars['session']->value->switched_user_from)&&$_smarty_tpl->tpl_vars['session']->value->switched_user_from) {?>
                            <li><a href="<?php echo smarty_function_genUrl(array('controller'=>"auth",'action'=>"switch-user-back"),$_smarty_tpl);?>
">Switch Back</a></li>
                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->getPrivs()==3) {?>
	                        <li class="dropdown">
							    <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account<b class="caret"></b></a>
							    <ul class="dropdown-menu">
							        <li>
							            <a href="<?php echo smarty_function_genUrl(array('controller'=>"profile"),$_smarty_tpl);?>
">Profile</a>
							        </li>
							        <li>
							            <a href="<?php echo smarty_function_genUrl(array('controller'=>"api-key"),$_smarty_tpl);?>
">API Keys</a>
							        </li>
							        <li class="divider"></li>
							        <li>
							            <a href="<?php echo smarty_function_genUrl(array('controller'=>"customer",'action'=>"unread-notes"),$_smarty_tpl);?>
">Unread Notes</a>
							        </li>
							        <li class="divider"></li>
							        <li>
		                                <a href="<?php echo smarty_function_genUrl(array('controller'=>"auth",'action'=>"logout"),$_smarty_tpl);?>
">Logout</a>
        							</li>
							    </ul>
							</li>
                        <?php } else { ?>
                            <li><a href="<?php echo smarty_function_genUrl(array('controller'=>"auth",'action'=>"logout"),$_smarty_tpl);?>
">Logout</a></li>
                        <?php }?>
                    </ul>
                </div><!--/.nav-collapse -->
            <?php } else { ?>
                <div class="nav-collapse">
                    <ul class="nav pull-right">
                        <li class="<?php if ($_smarty_tpl->tpl_vars['controller']->value=='static'&&$_smarty_tpl->tpl_vars['action']->value=='support') {?>active<?php }?>">
                            <a href="<?php echo smarty_function_genUrl(array('controller'=>"static",'action'=>"support"),$_smarty_tpl);?>
">Support</a>
                        </li>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['controller']->value=='index'&&$_smarty_tpl->tpl_vars['action']->value=='about') {?>active<?php }?>">
                            <a href="<?php echo smarty_function_genUrl(array('controller'=>"index",'action'=>"about"),$_smarty_tpl);?>
">About</a>
                        </li>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['controller']->value=='auth'&&$_smarty_tpl->tpl_vars['action']->value=='login') {?>active<?php }?>">
                            <a href="<?php echo smarty_function_genUrl(array('controller'=>"auth",'action'=>"login"),$_smarty_tpl);?>
">Login</a>
                        </li>
                    </ul>
                </div>
            <?php }?>
        </div>
    </div>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['hasIdentity']->value)&&$_smarty_tpl->tpl_vars['hasIdentity']->value&&$_smarty_tpl->tpl_vars['user']->value->getPrivs()==3) {?>

    <div class="container-fluid">

    <?php echo smarty_function_tmplinclude(array('file'=>"menu.phtml"),$_smarty_tpl);?>


<?php } elseif (isset($_smarty_tpl->tpl_vars['mode']->value)&&$_smarty_tpl->tpl_vars['mode']->value=='fluid') {?>

    <div class="container-fluid">

<?php } else { ?>

    <div class="container">

<?php }?>
<?php }} ?>
