


// FOR NAVBAR FIXED WHEN SCROLL
$(window).on("scroll", function(){
    var scrolling = $(this).scrollTop();
    if (scrolling > 130){
        $(".navbar-part").addClass("navbar-fixed");
    }else{
        $(".navbar-part").removeClass("navbar-fixed");
    }
});


// FOR CART POPUP CARD
$(".cart-icon").on("click", function(){
    $(".cart-popup").addClass("active");
    $(".cross-btn").on('click', function(){
        $(".cart-popup").removeClass("active");
    });
});


// FOR WISHLIST POPUP CARD
$(".wish-icon").on("click", function(){
    $(".wish-popup").addClass("active");
    $(".cross-btn").on('click', function(){
        $(".wish-popup").removeClass("active");
    });
});


// FOR LEFT NAV SIDEBAR SHOW & HIDE
$(".menu-bar").on("click", function(){
    $(".navbar-slide").addClass("active");
    $(".cross-btn").on('click', function(){
        $(".navbar-slide").removeClass("active");
    });
});


// FOR RESPONSIVE DROPDOWN MENU
$(function () {
    $(".navbar-dropdown a").click(function() {
        $(this).next().toggle();
        if($('.dropdown-list:visible').length > 1) {
            $('.dropdown-list:visible').hide();
            $(this).next().show();
        }
    }); 
});


// FOR GRID SYSTEM PRODUCT CARD
$('.grid-hori').on('click', function(){
    $('.grid-hori').addClass('active');
    $('.grid-verti').removeClass('active');
    $('.grid-verti').on('click', function(){
        $('.grid-verti').addClass('active');
        $('.grid-hori').removeClass('active');
    });
});


// FOR NASTED DROPDOWN
$(function () {
    $(".nasted-dropdown a").click(function() {
        $(this).next().toggle();
        if($('.nasted-dropdown li ul:visible').length > 1) {
            $('.nasted-dropdown li ul:visible').hide();
            $(this).next().show();
        }
    }); 
});


// FOR PASSWORD HIDE & SHOW
$(".eye").on('click', function(){
    $(".eye").toggleClass("fa-eye-slash");
    $(".eye").toggleClass("fa-eye");

    var input = $("#pass");
    if (input.attr("type") === "password") {
        input.attr("type", "text");
    }
    else {
        input.attr("type", "password");
    }
});




