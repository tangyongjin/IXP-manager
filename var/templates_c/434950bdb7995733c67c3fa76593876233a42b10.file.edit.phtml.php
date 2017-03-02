<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 11:35:39
         compiled from "/opt/ixpmanager/application/views/customer/forms/edit.phtml" */ ?>
<?php /*%%SmartyHeaderCode:52512505958b7930b5938b2-68559869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '434950bdb7995733c67c3fa76593876233a42b10' => 
    array (
      0 => '/opt/ixpmanager/application/views/customer/forms/edit.phtml',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52512505958b7930b5938b2-68559869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isEdit' => 0,
    'object' => 0,
    'element' => 0,
    'resellerMode' => 0,
    'multiIXP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7930b5ec7b1_61869964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7930b5ec7b1_61869964')) {function content_58b7930b5ec7b1_61869964($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?>
<form class="form-horizontal" enctype="application/x-www-form-urlencoded"
        accept-charset="UTF-8" method="post" horizontal="1"
        <?php if ($_smarty_tpl->tpl_vars['isEdit']->value) {?>
            action="<?php echo smarty_function_genUrl(array('controller'=>"customer",'action'=>"edit",'id'=>$_smarty_tpl->tpl_vars['object']->value->getId()),$_smarty_tpl);?>
"
        <?php } else { ?>
            action="<?php echo smarty_function_genUrl(array('controller'=>"customer",'action'=>"add"),$_smarty_tpl);?>
"
        <?php }?>>

<div class="row-fluid">

    <div class="span6">

        <fieldset>
            <legend>Customer Details</legend>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->name;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->type;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->shortname;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->corpwww;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->datejoin;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->dateleave;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->status;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->MD5Support;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->abbreviatedName;?>


        </fieldset>

    </div>

    <div class="span6">

        <fieldset id="full-member-details" >
            <legend>Peering Details</legend>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->autsys;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->maxprefixes;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->peeringemail;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->peeringmacro;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->peeringmacrov6;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->peeringpolicy;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->irrdb;?>

            <?php echo $_smarty_tpl->tpl_vars['element']->value->activepeeringmatrix;?>


            <p><em>Note that the IPv4 peering macro is used when there is no v6 macro set. To force no macro
            for IPv6, set it as AS-NULL.</em></p>
        </fieldset>

    </div>


</div>

<div id="full-member-details2" class="row-fluid">

    <div class="span6">

     <fieldset>
        <legend>NOC Details</legend>

        <?php echo $_smarty_tpl->tpl_vars['element']->value->nocphone;?>

        <?php echo $_smarty_tpl->tpl_vars['element']->value->noc24hphone;?>

        <?php echo $_smarty_tpl->tpl_vars['element']->value->nocfax;?>

        <?php echo $_smarty_tpl->tpl_vars['element']->value->nocemail;?>

        <?php echo $_smarty_tpl->tpl_vars['element']->value->nochours;?>

        <?php echo $_smarty_tpl->tpl_vars['element']->value->nocwww;?>


    </fieldset>
    </div>

    <div class="span6">
        <?php if ($_smarty_tpl->tpl_vars['resellerMode']->value||$_smarty_tpl->tpl_vars['multiIXP']->value) {?>
            <fieldset>
                <legend>
                    <?php if ($_smarty_tpl->tpl_vars['resellerMode']->value&&$_smarty_tpl->tpl_vars['multiIXP']->value) {?>
                        Reseller & IXP Association Details
                    <?php } elseif ($_smarty_tpl->tpl_vars['resellerMode']->value) {?>
                        Reseller Details
                    <?php } else { ?>
                        IXP Association Details
                    <?php }?>
                </Legend>
                <?php if ($_smarty_tpl->tpl_vars['resellerMode']->value) {?>
                    <?php echo $_smarty_tpl->tpl_vars['element']->value->isReseller;?>

                    <?php echo $_smarty_tpl->tpl_vars['element']->value->isResold;?>

                    <div id="reseller-element-div" style="margin-top: -15px; margin-left: 80px; <?php if (!$_smarty_tpl->tpl_vars['element']->value->reseller->getValue()) {?>display: none;<?php }?> ">
                        <?php echo $_smarty_tpl->tpl_vars['element']->value->reseller;?>

                    </div>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['element']->value->ixp;?>

            </fieldset>
            <?php if ($_smarty_tpl->tpl_vars['resellerMode']->value) {?>
                <script type="text/javascript">
                    $( document ).ready( function(){

                        $( "#isResold" ).change( function(){
                            if( $( this ).prop( "checked" ) )
                            {
                                $( '#reseller-element-div' ).show();
                                if( $( '#isReseller' ).prop( "checked" ) )
                                    $( '#isReseller' ).prop( "checked", false );
                            }
                            else
                                $( '#reseller-element-div' ).hide();

                        });

                        $( "#isReseller" ).change( function(){
                            if( $( this ).prop( "checked" ) )
                            {
                                if( $( '#isResold' ).prop( "checked" ) )
                                    $( '#isResold' ).prop( "checked", false ).trigger( "change" );
                            }

                        });
                    });
                </script>
            <?php }?>
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['element']->value->ixp;?>

        <?php }?>

    </div>

</div>


<div class="form-actions">

    <?php echo $_smarty_tpl->tpl_vars['element']->value->cancel;?>

    <?php echo $_smarty_tpl->tpl_vars['element']->value->submit;?>


</div>


</form>


<script type="text/javascript">

$(document).ready( function(){

    $('#datejoin').datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'yy-mm-dd'
    });

    $('#dateleave').datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'yy-mm-dd'
    });

    if( $('#datejoin').val().length > 10 )
        $('#datejoin').val( $('#datejoin').val().substr( 0, 10 ) );

    if( $('#dateleave').val().length > 10 )
        $('#dateleave').val( $('#dateleave').val().substr( 0, 10 ) );

    $( '#type' ).bind( 'change', function( event ){
        if( $( '#type' ).val() == 2 )  // associate member
        {
            $( '#full-member-details' ).slideUp( 'fast' );
            $( '#full-member-details2' ).slideUp( 'fast' );
        }
        else {
            $( '#full-member-details2' ).slideDown( 'fast' );
            $( '#full-member-details' ).slideDown( 'fast', function() {
                //$( '#irrdb' ).trigger( "liszt:updated" );
                //$(".chzn-select").chosen();
            });
        }
    });

    $( "#name" ).on( "change", function(){
        if( $( '#abbreviatedName' ).val() == "" )
            $( '#abbreviatedName' ).val( $('#name' ).val() );
    });

    <?php if ($_smarty_tpl->tpl_vars['isEdit']->value&&$_smarty_tpl->tpl_vars['object']->value->getType()==2) {?>
        $( '#full-member-details' ).slideUp( 'fast' );
        $( '#full-member-details2' ).slideUp( 'fast' );
    <?php }?>

    $( '#type' ).trigger( 'change' );

});

</script>
<?php }} ?>
