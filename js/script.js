'use strict';


$(function() {

  /* ---------------- Slide mobile navigagion ---------------- */
  
  $('.nav-toggle').click(function() {
    //   // $('.main-nav').toggle('slide');
    //   // $('#main-nav, .mobile-logo').animate({width: 'toggle'}, 'slow', function() {
      //   //   $(this).toggleClass('nav-expanded').css('display', '');
      //   // });

    $('#main-nav').addClass('nav-transition');
    $('#main-nav').toggleClass('nav-active');
    setTimeout(function() {
      $('#main-nav').removeClass('nav-transition');
    }, 600)
    
  });

  /* ---------------- Change navigation color on scroll ---------------- */

  const $nav = $("header nav");
  const $scrollPosition = $(document).scrollTop();
  const $home = $('body').is('#home');

  if (!$home) {
    $nav.removeClass('nav-transparent');
  } else if ($home && $scrollPosition > $nav.height()) {
    $nav.removeClass('nav-transparent');
    changeNavColor();
  } else {
    changeNavColor();
  }

  function changeNavColor() {
    $(document).scroll(function() {
      $nav.toggleClass('nav-transparent', $(this).scrollTop() <= $nav.height());
    });
  }

  
});    