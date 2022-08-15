<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  
  <link rel="stylesheet" href="css/styles.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DotGothic16&family=Montserrat:wght@700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <title>Yuta Kobayashi's Portfolio</title>

  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header__wrapper inner">
      <h1 class="logo en-text">
        <a href="index.html" class="logo__link">Yuta Kobayashi's<br>Portfolio</a>
      </h1>

      <div class="burger">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>

      <!-- sp用ナビメニュー -->
      <nav class="gnav gnav--sp">
        <ul class="gnav--sp__list">
          <li class="gnav--sp__item"><a href="index.html" class="gnav--sp__link">home</a></li>
          <li class="gnav--sp__item"><a href="works.html" class="gnav--sp__link">works</a></li>
          <li class="gnav--sp__item"><a href="profile.html" class="gnav--sp__link">profile</a></li>
          <li class="gnav--sp__item"><a href="contact.html" class="gnav--sp__link">contact</a></li>
          <li class="gnav--sp__item"><a href="https://kbyt-programming.com/" target="_blank"class="gnav--sp__link">blog<i class="fa-solid fa-up-right-from-square"></i></a></li>
          <li class="gnav--sp__item"><a href="404.html" class="gnav--sp__link">404<i class="fa-solid fa-up-right-from-square"></i></a></li>
        </ul>
      </nav>
      <!-- /sp用ナビメニュー -->

      <!-- pc用ナビメニュー -->
      <nav class="gnav gnav--pc">
        <ul class="gnav--pc__list">
          <li class="gnav--pc__item current"><a href="index.html" class="gnav--pc__link">home</a></li>
          <li class="gnav--pc__item"><a href="works.html" class="gnav--pc__link">works</a></li>
          <li class="gnav--pc__item"><a href="profile.html" class="gnav--pc__link">profile</a></li>
          <li class="gnav--pc__item"><a href="contact.html" class="gnav--pc__link">contact</a></li>
          <li class="gnav--pc__item"><a href="https://kbyt-programming.com/" target="_blank" class="gnav--pc__link">blog<i class="fa-solid fa-up-right-from-square"></i></a></li>
          <li class="gnav--pc__item"><a href="404.html" class="gnav--pc__link">404<i class="fa-solid fa-up-right-from-square"></i></a></li>
        </ul>
      </nav>
      <!-- /pc用ナビメニュー -->
    </div>
    <!-- /header__wrapper -->
  </header>