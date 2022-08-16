<?php
// slickの読み込み
function slick_slider() {
  wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
  wp_enqueue_style('slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');
  wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery') );
}

add_action('wp_enqueue_scripts', 'slick_slider');

// swiperの読み込み
function swiper_slider() {
  wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array() );
  wp_enqueue_script('swiper-my-js', get_template_directory_uri() . '/js/swiper.js', array('jquery'), '1.0.0',);
}

add_action('wp_enqueue_scripts', 'swiper_slider');

// css,jquery,fontaweasomeの読み込み
function my_files() {
  wp_enqueue_style('style-name', get_template_directory_uri() . '/css/styles.css' , array(), '1.0.0',);
  wp_enqueue_style('icon', 'https://use.fontawesome.com/releases/v6.1.0/css/all.css');
  wp_enqueue_script('script-name', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0',);
}

add_action('wp_enqueue_scripts', 'my_files');

//サムネイル
add_theme_support('post-thumbnails');

//アーカイブページの作成
function post_has_archive($args, $post_type){
  if('post'== $post_type){
    $args['rewrite']=true;
    $args ["label"] = '制作物'; 
    $args['has_archive']='works'; 
  }
  return $args;
}

add_filter('register_post_type_args', 'post_has_archive', 10, 2);


//topページの抜粋の文字数関連
function custom_excerpt_length( $length ) {
  return 60;
} 
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function custom_excerpt_more(){
  return '[...]';
}
add_filter('excerpt_more', 'custom_excerpt_more');

//タイトルタグ関連
add_theme_support('title-tag');