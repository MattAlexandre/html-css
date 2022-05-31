$(document).ready(function(){
  $("#lista_teste").hover(function(){
    $(this).addCla("fundo");
},
function(){
    $(this).removeclass("fundo");
  });
 });
