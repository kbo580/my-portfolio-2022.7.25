$(function(){
  // $('#nav').hide();

  $('#burger').on('click', function(){
    $(this).toggleClass('active');
    $('.gnav--sp').toggleClass('active');
    $('body').toggleClass('active');
  });
  
  $('.gnav--sp__link').on('click', function () {
    $('#burger').removeClass('active');
    $('.gnav--sp').removeClass('active');
    $('body').removeClass('active');
  });

  // スクロールで固定されるヘッダー
  $(window).on('scroll', function(){
    if($(this).scrollTop() > 400){ 
      $('.header').addClass('fadein');
      $('.logo').addClass('fontChang');
      
    }
    else{
      $('.header').removeClass('fadein');
      $('.logo').removeClass('fontChang');
    }
  });

   // worksのitemにカーソルが乗った時の動き
  $('.works__item--link').hover(function(){
    $(this).find('.works__item-image').css('transform','scale(1.1, 1.1)');
  },function(){
    $(this).find('.works__item-image').css('transform','scale(1, 1)');
  });

});