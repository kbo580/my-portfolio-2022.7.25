<?php get_header(); ?>

  <main>
    <h2 class="heading-common page-heading en-text"><span class="first-letter--change">w</span>orks</h2>

    <?php get_template_part('template-parts/breadcrumbs') ?>
    <!-- /breadcrumbs -->
    
    <div class="padding-container">

      <section class="works">
        <div class="webdesign__wrapper inner">
  
          <div class="sub-heading__wrapper">
            <h3 class="sub-heading  --ja">架空案件</h3>
            <p class="en-text sub-heading-en">website</p>
          </div>
  
          <p class="works__explain">架空の案件を想定して作成したサイトの一覧です</p>
  
          <ul class="webdesign__item-list">

            <?php get_template_part('template-parts/works-loop') ?>
  
          </ul>
          <!-- /webdesign__item-list -->
  
        </div>
        <!-- /webdesign__wrapper inner -->
  
      </section>

      <section class="works cording-archive">

        <div class="works__wrapper inner">
          <div class="sub-heading__wrapper">
            <h3 class="sub-heading  --ja">練習用コーディング</h3>
            <p class="en-text sub-heading-en">cording</p>
          </div>
  
          <p class="works__explain">コーディングの練習で作成したサイトです。<br>(練習用サイトのためスクリーンショットのみです)</p>
  
            <ul class="webdesign__item-list">
  
              <!-- サブループ -->
              <?php 
                $query = new WP_Query(
                  array(
                    'post_type' => 'cording', 
                    'posts_per_page' => -1, 
                  )
                );
              ?>
  
              <?php if($query -> have_posts()) : ?> 
                <?php while($query -> have_posts()) : $query -> the_post(); ?> 
                  <li class="works__item item--responsive cording__item">
  
                    <a href="/" class="webdesign__link">
                      <figure class="thum webdesign__thum">
                        <img src="<?php echo CFS()->get('image');?>" alt="<?php the_title(); ?>" loading="lazy" class="banners__item-image">
                      </figure>

                      <img src="<?php echo CFS()->get('pc-image');?>" alt="<?php the_title(); ?>" id="pcImage">
                    </a>
  
                  </li>
                <?php endwhile; ?>
              <?php wp_reset_postdata(); ?> 
              <?php else : ?>
                <h2>記事がありません</h2>
              <?php endif; ?>
  
            </ul>
            <!-- /works__item-list -->
  
            <!-- モーダル -->
          <div class="modal-wrapper" id="modal-wrapper">
            <div class="close" id="close"></div>
            
            <div id="modal-image-wrapper" class="modal-image-wrapper">
              <img src="" alt="">  
            </div>
          </div>
          <!-- /モーダル -->
  
        </div>
        <!-- /works__wrapper inner -->
  
      </section>
    </div>

  </main>

<?php get_footer(); ?>