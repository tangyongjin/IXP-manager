<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-03 11:40:31
         compiled from "/opt/ixpmanager/application/views/virtual-interface/js/add-wizard.js" */ ?>
<?php /*%%SmartyHeaderCode:174599646658b8e5af06a6a1-86057928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1a5f7d465da04a69b3554ce97debce6a4e7e626' => 
    array (
      0 => '/opt/ixpmanager/application/views/virtual-interface/js/add-wizard.js',
      1 => 1488392551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174599646658b8e5af06a6a1-86057928',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resellerMode' => 0,
    'resoldCusts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b8e5af0840f2_96806792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8e5af0840f2_96806792')) {function content_58b8e5af0840f2_96806792($_smarty_tpl) {?><?php if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?>
$( "#switchid" ).on( 'change', updateSwitchPort );
$( "#fn_switchid" ).on( 'change', updateSwitchPort );

function randomString( length ) {
    var result = '';

    // if we do not have a cryptographically secure version of a PRNG, just alert and return
    if( window.crypto.getRandomValues === undefined ) {
        alert( 'No cryptographically secure PRNG available.' );
    } else {
        var chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        var array = new Uint32Array(length);

        window.crypto.getRandomValues(array);
        for( var i = 0; i < length; i++ )
            result += chars[ array[i] % chars.length ];
    }

    return result;
}

$( "#ipv4bgpmd5secret" ).wrap( '<div class="input-append"></div>' );
$( "#ipv4bgpmd5secret" ).after( '<button class="btn" type="button" id="genipv4bgpmd5secret"><i class="icon-refresh"></i></button>');
$( "#genipv4bgpmd5secret" ).on( 'click', function( e ) {
    $( "#ipv4bgpmd5secret" ).val( randomString( 12 ) );
});

$( "#ipv6bgpmd5secret" ).wrap( '<div class="input-append"></div>' );
$( "#ipv6bgpmd5secret" ).after( '<button class="btn" type="button" id="genipv6bgpmd5secret"><i class="icon-retweet"></i></button>');
$( "#genipv6bgpmd5secret" ).on( 'click', function( e ) {
    $( "#ipv6bgpmd5secret" ).val( $( "#ipv4bgpmd5secret" ).val().trim() === '' ? randomString( 12 ) : $( "#ipv4bgpmd5secret" ).val() );
});

function updateSwitchPort(){

    $( this ).attr( 'disabled', 'disabled' );

    var prep = "#";
    var type = "peering";
    if( $( this ).attr( "id" ).substr( 0, 3 ) == "fn_" )
    {
        prep += "fn_";
        type = "fanout";
    }

    if( $(this).val() != '0' ) {
        ossChosenClear( prep + "switchportid", "<option>Please wait, loading data...</option>" );

        $.getJSON( "<?php echo smarty_function_genUrl(array('controller'=>'switch-port','action'=>'ajax-get'),$_smarty_tpl);?>
/id/" +
            $( prep + "preselectPhysicalInterface" ).val() + "/type/" + type +  "/switchid/" + $(this).val(), function( j ) {

            var options = "<option value=\"\">- select -</option>\n";

            for( var i = 0; i < j.length; i++ )
                options += "<option value=\"" + j[i].id + "\">" + j[i].name + " (" + j[i].type + ")</option>\n";

            // do we have a preselect?
            if( $( prep + "preselectSwitchPort" ).val() ) {
                ossChosenSet( prep + "switchportid", options, $( prep + "preselectSwitchPort" ).val() );
            } else {
                ossChosenSet( prep + "switchportid", options );
            }
        });
    }

    $( this).removeAttr( 'disabled' );

}

$( "#switchportid" ).change( function() {
    $( "#preselectSwitchPort" ).val( $( "#switchportid" ).val() );
});

$( "#fn_switchportid" ).change( function() {
    $( "#fn_preselectSwitchPort" ).val( $( "#fn_switchportid" ).val() );
});

$( "#vlanid" ).on( 'change', function( event ) {

    $( "#vlanid" ).attr( 'disabled', 'disabled' );

    if( $(this).val() != '0' ) {

        //ossChosenClear( "#ipv4addressid", "<option>Please wait, loading data...</option>" );
        //ossChosenClear( "#ipv6addressid", "<option>Please wait, loading data...</option>" );

        $.getJSON( "<?php echo smarty_function_genUrl(array('controller'=>'ipv4-address','action'=>'ajax-get-for-vlan'),$_smarty_tpl);?>
/vliid/" +
                $( "#preselectVlanInterface" ).val() + "/vlanid/" + $(this).val(), null, function( j ){

            var options = "<option value=\"\">- select -</option>\n";

            for( var i = 0; i < j.length; i++ )
                options += "<option value=\"" + j[i].address + "\">" + j[i].address + "</option>\n";

            // do we have a preselect?
            if( $( "#preselectIPv4Address" ).val() ) {
                ossChosenSet( "#ipv4addressid_osschzn", options, $( "#preselectIPv4Address" ).val() );
            } else {
                ossChosenSet( "#ipv4addressid_osschzn", options );
            }
        });

        $.getJSON( "<?php echo smarty_function_genUrl(array('controller'=>'ipv6-address','action'=>'ajax-get-for-vlan'),$_smarty_tpl);?>
/vliid/" +
                $( "#preselectVlanInterface" ).val() + "/vlanid/" + $(this).val(), null, function( j ){

            var options = "<option value=\"\">- select -</option>\n";

            for( var i = 0; i < j.length; i++ )
                options += "<option value=\"" + j[i].address + "\">" + j[i].address + "</option>\n";

            // do we have a preselect?
            if( $( "#preselectIPv6Address" ).val() ) {
                ossChosenSet( "#ipv6addressid_osschzn", options, $( "#preselectIPv6Address" ).val() );
            } else {
                ossChosenSet( "#ipv6addressid_osschzn", options );
            }
        });

    }

    $("#vlanid").removeAttr( 'disabled' );

});


$( "#ipv4addressid" ).change( function() {
    $( "#preselectIPv4Address" ).val( $( "#ipv4addressid" ).val() );
});

$( "#ipv6addressid" ).change( function() {
    $( "#preselectIPv6Address" ).val( $( "#ipv6addressid" ).val() );
});

$(document).ready( function() {

    // trigger a change on selects to populate dependant fields
    $("#switchid").trigger( 'change' );
    $("#custid").trigger( 'change' );
    $("#vlanid").trigger( 'change' );


    $(
        '#ipv4enabled' ).on( 'click', function( event ){

        if( $( '#ipv4enabled' ).is(':checked') )
            $( '#ipv4details' ).slideDown();
        else
            $( '#ipv4details' ).slideUp();

        $( window ).trigger( "resize" );
    });

    $( '#ipv6enabled' ).on( 'click', function( event ){

        if( $( '#ipv6enabled' ).is(':checked') )
            $( '#ipv6details' ).slideDown();
        else
            $( '#ipv6details' ).slideUp();

        $( window ).trigger( "resize" );
    });

    if( $( '#ipv4enabled' ).is(':checked') )
        $( '#ipv4details' ).show();

    if( $( '#ipv6enabled' ).is(':checked') )
        $( '#ipv6details' ).show();

    <?php if ($_smarty_tpl->tpl_vars['resellerMode']->value) {?>
        $("#fn_switchid").trigger( 'change' );

        $( '#fanout' ).on( 'click', function( event ){
            if( $( this ).prop( 'checked' ) )
                $( '#fanoutdetails' ).slideDown();
            else
                $( '#fanoutdetails' ).slideUp();
        });

        if( $( '#fanout' ).prop( 'checked' ) )
            $( '#fanoutdetails' ).show();

        $( '#custid' ).on( 'change', function(){
            var resoldCusts = <?php echo $_smarty_tpl->tpl_vars['resoldCusts']->value;?>
;
            if( resoldCusts[ $(this).val() ] === undefined )
            {
                $( '#fanout' ).removeAttr( "checked" );
                $( '#fanoutdetails' ).slideUp();
                $( '#fanoutbox' ).slideUp();
            }
            else
                $( '#fanoutbox' ).slideDown();
        });
    <?php }?>
});
<?php }} ?>
