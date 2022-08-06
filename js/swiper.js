//スライダー用JS

//swiper
const mainswiper = new Swiper('.swiper', {
  loop: true,
  loopAdditionalSlides: 1,
  pagination: {
    el: '.swiper-pagination',
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  slidesPerView: 1,
  spaceBetween: 10,
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 10
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 10
    }
  },

  speed: 500,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },

  effect: 'slide'
});


//slick
$(function(){

  $('.slider').slick({
		arrows: true,
		prevArrow: '<div class="prev-arrow slideBtn"></div>',
		nextArrow: '<div class="next-arrow slideBtn"></div>',
		dots: true,
  });
});