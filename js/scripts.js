
$(document).ready(function () {
  $('.header-contacts__button').on("click", function () {
    $('.overlay').show()
  });
  $('.popup-close').on("click", function () {
    $('.overlay').hide();
  })

});




new WOW().init();



$(document).ready(function () {
  $('.production-slider_top').slick({
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    asNavFor: '.production-slider_bottom'
  });

  $('.production-slider_bottom').slick({
    arrows: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ],
    // prevArrov: '<div class="slider-arrow slider-arrow_prod slider-arrow_left"></div>',
    // nextArrow: '<div class="slider-arrow slider-arrow_prod slider-arrow_right"></div>',
    asNavFor: ".production-slider_top"
  });

});

$(document).ready(function () {
  var menu_link = $('.menu-link');
  var menu_link_active = $('menu-link_active');
  var menu = $('.menu');
  var nav_link = $('.menu a');

  menu_link.click(function () {
    menu_link.toggleClass('menu-link_active');
    menu.toggleClass('menu_active')
  });

  menu_link_active.click(function () {
    menu_link.removeClass('menu-linc_active');
  });

  nav_link.click(function () {
    menu_link.toggleClass('menu-link_active');
    menu.toggleClass('menu_active');
  });
});