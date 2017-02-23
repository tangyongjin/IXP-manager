<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-23 12:19:17
         compiled from "/opt/ixpmanager/application/views/footer-content.phtml" */ ?>
<?php /*%%SmartyHeaderCode:56680913358ae62c5940205-59314978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b51666c9e4831c61a210f9dfdef81ea91b4e065f' => 
    array (
      0 => '/opt/ixpmanager/application/views/footer-content.phtml',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56680913358ae62c5940205-59314978',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ENDTIME' => 0,
    'RUNNINGTIME' => 0,
    'hasIdentity' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58ae62c595cc39_66240299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ae62c595cc39_66240299')) {function content_58ae62c595cc39_66240299($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/ixpmanager/application/../vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?>
<footer>

    <p>
        IXP Manager V<?php echo @constant('APPLICATION_VERSION');?>

        &nbsp;&nbsp;|&nbsp;&nbsp;
        Copyright &copy; 2010 - <?php echo smarty_modifier_date_format(time(),'%Y');?>
 Internet Neutral Exchange Association Company Limited By Guarantee. - <a href="http://www.inex.ie/">http://www.inex.ie/</a>
        &nbsp;|&nbsp;
        <a href="<?php echo smarty_function_genUrl(array('controller'=>"static",'action'=>"support"),$_smarty_tpl);?>
">Contact Us</a>
    </p>

    <p>
        Licensed under GPL v2.0.
        &nbsp;|&nbsp;
        This Program is provided AS IS, without warranty.
        &nbsp;|&nbsp;
        <?php $_smarty_tpl->tpl_vars["ENDTIME"] = new Smarty_variable(microtime(1), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["RUNNINGTIME"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['ENDTIME']->value-@constant('APPLICATION_STARTTIME')), null, 0);?>
        Generated in <?php echo sprintf("%0.3f",$_smarty_tpl->tpl_vars['RUNNINGTIME']->value);?>
 seconds
    </p>
    

    <?php if (@constant('APPLICATION_ENV')!='production'&&(!isset($_smarty_tpl->tpl_vars['hasIdentity']->value)||!$_smarty_tpl->tpl_vars['hasIdentity']->value)) {?>
        <p>
            <strong>
                THE IXP IS RUNNING IN NON-PRODUCTION MODE AND INFORMATION CAN BE LEAKED VIA DEBUGGING
                UTILITIES. ENSURE HTACCESS IS IN PLACE.
            </strong>
        </p>
    <?php }?>

</footer>
<?php }} ?>
