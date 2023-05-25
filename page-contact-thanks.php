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
            <p class="contact_section_guid">
                お問い合わせありがとうございました。<br>
                2日以内に担当者からメールにてご連絡いたしますので、しばらくお待ちいただけますと幸いです。
            </p>
            <p class="contact_section_back_home">
                → <a href="<?php echo home_url(); ?>">トップへ戻る</a>
            </p>
        </div>
    </div>



    <?php get_footer(); ?>
