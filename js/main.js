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

  $('.q').on('click', function(){
    $(this).toggleClass('active');
    $('.header-nav--sp').toggleClass('active');
    $('body').toggleClass('active');
  });

});