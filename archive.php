<?php get_header(); ?>

  <main>
    <h2 class="heading-common page-heading en-text"><span class="first-letter--change">w</span>orks</h2>

    <div class="breadcrumbs">
      <div class="breadcrumb_inner inner">
        <span><a href="/">HOME</a></span> >
        <span><a href="/">ページ名</a></span> >
        <span>ページ名</span> 
      </div>
    </div>
    <!-- /breadcrumbs -->
    
    <section class="works">
      <div class="works__wrapper inner padding-container">
        <p class="works__text">架空の案件を想定して作成したサイトの一覧です</p>

        <ul class="works__item-list">

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

        </ul>
        <!-- /works__item-list -->

        <!-- <nav class="navigation pagination">
          <div class="nav-links">
            <a class="prev page-numbers" href="#"><i class="fa-solid fa-angle-left"></i>PREV</a>
            <a class="page-numbers" href="#">1</a>
            <span class="page-numbers current">2</span>
            <a class="prev page-numbers" href="#">3</a>
            <a class="prev page-numbers" href="#">4</a>
            <a class="prev page-numbers" href="#">5</a>
            <a class="next page-numbers" href="#">NEXT<i class="fa-solid fa-angle-right"></i></a>
          </div>
        </nav> -->
      </div>
      <!-- /works__wrapper inner -->

    </section>
  </main>

<?php get_footer(); ?>