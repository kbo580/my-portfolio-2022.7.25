<!-- sp用ナビメニュー -->
<nav class="gnav gnav--sp">
  <ul class="gnav--sp__list">
    <li class="gnav--sp__item"><a href="<?php echo home_url(); ?>" class="gnav--sp__link">home</a></li>
    <li class="gnav--sp__item"><a href="<?php echo home_url(); ?>/works" class="gnav--sp__link">works</a></li>
    <li class="gnav--sp__item"><a href="<?php echo home_url(); ?>/profile" class="gnav--sp__link">profile</a></li>
    <li class="gnav--sp__item"><a href="<?php echo home_url(); ?>/contact" class="gnav--sp__link">contact</a></li>
    <li class="gnav--sp__item"><a href="https://kbyt-programming.com/" target="_blank"class="gnav--sp__link">blog<i class="fa-solid fa-up-right-from-square"></i></a></li>
  </ul>
</nav>
<!-- /sp用ナビメニュー -->

<!-- pc用ナビメニュー -->
<nav class="gnav gnav--pc">
  <?php if(is_home()):?>
    <ul class="gnav--pc__list">
    <li class="gnav--pc__item current"><a href="<?php echo home_url(); ?>" class="gnav--pc__link">home</a></li>
    <li class="gnav--pc__item"><a href="<?php echo home_url(); ?>/works" class="gnav--pc__link">works</a></li>
    <li class="gnav--pc__item"><a href="<?php echo home_url(); ?>/profile" class="gnav--pc__link">profile</a></li>
    <li class="gnav--pc__item"><a href="<?php echo home_url(); ?>/contact" class="gnav--pc__link">contact</a></li>
    <li class="gnav--pc__item"><a href="https://kbyt-programming.com/" target="_blank" class="gnav--pc__link">blog<i class="fa-solid fa-up-right-from-square"></i></a></li>
  </ul>

  <?php elseif(is_archive()):?>
    <ul class="gnav--pc__list">
    <li class="gnav--pc__item"><a href="<?php echo home_url(); ?>" class="gnav--pc__link">home</a></li>
    <li class="gnav--pc__item current"><a href="<?php echo home_url(); ?>/works" class="gnav--pc__link">works</a></li>
    <li class="gnav--pc__item"><a href="<?php echo home_url(); ?>/profile" class="gnav--pc__link">profile</a></li>
    <li class="gnav--pc__item"><a href="<?php echo home_url(); ?>/contact" class="gnav--pc__link">contact</a></li>
    <li class="gnav--pc__item"><a href="https://kbyt-programming.com/" target="_blank" class="gnav--pc__link">blog<i class="fa-solid fa-up-right-from-square"></i></a></li>
  </ul>

  <?php elseif(is_page('profile')):?>
    <ul class="gnav--pc__list">
    <li class="gnav--pc__item"><a href="<?php echo home_url(); ?>" class="gnav--pc__link">home</a></li>
    <li class="gnav--pc__item"><a href="<?php echo home_url(); ?>/works" class="gnav--pc__link">works</a></li>
    <li class="gnav--pc__item current"><a href="<?php echo home_url(); ?>/profile" class="gnav--pc__link">profile</a></li>
    <li class="gnav--pc__item"><a href="<?php echo home_url(); ?>/contact" class="gnav--pc__link">contact</a></li>
    <li class="gnav--pc__item"><a href="https://kbyt-programming.com/" target="_blank" class="gnav--pc__link">blog<i class="fa-solid fa-up-right-from-square"></i></a></li>
  </ul>

  <?php elseif(is_page('contact')):?>
    <ul class="gnav--pc__list">
    <li class="gnav--pc__item"><a href="<?php echo home_url(); ?>" class="gnav--pc__link">home</a></li>
    <li class="gnav--pc__item"><a href="<?php echo home_url(); ?>/works" class="gnav--pc__link">works</a></li>
    <li class="gnav--pc__item"><a href="<?php echo home_url(); ?>/profile" class="gnav--pc__link">profile</a></li>
    <li class="gnav--pc__item current"><a href="<?php echo home_url(); ?>/contact" class="gnav--pc__link">contact</a></li>
    <li class="gnav--pc__item"><a href="https://kbyt-programming.com/" target="_blank" class="gnav--pc__link">blog<i class="fa-solid fa-up-right-from-square"></i></a></li>
  </ul>

  <?php else:?><!--最後-->
    <ul class="gnav--pc__list">
      <li class="gnav--pc__item"><a href="<?php echo home_url(); ?>" class="gnav--pc__link">home</a></li>
      <li class="gnav--pc__item"><a href="<?php echo home_url(); ?>/works" class="gnav--pc__link">works</a></li>
      <li class="gnav--pc__item"><a href="<?php echo home_url(); ?>/profile" class="gnav--pc__link">profile</a></li>
      <li class="gnav--pc__item"><a href="<?php echo home_url(); ?>/contact" class="gnav--pc__link">contact</a></li>
      <li class="gnav--pc__item"><a href="https://kbyt-programming.com/" target="_blank" class="gnav--pc__link">blog<i class="fa-solid fa-up-right-from-square"></i></a></li>
    </ul>
  <?php endif;?> 
</nav>
<!-- /pc用ナビメニュー -->









