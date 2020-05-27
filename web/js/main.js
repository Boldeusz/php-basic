$(function(){
    $(document).on('click','.language',function(){
        var lang = $(this).attr('id');
        
        $.post('index.php?r=site/language',{'lang':lang},function(data){
            location.reload();
        });
    });
});
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


