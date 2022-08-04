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

  //メインビジュアルのタイピング
  function TextTypingAnime() {
    $('.TextTyping').each(function () {
      var elemPos = $(this).offset().top - 50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      var thisChild = "";
      if (scroll >= elemPos - windowHeight) {
        thisChild = $(this).children();
        thisChild.each(function (i) {
          var time = 100;
          $(this).delay(time * i).fadeIn(time);
        });
      } else {
        thisChild = $(this).children();
        thisChild.each(function () {
          $(this).stop(); 
          $(this).css("display", "none");
        });
      }
    });
  }

  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function () {
    TextTypingAnime();
  });


  $(window).on('load', function () {
    var element = $(".TextTyping");
    element.each(function () {
      var text = $(this).html();
      var textbox = "";
      text.split('').forEach(function (t) {
        if (t !== " ") {
          textbox += '<span>' + t + '</span>';
        } else {
          textbox += t;
        }
      });
      $(this).html(textbox);

    });

    $('.TextTyping span:nth-child(14)').append('<br>');
  });


// //Vegas全体の設定

$('#slider').vegas({
  slides: [
    { src:'./images/k-create-top-image.png'},
    { src: './images/huvest-top-image.png' },
    { src: './images/LPサイト-top-screen.png' },
    { src: './images/blog-image.png' },
    ],

		transition: 'slideLeft2',
		transitionDuration: 5000,//切り替わりのアニメーション時間をミリ秒単位で設定
		delay: 10000,
	});














});