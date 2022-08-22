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
        <h1 class="site-title en-text"><span class="first-letter--change">Y</span>uta<br><span class="first-letter--change">K</span>obayashi's<br><span class="first-letter--change">P</span>ortfolio</h1>
      </div>
      <!-- /inner -->

      <div class="scrolldown"><span>Scroll</span></div>
      <div class="mv__bar --cross"></div>
      <div class="mv__bar --vertical"></div>
    </div>
    <!-- /mv -->

    <section class="works-top section">
      <div class="inner">
        <h2 class="heading-common sec-heading en-text sec-heading__works over--inner"><p class="sec-heading--ja">制作物</p>works</h2>

        <h3 class="sub-heading --top --daikei">架空案件</h3>

        <div class="works-top__wrapper over--inner">
          <p class="works-top__explain">架空の案件を想定して作成したサイトです。</p>

          <div class="swiper-area">
        
            <div class="worksSwiper swiper">
              <div class="swiper-wrapper works-top__item-wrapper">
              <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?> 
                <div class="swiper-slide works-top__item-list">
                  <ul class="works-top__item">
                    <li class="works-top__item-title"><?php the_title()?></li>

                    <li class="works-top__item-img thum">
                      <?php if (has_post_thumbnail()) : ?> 
                        <?php the_post_thumbnail(); ?>
                      <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png"> 
                      <?php endif ?>
                    </li>

                    <li class="works-top__item-content"><?php the_excerpt(); ?></li>
                    <li class="works-top__item-btn"><a href="<?php the_permalink(); ?>" class="btn btn--more">詳しく見る</a></li>
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

      </div>
      <!-- /inner -->
      
      <div class="practice__wrapper">
        <div class="sub-heading__wrapper">
          <h3 class="sub-heading  --ja">その他の制作物</h3>
          <p class="heading-common en-text sub-heading-en">others</p>
        </div>

        <div class="practice__list-wrapper">
          
          <ul class="practice__list practice__list--odd">
            <li class="practice__title">練習用コーディング</li>
            <li class="practice__explain">コーディングの練習で作成したサイトです。</li>

            <li class="swiper cordingSwiper">
              <ul class="swiper-wrapper practice__image">
                <?php 
                  $query = new WP_Query(
                    array(
                      'post_type' => 'cording', 
                      'posts_per_page' => 3, 
                    )
                  );
                ?>

                <?php if($query -> have_posts()) : ?> 
                <?php while($query -> have_posts()) : $query -> the_post(); ?> 
                  <li class="swiper-slide thum">
                    <img src="<?php echo CFS()->get('image');?>" alt="<?php the_title(); ?>" loading="lazy">
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
            <!-- /cordingSwiper -->
    
            <li><a href="<?php echo home_url(); ?>/cording" class="btn btn--more">詳しく見る</a></li>
          </ul>
          <!-- practice__list -->

          <ul class="practice__list practice__list--even">
            <li class="practice__title">バナー制作</li>
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

            <li><a href="<?php echo home_url(); ?>/banners" class="btn btn--more">詳しく見る</a></li>
          </ul>
          <!-- practice__list -->

          <ul class="practice__list practice__list--odd">
            <li class="practice__title">ブログ</li>
            <li class="practice__explain">学習のアウトプットのためのブログです<i class="fa-solid fa-up-right-from-square"></i></li>
            <li class="practice__image thum">
              <img src="<?php echo get_template_directory_uri(); ?>/images/blog-image.png" alt="画像"  loading="lazy">
            </li>
            <li><a href="" class="btn btn--more">詳しく見る</a></li>
          </ul>
          <!-- practice__list -->
        </div>
        <!-- /practice__list-wrapper -->

      </div>
      <!-- /practice__wrapper -->

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
  
