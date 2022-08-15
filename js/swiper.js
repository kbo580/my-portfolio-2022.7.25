//スライダー用JS
jQuery(function($){
  
  $(function(){
    //メインビジュアルのswiper
    const mvSwiper = new Swiper('.mvSwiper', {
      loop: true,
      loopAdditionalSlides: 1,
    autoplay: {
      delay: 7000,
      waitForTransition: false,
    },
    speed: 2000,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },

  });

 //worksのswiper
  const swiper = new Swiper('.swiper', {
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
  });
});