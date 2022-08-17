<?php get_header(); ?>

  <main>
    <h2 class="heading-common page-heading en-text"><span class="first-letter--change">c</span>ontact</h2>

    <?php get_template_part('template-parts/breadcrumbs') ?>
    <!-- /breadcrumbs -->

    <section class="contact">
      <div class="contact__wrapper inner padding-container">
        <p class="contact__text">お忙しい中ご覧いただきありがとうございます。<br>お仕事の話はもちろん、サイトの感想など何でもお聞かせください。</p>

        <form action="#">

          <div class="form-parts">
            <div class="form-parts__label">
              <span class="label-body must">必須</span>
              <label for="office-name" class="label-title">会社名</label>
            </div>
            <!-- /parts__label -->

            <input type="text" id="office-name" placeholder="例）ABCデザイン" class="form-parts__body"> 
          </div>
          <!-- /form-parts -->

          <div class="form-parts">
            <div class="form-parts__label">
              <span class="label-body must">必須</span>
              <label for="name" class="label-title">お名前</label>
            </div>
            <!-- /parts__label -->

            <input type="text" id="name" placeholder="例）山田　太郎" class="form-parts__body"> 
          </div>
          <!-- /form-parts -->

          <div class="form-parts">
            <div class="form-parts__label">
              <span class="label-body free">任意</span>
              <label for="mail" class="label-title">メールアドレス</label>
            </div>
            <!-- /parts__label -->

            <input type="email" id="mail" placeholder="例）abc@mail.com" class="form-parts__body"> 
          </div>
          <!-- /form-parts -->

          <div class="form-parts">
            <div class="form-parts__label">
              <span class="label-body free">任意</span>
              <label for="title" class="label-title">件名</label>
            </div>
            <!-- /parts__label -->

            <input type="text" id="title" placeholder="例）ABCデザイン" class="form-parts__body"> 
          </div>
          <!-- /form-parts -->

          <div class="form-parts">
            <div class="form-parts__label">
              <span class="label-body must">必須</span>
              <label for="question" class="label-title">お問い合わせ内容</label>
            </div>
            <!-- /parts__label -->

            <textarea name="" id="question" placeholder="ご自由にお書きください" class="form-parts__body textarea"></textarea>
          </div>
          <!-- /form-parts -->

          <div class="acceptance">
            <p>入力内容にお間違いなければチェックを入れてください</p>
          </div>

          <button class="btn form-btn">送信</button>
        </form>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>
