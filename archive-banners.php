<?php get_header(); ?>
<main>
    <h2 class="heading-common page-heading en-text"><span class="first-letter--change">b</span>anners</h2>

    <?php get_template_part('template-parts/breadcrumbs') ?>
    <!-- /breadcrumbs -->
    
    <section class="works">
      <div class="works__wrapper inner padding-container">
        <p class="works__text">バナー制作の練習です</p>

        <ul class="works__item-list banners__list">
          <?php if(have_posts()): while(have_posts()) : the_post(); ?>
            <li class="banners__item item--responsive">
              <a href="#">
                <figure class="banners__image-wrapper">
                  <img src="<?php echo CFS()->get('banner');?>" alt="<?php the_title()?>" class="banners__item-image">
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