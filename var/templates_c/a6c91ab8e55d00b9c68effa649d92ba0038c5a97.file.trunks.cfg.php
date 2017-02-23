<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-23 04:35:22
         compiled from "/opt/ixpmanager/application/views/statistics-cli/mrtg/trunks.cfg" */ ?>
<?php /*%%SmartyHeaderCode:52332532858ae668adbb348-16547658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6c91ab8e55d00b9c68effa649d92ba0038c5a97' => 
    array (
      0 => '/opt/ixpmanager/application/views/statistics-cli/mrtg/trunks.cfg',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52332532858ae668adbb348-16547658',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58ae668adbd902_51816614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ae668adbd902_51816614')) {function content_58ae668adbd902_51816614($_smarty_tpl) {?>

# Manually insert a bunch of definitions here for your IXP's trunk links
# between switches.  There is really no way to be able to create a sane
# definition of these in the IXP Manager database, so we chicken out and let
# each IXP do it manually.  Simplicity r00lz.
#
# See: https://github.com/inex/IXP-Manager/wiki/MRTG---Traffic-Graphs#inter-switch-link-graphs
#
# Here are some examples.

## degkcp-ixdub1 - LAN1
#Target[core-degkcp-ixdub1-lan1]: #ethernet23:sillypassword@swi1-deg1-2:::::2 + #ethernet24:sillypassword@swi1-deg1-2:::::2
#MaxBytes[core-degkcp-ixdub1-lan1]: 2500000000
#Directory[core-degkcp-ixdub1-lan1]: trunks
#Title[core-degkcp-ixdub1-lan1]: Trunk Core - DEGKCP-IXDUB1 - LAN1

## tcydub1-ixdub1 - LAN1
#Target[core-tcydub1-ixdub1-lan1]: #ethernet23:sillypassword@swi1-ix1-1:::::2 + #ethernet24:sillypassword@swi1-ix1-1:::::2
#MaxBytes[core-tcydub1-ixdub1-lan1]: 2500000000
#Directory[core-tcydub1-ixdub1-lan1]: trunks
#Title[core-tcydub1-ixdub1-lan1]: Trunk Core - TCYDUB1-IXDUB1 - LAN1


## swi1-ix1-1 - swi1-ix1-2
#Target[core-swi1-ix1-1_swi1-ix1-2-lan1]: #ethernet21:sillypassword@swi1-ix1-1:::::2 + #ethernet22:sillypassword@swi1-ix1-1:::::2
#MaxBytes[core-swi1-ix1-1_swi1-ix1-2-lan1]: 2500000000
#Directory[core-swi1-ix1-1_swi1-ix1-2-lan1]: trunks
#Title[core-swi1-ix1-1_swi1-ix1-2-lan1]: Inter-POP Trunk Core - IXDUB1 - swi1-ix1-1 swi1-ix1-2 - LAN1
<?php }} ?>
