$(document).ready(function () {
    $(".menu-icon").on("click", function () {
        $("nav ul").toggleClass("showing");
    });

});

$(window).on("scroll", function () {
    if ($(window).scrollTop()) {
        $('nav').addClass('black');
    }
    else {
        $('nav').removeClass('black');
    }
});
$(document).ready(function () {
    $("#book").hide();
    
    if ($("#book").hide()) {
        $("#toma").click(function(){
            $("#book").fadeIn(500);
        });
    }
    
});
$(document).ready(function () {
    
    if ($("#book").hide()) {
        $("#sair").click(function(){
            $("#book").fadeOut(500);
        });
    }
});
    