(function ($) {

	"use strict";

	// Header Type = Fixed
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    var box = $('.header-text').height();
    var header = $('header').height();

    if (scroll >= box - header) {
      $("header").addClass("background-header");
    } else {
      $("header").removeClass("background-header");
    }
  });


	$('.loop').owlCarousel({
      center: true,
      items:2,
      loop:true,
      nav: true,
      margin:30,
      responsive:{

          992:{
              items:4
          }
      }
  });


	// Menu Dropdown Toggle
  if($('.menu-trigger').length){
    $(".menu-trigger").on('click', function() {
      $(this).toggleClass('active');
      $('.header-area .nav').slideToggle(200);
    });
  }


  // Menu elevator animation
  $('.scroll-to-section a[href*=\\#]:not([href=\\#])').on('click', function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        var width = $(window).width();
        if(width < 991) {
          $('.menu-trigger').removeClass('active');
          $('.header-area .nav').slideUp(200);
        }
        $('html,body').animate({
          scrollTop: (target.offset().top) + 1
        }, 700);
        return false;
      }
    }
  });

// Page loading animation
    $(window).on('ready', function() {
        $('#js-preloader').addClass('loaded');
    });



	// Window Resize Mobile Menu Fix
  function mobileNav() {

    $('.submenu').on('click', function(e) {
        var width = $(window).width();
        if(width < 1400) {
          e.preventDefault();
          var $submenuUl = $(this).find('ul');

          if ($submenuUl.hasClass('active')) {
            $submenuUl.removeClass('active');
          } else {
            $('.submenu ul').removeClass('active');
            $submenuUl.addClass('active');
          }
        }
      });
  }
  mobileNav();
})(window.jQuery);