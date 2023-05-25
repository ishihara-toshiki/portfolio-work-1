//topのswiper JSプラグイン 初期化コード

const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    autoplay: {
      delay: 2000,
    },
    speed: 700,
});


//ドロワーメニューの利用宣言
$(document).ready(function() {
  $('.drawer').drawer();
});


//ページトップボタン
$(function(){
  var pagetop = $('.to_top');

  pagetop.click(function () {
    $('body, html').animate({ scrollTop: 0 }, 800);
    return false;
 });
});


//QAアコーディオンメニュー
$('.service_qa_item_head').click(function() {
  $(this).next().slideToggle();
  $(this).toggleClass('is-open');
});


//スムーススクロール
$(function() {
  $('a[href^="#"]').click(function() {
    const speed = 600;
    let header = $('.header').innerHeight();
    let href = $(this).attr("href");
    let target = $(href == "#" ? "html" : href);
    // target = $(href);
    let position = target.offset().top - header;
    $('html,body').animate({scrollTop: position }, speed, "swing");
    return false;
  });
});

//download-thanksへ遷移

// $("#download-submit").submit(function(){
//   alert('アラート');
//   location.href = 'localhost:8888/download-thanks/'
// });

























