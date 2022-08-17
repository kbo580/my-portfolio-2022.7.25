<?php get_header(); ?>

  <main>
    <h2 class="heading-common page-heading en-text"><span class="first-letter--change">w</span>orks</h2>

    <?php get_template_part('template-parts/breadcrumbs') ?>
    <!-- /breadcrumbs -->
    
    <section class="works">
      <div class="works__wrapper inner padding-container">
        <p class="works__text">架空の案件を想定して作成したサイトの一覧です</p>

        <ul class="works__item-list">
        <?php get_template_part('template-parts/works-loop') ?>

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