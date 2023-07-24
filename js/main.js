$ = jQuery;
jQuery(document).ready(function ($) {
  swiper = new Swiper(".swiper", {
    direction: "horizontal",
    loop: false,
    slidesPerView: 1,
    breakpoints: {
      620: {
        slidesPerView: 2,
        //   spaceBetween: 20
      },
      980: {
        slidesPerView: 4,
        //   spaceBetween: 30
      },
    },
  });

  $(".slide-next").click(function () {
    swiper.slideNext();
  });

  $(".slide-prev").click(function () {
    swiper.slidePrev();
  });

  $(".menu-toggler").click(function () {
    console.log("sdasdasdasd");
    $(".mobile-menu").toggleClass("mobile-menu-active");
  });
});
