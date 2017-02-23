<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-23 15:58:55
         compiled from "/opt/ixpmanager/application/views/peering-matrix/index.js" */ ?>
<?php /*%%SmartyHeaderCode:197509500358ae963f850507-82253607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8efc9dc5ec27b95de7204d1cc9438a491c7e138' => 
    array (
      0 => '/opt/ixpmanager/application/views/peering-matrix/index.js',
      1 => 1487821144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197509500358ae963f850507-82253607',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jsessions' => 0,
    'jcusts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58ae963f861191_74720834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ae963f861191_74720834')) {function content_58ae963f861191_74720834($_smarty_tpl) {?>
sessions = <?php echo $_smarty_tpl->tpl_vars['jsessions']->value;?>
;

custs = <?php echo $_smarty_tpl->tpl_vars['jcusts']->value;?>
;

jQuery.expr[':'].regex = function(elem, index, match) {
    var matchParams = match[3].split(','),
        validLabels = /^(data|css):/,
        attr = {
            method: matchParams[0].match(validLabels) ? 
                        matchParams[0].split(':')[0] : 'attr',
            property: matchParams.shift().replace(validLabels,'')
        },
        regexFlags = 'ig',
        regex = new RegExp(matchParams.join('').replace(/^\s+|\s+$/g,''), regexFlags);
    return regex.test(jQuery(elem)[attr.method](attr.property));
}

$( 'document' ).ready( function(){

	columnClicked = false;
	mouseLocked = false;
	
	$( "#table-pm" ).delegate( 'td', 'mouseover mouseout click', function( event ) {
		
		if( columnClicked ) return;
		
		if( this.id.indexOf( 'td-asn-' ) == 0 ) return; 
		if( this.id.indexOf( 'td-name-' ) == 0 ) return; 
		
	    var yasn = this.id.substr( this.id.lastIndexOf( '-' ) + 1 );
	    var xasn = this.id.substr( 3, this.id.lastIndexOf( '-' ) - 3 );
		
		if( event.type == 'mouseover' && !mouseLocked) 
		{
		    //$(this).parent().addClass( "hover" );
		    $( "colgroup" ).eq( $(this ).index() ).addClass("hover");
		    $( '.col-yasn-' + yasn ).addClass( 'hover2' );
		    
			$( '#td-name-' + xasn ).addClass( "highlight2" );
			$( '#td-asn-' + xasn ).addClass( "highlight2" );
			
		    $( '#td-name-' + yasn ).addClass( "highlight" );
		    $( '#td-asn-' + yasn ).addClass( "highlight" );
		    $( '#th-as-' + yasn ).addClass( "highlight" );
	    }
		else if( event.type == 'click' )
		{
			if( mouseLocked )
			{
				//$("#tbody-pm").find( "tr" ).removeClass( "hover" );
				$("#table-pm").find( "colgroup" ).removeClass( "hover" );
			    $( '.col-yasn-' + yasn ).removeClass( 'hover2' );
				
				$( '[id|="td-name"]' ).removeClass( 'highlight' );
				$( '[id|="td-asn"]' ).removeClass( 'highlight' );
				$( '[id|="td-name"]' ).removeClass( 'highlight2' );
				$( '[id|="td-asn"]' ).removeClass( 'highlight2' );
				$( '[id|="th"]' ).removeClass( 'highlight' );
				mouseLocked = false;
			}
			else
				mouseLocked = true;
		}
		else if( event.type == 'mouseout' && !mouseLocked) 
	    {
		      //$(this).parent().removeClass("hover");
			
            $("colgroup").eq($(this).index()).removeClass("hover");

		    $( '.col-yasn-' + yasn ).removeClass( 'hover2' );

			$( '#td-name-' + xasn ).removeClass( "highlight2" );
			$( '#td-asn-' + xasn ).removeClass( "highlight2" );
			
		    $( '#td-name-' + yasn ).removeClass( "highlight" );
		    $( '#td-asn-' + yasn ).removeClass( "highlight" );
		    $( '#th-as-' + yasn ).removeClass( "highlight" );
	    }		
	});

	$( "#table-pm" ).delegate( 'th', 'mouseover mouseout', function( event ) {
		
		if( columnClicked ) return;
		if( this.id == 'th-asn' ) return; 
		if( this.id == 'th-name' ) return; 
		
		if( event.type == 'mouseover' && !mouseLocked ) 
		{
		      var yasn = this.id.substr( this.id.lastIndexOf( '-' ) + 1 );
		      $( '#td-name-' + yasn ).addClass( "highlight" );
		      $( '#td-asn-' + yasn ).addClass( "highlight" );
		      $( '#th-as-' + yasn ).addClass( "highlight" );
	    }
		else if( event.type == 'mouseout' && !mouseLocked ) 
	    {
		      var yasn = this.id.substr( this.id.lastIndexOf( '-' ) + 1 );
		      $( '#td-name-' + yasn ).removeClass( "highlight" );
		      $( '#td-asn-' + yasn ).removeClass( "highlight" );
		      $( '#th-as-' + yasn ).removeClass( "highlight" );
	    }		
	});
	
		
	$( '[id|="th-as"]' ).on( "click", function( e ){
		
		if( columnClicked ) {
			columnClicked = false;
			$( '[id|="th-as"]' ).show();
			$( 'td:regex(id,td\-[0-9]+\-[0-9]+)' ).show();
			
		    var yasn = this.id.substr( this.id.lastIndexOf( '-' ) + 1 );
		    $( '#td-name-' + yasn ).removeClass( "highlight" );
		    $( '#td-asn-' + yasn ).removeClass( "highlight" );
		    $( '#th-as-' + yasn ).removeClass( "highlight" );
		}
		else {
			columnClicked = true;
			clickedCol = this;
			clickedAsn = this.id.substr( this.id.lastIndexOf( '-' ) + 1 );
			
			$( '[id|="th-as"]' ).each( function( index, element ) {
				asn = this.id.substr( this.id.lastIndexOf( '-' ) + 1 );
				
				if( asn == clickedAsn )
			    	return;

				$( '#th-as-' + asn ).hide();
				$( 'td:regex(id,td\-[0-9]+\-' + asn + ')' ).hide();

			});
			
		    $( '#td-name-' + clickedAsn ).addClass( "highlight" );
		    $( '#td-asn-' + clickedAsn ).addClass( "highlight" );
		    $( '#th-as-' + clickedAsn ).addClass( "highlight" );
		}
		
	});
		
	$( '[id|="btn-zoom"]' ).on( "click", function( e ){
		var i, zoom = 0;
		for( i = 1; i <= 5; i++ )
		{
			if( $( '#tbody-pm' ).hasClass( 'zoom' + i  ) )
			{
				zoom = i;
				break;
			}
		}

		if( zoom != 0 )
		{
			var nzoom = ( this.id == 'btn-zoom-out' ) ? zoom - 1 : zoom + 1;
			if( nzoom > 5 ) nzoom = 5;
			if( nzoom < 1 ) nzoom = 1;
			
			$( '.zoom' + zoom ).removeClass( 'zoom' + zoom ).addClass( 'zoom' + nzoom );
		}		
	});

	
	$( '[id|="peer-filter"]' ).on( "click", function( e ){
		var filter = this.id.substr( this.id.lastIndexOf( '-' ) + 1 );
		
		$( 'td.bilateral-rs' ).removeClass( 'peered' );
		$( 'td.bilateral-only' ).removeClass( 'peered' );
		$( 'td.rs-only' ).removeClass( 'peered' );
		$( 'td.bilateral-only' ).removeClass( 'not-peered' );
		$( 'td.rs-only' ).removeClass( 'not-peered' );
		
		switch( filter ) {
			case 'all':
				$( 'td.bilateral-rs' ).addClass( 'peered' );
				$( 'td.bilateral-only' ).addClass( 'peered' );
				$( 'td.rs-only' ).addClass( 'peered' );
				$( '#peer-dd-text' ).html( 'All Peerings' );
				break;
				
			case 'bi':
				$( 'td.bilateral-rs' ).addClass( 'peered' );
				$( 'td.bilateral-only' ).addClass( 'peered' );
				$( 'td.rs-only' ).addClass( 'not-peered' );
				$( '#peer-dd-text' ).html( 'Bilateral Peerings' );
				break;
				
			case 'rs':
				$( 'td.bilateral-rs' ).addClass( 'peered' );
				$( 'td.bilateral-only' ).addClass( 'not-peered' );
				$( 'td.rs-only' ).addClass( 'peered' );
				$( '#peer-dd-text' ).html( 'Route Server Peerings' );
				break;
				
		}
		
		$( '#peer-btn-group' ).removeClass('open');
		
		return false;
	});
	
	
});

<?php }} ?>
