<?php get_header(); ?>

  <main>
    <h2 class="heading-common page-heading en-text"><span class="first-letter--change">p</span>rofile</h2>

    <?php get_template_part('template-parts/breadcrumbs') ?>
    <!-- /breadcrumbs -->

    <section class="prof-sec prof-sec-first about-me bg-gradient">
      <div class="inner">
        <div class="profile-wrapper">
          <h3 class="prof-heading posi-right en-text heading-common">about me</h3>

          <p class="about-body__title en-text">Kobayashi Yuta</p>

          <ul class="about-body__content-list">
            <li class="about-body__content">1985年生まれ愛知県名古屋市出身。<br>大学を卒業後、約４０年続く実家の飲食店で５年間勤務</li>
  
            <li class="about-body__content">母の体調が悪くなってきたのを機に閉店</li>
  
            <li class="about-body__content">その後、小さい頃から本が好きでご縁のあったアルバイト先の書店で正社員となり販売接客を中心に計４年間勤務</li>
  
            <li class="about-body__content">店内のレイアウト用にデザインを学んでいたところ、Webデザインに興味を持ち学習を始める。</li>

            <li class="about-body__content">退社し独学で２年ほどWebデザインやコーディングを学び日々学習中</li>
  
            <li class="about-body__content">得意なことは
              <ul class="about-body-list">
                <li>わからないことは納得いくまで調べることができる</li>
                <li>接客業の経験を活かして話を聞き、コミュニケーションを取ること</li>
              </ul>
            </li>
          </ul>
          <!-- /about-body__content-list -->
        </div>
        <!-- profile-wrapper -->

      </div>
      <!-- /inner -->
    </section>

    <section class="prof-sec career">
      <div class="inner">
        <div class="profile-wrapper">
          <h3 class="prof-heading posi-left en-text heading-common">career</h3>

          <ul class="career__lists">
            <li class="career__list">
              <time class="career__timeline">2009.03</time>
              <div class="career__content">愛知県内の大学を卒業後実家の飲食店で勤務</div>
            </li>
  
            <li class="career__list">
              <time class="career__timeline">2016.08</time>
              <div class="career__content">閉店後、名古屋市内の書店に入社。<br>接客販売や在庫管理を担当。</div>
            </li>
  
            <li class="career__list">
              <time class="career__timeline">2018.09</time>
              <div class="career__content">勤務先が閉店のため、同市内にある他書店に就職。接客販売やシフト管理、アルバイトの育成を中心に三店舗に渡り店舗運営などを経験。その中の業務の１つであった店内POPのデザインを学ぶうちにWebデザインに興味を持ち、書籍や動画による独学を初める。</div>
            </li>
  
            <li class="career__list">
              <time class="career__timeline">2020.04〜</time>
              <div class="career__content">退社しWebサイトの作成を２年ほど学習し現在に至る。</div>
            </li>
          </ul>
          <!-- /career__lists -->
        </div>
        <!-- /profile-wrapper -->
      </div>
      <!-- /inner -->
    </section>

    <section class="prof-sec skills bg-gradient">
      <div class="inner">
        <div class="profile-wrapper">

          <h3 class="prof-heading posi-right en-text heading-common">skills</h3>
  
          <div class="skills-wrapper">
            <ul class="skills-list">
              <li class="skills-list__name"><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/icon/html&css-icon.png);" class="skills-list__image"></span>HTML / CSS</li>
              <li class="skills-list__explain">PhotoshopやXDなどで作成したワイヤーフレームからHTMLやCSSを使ってマークアップができます。またCSSを記述する際はSassを使用しております。</li>
            </ul>
    
            <ul class="skills-list">
              <li class="skills-list__name"><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/icon/javascript_icon.png);" class="skills-list__image"></span>Java Script / jQuery</li>
              <li class="skills-list__explain">JavaScriptやjQueryを使ってWebサイトに動きをつけることができます。基本的な文法は学習しましたので理解はでき、外部のライブラリを使用したパーツの製作もできます。<br>また最近ではReactの学習もしております。</li>
            </ul>
    
            <ul class="skills-list">
              <li class="skills-list__name"><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/icon/php.png);" class="skills-list__image"></span>PHP</li>
              <li class="skills-list__explain">WordPress用のテーマを作成する程度のPHPの文法は理解しています。
              </li>
            </ul>
    
            <ul class="skills-list">
              <li class="skills-list__name"><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/icon/sql.png);" class="skills-list__image"></span>MySQL</li>
              <li class="skills-list__explain">基本的なデータベースの操作や検索ができます。</li>
            </ul>
  
            <ul class="skills-list">
              <li class="skills-list__name"><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/icon/wordpress_icon.png);" class="skills-list__image"></span>Word Press</li>
              <li class="skills-list__explain">HTMLで作成したサイトをWord Press化し、更新、管理がしやすいようにすることができます。<br>また個人的なブログもWord Pressで運営しておりますので記事の更新や仕様には慣れております。</li>
            </ul>
  
            <ul class="skills-list">
              <li class="skills-list__name"><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/icon/xd_icon.png);" class="skills-list__image"></span>Adobe XD</li>
              <li class="skills-list__explain">ワイヤーフレームを作成するのに使用していますので基本的な使用はできます。</li>
            </ul>
  
            <ul class="skills-list">
              <li class="skills-list__name"><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/icon/photoshop-icon.png);" class="skills-list__image"></span>Photoshop</li>
              <li class="skills-list__explain">画像の修正や編集、合成などの基本的な操作はできます。</li>
            </ul>
  
            <ul class="skills-list">
              <li class="skills-list__name"><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/icon/illustrator_icon.png);" class="skills-list__image"></span>illustrator</li>
              <li class="skills-list__explain">アイコンやロゴなどを作成する際に使用しており基本的な操作は可能です。</li>
            </ul>
          </div>
          <!-- /skills-wrapper skills-container -->
        </div>
        <!-- /profile-wrapper -->

      </div>
      <!-- /inner -->
    </section>

    <section class="prof-sec wicd">
      <div class="inner">
        <div class="profile-wrapper-wcid">

          <h3 class="prof-heading  en-text heading-common wicd-title">what i can do</h3>

          <div class="wicd__wrapper">
            <ul class="wicd__lists">
              <li class="wicd-item wicd-item__image-wrapper thum"><img src="<?php echo get_template_directory_uri(); ?>/images//webdesign.png" alt="Webデザイン"></li>
              <li class="wicd-item wicd-item__title">Webデザイン</li>
              <li class="wicd-item wicd-item__text">サイトマップの設計からデザインを作成し、それをもとにWebサイトを製作します。またタブレットやスマートフォンに対応させたレスポンシブデザインもできます。</li>
            </ul>
            <!-- /wicd__lists -->
  
            <ul class="wicd__lists">
              <li class="wicd-item wicd-item__image-wrapper thum"><img src="<?php echo get_template_directory_uri(); ?>/images/cording.png" alt="コーディング"></li>
              <li class="wicd-item wicd-item__title">コーディング</li>
              <li class="wicd-item wicd-item__text">ワイヤーフレームをもとに忠実に再現をすることを心がけています。またコードを書く際はわかりやすく、メンテナンスがし易いコードを書くように努めています。</li>
            </ul>
            <!-- /wicd__lists -->
  
            <ul class="wicd__lists">
              <li class="wicd-item wicd-item__image-wrapper thum"><img src="<?php echo get_template_directory_uri(); ?>/images/cms.png" alt="CMS化"></li>
              <li class="wicd-item wicd-item__title">CMS化</li>
              <li class="wicd-item wicd-item__text">Word Pressなどに代表されるものでHTMLとCSSで作成されたサイトを自身で容易に管理、更新ができるようにオリジナルテーマを作成できます。</li>
            </ul>
            <!-- /wicd__lists -->
  
            <ul class="wicd__lists">
              <li class="wicd-item wicd-item__image-wrapper thum"><img src="<?php echo get_template_directory_uri(); ?>/images/communication.png" alt="CMS化"></li>
              <li class="wicd-item wicd-item__title">コミュニケーション</li>
              <li class="wicd-item wicd-item__text">接客業での経験を活かした話を傾聴力とコミュニケーションを取ることが得意です。
              </li>
            </ul>
            <!-- /wicd__lists -->
  
          </div>
          <!-- /skills-container -->
        </div>
        <!-- /profile-wrapper -->



      </div>
      <!-- /inner -->
    </section>
    
  </main>

  <?php get_footer(); ?>
