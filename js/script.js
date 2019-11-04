'use strict';


$(function() {

  /* ---------------- Slide mobile navigagion ---------------- */
  
  $('.nav-toggle, #mobile-bg-overlay').click(function() {    
    $('#mobile-bg-overlay').fadeToggle();
    $('#main-menu').addClass('nav-transition');
    $('#main-menu').toggleClass('nav-active');
    setTimeout(function() {
      $('#main-menu').removeClass('nav-transition');
    }, 600);    
  });

  // $('.nav-toggle').click(function() {
    
  //   $('#main-menu').addClass('nav-transition');
  //   $('#main-menu').toggleClass('nav-active');
  //   setTimeout(function() {
  //     $('#main-menu').removeClass('nav-transition');
  //   }, 600)
    
  // });

  /* ---------------- Change navigation color on scroll ---------------- */

  const $nav = $("header nav");
  const $scrollPosition = $(document).scrollTop();
  const $home = $('body').is('#home');

  function changeNavColor() {
    $(document).scroll(function() {
      $nav.toggleClass('nav-transparent', $(this).scrollTop() <= $nav.height());
    });
  }

  if (!$home) {
    $nav.removeClass('nav-transparent');
  } else if ($home && $scrollPosition > $nav.height()) {
    $nav.removeClass('nav-transparent');
    changeNavColor();
  } else {
    changeNavColor();
  }

  /* ---------------- Change padding for responsive cards ---------------- */

  const $cardBody = $('.blog-card .card-body');

  function changeCardPadding() {
    const $cardWidth = $cardBody.outerWidth();
    if ($cardWidth >= 340) {
      $cardBody.css('padding', '12%');
    } else {
      $cardBody.css('padding', '');
    }
  }  
  // Execute on load
  changeCardPadding();
  // Bind event listener
  $(window).resize(changeCardPadding);

  /* ---------------- Video modal popup ---------------- */
  
  // $('#video-modal-show').click(function() {
  //   $('#video-modal').fadeIn();
  // });

  $('.video-modal-toggle').click(function() {
    $('#video-modal').fadeToggle();
  });

  
});    