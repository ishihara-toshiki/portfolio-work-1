<?php get_header(); ?>

    <div class="main_visual main_visual_case">
        <div class="main_visual_content">
            <h2 class="main_visual_title">CASE STUDY</h2> <br>
            <p class="main_visual_subtitle">導入事例</p>
        </div>
    </div>

    <?php get_template_part('template-parts/breadcrumb'); ?>



    <div class="case_section">
        <div class="inner case_section_inner">
            <div class="case_section_nav">
                <ul class="case_section_nav_lists">
                    <a class="case_section_nav_list" href="#business-english-training"><li>ビジネス英語研修</li></a>
                    <a class="case_section_nav_list" href="#cross-cultural-communication"><li>異文化コミュニケーション</li></a>
                    <a class="case_section_nav_list" href="#business-study-abroad-program"><li>ビジネス留学プログラム</li></a>
                </ul>
            </div>

            <section id="business-english-training" class="case_section_kind">
                <div class="case_section_heading">
                    <h3 class="case_section_title">
                        ビジネス英語研修
                        <span class="case_section_subtitle">Business English Training</span>
                    </h3>
                </div>
    
                <div class="case_section_items">

                    <?php 
                        $args = array(
                            'post_type' => 'example',
                            'posts_per_page' => -1, //表示件数（-1で全ての記事を表示）
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                  'taxonomy' => 'genre',
                                  'terms' => array('business-english'),
                                  'field' => 'slug',
                                ),
                            ),
                        );
                        $the_query = new WP_Query( $args );
                    ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : ?>
                            <?php $the_query->the_post(); ?>
    
                            <div class="case_section_item">
                                <div class="case_section_item_heading case01">
                                    <p class="case_section_item_heading_business"><?php the_field('business'); ?></p>
                                    <p class="case_section_item_heading_company"><?php the_field('company'); ?><span class="company_honor">様</span></p>
                                    <div class="case_section_item_heading_logo">
                                        <img src="<?php the_field('logo'); ?>" alt="">
                                    </div>
                                </div>
                                <div class="case_section_item_detail">
                                    <p class="case_section_item_detail_course">研修コース： <?php the_field('course'); ?></p>
                                    <div class="case_section_item_detail_list">
                                        <p class="case_section_item_detail_list_title">研修の目的</p>
                                        <p class="case_section_item_detail_list_explain">
                                            <?php the_field('purpose'); ?>
                                        </p>
                                    </div>
                                    <div class="case_section_item_detail_list">
                                        <p class="case_section_item_detail_list_title">選んだ理由</p>
                                        <p class="case_section_item_detail_list_explain">
                                            <?php the_field('reason'); ?>
                                        </p>
                                    </div>
                                    <div class="case_section_item_detail_list">
                                        <p class="case_section_item_detail_list_title">導入後の成果・効果</p>
                                        <p class="case_section_item_detail_list_explain">
                                            <?php the_field('effect'); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                    
    
                </div>

                <div class="case_section_btn_wrapper">
                    <a href="<?php echo home_url('/service'); ?>#business-english" class="btn section_btn">
                        ビジネス英語研修の詳細
                        <span class="section_btn_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.243" height="13.501" viewBox="0 0 20.243 13.501">
                                <path id="icon-arrow-right04" d="M20.784,11.51a.919.919,0,0,0-.007,1.294l4.275,4.282H8.782a.914.914,0,0,0,0,1.828H25.045L20.77,23.2a.925.925,0,0,0,.007,1.294.91.91,0,0,0,1.287-.007l5.794-5.836h0a1.026,1.026,0,0,0,.19-.288.872.872,0,0,0,.07-.352.916.916,0,0,0-.26-.64l-5.794-5.836A.9.9,0,0,0,20.784,11.51Z" transform="translate(-7.875 -11.252)"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </section>

            <section id="cross-cultural-communication" class="case_section_kind">
                <div class="case_section_heading">
                    <h3 class="case_section_title">
                        異文化コミュニケーション
                        <span class="case_section_subtitle">Cross-cultural communication</span>
                    </h3>
                </div>
    
                <div class="case_section_items">
    
                    <?php 
                        $args = array(
                            'post_type' => 'example',
                            'posts_per_page' => -1, //表示件数（-1で全ての記事を表示）
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                  'taxonomy' => 'genre',
                                  'terms' => array('different-culture'),
                                  'field' => 'slug',
                                ),
                            ),
                        );
                        $the_query = new WP_Query( $args );
                    ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : ?>
                            <?php $the_query->the_post(); ?>
    
                            <div class="case_section_item">
                                <div class="case_section_item_heading case01">
                                    <p class="case_section_item_heading_business"><?php the_field('business'); ?></p>
                                    <p class="case_section_item_heading_company"><?php the_field('company'); ?><span class="company_honor">様</span></p>
                                    <div class="case_section_item_heading_logo">
                                        <img src="<?php the_field('logo'); ?>" alt="">
                                    </div>
                                </div>
                                <div class="case_section_item_detail">
                                    <p class="case_section_item_detail_course">研修コース： <?php the_field('course'); ?></p>
                                    <div class="case_section_item_detail_list">
                                        <p class="case_section_item_detail_list_title">研修の目的</p>
                                        <p class="case_section_item_detail_list_explain">
                                            <?php the_field('purpose'); ?>
                                        </p>
                                    </div>
                                    <div class="case_section_item_detail_list">
                                        <p class="case_section_item_detail_list_title">選んだ理由</p>
                                        <p class="case_section_item_detail_list_explain">
                                            <?php the_field('reason'); ?>
                                        </p>
                                    </div>
                                    <div class="case_section_item_detail_list">
                                        <p class="case_section_item_detail_list_title">導入後の成果・効果</p>
                                        <p class="case_section_item_detail_list_explain">
                                            <?php the_field('effect'); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
    
                </div>

                <div class="case_section_btn_wrapper">
                    <a href="<?php echo home_url('/service'); ?>#cross-cultural" class="btn section_btn u-case_section_btn">
                        異文化コミュニケーションの詳細
                        <span class="section_btn_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.243" height="13.501" viewBox="0 0 20.243 13.501">
                                <path id="icon-arrow-right04" d="M20.784,11.51a.919.919,0,0,0-.007,1.294l4.275,4.282H8.782a.914.914,0,0,0,0,1.828H25.045L20.77,23.2a.925.925,0,0,0,.007,1.294.91.91,0,0,0,1.287-.007l5.794-5.836h0a1.026,1.026,0,0,0,.19-.288.872.872,0,0,0,.07-.352.916.916,0,0,0-.26-.64l-5.794-5.836A.9.9,0,0,0,20.784,11.51Z" transform="translate(-7.875 -11.252)"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </section>

            
            <section id="business-study-abroad-program" class="case_section_kind">
                <div class="case_section_heading">
                    <h3 class="case_section_title">
                        ビジネス留学プログラム
                        <span class="case_section_subtitle">Business study abroad program</span>
                    </h3>
                </div>
    
                <div class="case_section_items">
    
                <?php 
                        $args = array(
                            'post_type' => 'example',
                            'posts_per_page' => -1, //表示件数（-1で全ての記事を表示）
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                  'taxonomy' => 'genre',
                                  'terms' => array('business-abroad'),
                                  'field' => 'slug',
                                ),
                            ),
                        );
                        $the_query = new WP_Query( $args );
                    ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : ?>
                            <?php $the_query->the_post(); ?>
    
                            <div class="case_section_item">
                                <div class="case_section_item_heading case01">
                                    <p class="case_section_item_heading_business"><?php the_field('business'); ?></p>
                                    <p class="case_section_item_heading_company"><?php the_field('company'); ?><span class="company_honor">様</span></p>
                                    <div class="case_section_item_heading_logo">
                                        <img src="<?php the_field('logo'); ?>" alt="">
                                    </div>
                                </div>
                                <div class="case_section_item_detail">
                                    <p class="case_section_item_detail_course">研修コース： <?php the_field('course'); ?></p>
                                    <div class="case_section_item_detail_list">
                                        <p class="case_section_item_detail_list_title">研修の目的</p>
                                        <p class="case_section_item_detail_list_explain">
                                            <?php the_field('purpose'); ?>
                                        </p>
                                    </div>
                                    <div class="case_section_item_detail_list">
                                        <p class="case_section_item_detail_list_title">選んだ理由</p>
                                        <p class="case_section_item_detail_list_explain">
                                            <?php the_field('reason'); ?>
                                        </p>
                                    </div>
                                    <div class="case_section_item_detail_list">
                                        <p class="case_section_item_detail_list_title">導入後の成果・効果</p>
                                        <p class="case_section_item_detail_list_explain">
                                            <?php the_field('effect'); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
    
                </div>

                <div class="case_section_btn_wrapper">
                    <a href="<?php echo home_url('/service'); ?>#business-abroad" class="btn section_btn u-case_section_btn">
                        ビジネス留学プログラムの詳細
                        <span class="section_btn_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.243" height="13.501" viewBox="0 0 20.243 13.501">
                                <path id="icon-arrow-right04" d="M20.784,11.51a.919.919,0,0,0-.007,1.294l4.275,4.282H8.782a.914.914,0,0,0,0,1.828H25.045L20.77,23.2a.925.925,0,0,0,.007,1.294.91.91,0,0,0,1.287-.007l5.794-5.836h0a1.026,1.026,0,0,0,.19-.288.872.872,0,0,0,.07-.352.916.916,0,0,0-.26-.64l-5.794-5.836A.9.9,0,0,0,20.784,11.51Z" transform="translate(-7.875 -11.252)"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </section>

        </div>
    </div>


    <?php get_footer(); ?>
