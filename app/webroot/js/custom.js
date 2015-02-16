$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overplay'),
      navbar = $("#navbar"),
      isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        navbar.removeClass('is-open');
        navbar.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        navbar.removeClass('is-closed');
        navbar.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});