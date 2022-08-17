<?php get_header(); ?>
  <main>
    <h2 class="heading-common page-heading en-text"><span class="first-letter--change">4</span>04 page</h2>

    <?php get_template_part('template-parts/breadcrumbs') ?>
    <!-- /breadcrumbs -->

    <section class="nf-page padding-container">
      <div class="nf-page__wrapper inner">
        <p class="nf-page__text">申し訳ありません<br>お探しのページはありませんでした。</p>
        <p class="nf-page__to-link"><a href="<?php echo home_url(); ?>" class="nf-page__link">コチラ</a>からTopページに戻ることができます。</p>
      </div>
    </section>
  </main>


<?php get_footer(); ?>

</html>
