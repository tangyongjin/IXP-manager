<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-23 12:27:56
         compiled from "/opt/ixpmanager/application/views/menu.phtml" */ ?>
<?php /*%%SmartyHeaderCode:157705319158ae64ccac4ee4-69961646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '385fcfe58f1f66af13448965f4a9795b643e0788' => 
    array (
      0 => '/opt/ixpmanager/application/views/menu.phtml',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157705319158ae64ccac4ee4-69961646',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controller' => 0,
    'action' => 0,
    'options' => 0,
    'multiIXP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58ae64ccbb8558_17538064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ae64ccbb8558_17538064')) {function content_58ae64ccbb8558_17538064($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?>
<div class="row-fluid">
<div class="span2">
<div class="well sidebar-nav">

<ul class="nav nav-list">

    <form class="form-search" method="get" action="<?php echo smarty_function_genUrl(array('controller'=>"search",'action'=>"do"),$_smarty_tpl);?>
">
        <input type="text" class="search-query" style="width: 50%" placeholder="Search..." name="search">
        <a class="btn btn-small" id="searchHelp" data-toggle="modal" data-target="#searchHelpModal"><i class="icon-question-sign"></i></a>
    </form>

    <li class="nav-header">IXP Customer Actions</li>

        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='customer'&&($_smarty_tpl->tpl_vars['action']->value=='list'||$_smarty_tpl->tpl_vars['action']->value=='add'||$_smarty_tpl->tpl_vars['action']->value=='edit'||$_smarty_tpl->tpl_vars['action']->value=='dashboard')) {?>class="active"<?php }?>>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'customer','action'=>'list'),$_smarty_tpl);?>
">Customers</a>
        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='virtual-interface') {?>class="active"<?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['controller']->value=='virtual-interface'||$_smarty_tpl->tpl_vars['controller']->value=='vlan-interface'||$_smarty_tpl->tpl_vars['controller']->value=='physical-interface') {?>
                <a href="<?php echo smarty_function_genUrl(array('controller'=>'virtual-interface','action'=>'list'),$_smarty_tpl);?>
">Interfaces (Virtual)</a>
                <ul class="nav nav-list">
                    <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='physical-interface') {?>class="active"<?php }?>>
                        <a href="<?php echo smarty_function_genUrl(array('controller'=>'physical-interface','action'=>'list'),$_smarty_tpl);?>
">Physical Interfaces</a>
                    </li>
                    <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='vlan-interface'&&$_smarty_tpl->tpl_vars['action']->value!='quick-add') {?>class="active"<?php }?>>
                        <a href="<?php echo smarty_function_genUrl(array('controller'=>'vlan-interface','action'=>'list'),$_smarty_tpl);?>
">Vlan Interfaces</a>
                    </li>
                </ul>
            <?php } else { ?>
                <a href="<?php echo smarty_function_genUrl(array('controller'=>'virtual-interface','action'=>'list'),$_smarty_tpl);?>
">Interfaces</a>
            <?php }?>

        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='user'&&$_smarty_tpl->tpl_vars['action']->value!='last') {?>class="active"<?php }?>>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'user','action'=>'list'),$_smarty_tpl);?>
">Users</a>
        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='contact') {?>class="active"<?php }?>>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'contact','action'=>'list'),$_smarty_tpl);?>
">Contacts</a>
            <?php if ($_smarty_tpl->tpl_vars['controller']->value=='contact'||$_smarty_tpl->tpl_vars['controller']->value=='contact-group') {?>
                <ul class="nav nav-list">
                    <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='contact-group') {?>class="active"<?php }?>>
                        <a href="<?php echo smarty_function_genUrl(array('controller'=>'contact-group','action'=>'list'),$_smarty_tpl);?>
">Contact Groups</a>
                    </li>
                </ul>
            <?php }?>
        </li>

	<?php if (!isset($_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['cust-kit'])||!$_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['cust-kit']) {?>
            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='cust-kit') {?>class="active"<?php }?>>
                <a href="<?php echo smarty_function_genUrl(array('controller'=>'cust-kit','action'=>'list'),$_smarty_tpl);?>
">Colocated Equipment</a>
            </li>
        <?php }?>

	<?php if (!isset($_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['meeting'])||!$_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['meeting']) {?>
            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='meeting'&&$_smarty_tpl->tpl_vars['controller']->value!='meeting-item'&&$_smarty_tpl->tpl_vars['action']->value!='read') {?>class="active"<?php }?>>
                <a href="<?php echo smarty_function_genUrl(array('controller'=>'meeting','action'=>'list'),$_smarty_tpl);?>
">Meetings</a>

                <?php if ($_smarty_tpl->tpl_vars['controller']->value=='meeting'||$_smarty_tpl->tpl_vars['controller']->value=='meeting-item'||($_smarty_tpl->tpl_vars['controller']->value=='static'&&$_smarty_tpl->tpl_vars['action']->value=='meetings-instructions')) {?>
                    <ul class="nav nav-list">
                        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='meeting-item') {?>class="active"<?php }?>>
                            <a href="<?php echo smarty_function_genUrl(array('controller'=>'meeting-item','action'=>'list'),$_smarty_tpl);?>
">Presentations</a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='meeting'&&$_smarty_tpl->tpl_vars['action']->value=='read') {?>class="active"<?php }?>>
                            <a href="<?php echo smarty_function_genUrl(array('controller'=>'meeting','action'=>'read'),$_smarty_tpl);?>
">Member View</a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='static'&&$_smarty_tpl->tpl_vars['action']->value=='meetings-instructions') {?>class="active"<?php }?>>
                            <a href="<?php echo smarty_function_genUrl(array('controller'=>'static','action'=>'meetings-instructions'),$_smarty_tpl);?>
">Instructions</a>
                        </li>
                    </ul>
                <?php }?>
            </li>
        <?php }?>


    <li class="nav-header">IXP Admin Actions</li>
        <?php if ($_smarty_tpl->tpl_vars['multiIXP']->value) {?>
            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='ixp') {?>class="active"<?php }?>>
                <a href="<?php echo smarty_function_genUrl(array('controller'=>'ixp','action'=>'list'),$_smarty_tpl);?>
">IXPs</a>
            </li>
        <?php }?>

        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='infrastructure') {?>class="active"<?php }?>>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'infrastructure','action'=>'list'),$_smarty_tpl);?>
">Infrastructures</a>
        </li>

        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='location') {?>class="active"<?php }?>>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'location','action'=>'list'),$_smarty_tpl);?>
">Locations</a>
        </li>

        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='cabinet') {?>class="active"<?php }?>>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'cabinet','action'=>'list'),$_smarty_tpl);?>
">Cabinets</a>
        </li>

        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='switch'&&$_smarty_tpl->tpl_vars['action']->value!='add-ports') {?>class="active"<?php }?>>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'switch','action'=>'list'),$_smarty_tpl);?>
">Switches</a>

            <?php if ($_smarty_tpl->tpl_vars['controller']->value=='switch'||$_smarty_tpl->tpl_vars['controller']->value=='switch-port') {?>
                <ul class="nav nav-list">
                    <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='switch-port'&&$_smarty_tpl->tpl_vars['action']->value!='unused-optics') {?>class="active"<?php }?>>
                        <a href="<?php echo smarty_function_genUrl(array('controller'=>'switch-port','action'=>'list'),$_smarty_tpl);?>
">Switch Ports</a>
                    </li>
                    <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='switch-port'&&$_smarty_tpl->tpl_vars['action']->value=='unused-optics') {?>class="active"<?php }?>>
                        <a href="<?php echo smarty_function_genUrl(array('controller'=>'switch-port','action'=>'unused-optics'),$_smarty_tpl);?>
">Unused Optics</a>
                    </li>
                </ul>
            <?php }?>

        </li>

        <li>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'ipv6-address','action'=>'list'),$_smarty_tpl);?>
">IP Addressing</a>

            <?php if ($_smarty_tpl->tpl_vars['controller']->value=='ipv4-address'||$_smarty_tpl->tpl_vars['controller']->value=='ipv6-address') {?>
                <ul class="nav nav-list">
                    <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='ipv4-address'&&$_smarty_tpl->tpl_vars['action']->value!='add-addresses') {?>class="active"<?php }?>>
                        <a href="<?php echo smarty_function_genUrl(array('controller'=>'ipv4-address','action'=>'list'),$_smarty_tpl);?>
">IPv4 Addresses</a>
                    </li>
                    <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='ipv6-address') {?>class="active"<?php }?>>
                        <a href="<?php echo smarty_function_genUrl(array('controller'=>'ipv6-address','action'=>'list'),$_smarty_tpl);?>
">IPv6 Addresses</a>
                    </li>
                </ul>
            <?php }?>

        </li>

        <?php if (!isset($_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['mac-address'])||!$_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['mac-address']) {?>
            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='mac-address') {?>class="active"<?php }?>>
                 <a href="<?php echo smarty_function_genUrl(array('controller'=>'mac-address','action'=>'list'),$_smarty_tpl);?>
">MAC Addresses</a>
            </li>
        <?php }?>

        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='vendor') {?>class="active"<?php }?>>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'vendor','action'=>'list'),$_smarty_tpl);?>
">Vendors</a>
        </li>

        <?php if (!isset($_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['console-server-connection'])||!$_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['console-server-connection']) {?>
            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='console-server-connection') {?>class="active"<?php }?>>
                <a href="<?php echo smarty_function_genUrl(array('controller'=>'console-server-connection','action'=>'list'),$_smarty_tpl);?>
">Console Server Connections</a>
            </li>
        <?php }?>

        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='vlan'&&$_smarty_tpl->tpl_vars['action']->value!='private') {?>class="active"<?php }?>>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'vlan','action'=>'list'),$_smarty_tpl);?>
">VLANs</a>

            <?php if ($_smarty_tpl->tpl_vars['controller']->value=='vlan') {?>
                <ul class="nav nav-list">
                    <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='vlan'&&$_smarty_tpl->tpl_vars['action']->value=='private') {?>class="active"<?php }?>>
                        <a href="<?php echo smarty_function_genUrl(array('controller'=>'vlan','action'=>'private'),$_smarty_tpl);?>
">Private VLANs</a>
                    </li>
                </ul>
            <?php }?>

        </li>

        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='irrdb-config') {?>class="active"<?php }?>>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'irrdb-config','action'=>'list'),$_smarty_tpl);?>
">IRRDB Configuration</a>
        </li>

        <?php if (!isset($_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['rs-prefixes'])||!$_smarty_tpl->tpl_vars['options']->value['frontend']['disabled']['rs-prefixes']) {?>
            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='rs-prefixes') {?>class="active"<?php }?>>
                <a href="<?php echo smarty_function_genUrl(array('controller'=>'rs-prefixes','action'=>'index'),$_smarty_tpl);?>
">Route Server Prefixes</a>
            </li>
        <?php }?>


    <li class="nav-header">IXP Statistics</li>

        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='statistics'&&$_smarty_tpl->tpl_vars['action']->value=='members') {?>class="active"<?php }?>>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'statistics','action'=>'members'),$_smarty_tpl);?>
">Member Statistics - Graphs</a>
        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='statistics'&&$_smarty_tpl->tpl_vars['action']->value=='list') {?>class="active"<?php }?>>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'statistics','action'=>'list'),$_smarty_tpl);?>
">Member Statistics - List</a>
        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='statistics'&&$_smarty_tpl->tpl_vars['action']->value=='league-table') {?>class="active"<?php }?>>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'statistics','action'=>'league-table'),$_smarty_tpl);?>
">League Table</a>
        </li>

        
        



    <li class="nav-header">IXP Utilities</li>

        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='utils'&&$_smarty_tpl->tpl_vars['action']->value=='phpinfo') {?>class="active"<?php }?>>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'utils','action'=>'phpinfo'),$_smarty_tpl);?>
">PHP Info</a>
        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='utils'&&$_smarty_tpl->tpl_vars['action']->value=='apcinfolist') {?>class="active"<?php }?>>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'utils','action'=>'apcinfo'),$_smarty_tpl);?>
">APC Info</a>
        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='user'&&$_smarty_tpl->tpl_vars['action']->value=='last') {?>class="active"<?php }?>>
            <a href="<?php echo smarty_function_genUrl(array('controller'=>'user','action'=>'last'),$_smarty_tpl);?>
">Last Logins</a>
        </li>


    </ul>

</div><!--/.well -->

<div id="searchHelpModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="searchHelpModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="searchHelpModalLabel">Search Help</h3>
    </div>
    <div class="modal-body">
        <p>
            The search box allows for an efficient database search via a number of parameters:
        </p>
        <div class="row-fluid">
            <div class="span6">
                <dl>
                    <dt>IPv4 Address</dt>
                    <dd>
                        Full address as <code>a.b.c.d</code> or last octet as <code>.d</code>
                    </dd>
                    <dt>AS Number / Macro</dt>
                    <dd>
                        Enter ASN as <code>XXX</code> or <code>asXXX</code> and AS macro as <code>as-XXX</code>
                    </dd>
                    <dt>Usernames</dt>
                    <dd>
                        Find usernames <em>starting with</em> <code>xxx</code> by entering <code>@xxx</code>
                    </dd>
                    <dt>Route Server Prefix</dt>
                    <dd>
                        Enter IPv4 <code>a.b.c.d/x</code> or IPv6 <code>a:b::/x</code>
                    </dd>
                </dl>
            </div>
            <div class="span6">
                <dl>
                    <dt>IPv6 Address</dt>
                    <dd>
                        Full (compact) address as <code>a:b::h</code> or last section as <code>:h</code>
                    </dd>
                    <dt>MAC Address</dt>
                    <dd>
                        Enter as <code>xxxxxxxxxxxx</code> or <code>xx:xx:xx:xx:xx:xx</code>
                    </dd>
                    <dt>Email Addresses</dt>
                    <dd>
                        Find contacts / users via full email address <code>xxx@example.com</code>
                    </dd>
                    <dt>Wildcard</dt>
                    <dd>
                        Any other text is searched as <code>%xxx%</code> on customer details
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
</div>


</div><!--/span-->
<div class="span10">
<?php }} ?>
