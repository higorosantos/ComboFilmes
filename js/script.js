/*Navbar black mobile*/
$(document).ready(function () {
    $(".menu-icon").on("click", function () {
        $("nav ul").toggleClass("showing");
    });

});
/**/

/*Navbar scroll mudar cor */
$(document).on('scroll',_.debounce(function() {
$(window).on("scroll", function () {
    if ($(window).scrollTop()) {
        $('nav').addClass('black');
        $('nav ul').removeClass("showing");
    }
    else {
        $('nav').removeClass('black');
    }
});
console.log("TomA")
}, 300));


