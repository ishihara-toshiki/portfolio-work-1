<?php

/* 標準機能拡張 */
function my_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script') );
}

add_action("after_setup_theme", "my_setup");



/* CSS,JSの読み込み */
function my_script_init() {
    wp_enqueue_style("my-reset", get_template_directory_uri()."/css/reset.css", array(), filemtime(get_theme_file_path('css/reset.css')), "all");
    wp_enqueue_style("my-scss", get_template_directory_uri()."/sass/style.scss", array(), filemtime(get_theme_file_path('css/style.css')), "all");
    wp_enqueue_style("my-style", get_template_directory_uri()."/css/style.css", array(), filemtime(get_theme_file_path('css/style.css')), "all");
    wp_enqueue_style("my-google-fira", "https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,400;1,500&display=swap");
    wp_enqueue_style("my-google-noto", "https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&display=swap");
    wp_enqueue_script("my-script", get_template_directory_uri()."/js/script.js", array("jquery"), filemtime(get_theme_file_path('js/script.js')), true);
}

add_action("wp_enqueue_scripts", "my_script_init");


/* メニューの登録 */
function my_menu_init() {
    register_nav_menus(
      array(
        'global' => 'グローバルメニュー',
        'drawer' => 'ドロワーメニュー',
      )
    );
  }
add_action('init', 'my_menu_init');


/* アーカイブタイトル書き換え */
function my_archive_title($title) {

    if (is_category()) { // カテゴリーアーカイブの場合
      $title = single_cat_title('', false);
    } elseif (is_tag()) { // タグアーカイブの場合
      $title = single_tag_title('', false);
    } elseif (is_post_type_archive()) { // 投稿タイプのアーカイブの場合
      $title = post_type_archive_title('', false);
    } elseif (is_tax()) { // タームアーカイブの場合
      $title = single_term_title('', false);
    } elseif (is_author()) { // 作者アーカイブの場合
      $title = get_the_author();
    } elseif (is_date()) { // 日付アーカイブの場合
      $title = '';
      if (get_query_var('year')) {
        $title .= get_query_var('year') . '年';
      }
      if (get_query_var('monthnum')) {
        $title .= get_query_var('monthnum') . '月';
      }
      if (get_query_var('day')) {
        $title .= get_query_var('day') . '日';
      }
    }
    return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');


/* 検索結果から固定ページを除外する */
function my_posts_search($search, $wp_query) {

    // 検索結果ページ・メインクエリ・管理画面以外の3つの条件が揃った場合
    if ($wp_query->is_search() && $wp_query->is_main_query() && !is_admin()) {
  
      // 検索結果を投稿タイプに絞る
      $search .= " AND post_type = 'post' ";
  
      return $search;
    }
  
    return $search;
  }
  add_filter('posts_search','my_posts_search', 10, 2);




/* カテゴリー表示の関数化 */
function my_the_post_category($anchor) {
    $category = get_the_category();
    if($category[0]) {
      if($anchor) {
        echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
      } else {
        echo $category[0]->cat_name;
      }
    }
};








?>



