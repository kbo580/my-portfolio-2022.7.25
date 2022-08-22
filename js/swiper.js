//スライダー用JS
jQuery(function($){
  
  $(function(){



    /* メインビジュアルのswiper */
    var mvSwiper = new Swiper('.mvSwiper', {
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

    /* topページの制作物のswiper */
    var worksSwiper = new Swiper('.worksSwiper', {
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

    /* topのcordingのスライド */
    var cordingSwiper = new Swiper('.cordingSwiper', {
      loop: true,
      loopAdditionalSlides: 1,

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      //ページネーション
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      },

      slidesPerView: 1,
      speed: 500,
      effect: 'slide'
    });

    /* topのbannerのスライド */
    var bannerSwiper = new Swiper('.bannerSwiper', {
      loop: true,
      loopAdditionalSlides: 1,

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      //ページネーション
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      },

      slidesPerView: 1,
      speed: 500,
      effect: 'slide'
    });

    /* singleのpointのswiper */
    var pointSwiper = new Swiper('.pointSwiper', {
      loop: true,
      loopAdditionalSlides: 1,

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      //ページネーション
      pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
        clickable: true
      },

      slidesPerView: 1,
      speed: 500,
      effect: 'slide'
    });

    

    





  });
});