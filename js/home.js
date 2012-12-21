$(function(){
    var indice = -1;
    $("#paginacao ul li a").click(function(){
        indice = $("#paginacao ul li a").index(this);
        
        $("#paginacao ul li a").removeClass("marcado");
        $("#sliderHome img").fadeOut(500);
        
        $(this).addClass("marcado");
        $("#sliderHome img").eq(indice).fadeIn(500);
    });
    $("#paginacao ul li a").eq(0).trigger("click");
});