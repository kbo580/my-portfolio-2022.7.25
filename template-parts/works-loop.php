<?php if(have_posts()): while(have_posts()) : the_post(); ?>
  <li class="works__item item--responsive">
      <h3 class="works__item-title"><?php the_title()?></h3>

      <a href="<?php the_permalink(); ?>" class="works__item--link">
        <figure class="thum works--thum">
          <?php if (has_post_thumbnail()) : ?> 
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png"> 
          <?php endif ?>
        </figure>
      </a>

  </li>
<?php endwhile; ?>
<?php else : ?>
  <p>記事がありません</p>
<?php endif; ?>