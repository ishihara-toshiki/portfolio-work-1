<div class="news_sidebar">
    <div class="news_sidebar_inner">
        <div class="news_sidebar_new">
            <h3 class="news_sidebar_title news_sidebar_new_title">新着記事</h3>
            <div class="news_sidebar_new_items">

                <?php
                $args = array(
                    'post_type' => 'post', //投稿記事の種類を設定する
                    'posts_per_page' => 5, //投稿記事の数を設定する
                    'post_status' => 'publish' //公開済みの投稿を設定
                );
                $the_query = new WP_Query($args);
                ?>

                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : ?>
                        <?php $the_query->the_post(); ?>

                        <a href="<?php the_permalink(); ?>" class="news_sidebar_new_item_link">
                            <div class="news_sidebar_new_item">
                                <div class="news_sidebar_new_item_img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="news_sidebar_new_item_explain">
                                    <div class="news_sidebar_item_explain_top">
                                        <div class="news_sidebar_item_explain_top_category">
                                            <object><a href="#" class="btn_news_sidebar_category"><?php my_the_post_category(false) ?></a></object>
                                        </div>
                                        <div class="news_sidebar_item_explain_top_date">
                                            <time class="news_sidebar_item_explain_top_date_text" datetime="<?php the_time('C'); ?>"><?php the_time('Y/n/j'); ?></time>
                                        </div>
                                    </div>
                                    <p class="news_sidebar_item_explain_title">
                                        <?php the_title(); ?>
                                    </p>
                                </div>
                            </div>
                        </a>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
        </div>

        <div class="news_sidebar_category">
            <h3 class="news_sidebar_title">カテゴリ</h3>
            <div class="news_sidebar_category_items">
                <?php
                $categories = get_categories();
                foreach ($categories as $category) {
                    echo '<a href="' . get_category_link($category->term_id) . '"><div class="news_sidebar_category_item"><p class="news_sidebar_category_item_title">' . $category->name . '</p></div></a>';
                }
                ?>
                <!-- <a href="#" class="news_sidebar_category_item_link">
                            <div class="news_sidebar_category_item">
                              <p class="news_sidebar_category_item_title">テキストテキスト</p>
                            </div>
                          </a> -->

            </div>
        </div>
    </div>
</div>