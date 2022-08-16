<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DotGothic16&family=Montserrat:wght@700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <!-- <title>Yuta Kobayashi's Portfolio</title> -->

  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header__wrapper inner">
      <h1 class="logo en-text">
        <a href="<?php echo home_url(); ?>" class="logo__link">Yuta Kobayashi's<br>Portfolio</a>
      </h1>

      <div class="burger">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>

      <?php get_template_part('template-parts/nav-menu') ?>
    </div>
    <!-- /header__wrapper -->
  </header>