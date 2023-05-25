<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- <link rel="stylesheet" href="./css/reset.css" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- <link
      href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,400;1,500&family=Noto+Sans+JP:wght@400;500&display=swap"
      rel="stylesheet"
    /> -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css"
    />
    <!-- <link rel="stylesheet" href="./css/style.css" /> -->
    <!-- <title>Global Standard_卒業制作課題</title> -->

    <?php wp_head(); ?>

  </head>
  <body class="body">
    <header class="header">
      <div class="header_inner">
        <div class="header_left">
          <h1><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/img-front-page/logo01@2x.png" alt="ロゴ" /></a></h1>
        </div>
        <div class="header_center">


        <?php
          wp_nav_menu(
            array(
              'depth' => 1,
              'theme_location' => 'global', // グローバルメニューをここに表示すると指定
              'container' => '',
              'menu_class' => 'header_center_lists'
            )
          );
			  ?>

          <!-- <ul class="header_center_lists">
            <li class="header_center_lists_list"><a href="#top">トップ</a></li>
            <li class="header_center_lists_list">
              <a href="#about">当社について</a>
            </li>
            <li class="header_center_lists_list">
              <a href="#service">サービス</a>
            </li>
            <li class="header_center_lists_list">
              <a href="#case">導入事例</a>
            </li>
            <li class="header_center_lists_list">
              <a href="#news">お知らせ</a>
            </li>
          </ul> -->

          <div class="drawer drawer--right">
            <header role="banner">
              <!-- ハンバーガーボタン -->
              <button type="button" class="drawer-toggle drawer-hamburger">
                <span class="sr-only">toggle navigation</span>
                <span class="drawer-hamburger-icon"></span>
              </button>
              <!-- ナビゲーションの中身 -->
              <nav class="drawer-nav" role="navigation">

              <?php
                wp_nav_menu(
                  array(
                    'depth' => 1,
                    'theme_location' => 'drawer', // グローバルメニューをここに表示すると指定
                    'container' => '',
                    'menu_class' => 'drawer-menu'
                  )
                );
			        ?>

                <!-- <ul class="drawer-menu">
                  <li><a class="drawer_menu_item" href="#top">トップ</a></li>
                  <li>
                    <a class="drawer_menu_item" href="#about">当社について</a>
                  </li>
                  <li>
                    <a class="drawer_menu_item" href="#service">サービス</a>
                  </li>
                  <li><a class="drawer_menu_item" href="#case">導入事例</a></li>
                  <li><a class="drawer_menu_item" href="#news">お知らせ</a></li>
                </ul> -->
                <div class="drawer_menu_item_btn">
                    <a class="btn btn_drawer_download" href="<?php echo home_url('/download/'); ?>">資料ダウンロード</a>
                </div>
                <div class="drawer_menu_item_btn">
                  <a class="btn btn_drawer_contact" href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a>
                </div>
              </nav>
            </header>
            <main role="main">
              <!-- Page content -->
            </main>
          </div>
        </div>
        <div class="header_right">
          <div class="header_right_download">
            <a href="<?php echo home_url('/download/'); ?>" class="btn btn_download">資料ダウンロード</a>
          </div>
          <div class="header_right_contact">
            <a href="<?php echo home_url('/contact/'); ?>" class="btn btn_contact">お問い合わせ</a>
          </div>
        </div>
      </div>
    </header>
