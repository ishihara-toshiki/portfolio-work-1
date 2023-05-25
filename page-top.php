<?php get_header(); ?>

    <div class="top" id="top">
      <div class="top_inner">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="top_picture picture_first"></div>
            </div>
            <div class="swiper-slide">
              <div class="top_picture picture_second"></div>
            </div>
            <div class="swiper-slide">
              <div class="top_picture picture_third"></div>
            </div>
          </div>
        </div>
        <div class="top_message">
          <p class="top_message_title">
            YOU CAN <span class="is-pc">CHANGE</span>
          </p>
          <br />
          <p class="top_message_title is-sp">CHANGE</p>
          <br />
          <p class="top_message_title_br">THE WORLD</p>
          <br />
          <p class="top_message_subtitle">
            世界で活躍できるグローバルな人材を育てる
          </p>
        </div>
      </div>
    </div>

    <section class="about" id="about">
      <div class="about_bg_wrapper is-pc">
        <div class="about_bg"></div>
      </div>
      <div class="about_inner inner">
        <div class="about_heading">
          <div class="about_heading_left">
            <h2 class="section_title">ABOUT US</h2>
            <p class="section_subtitle">当社について</p>
          </div>
          <div class="about_heading_right is-pc">
            <div class="about_heading_right_view">
              <a href="<?php echo home_url('/about/'); ?>" class="view">
                <span class="view_text">View more</span>
                <div class="view_line"></div>
                <div class="view_circle"></div>
              </a>
            </div>
          </div>
        </div>

        <div class="about_subheading">
          <div class="about_subheading_left">
            <p class="about_subheading_left_text">
              急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。
            </p>
            <br />
            <p class="about_subheading_left_text">
              コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。
            </p>
            <br />
            <p class="about_subheading_left_text">
              文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。
            </p>
          </div>
          <div class="about_subheading_right">
            <div class="about_bg_wrapper_sp is-sp">
                <div class="about_bg_sp"></div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/img-front-page/img-company@2x.png" alt="会社風景画像" />
            <div class="about_bottom_view is-sp">
              <a href="<?php echo home_url('/about/'); ?>" class="view">
                <span class="view_text">View more</span>
                <div class="view_line"></div>
                <div class="view_circle"></div>
              </a>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="service" id="service">
      <div class="service_inner inner">
        <div class="service_heading">
          <div class="service_heading_left">
            <h2 class="section_title">SERVICE</h2>
            <p class="section_subtitle">サービス</p>
          </div>
          <div class="service_heading_right">
            <div class="service_heading_right_view is-pc">
              <a href="<?php echo home_url('/service/'); ?>" class="view view_color_black">
                <span class="view_text">View more</span>
                <div class="view_line"></div>
                <div class="view_circle"></div>
              </a>
            </div>
          </div>
        </div>
        <div class="service_contents">
          <div class="service_content">
            <div class="service_content_img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/img-front-page/img-service01@2x.png" alt="ビジネス英語研修" />
              <div class="service_content_img_number">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img-front-page/number01@2x.png" alt="1" />
              </div>
              <div class="service_content_img_title">
                <h3 class="service_content_img_title_text">ビジネス英語研修</h3>
              </div>
            </div>
            <div class="service_content_explain">
              <p class="service_content_explain_text">
                ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。
              </p>
            </div>
          </div>

          <div class="service_content">
            <div class="service_content_img">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/img-front-page/img-service02@2x.png"
                alt="異文化コミュニケーション研修"
              />
              <div class="service_content_img_number">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img-front-page/number02@2x.png" alt="2" />
              </div>
              <div class="service_content_img_title">
                <h3 class="service_content_img_title_text">異文化</h3>
                <br />
                <h3 class="service_content_img_title_text">
                  コミュニケーション研修
                </h3>
              </div>
            </div>
            <div class="service_content_explain">
              <p class="service_content_explain_text">
                急速にグローバル化が進んでおり、ビジネスの場面に限らず様々な文化的背景を持つ者同士の交流はもはや日常的な光景となりました。
                言語や文化が異なる相手を理解することで世界が広がり、新たなビジネスチャンスに巡り会うことは少なくありません。
              </p>
            </div>
          </div>

          <div class="service_content">
            <div class="service_content_img">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/img-front-page/img-service03@2x.png"
                alt="ビジネス留学サポートプログラム"
              />
              <div class="service_content_img_number">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img-front-page/number03@2x.png" alt="3" />
              </div>
              <div class="service_content_img_title">
                <h3 class="service_content_img_title_text">ビジネス留学</h3>
                <br />
                <h3 class="service_content_img_title_text">
                  サポートプログラム
                </h3>
              </div>
            </div>
            <div class="service_content_explain">
              <p class="service_content_explain_text">
                将来的に海外で働きたい方に向けた講座をご用意しております。一般的には3ヶ月〜1年の期間で基本的な英会話スキルと、海外でのビジネスマナー習得を目指します。
                通常の語学留学では得られないビジネスの場で通用するコミュニケーションスキル習得に重点をおいておりますので、海外でビジネス展開する際に自信を持って活動することができるようになります。
              </p>
            </div>
          </div>
        </div>

        <div class="service_bottom_view is-sp">
          <a href="<?php echo home_url('/service/'); ?>" class="view view_color_main">
            <span class="view_text">View more</span>
            <div class="view_line"></div>
            <div class="view_circle"></div>
          </a>
        </div>
      </div>
    </section>

    <section class="case" id="case">
      <div class="case__inner inner">
        <div class="case_heading">
          <div class="case_heading_left">
            <h2 class="section_title section_title_color_white">CASE STUDY</h2>
            <p class="section_subtitle section_subtitle_color_white">
              導入事例
            </p>
          </div>
          <div class="case_heading_right is-pc">
            <div class="case_heading_right_view">
              <a href="<?php echo home_url('/case/'); ?>" class="view">
                <span class="view_text">View more</span>
                <div class="view_line"></div>
                <div class="view_circle"></div>
              </a>
            </div>
          </div>
        </div>
        <div class="case_contents">
          <div class="case_content">
            <a href="<?php echo home_url('/case'); ?>#business-english-training" class="case_content_link">
              <div class="case_content_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img-front-page/img-case01@2x.png" alt="導入事例" />
              </div>
              <p class="case_content_company">AAA株式会社 様</p>
              <div class="case_content_service">
                <p class="case_content_service_text">ビジネス英語研修</p>
                <div class="case_content_service_link">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="29.25"
                    height="29.25"
                    viewBox="0 0 29.25 29.25"
                  >
                    <g id="arrow-icon" transform="translate(-3.375 -3.375)">
                      <path
                        id="パス_4104"
                        data-name="パス 4104"
                        d="M14.815,10.378a1.362,1.362,0,0,1,1.92,0l6.708,6.729a1.356,1.356,0,0,1,.042,1.87l-6.609,6.63a1.355,1.355,0,1,1-1.92-1.912l5.618-5.7-5.759-5.7A1.341,1.341,0,0,1,14.815,10.378Z"
                      />
                      <path
                        id="パス_4105"
                        data-name="パス 4105"
                        d="M3.375,18A14.625,14.625,0,1,0,18,3.375,14.623,14.623,0,0,0,3.375,18Zm2.25,0A12.37,12.37,0,0,1,26.747,9.253,12.37,12.37,0,1,1,9.253,26.747,12.269,12.269,0,0,1,5.625,18Z"
                      />
                    </g>
                  </svg>
                </div>
              </div>
            </a>
          </div>

          <div class="case_content">
            <a href="<?php echo home_url('/case'); ?>#cross-cultural-communication" class="case_content_link">
              <div class="case_content_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img-front-page/img-case02@2x.png" alt="導入事例" />
              </div>
              <p class="case_content_company">合同会社BBB 様</p>
              <div class="case_content_service">
                <p class="case_content_service_text">
                  異文化コミュニケーション
                </p>
                <div class="case_content_service_link">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="29.25"
                    height="29.25"
                    viewBox="0 0 29.25 29.25"
                  >
                    <g id="arrow-icon" transform="translate(-3.375 -3.375)">
                      <path
                        id="パス_4104"
                        data-name="パス 4104"
                        d="M14.815,10.378a1.362,1.362,0,0,1,1.92,0l6.708,6.729a1.356,1.356,0,0,1,.042,1.87l-6.609,6.63a1.355,1.355,0,1,1-1.92-1.912l5.618-5.7-5.759-5.7A1.341,1.341,0,0,1,14.815,10.378Z"
                      />
                      <path
                        id="パス_4105"
                        data-name="パス 4105"
                        d="M3.375,18A14.625,14.625,0,1,0,18,3.375,14.623,14.623,0,0,0,3.375,18Zm2.25,0A12.37,12.37,0,0,1,26.747,9.253,12.37,12.37,0,1,1,9.253,26.747,12.269,12.269,0,0,1,5.625,18Z"
                      />
                    </g>
                  </svg>
                </div>
              </div>
            </a>
          </div>

          <div class="case_content">
            <a href="<?php echo home_url('/case'); ?>#business-study-abroad-program" class="case_content_link">
              <div class="case_content_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img-front-page/img-case03@2x.png" alt="導入事例" />
              </div>
              <p class="case_content_company">CCC株式会社 様</p>
              <div class="case_content_service">
                <p class="case_content_service_text">ビジネス留学プログラム</p>
                <div class="case_content_service_link">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="29.25"
                    height="29.25"
                    viewBox="0 0 29.25 29.25"
                  >
                    <g id="arrow-icon" transform="translate(-3.375 -3.375)">
                      <path
                        id="パス_4104"
                        data-name="パス 4104"
                        d="M14.815,10.378a1.362,1.362,0,0,1,1.92,0l6.708,6.729a1.356,1.356,0,0,1,.042,1.87l-6.609,6.63a1.355,1.355,0,1,1-1.92-1.912l5.618-5.7-5.759-5.7A1.341,1.341,0,0,1,14.815,10.378Z"
                      />
                      <path
                        id="パス_4105"
                        data-name="パス 4105"
                        d="M3.375,18A14.625,14.625,0,1,0,18,3.375,14.623,14.623,0,0,0,3.375,18Zm2.25,0A12.37,12.37,0,0,1,26.747,9.253,12.37,12.37,0,1,1,9.253,26.747,12.269,12.269,0,0,1,5.625,18Z"
                      />
                    </g>
                  </svg>
                </div>
              </div>
            </a>
          </div>

          <div class="case_content">
            <a href="<?php echo home_url('/case'); ?>#cross-cultural-communication" class="case_content_link">
              <div class="case_content_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img-front-page/img-case04@2x.png" alt="導入事例" />
              </div>
              <p class="case_content_company">DDD株式会社 様</p>
              <div class="case_content_service">
                <p class="case_content_service_text">
                  異文化コミュニケーション
                </p>
                <div class="case_content_service_link">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="29.25"
                    height="29.25"
                    viewBox="0 0 29.25 29.25"
                  >
                    <g id="arrow-icon" transform="translate(-3.375 -3.375)">
                      <path
                        id="パス_4104"
                        data-name="パス 4104"
                        d="M14.815,10.378a1.362,1.362,0,0,1,1.92,0l6.708,6.729a1.356,1.356,0,0,1,.042,1.87l-6.609,6.63a1.355,1.355,0,1,1-1.92-1.912l5.618-5.7-5.759-5.7A1.341,1.341,0,0,1,14.815,10.378Z"
                      />
                      <path
                        id="パス_4105"
                        data-name="パス 4105"
                        d="M3.375,18A14.625,14.625,0,1,0,18,3.375,14.623,14.623,0,0,0,3.375,18Zm2.25,0A12.37,12.37,0,0,1,26.747,9.253,12.37,12.37,0,1,1,9.253,26.747,12.269,12.269,0,0,1,5.625,18Z"
                      />
                    </g>
                  </svg>
                </div>
              </div>
            </a>
          </div>

          <div class="case_content">
            <a href="<?php echo home_url('/case'); ?>#business-study-abroad-program" class="case_content_link">
              <div class="case_content_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img-front-page/img-case05@2x.png" alt="導入事例" />
              </div>
              <p class="case_content_company">EEE株式会社 様</p>
              <div class="case_content_service">
                <p class="case_content_service_text">ビジネス留学プログラム</p>
                <div class="case_content_service_link">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="29.25"
                    height="29.25"
                    viewBox="0 0 29.25 29.25"
                  >
                    <g id="arrow-icon" transform="translate(-3.375 -3.375)">
                      <path
                        id="パス_4104"
                        data-name="パス 4104"
                        d="M14.815,10.378a1.362,1.362,0,0,1,1.92,0l6.708,6.729a1.356,1.356,0,0,1,.042,1.87l-6.609,6.63a1.355,1.355,0,1,1-1.92-1.912l5.618-5.7-5.759-5.7A1.341,1.341,0,0,1,14.815,10.378Z"
                      />
                      <path
                        id="パス_4105"
                        data-name="パス 4105"
                        d="M3.375,18A14.625,14.625,0,1,0,18,3.375,14.623,14.623,0,0,0,3.375,18Zm2.25,0A12.37,12.37,0,0,1,26.747,9.253,12.37,12.37,0,1,1,9.253,26.747,12.269,12.269,0,0,1,5.625,18Z"
                      />
                    </g>
                  </svg>
                </div>
              </div>
            </a>
          </div>

          <div class="case_content">
            <a href="<?php echo home_url('/case'); ?>#business-english-training" class="case_content_link">
              <div class="case_content_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img-front-page/img-case06@2x.png" alt="導入事例" />
              </div>
              <p class="case_content_company">FFF株式会社 様</p>
              <div class="case_content_service">
                <p class="case_content_service_text">ビジネス英語研修</p>
                <div class="case_content_service_link">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="29.25"
                    height="29.25"
                    viewBox="0 0 29.25 29.25"
                  >
                    <g id="arrow-icon" transform="translate(-3.375 -3.375)">
                      <path
                        id="パス_4104"
                        data-name="パス 4104"
                        d="M14.815,10.378a1.362,1.362,0,0,1,1.92,0l6.708,6.729a1.356,1.356,0,0,1,.042,1.87l-6.609,6.63a1.355,1.355,0,1,1-1.92-1.912l5.618-5.7-5.759-5.7A1.341,1.341,0,0,1,14.815,10.378Z"
                      />
                      <path
                        id="パス_4105"
                        data-name="パス 4105"
                        d="M3.375,18A14.625,14.625,0,1,0,18,3.375,14.623,14.623,0,0,0,3.375,18Zm2.25,0A12.37,12.37,0,0,1,26.747,9.253,12.37,12.37,0,1,1,9.253,26.747,12.269,12.269,0,0,1,5.625,18Z"
                      />
                    </g>
                  </svg>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="case_bottom_view is-sp">
          <a href="<?php echo home_url('/case/'); ?>" class="view">
            <span class="view_text">View more</span>
            <div class="view_line"></div>
            <div class="view_circle"></div>
          </a>
        </div>
      </div>
    </section>

    <section class="news" id="news">
      <div class="news_inner inner">
        <div class="news_heading">
          <div class="news_heading_left">
            <h2 class="section_title">NEWS</h2>
            <p class="section_subtitle">新着情報</p>
          </div>
          <div class="news_heading_right is-pc">
            <div class="news_heading_right_view">
              <a href="<?php echo home_url('/post/'); ?>" class="view view_color_black">
                <span class="view_text">View more</span>
                <div class="view_line"></div>
                <div class="view_circle"></div>
              </a>
            </div>
          </div>
        </div>
        <div class="news_contents">
          <div class="news_content">

          <?php
            $args = array(
                'post_type' => 'post', //投稿記事の種類を設定する
                'posts_per_page' => 3, //投稿記事の数を設定する
                'post_status' => 'publish' //公開済みの投稿を設定
            );
            $the_query = new WP_Query( $args );
          ?>

          <?php if ($the_query -> have_posts()) : ?>
					  <?php while ($the_query -> have_posts()) : ?>
						  <?php $the_query -> the_post(); ?>

                <div class="news_content_item">
                  <a href="<?php the_permalink(); ?>" class="news_content_item_link">
                    <div class="news_content_item_heading">
                      <p class="news_content_item_heading_left"><?php my_the_post_category(false) ?></p>
                      <time class="news_content_item_heading_right" datetime="<?php the_time('C'); ?>"><?php the_time('Y/n/j'); ?></time>
                    </div>
                    <div class="news_content_item_title">
                      <p class="news_content_item_title_text">
                        <?php the_title(); ?>
                      </p>
                    </div>
                  </a>
                </div>
              

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
				  <?php endif; ?>


          </div>
        </div>
        <div class="news_bottom_view is-sp">
          <a href="<?php echo home_url('/post/'); ?>" class="view view_color_main">
            <span class="view_text">View more</span>
            <div class="view_line"></div>
            <div class="view_circle"></div>
          </a>
        </div>
      </div>
    </section>

<?php get_footer(); ?>