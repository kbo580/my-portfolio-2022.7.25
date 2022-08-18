<?php get_header(); ?>

  <main>
    <h2 class="heading-common page-heading en-text"><span class="first-letter--change">c</span>ontact</h2>

    <?php get_template_part('template-parts/breadcrumbs') ?>
    <!-- /breadcrumbs -->

    <section class="contact">
      <div class="contact__wrapper inner padding-container">
        <p class="contact__text">お忙しい中ご覧いただきありがとうございます。<br>お仕事の話はもちろん、サイトの感想など何でもお聞かせください。</p>
        <?php the_content()?>
      
      </div>
    </section>
  </main>

  <?php get_footer(); ?>
