function re_generate_mrtg_cfg(){
   url='http://'+document.domain+'/ixp/ajax.php'
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



});