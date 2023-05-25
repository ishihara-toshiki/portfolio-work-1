<?php get_header(); ?>

    <div class="main_visual main_visual_download">
        <div class="main_visual_content">
            <h2 class="main_visual_title">DOWNLOAD</h2> <br>
            <p class="main_visual_subtitle">資料ダウンロード</p>
        </div>
    </div>

    <?php get_template_part('template-parts/breadcrumb'); ?>



    <div class="download_section">
        <div class="inner download_section_inner">

            <div class="download_section_left">
                <h3 class="download_section_left_title">世界で活躍できるグローバルな人材を育てる３つの研修プログラムをご用意しております。</h3>
                <div class="download_section_left_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img-download-page/pamphlet@2x.png" alt="パンフレット画像">
                </div>
                <p class="download_section_left_explain">
                    急速にグローバルに活躍できる企業が生き残る時代と移り変わりました。<br>
                    ビジネス英語や経営学を効率よく学びながら、世界各国から集まるビジネスパーソンと交流し、世界レベルでの人脈を構築する研修をご用意しております。

                </p>
                <p class="download_section_left_explain_2">
                    英語に苦手意識のある方でもご安心ください。<br>
                    ビジネスで必要なコミュニケーションが取れるようになるまで実績豊富な講師陣がサポートいたします。<br>
                    まずはこちらの資料をごらんください。
                </p>
            </div>
            <div class="download_section_right">
                <h3 class="download_section_right_title">資料ダウンロード</h3>
                	
                <!-- <?php echo do_shortcode('[contact-form-7 id="109" title="ダウンロードフォーム"]'); ?> -->


                <form action="http://localhost:8888/download-thanks" class="download_contact_form">
                    <dl class="contact_form_dl">
                        <div class="download_contact_form_row">
                            <dt class="download_contact_form_label">
                                <label for="your_company">会社名</label>
                            </dt>
                            <dd class="download_contact_form_input contact_form_input">
                                <input type="text" id="your_company" placeholder="例）○○株式会社">
                            </dd>
                        </div>
                        <div class="download_contact_form_row">
                            <dt class="download_contact_form_label">
                                <label for="your_depart">部署</label>
                            </dt>
                            <dd class="download_contact_form_input contact_form_input">
                                <input type="text" id="your_depart" placeholder="例）人事部">
                            </dd>
                        </div>
                        <div class="download_contact_form_row">
                            <dt class="download_contact_form_label">
                                <label for="your_name" class="is-required">お名前</label>
                            </dt>
                            <dd class="download_contact_form_input contact_form_input">
                                <input type="text" id="your_name" placeholder="例）鈴木 一郎">
                            </dd>
                        </div>
                        <div class="download_contact_form_row">
                            <dt class="download_contact_form_label">
                                <label for="your_katakana" class="is-required">お名前（フリガナ）</label>
                            </dt>
                            <dd class="download_contact_form_input contact_form_input">
                                <input type="text" id="your_katakana" placeholder="例）スズキ イチロウ">
                            </dd>
                        </div>
                        <div class="download_contact_form_row">
                            <dt class="download_contact_form_label">
                                <label for="your_mail" class="is-required">メールアドレス</label>
                            </dt>
                            <dd class="download_contact_form_input contact_form_input">
                                <input type="text" id="your_mail" placeholder="例）info@example.com">
                            </dd>
                        </div>
                    </dl>
                    <div class="download_contact_form_check contact_form_check">
                        <label>
                            <input type="checkbox" value="個人情報保護方針の同意" required />
                            <span><a class="privacy" href="" target="_blank">個人情報保護方針</a>に同意します。</span>
                        </label>
                    </div>
                    <div class="download_contact_form_button contact_form_button">
                        <input id="download-submit" type="submit" value="資料をダウンロードする" class="btn download_section_download_btn" />
                    </div>
                </form>
            </div>

        </div>
    </div>


    <?php get_footer(); ?>
