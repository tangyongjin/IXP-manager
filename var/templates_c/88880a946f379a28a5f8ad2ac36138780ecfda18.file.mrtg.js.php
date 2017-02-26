<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-02-26 16:06:28
         compiled from "/opt/ixpmanager/application/views/static/js/mrtg.js" */ ?>
<?php /*%%SmartyHeaderCode:131718279658b28c841b4291-77672488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88880a946f379a28a5f8ad2ac36138780ecfda18' => 
    array (
      0 => '/opt/ixpmanager/application/views/static/js/mrtg.js',
      1 => 1487922664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131718279658b28c841b4291-77672488',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b28c841b79c0_78459841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b28c841b79c0_78459841')) {function content_58b28c841b79c0_78459841($_smarty_tpl) {?>function re_generate_mrtg_cfg(){
   
    var timestamp = new Date();
    alert('生成新的配置文件')

    url='http://'+document.domain+'/ixp/ajax.php?t='+timestamp
    $.post(url).done(function(data){
      $('#mrtg_file').html('');
      $('#mrtg_file').html(data);
    });
}


function restart_mrtg(){


alert('在属主机执行: docker-compose -f  /ixpdata/webapp/opt/ixpmanager/docker/docker-compose.yml stop mrtg&&docker-compose -f  /ixpdata/webapp/opt/ixpmanager/docker/docker-compose.yml start mrtg '); 


}




$( 'document' ).ready( function(){
      $('#recreate_mrtg_cfg').click(function(){
           re_generate_mrtg_cfg();
        });

        $('#restart_mrtg').click(function(){
           restart_mrtg();
        });



});<?php }} ?>
