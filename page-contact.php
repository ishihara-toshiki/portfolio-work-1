<?php get_header(); ?>

    <div class="main_visual main_visual_contact">
        <div class="main_visual_content">
            <h2 class="main_visual_title">CONTACT</h2> <br>
            <p class="main_visual_subtitle">お問い合わせ</p>
        </div>
    </div>

    <?php get_template_part('template-parts/breadcrumb'); ?>



    <div class="contact_section">
        <div class="inner contact_section_inner">
            <p class="contact_section_subtitle">
                研修のお申し込み、その他お問い合わせは、下記のフォームからお問い合わせ内容をご記入ください。<br>
                2日以内に担当者からメールにてご連絡いたします。
            </p>
            <div class="contact_form_wrapper">
                <h3 class="contact_section_title">お問い合わせ</h3>
                <form action="http://localhost:8888/contact-thanks" class="contact_contact_form">
                    <dl class="contact_form_dl">
                        <div class="contact_contact_form_row">
                            <dt class="contact_contact_form_label">
                                <label for="your_company">会社名</label>
                            </dt>
                            <dd class="contact_contact_form_input contact_form_input">
                                <input type="text" id="your_company" placeholder="例）○○株式会社">
                            </dd>
                        </div>
                        <div class="contact_contact_form_row">
                            <dt class="contact_contact_form_label">
                                <label for="your_name" class="is-required">お名前</label>
                            </dt>
                            <dd class="contactdownload_contact_form_input contact_form_input">
                                <input type="text" id="your_name" placeholder="例）鈴木 一郎">
                            </dd>
                        </div>
                        <div class="contact_contact_form_row">
                            <dt class="contact_contact_form_label">
                                <label for="your_katakana" class="is-required">お名前（フリガナ）</label>
                            </dt>
                            <dd class="contact_contact_form_input contact_form_input">
                                <input type="text" id="your_katakana" placeholder="例）スズキ イチロウ">
                            </dd>
                        </div>
                        <div class="contact_contact_form_row">
                            <dt class="contact_contact_form_label">
                                <label for="your_phone" class="is-required">電話番号</label>
                            </dt>
                            <dd class="contact_contact_form_input contact_form_input">
                                <input type="text" id="your_phone" placeholder="例）0312345678">
                            </dd>
                        </div>
                        <div class="contact_contact_form_row">
                            <dt class="contact_contact_form_label">
                                <label for="your_mail" class="is-required">メールアドレス</label>
                            </dt>
                            <dd class="contact_contact_form_input contact_form_input">
                                <input type="email" id="your_mail" placeholder="例）info@example.com">
                            </dd>
                        </div>
                        <div class="contact_contact_form_row">
                            <dt class="contact_contact_form_label">
                                <label for="your_help" class="is-required">ご用件</label>
                            </dt>
                            <dd class="contact_contact_form_input contact_form_input">
                                <select name="your_help" id="your_help">
                                    <option hidden>ご選択ください</option>
                                    <option value="">セレクト1</option>
                                    <option value="">セレクト2</option>
                                    <option value="">セレクト3</option>
                                </select>
                            </dd>
                        </div>
                        <div class="contact_contact_form_row">
                            <dt class="contact_contact_form_label">
                                <label for="your_help_detail" class="is-required">ご用件の詳細</label>
                            </dt>
                            <dd class="contact_contact_form_input contact_form_input">
                                <textarea
                                name="your_help_detail"
                                id="your_help_detail"
                                cols="30"
                                rows="10"
                                placeholder="ご自由にご記入ください。"
                              ></textarea>
                            </dd>
                        </div>
                    </dl>
                    <div class="contact_contact_form_check contact_form_check">
                        <label>
                            <input type="checkbox" value="個人情報保護方針の同意" required />
                            <span><a class="privacy" href="#" target="_blank">個人情報保護方針</a>に同意します。</span>
                        </label>
                    </div>
                    <div class="contact_contact_form_button contact_form_button">
                        <input id="contact-submit" type="submit" value="送信" class="btn contact_section_contact_btn" />
                    </div>
                </form>
            </div>
            

        </div>
    </div>



    <?php get_footer(); ?>