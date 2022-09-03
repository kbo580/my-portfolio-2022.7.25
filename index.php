<?php get_header(); ?>

  <main>
    <div class="mv">
      <div class="mvSwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-image.png" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/clinic-top.png" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/huvest-top-image.png" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images//K-CREATE-thumbnail.png" alt=""></div>
        </div>
        <!-- /swiper-wrapper -->
      </div>
      <!-- /mvSwiper -->

      <div class="film"></div>

      <div class="inner">
      <h1 class="site-title en-text">
          <span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger"><span class="first-letter--change">Y</span>uta</span></span><br>
          <span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger"><span class="first-letter--change">K</span>obayashi's</span></span><br>
          <span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger"><span class="first-letter--change">P</span>ortfolio</span></span>
        </h1>
      </div>
      <!-- /inner -->

      <div class="scrolldown"><span>Scroll</span></div>
    </div>
    <!-- /mv -->

    <section class="works-top section">
      <h2 class="heading-common sec-heading en-text sec-heading__works over--inner"><p class="sec-heading--ja">制作物</p>works</h2>

      <div class="inner">
        
        <div class="works-top__wrapper over--inner">
          <div class="sub-heading__wrapper">
            <h3 class="sub-heading  --ja">Web制作</h3>
            <p class="en-text sub-heading-en">webdesign</p>
          </div>

          <p class="works-top__explain">架空の案件を想定して作成したサイトと練習用コーディングです。</p>

          <div class="swiper-area">
        
            <div class="worksSwiper swiper">
              <div class="swiper-wrapper works-top__item-wrapper">

              <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?> 
                <div class="swiper-slide works-top__item-list">
                  <ul class="works-top__item"> 

                    <li class="works-top__item-img thum">
                      <?php if (has_post_thumbnail()) : ?> 
                        <?php the_post_thumbnail(); ?>
                      <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png"> 
                      <?php endif ?>
                    </li>

                    <li class="works-top__item-title"><?php the_title()?></li>

                    <li class="works-top__item-btn"><a href="<?php the_permalink(); ?>" class="btn btn--more">More View</a></li>
                  </ul>
                  <!-- /works-top__item -->
                </div>
                <!-- /swiper-slide -->
                  
                <?php endwhile; ?>
              <?php else : ?> 
                <p>記事がありません</p>
              <?php endif; ?>

              </div>
              <!-- /swiper-wrapper works-top__item-wrapper -->
    
            </div>
            <!-- /swiper -->
            <div class="swiper-button-prev my-swiper-button-prev --only-topWorks"></div>
            <div class="swiper-button-next my-swiper-button-next --only-topWorks"></div>
          </div>
          <!-- /swiper-area -->

          <a href="<?php echo home_url(); ?>/works" class="btn btn--pageChange mt-70">制作物一覧へ</a>
        </div>
        <!-- /works-top__wrapper -->

        <div class="practice__wrapper">
  
          <div class="practice__list-wrapper">
  
            <ul class="practice__list --banners">
              <li class="sub-heading__wrapper">
                <h3 class="sub-heading  --ja">バナー制作</h3>
                <p class="en-text sub-heading-en">banners</p>
              </li>
  
              <li class="practice__explain">バナー制作の練習です</li>
  
              <li class="swiper bannerSwiper">
                <ul class="swiper-wrapper practice__image">
                  <!-- サブループ -->
                  <?php 
                    $query = new WP_Query(
                      array(
                        'post_type' => 'banners', 
                        'posts_per_page' => -1, 
                      )
                    );
                  ?>
                  
                  <?php if($query -> have_posts()) : ?> 
                  <?php while($query -> have_posts()) : $query -> the_post(); ?> 
                    <li class="swiper-slide thum">
                      <img src="<?php echo CFS()->get('banner');?>" alt="<?php the_title(); ?>" loading="lazy" class="banners__item-image">
                    </li>
  
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?> 
                  <?php else : ?>
                    <h2>記事がありません</h2>
                  <?php endif; ?>
  
                </ul>
                <!-- /swiper-wrapper -->
                <div class="swiper-button-prev my-swiper-button-prev"></div>
                <div class="swiper-button-next my-swiper-button-next"></div>
                <div class="swiper-pagination pointSwiper__pagination"></div>
              </li>
              <!-- /bannerSwiper -->
  
              <li><a href="<?php echo home_url(); ?>/banners" class="btn btn--more">More View</a></li>
            </ul>
            <!-- practice__list -->
  
            <ul class="practice__list practice__list--odd">
              <li class="sub-heading__wrapper">
                <h3 class="sub-heading  --ja">ブログ</h3>
                <p class="en-text sub-heading-en">blog</p>
              </li>
              
              <li class="practice__explain">学習のアウトプットのためのブログです<i class="fa-solid fa-up-right-from-square"></i><br>（外部サイトへ移動します）</li>
              <li class="practice__image thum">
                <img src="<?php echo get_template_directory_uri(); ?>/images/blog-image.png" alt="画像"  loading="lazy">
              </li>
              <li><a href="" class="btn btn--more">More View</a></li>
            </ul>
            <!-- practice__list -->
          </div>
          <!-- /practice__list-wrapper -->
  
        </div>
        <!-- /practice__wrapper -->
      </div>
      <!-- /inner -->
      

    </section>

    <section class="about section">
      <div class="inner">
        <h2 class="heading-common sec-heading en-text --right  over--inner"><p class="sec-heading--ja">私について</p>about</h2>

        <div class="about__wrapper padding-container">
          <div class="about-image__wrapper">
            <figure class="about-image__image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/kbyt.png" alt="こばゆたくん"  loading="lazy">
            </figure>
    
            <div class="about-image__content-frame">
              <p class="about-image__text TextTyping">ポートフォリオ を ご覧いただきありがとうございます</p>
            </div>
          </div>
          <!-- /about-image__wrapper -->
  
          <div class="about-body__wrapper">
            <p class="about-body__title en-text">Yuta Kobayashi</p>

            <ul class="about-body__content-list">
            <li class="about-body__content">大学を卒業後、実家の飲食店で勤務。その後、書店にて正社員として接客販売を中心に勤めてきました。</li>
              <li class="about-body__content">その時の業務の一つであった店内のレイアウト用にデザインを学んでいたところ、Webデザインに興味を持ち独学で学習を始めました。</li>
              <li class="about-body__content">趣味は野球観戦、音楽作成ソフト「Logic」を使用した音楽制作、御朱印集め</li>
            </ul>
    
            <a href="<?php echo home_url(); ?>/profile" class="btn btn--pageChange mt-70 mla">プロフィールへ</a>

          </div>
          <!-- /about-body__wrapper -->
        </div>
        <!-- /about__wrapper -->
      </div>

    </section>

    <section class="contact-top section">
      <div class="inner">
  
        <h2 class="heading-common sec-heading en-text --left over--inner"><p class="sec-heading--ja">お問い合わせ</p>contact</h2>

        <div class="padding-container">
          <p>お忙しい中ご覧いただきありがとうございます。<br>お仕事の話はもちろん、サイトの感想など何でもお聞かせください。</p>
  
          <a href="<?php echo home_url(); ?>/contact" class="btn btn--pageChange mt-70">お問い合わせへ</a>

        </div>
        <!-- /padding-container -->
      </div>
      <!-- /inner -->

    </section>
    
  </main>
  
<?php get_footer(); ?>
  
