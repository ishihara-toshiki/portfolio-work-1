<footer class="footer">
      <div class="footer_top">
        <div class="footer_top_left">
          <p class="footer_top_left_title footer_top_title">DOWNLOAD</p>
          <p class="footer_top_left_subtitle footer_top_subtitle">
            資料ダウンロード
          </p>
          <div class="footer_top_left_btn footer_top_btn">
            <a href="<?php echo home_url('/download/'); ?>" class="btn link_btn">View more</a>
          </div>
        </div>
        <div class="footer_top_right">
          <p class="footer_top_right_title footer_top_title">CONTACT</p>
          <p class="footer_top_right_subtitle footer_top_subtitle">
            お問い合わせ
          </p>
          <div class="footer_top_right_btn footer_top_btn">
            <a href="<?php echo home_url('/contact/'); ?>" class="btn link_btn">View more</a>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="footer_bottom_inner">
          <p class="footer_bottom_title">Global Standard</p>
          <div class="footer_bottom_texts">
            <p class="footer_bottom_text">〒550-1000 大阪市西区土佐堀9-5-5</p>
            <p class="footer_bottom_text">TEL 06-123-4567</p>
            <p class="footer_bottom_text">FAX 06-123-4568</p>
          </div>
          <p class="copyright">
            <small lang="en"
              >©︎2021 Global Standard. All Rights Reserved.</small
            >
          </p>
        </div>
      </div>
      <div class="to_top">
        <a class="to_top_btn" href="#"
          ><img src="<?php echo get_template_directory_uri(); ?>/img/img-front-page/icon-top@2x.png" alt="ページトップへ戻るボタン"
        /></a>
      </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
    <!-- <script src="js/script.js"></script> -->

    <?php wp_footer(); ?>

  </body>
</html>
