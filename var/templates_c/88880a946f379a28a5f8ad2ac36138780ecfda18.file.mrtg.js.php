<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-02 02:39:22
         compiled from "/opt/ixpmanager/application/views/static/js/mrtg.js" */ ?>
<?php /*%%SmartyHeaderCode:185813935158b7155abfe442-96064268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88880a946f379a28a5f8ad2ac36138780ecfda18' => 
    array (
      0 => '/opt/ixpmanager/application/views/static/js/mrtg.js',
      1 => 1488392703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185813935158b7155abfe442-96064268',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7155ac03392_48733144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7155ac03392_48733144')) {function content_58b7155ac03392_48733144($_smarty_tpl) {?>function re_generate_mrtg_cfg(){
   
    var timestamp = new Date();
    alert('生成新的配置文件')

    url='http://'+document.domain+'/ixp/ajax.php?action=create&t='+timestamp
    $.post(url).done(function(data){
      $('#mrtg_file').html('');
      $('#mrtg_file').html(data);
    });
}


function view_mrtg_cfg(){


 var timestamp = new Date();
    alert('查看配置文件')

    url='http://'+document.domain+'/ixp/ajax.php?action=preview&t='+timestamp
    $.post(url).done(function(data){
      $('#mrtg_file').html('');
      $('#mrtg_file').html(data);
    });


}



function refreshmac(){


 var timestamp = new Date();
    alert('刷新MAC地址')

    url='http://'+document.domain+'/ixp/ajax.php?action=refreshmac&t='+timestamp
    $.post(url).done(function(data){
      $('#mrtg_file').html('');
      $('#mrtg_file').html(data);
    });


}




$( 'document' ).ready( function(){
      $('#recreate_mrtg_cfg').click(function(){
           re_generate_mrtg_cfg();
        });

        $('#view_mrtg_cfg').click(function(){
           view_mrtg_cfg();
        });

          $('#refreshmac').click(function(){
           refreshmac();
        });





});<?php }} ?>
