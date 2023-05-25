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
            <div class="news_article">
                <h3 class="news_article_title">お知らせ一覧</h3>
                <div class="news_article_items">

                <?php
                    $args = array(
                        'post_type' => 'post', //投稿記事の種類を設定する
                        'post_status' => 'publish' //公開済みの投稿を設定
                    );
                    $the_query = new WP_Query( $args );
                ?>

                <?php if ($the_query -> have_posts()) : ?>
					<?php while ($the_query -> have_posts()) : ?>
						<?php $the_query -> the_post(); ?>

                        <a href="<?php the_permalink(); ?>" class="news_article_item_link">
                            <div class="news_article_item">
                                <div class="news_article_item_img">
                                    <?php if(has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="news_article_item_explain">
                                    <div class="news_article_item_explain_top">
                                        <div class="news_article_item_explain_top_category">
                                            <object><div class="btn_news_article_category"><?php my_the_post_category(false) ?></div></object>
                                            <?php
                                                $last_post_ids = array();
                                                $lastposts = get_posts('posts_per_page=2'); // NEWを付ける最新記事の件数
                                                foreach($lastposts as $lastpost) {
                                                    $last_post_ids[] = $lastpost->ID;
                                                }
                                            ?>
                                            <?php if ( in_array( $post->ID, $last_post_ids ) ) : ?>
                                                <p class="news_article_item_explain_top_category_new">NEW</p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="news_article_item_explain_top_date">
                                            <time class="news_article_item_explain_top_date_text" datetime="<?php the_time('C'); ?>"><?php the_time('Y/n/j'); ?></time>
                                        </div>
                                    </div>
                                    <p class="news_article_item_explain_title">
                                        <?php the_title(); ?>
                                    </p>
                                </div>
                            </div>
                        </a>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
				<?php endif; ?>



                    
    			<?php get_template_part('template-parts/pagination'); ?>

                <!-- <div class="pagination">
                        <div class="pagination_inner">
                            <div class="pagination_item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/img-home/icon-chevron-left.svg" alt="allowアイコン">
                            </div>
                            <div class="pagination_item">
                                <p class="pagination_item_number">1</p>
                            </div>
                            <div class="pagination_item">
                                <p class="pagination_item_number">2</p>
                            </div>
                            <div class="pagination_item">
                                <p class="pagination_item_number">3</p>
                            </div>
                            <div class="pagination_item">
                                <p class="pagination_item_number">4</p>
                            </div>
                            <div class="pagination_item">
                                <p class="pagination_item_number">5</p>
                            </div>
                            <div class="pagination_item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/img-home/icon-chevron-right.svg" alt="allowアイコン">
                            </div>
                        </div>
                </div> -->
    
                </div>
            </div>
    
            <?php get_sidebar(); ?>

        </div>
    </div>



    <?php get_footer(); ?>
