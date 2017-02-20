$(document).ready(function(){
  $(".menu-abrir").click(function(e){
    e.preventDefault();
    $("#menu").show(100);
    $(".menu-cerrar").show(100);
    $(".menu-abrir").hide(100);
  });

  $(".menu-cerrar").click(function(e){
    e.preventDefault();
    $("#menu").hide(100);
    $(".menu-abrir").show(100);
    $(".menu-cerrar").hide(100);
  });
});
