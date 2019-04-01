$(function(){
    var tope = $("section#testimonios").offset().top;
    $(window).scroll(function(){
        if($(this).scrollTop() > tope){
            $("div.jumbotron").css("opacity","1");
            $("div.jumbotron").addClass("bounceInLeft");
        }
    });
});