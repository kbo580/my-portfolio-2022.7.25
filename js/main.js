$(function(){
  // $('#nav').hide();

  $('#burger').on('click', function(){
    $(this).toggleClass('active');
    $('.header-nav--sp').toggleClass('active');
    $('body').toggleClass('active');
  });
  
  $('.header-nav--sp__link').on('click', function () {
    $('#burger').removeClass('active');
    $('.header-nav--sp').removeClass('active');
    $('body').removeClass('active');
  });

  // スクロールで固定されるヘッダー
  var headerHight = $('header').outerHeight(true);
  $(window).on('scroll', function(){
    var section = $('.works').offset().top;
    if($(this).scrollTop()>= section - headerHight){ 
      $('header').addClass('fadein');
      $('.header__logo').addClass('fontChang');
      
    }
    else{
      $('header').removeClass('fadein');
      $('.header__logo').removeClass('fontChang');
    }
  });

});