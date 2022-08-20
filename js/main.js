jQuery(function($){
  
  $(function(){

  //ハンバーガーメニュー
  $('.burger').on('click', function(){
    $(this).toggleClass('active');
    $('.gnav--sp').toggleClass('active');
    $('body').toggleClass('active');
  });
  
  $('.gnav--sp__link').on('click', function () {
    $('.burger').removeClass('active');
    $('.gnav--sp').removeClass('active');
    $('body').removeClass('active');
  });

  //スクロールで使う変数
  var mvHight = $('.mv').outerHeight(true);
  var pageHeadingHight = $('.page-heading').outerHeight(true);

  // スクロールで固定されるヘッダー
  $(window).on('scroll', function(){
    var scrollTop = $(this).scrollTop();
    if(scrollTop > mvHight || scrollTop > pageHeadingHight){ 
      $('.header').addClass('fadein');
      $('.logo').addClass('fontChang');
    }

    else{
      $('.header').removeClass('fadein');
      $('.logo').removeClass('fontChang');
    }
  });

  //「topへ戻る」関連
  $('#top').hide();
  $(window).scroll(function(){
    if($(this).scrollTop()>mvHight || $(this).scrollTop() > pageHeadingHight){
      $('#top').fadeIn(400);
    }
    else{
      $('#top').fadeOut(400);
    }
  });

  $('#top').click(function(){ 
    $('html,body').animate({'scrollTop':0},600);
  });

  // worksのitemにカーソルが乗った時の動き
  $('.works__item--link').hover(function(){
    $(this).find('img').css('transform','scale(1.1, 1.1)');
  },function(){
    $(this).find('img').css('transform','scale(1, 1)');
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

  //記事ページをくりっくで表示
  $('#pcToggle').click(function(){ 
    $('.pc-image').slideToggle(400);
    return false;
  });

  $('#spToggle').click(function(){ 
    $('.sp-image').slideToggle(400);
    return false;
  });

  //バナー一覧のモーダル
  $('#modal-wrapper').hide();

  $('.banners__item > a').on('click', function(){
    var src = $(this).find('img').attr('src');
    var alt = $(this).find('img').attr('alt');
    $('#modal-image-wrapper > img').attr('src', src).attr('alt', alt);
    $('#modal-wrapper').fadeIn(600);
    $('body').addClass('fixed');
    // window.addEventListener( 'touchmove' , movefun , { passive: false } );
    return false;
  });

  //コーディング練習一覧のモーダル
  $('.cording__item > a').on('click', function(){
    var src = $(this).find('img').attr('src');
    var alt = $(this).find('img').attr('alt');
    $('#modal-image-wrapper > img').attr('src', src).attr('alt', alt);
    $('#modal-wrapper').fadeIn(600);
    $('body').addClass('fixed');
    // window.addEventListener( 'touchmove' , movefun , { passive: false } );
    return false;
  });

  $('#modal-wrapper').on('click', function(){
    $('#modal-wrapper').fadeOut(600); 
    $('body').removeClass('fixed');
    // window.removeEventListener( 'touchmove' , movefun, { passive: false }   );
  });

  //slick
  $('.slider').slick({
		arrows: true,
		prevArrow: '<div class="prev-arrow slideBtn"></div>',
		nextArrow: '<div class="next-arrow slideBtn"></div>',
		dots: true,
  });

  //記事ページの固定ページネーション
  var pagination = $('.single-point').offset().top;
  console.log(pagination);
  $(window).scroll(function(){
    if($(this).scrollTop()>pagination){
      $('#paginationFade').fadeOut(400);
    }
    else{
      $('#paginationFade').fadeIn(400);
    }
  });
  









});
});