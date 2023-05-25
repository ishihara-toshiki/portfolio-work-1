<?php get_header(); ?>

<div class="main_visual main_visual_home">
  <div class="main_visual_content">
    <h2 class="main_visual_title">NEWS</h2> <br>
    <p class="main_visual_subtitle">ニュース</p>
  </div>
</div>

<?php get_template_part('template-parts/breadcrumb'); ?>


<div class="news_wrapper">
  <div class="inner news_wrapper_inner">
    <div class="news_article news_article_single">

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : ?>
      <?php the_post(); ?>
        <div class="news_article_single_item">
          <div class="news_article_single_item_top">
            <div class="news_article_single_item_top_category">
              <div class="news_article_single_item_top_category_btn"><?php my_the_post_category(true) ?></div>
            </div>
            <div class="news_article_single_item_top_date">
              <time datetime="<?php the_time('C'); ?>"><?php the_time('Y/n/j'); ?></time>
            </div>
          </div>
          <h3 class="news_article_single_item_title">
            <?php the_title(); ?>
          </h3>
          <div class="news_article_single_item_img">
            <?php if(has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
            <?php endif; ?>
          </div>
          <div class="news_article_single_item_text_wrapper">
            <h2 class="news_article_single_item_h2_heading">H2見出しH2見出しH2見出し</h2>
            <p class="news_article_single_item_subheading news_article_single_item_h2_subheading">
              ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。
            </p>
          </div>
          <div class="news_article_single_item_text_wrapper">
            <h3 class="news_article_single_item_h3_heading">H3見出しH3見出しH3見出し</h3>
            <p class="news_article_single_item_subheading news_article_single_item_h3_subheading">
              ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。
            </p>
          </div>
          <div class="news_article_single_item_text_wrapper">
            <h4 class="news_article_single_item_h4_heading">H4見出しH4見出しH4見出し</h4>
            <p class="news_article_single_item_subheading news_article_single_item_h4_subheading">
              ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。
            </p>
          </div>
          <div class="news_article_single_item_text_wrapper">
            <ul class="news_article_single_item_lists">
              <li class="news_article_single_item_list">リスト</li>
              <li class="news_article_single_item_list">リスト</li>
              <li class="news_article_single_item_list">リスト</li>
            </ul>
          </div>
          <div class="news_article_single_item_text_wrapper">
            <div class="news_article_single_item_quote_wrapper">
              <p class="news_article_single_item_quote">
                引用した文章が入ります。ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。
              </p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>

      <!-- <div class="pagination_single">
        <div class="pagination_single_previous">
          <a href="#" class="pagination_single_btn">＜ 前の記事へ</a>
        </div>
        <div class="pagination_single_next">
          <a href="#" class="pagination_single_btn">次の記事へ ＞</a>
        </div>
      </div> -->

      <div class="nav-below pagination_single">
        <?php if (get_previous_post()):?>
        <div class="nav-previous pagination_single_previous">
          <div class="pagination_single_btn">
            <?php previous_post_link('&laquo; %link', '前の記事へ'); ?>
          </div>
        </div>
        <?php endif; ?>
        <?php if (get_next_post()):?>
        <div class="nav-next pagination_single_next">
          <div class="pagination_single_btn">
            <?php next_post_link('%link &raquo;', '次の記事へ'); ?>
          </div>
        </div>
        <?php endif; ?>
      </div>


    </div>

    <?php get_sidebar(); ?>

  </div>
</div>



<?php get_footer(); ?>