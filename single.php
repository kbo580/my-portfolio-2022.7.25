<?php get_header(); ?>

  <main>
    <h2 class="heading-common page-heading en-text"><?php the_title()?></h2>

    <?php get_template_part('template-parts/breadcrumbs') ?>
    <!-- /breadcrumbs -->

    <section class="single padding-container">
      <div class="inner">
        <div class="single-top">

          <div class="single-top__thum thum">
          <?php the_post_thumbnail(); ?>
          </div>
          <div class="single-top__explain"><?php the_content(); ?></div>

          <ul class="single-content">
            <li class="single-content__list">
              <p class="single-content__title">制作期間</p>

              <ul class="single-content__text-wrapper"> 
                <li class="single-content__text"><?php echo CFS()->get('works_period');?></li>
              </ul>
            </li>
            <!-- /single-content__list -->

            <li class="single-content__list">
              <p class="single-content__title">サイト構成</p>

              <ul class="single-content__text-wrapper"> 
                <li class="single-content__text"><?php echo CFS()->get('works_structure');?></li>
              </ul>
            </li>
            <!-- /single-content__list -->

            <li class="single-content__list">
              <p class="single-content__title">使用言語やツールなど</p>

              <ul class="single-content__text-wrapper"> 
                <li class="single-content__text"><?php echo CFS()->get('works_tools');?></li>
              </ul>
            </li>
            <!-- /single-content__list -->

          </ul>
          <!-- /single-content -->
  
          <a href="<?php echo CFS()->get('works_url');?>" target="_blank" class="btn btn--pageChange mt-70">サイトへ<i class="fa-solid fa-up-right-from-square"></i></a>
          <p  class="single-top__attention">※BASIC認証をかけてあります。<br>お手数ですがid”<?php echo CFS()->get('works_id');?>”, パスワード”<?php echo CFS()->get('works_pass');?>”を入力してご覧ください</p>
        </div>
        <!-- /single-top -->

        <div class="single-detail single__wrapper over--inner">
          <div class="inner">

            <div class="sub-heading__wrapper">
              <h3 class="sub-heading  --ja">サイトの詳細</h3>
              <p class="heading-common en-text sub-heading-en">details</p>
            </div>
  
            <ul class="single-content">
              <li class="single-content__list">
                <p class="single-content__title">サイト制作の概要</p>
  
                <ul class="single-content__text-wrapper"> 
                  <li class="single-content__text"><?php echo CFS()->get('');?></li>
                </ul>
              </li>
              <!-- /single-content__list -->
  
              <li class="single-content__list">
                <p class="single-content__title">ターゲットの基本情報</p>
  
                <ul class="single-content__text-wrapper"> 
                <?php
                      $fields = $cfs->get('works_target-list'); 
                      foreach ((array)$fields as $field) :
                    ?>
                    <li class="single-content__text --list">
                      <?php echo $field['works_target']; ?>
                    </li>
                    <?php endforeach; ?>
                  
                </ul>
              </li>
              <!-- /single-content__list -->
  
              <li class="single-content__list">
                <p class="single-content__title">ゴール</p>
  
                <ul class="single-content__text-wrapper"> 
                  <li class="single-content__text"><?php echo CFS()->get('works_goal');?></li>
                </ul>
              </li>
              <!-- /single-content__list -->
  
              <li class="single-content__list">
                <p class="single-content__title">ゴールまでのポイント</p>
  
                <ul class="single-content__text-wrapper"> 
                  
                    <?php
                      $fields = $cfs->get('works_points'); 
                      foreach ((array)$fields as $field) :
                    ?>
                    <li class="single-content__text --list">
                      <?php echo $field['works_point']; ?>
                    </li>
                    <?php endforeach; ?>
                  
                </ul>
              </li>
              <!-- /single-content__list -->
  
            </ul>
            <!-- /single-content -->

            <div class="single__site-image-wrapper">
  
              <div class="pc-image-wrapper">
                <div class="toggle-btn" id="pcToggle"><i class="fas fa-desktop"></i>パソコンでのイメージ</div>
                <p class="click-open">※クリックで開閉できます</p>
                <div class="pc-image">
                  <img src="<?php echo CFS()->get('works-pc-image');?>" alt="<?php the_title(); ?>のpcイメージ画像" loading="lazy">
                </div>
              </div>
              <!-- /pc-image-wrapper -->
    
              <div class="sp-image-wrapper">
                <div class="toggle-btn" id="spToggle"><i class="fas fa-mobile-alt"></i>スマホでのイメージ</div>
                <p class="click-open">※クリックで開閉できます</p>
                <div class="sp-image">
                  <img src="<?php echo CFS()->get('works-sp-image');?>" alt="<?php the_title(); ?>のスマホイメージ画像" loading="lazy">
                </div>
              </div>
              <!-- /sp-image-wrapper -->
  
            </div>
            <!-- /single__site-image-wrapper -->

          </div>
          <!-- /inner -->
        </div>
        <!-- /single__detail -->

        <div class="single-point single__wrapper">
          <div class="sub-heading__wrapper">
            <h3 class="sub-heading --ja">制作のポイント</h3>
            <p class="heading-common en-text sub-heading-en">points</p>
          </div>

          <div class="single-point__wrapper">
            <div class="single-point__image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/k-create-screen .png" alt="" loading="lazy">
            </div>

            <div class="single-point__list">
              <?php
                $fields = $cfs->get('point-list'); 
                foreach ((array)$fields as $field) :
              ?>

              <div class="single-point__item">
                <p class="single-point__heading"><?php echo $field['point-place']; ?></p> 
                <p class="single-point__content"><?php echo $field['point-text']; ?></p> 
              </div>
              <!-- /single-point__item -->

              <?php endforeach; ?>

            </div>
            <!-- /single-point__list -->
          </div>
          <!-- /single-point__wrapper -->
        </div>
        <!-- /single-point -->

        <div class="pagination-btn-wrapper" id="paginationFade">
          <div class="pagination-btn left">
            <?php previous_post_link('%link', '<img src="'.get_template_directory_uri().'/images/svg/arrow-left.svg" alt="前の記事へ">'); ?>
          </div>

          <div class="pagination-btn right">
            <?php next_post_link('%link', '<img src="'.get_template_directory_uri().'/images/svg/arrow-right.svg" alt="次の記事へ">'); ?>
          </div>
        </div>
        <!-- /pagination-btn-wrapper -->

        <ul class="pagination">
            <li class="prev"><?php previous_post_link('%link', '<i class="fas fa-angle-left"></i>PREV'); ?></li>

            <li class="to-works"><a href="<?php echo home_url(); ?>/works" class="pagination-link"><i class="fa-solid fa-table-cells-large"></i>WORKS</a></li>
            
            <li class="next"><?php next_post_link('%link','NEXT<i class="fas fa-angle-right"></i>'); ?></li>
        </ul>

      </div>
      <!-- /inner -->

    </section>
    
  </main>

<?php get_footer(); ?>