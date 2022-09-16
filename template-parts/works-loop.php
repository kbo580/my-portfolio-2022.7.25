<?php if(have_posts()): while(have_posts()) : the_post(); ?>
  <li class="webdesign__item item--responsive">

      <a href="<?php the_permalink(); ?>" class="webdesign__link works-image">
        <div class="mask">

          <!-- webdesign__body -->
          <div class="webdesign__body">
            <h3 class="webdesign__title"><?php the_title() ?></h3>
            <p class="webdesign__text"><?php the_excerpt() ?></p>
          </div>
          <!-- /webdesign__body -->

          <!-- webdesign__thum -->
          <?php if (has_post_thumbnail()) : ?>
            <figure class="webdesign__thum thum">
              <img src=" <?php the_post_thumbnail(); ?>" alt="サムネ"  class="webdesign__">
            </figure>

          <?php else : ?> 
            <figure class="webdesign__thum thum">
              <img src="<?php echo get_template_directory_uri(); ?>/images/" alt="ない"> 
            </figure>
            
          <?php endif ?>
          <!-- /webdesign__thum-->

        </div>
        <!-- /mask -->
      </a>

  </li>
<?php endwhile; ?>
<?php else : ?>
  <p>記事がありません</p>
<?php endif; ?>