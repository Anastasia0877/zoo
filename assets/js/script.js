$(document).ready(function(){
    $('.slider').slick({
      slidesToShow: 1,
    slidesToScroll: 1
    });
  });
          
        
  // burger-menu
$('.menu-icon').on('click', function(){
  $('.menu-icon, .menu').toggleClass("active");
  // $('body').toggleClass("overlay");
})

$(document).click(function(e) {
  if (!$(e.target).hasClass("active") &&
      $(e.target).parents(".site-nav").length === 0) {
        $('.menu-icon, .menu').removeClass("active");
        // $('body').removeClass("overlay");
  }
});
$('.menu-item').on('click', function(){
  $('.menu-icon, .menu').removeClass("active");
  // $('body').removeClass("overlay");
})  

// button-back-to-top
function backToTop() {
  var button = $('.back-to-top');
  $(window).on('scroll', () => {
      if ($(this).scrollTop() >= 200) {
          button.fadeIn();
      } else {
          button.fadeOut();
      }
  });
  button.on('click', (e) => {
      e.preventDefault();
      $('html').animate({
          scrollTop: 0
      }, '100');
  })
}
backToTop();
