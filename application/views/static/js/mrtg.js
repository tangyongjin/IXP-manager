function re_generate_mrtg_cfg(){
   
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





});