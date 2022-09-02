<?php

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
  return 34;
} 
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function custom_excerpt_more(){
  return '[...]';
}
add_filter('excerpt_more', 'custom_excerpt_more');

//タイトルタグ関連
add_theme_support('title-tag');

//パンクズにアーカイブページを追加
function bcn_add($bcnObj) {
	if (is_post_type_archive('post')) {
		$bcnObj->add(new bcn_breadcrumb('製作物一覧', null, array('archive', 'post-clumn-archive', 'current-item')));
		$trail_tmp = clone $bcnObj->trail[1];
		$bcnObj->trail[1] = clone $bcnObj->trail[0];
		$bcnObj->trail[0] = $trail_tmp;
	}
	return $bcnObj;
}
add_action('bcn_after_fill', 'bcn_add');

//それぞれのアーカイブページの表示数
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() ) 
      return;

  if ( $query->is_archive() ) { 
    $query->set( 'posts_per_page', '6' ); 
  }

  if ( $query->is_post_type_archive('banners') ) { 
    $query->set( 'posts_per_page', '-1' ); 
  }

}
add_action( 'pre_get_posts', 'change_posts_per_page' );

function maintenance_mode() {
    if (!current_user_can('edit_themes') || !is_user_logged_in()) {
        wp_die('メンテナンス中です。しばらくお待ちください。');
    }
}
// add_action('get_header', 'maintenance_mode');