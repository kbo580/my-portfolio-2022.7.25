<?php get_header(); ?>
  <main>
    <h2 class="heading-common page-heading en-text"><span class="first-letter--change">p</span>ractice</h2>

    <?php get_template_part('template-parts/breadcrumbs') ?>
    <!-- /breadcrumbs -->
    
    <section class="works">
      <div class="works__wrapper inner padding-container">
        <p class="works__text">データからコーディングをした練習用サイトです。 ピクセルパーフェクトを心がけてコーディングしました。</p>

        <ul class="works__item-list banners__list">
          <?php if(have_posts()): while(have_posts()) : the_post(); ?>
            <li class="cording__item item--responsive">
              <a href="#">
                <figure class="banners__image-wrapper">
                  <img src="<?php echo CFS()->get('pc-image');?>" alt="<?php the_title()?>" class="works__item-image">
                </figure>
              </a>
            </li>

          <?php endwhile; ?>
          <?php else : ?>
            <p>記事がありません</p>
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

      <div class="inner">
  
      </div>
      <!-- /inner -->

    </section>

    
  </main>

<?php get_footer(); ?>