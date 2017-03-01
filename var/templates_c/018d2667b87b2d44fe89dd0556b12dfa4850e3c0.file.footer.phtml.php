<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:39:22
         compiled from "/opt/ixpmanager/application/views/footer.phtml" */ ?>
<?php /*%%SmartyHeaderCode:195222734258b7155ac04ab7-92829470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '018d2667b87b2d44fe89dd0556b12dfa4850e3c0' => 
    array (
      0 => '/opt/ixpmanager/application/views/footer.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195222734258b7155ac04ab7-92829470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hasIdentity' => 0,
    'user' => 0,
    'mode' => 0,
    'acust' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7155ac25be0_28806891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7155ac25be0_28806891')) {function content_58b7155ac25be0_28806891($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['hasIdentity']->value)&&$_smarty_tpl->tpl_vars['hasIdentity']->value&&isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value->getPrivs()==3) {?>

        </div><!--/span-->
    </div><!--/row-->
<?php }?>

<?php if (@constant('MAINTENANCE_MODE')) {?>
    <div class="alert alert-info" style="text-align: center;">
        <strong>*** MAINTENANCE MODE ENABLED ***</strong>
    </div>
<?php }?>

<?php echo smarty_function_tmplinclude(array('file'=>'footer-content.phtml'),$_smarty_tpl);?>


<?php if (!isset($_smarty_tpl->tpl_vars['mode']->value)||$_smarty_tpl->tpl_vars['mode']->value!='fluid') {?>
    
    </div> <!-- </div class="container"> -->

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['hasIdentity']->value)&&$_smarty_tpl->tpl_vars['hasIdentity']->value) {?>
<script>
    $( ".chzn-select" ).chosen();

    <?php if (isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value->getPrivs()==3) {?>
        $( "#menu-select-customer" ).chosen().change( function(){
            document.location.href = '<?php echo smarty_function_genUrl(array('controller'=>"customer",'action'=>"overview"),$_smarty_tpl);?>
/id/' + $( "#menu-select-customer" ).val();
        });

        <?php if (isset($_smarty_tpl->tpl_vars['acust']->value)) {?>
            $( "#menu-select-customer" ).val( <?php echo $_smarty_tpl->tpl_vars['acust']->value['id'];?>
 );
            $( "#menu-select-customer" ).trigger( "liszt:updated" );
        <?php }?>
    <?php }?>
</script>
<?php }?>

</body>
</html>
<?php }} ?>
