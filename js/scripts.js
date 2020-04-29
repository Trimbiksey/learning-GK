
$(document).ready(function () {
  $('.header-contacts__button').on("click", function () {
    $('.overlay').show()
  });
  $('.popup-close').on("click", function () {
    $('.overlay').hide();
  })

});




new WOW().init();


$('.main-slider').slick({
  arrows: true,
  nextArrow: '<button type="button" class="slider-main slide-n"></i></button>',
  prevArrow: '<button type="button" class="slider-main slide-p">  </i></button>',
  fade: true,
  dots: true,
  speed: 1500,
  easing: 'ease',
  infinite: true,
  autoplay: true,
  autoplaySpeed: 400,
  responsive: [
    {
      breakpoint: 870,
      settings: {
        arrows: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false

      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]

});