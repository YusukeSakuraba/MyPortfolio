<?php if (is_home()):?>

<footer class="footer">
  <!-- 年の自動更新 -->
  <p class="footer__text"><small>copyright&copy;<?php echo date('Y');?> Yusuke Sakuraba All Rights
      Reserved.</small></p>
</footer>
<?php endif;?>
<div id="page_top"><a href="#"><i class="fas fa-chevron-up"></i></a></div>
<script>
  // ページ内リンク スムーススクロール
  $(function() {
    $('a[href^="#"]').click(function() {
      var speed = 500;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $("html, body").animate({
        scrollTop: position
      }, speed, "swing");
      return false;
    });
  });
  // 遅延読み込みによるページ内リンクのずれを解消
  $('a[href^="#"]').click(function(e) {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $.when(
      $("html, body").animate({
        scrollTop: position
      }, 400, "swing"),
      e.preventDefault(),
    ).done(function() {
      var diff = target.offset().top;
      if (diff === position) {} else {
        $("html, body").animate({
          scrollTop: diff
        }, 10, "swing");
      }
    });
  });
  // ハンバーガーメニュー
  $(function() {
    $('.menu').on('click', function() {
      $(this).toggleClass('active');
      $("#nav").toggleClass('active');
    })
  });
  $(function() {
    $('#nav a').on('click', function() {
      $('#nav').toggleClass('active');
      $('.menu').toggleClass('active');
    })
  });
  // アコーディオンメニュー
  $(function() {
    $(".skill__item-text-box").hide();
    $(".skill__item-button").on("click", function() {
      $(this).next().slideToggle();
      $(this).toggleClass("active");
    });
  });
  // 自動フリガナ
  $(function() {
    $.fn.autoKana("#name", "#kana", {
      katakana: true
    });
  });
  // トップに戻る
  $(function() {
    var pagetop = $('#page_top');
    pagetop.hide();
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        pagetop.fadeIn();
      } else {
        pagetop.fadeOut();
      }
    });
    pagetop.click(function() {
      $("html,body").animate({
        scrollTop: 0
      }, 500);
      return false;
    });
  });
</script>
<?php wp_footer();?>
</body>

</html>