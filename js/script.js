'use strict';


$(function() {

  /* ---------------- Toggle mobile slide navigagion ---------------- */
  
  function toggleSlideNav() {
    $('#main-menu-bg-overlay').fadeToggle();
    $('#main-menu').addClass('nav-transition');
    $('#main-menu').toggleClass('nav-active');
    setTimeout(function() {
      $('#main-menu').removeClass('nav-transition');
    }, 600);
  }
  
  $('.nav-toggle, #main-menu-bg-overlay').click(function() {
    toggleSlideNav();
  });
  
  $('#nav-links > li > a').click(function() {
    const $linkPath = this.pathname;
    const $currentPath = window.location.pathname;
    const $linkAnchor = this.hash;
    if ($linkPath == $currentPath && $linkAnchor) {
      toggleSlideNav();
    }
  });

  /* ---------------- Change styles on scroll ---------------- */

  const $nav = $("header nav");

  // ----- Navigation color ----- //

  const $scrollPosition = $(window).scrollTop();  
  const $home = $('.main').is('#home');

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

  // ----- Progress bar animation ----- //

  function animateProgressBar() {
    $('.progress').each(function() {
      const $viewTop = $(window).scrollTop() + $nav.height();
      const $viewBottom = $(window).scrollTop() + $(window).height();
      const $progressBarTop = $(this).offset().top;
      const $progressBarBottom = $progressBarTop + $(this).height();
  
      if ($progressBarTop > $viewTop && $progressBarBottom < $viewBottom) {
        $(this).addClass('progress-animation');
      } else {
        $(this).removeClass('progress-animation');        
      }
    });
  }
  // Execute on load
  animateProgressBar();
  // Bind event listener
  $(document).scroll(animateProgressBar);

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

  /* ---------------- Toggle video modal popup ---------------- */
  
  $('.video-modal-toggle').click(function() {
    $('#video-modal').fadeToggle();
  });
  
});
