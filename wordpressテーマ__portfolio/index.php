<?php get_header();?>
<main class="main">
  <!-- about -->
  <section class="about" id="about">
    <h2 class="main__heading">ABOUT</h2>
    <hr class="main__hr">
    <ul class="about__list main__contents">
      <li class="about__item">
        <img class="about__img"
          src="<?php echo get_template_directory_uri();?>/img/profile.jpg"
          alt="サイト作成者の画像">
      </li>
      <li class="about__item">
        <div class="about__item-text-box">
          <h3 class="about__item-heading">自己紹介</h3>
          <p class="about__item-text">名前：櫻庭 裕介（さくらば ゆうすけ）</p>
          <p class="about__item-text">生年月日：1997/2/13</p>
          <p class="about__item-text">出身：鹿児島県</p>
          <p class="about__item-text">経済的理由で大学を中退後、スキルを身に着けるべく、2020年3月末から独学でWeb制作の学習開始。</p>
          <p class="about__item-text -emphasis">業務・学習には、楽しみながらも粘り強く、向上心を持って取り組みます。</p>
        </div>
      </li>
    </ul>
  </section>
  <!-- skill -->
  <section class="skill" id="skill">
    <h2 class="main__heading -white">SKILL</h2>
    <hr class="main__hr -white">
    <p class="main__text -white">スキルを更に増やしていきます</p>
    <ul class="main__contents">
      <!-- HTML5/CSS3 -->
      <li class="skill__item">
        <button class="skill__item-button">
          <i class="fas fa-code c-logo -html5"></i>
          <h3 class="main__item-heading">HTML5/CSS3</h3>
        </button>
        <div class="skill__item-text-box">
          <p class="main__item-text">レスポンシブ対応・ブラウザ対応(Chrome Firefox Microsoft
            Edge)・デザインカンプからのコーディング（Adobe XD）</p>
          <p class="main__item-text">学習教材：Progate・ドットインストール・書籍（一冊ですべて身に付くHTML & CSSとWebデザイン入門講座）</p>
        </div>
      </li>
      <!-- JavaScript/jQuery -->
      <li class="skill__item">
        <button class="skill__item-button"><i class="fab fa-js c-logo -js"></i>
          <h3 class="main__item-heading">JavaScript/jQuery</h3>
          </p>
        </button>
        <div class="skill__item-text-box">
          <p class="main__item-text">ハンバーガーメニュー・トップに戻るボタン・アコーディオンメニューなど。
            日々新しい動きの実装に挑戦中です。</p>
          <p class="main__item-text">学習教材：Progate・ドットインストール・忍者CODE問題集</p>
        </div>
      </li>
      <!-- WordPress -->
      <li class="skill__item">
        <button class="skill__item-button"><i class="fab fa-wordpress c-logo -wordpress"></i>
          <h3 class="main__item-heading">WordPress</h3>
        </button>
        <div class="skill__item-text-box">
          <p class="main__item-text">静的HTMLサイトをWordPress化。</p>
          <p class="main__item-text">学習教材：ドットインストール・Udemy(WordPress開発マスター講座)・書籍（WordPressレッスンブック・WordPress
            仕事の現場でサッと使える!デザイン教科書）</p>
        </div>
      </li>
      <!-- PHP -->
      <li class="skill__item">
        <button class="skill__item-button"><i class="fab fa-php c-logo -php"></i>
          <h3 class="main__item-heading">PHP</h3>
        </button>
        <div class="skill__item-text-box">
          <p class="main__item-text">フォームの基本的な動作（入力フォームのデータを別ページに送信・ボタン押下でメールの自動配信・サンクス画面の表示）</p>
          <p class="main__item-text">学習教材：Progate・Udemy(PHP+MySQL (MariaDB) Webサーバーサイドプログラミング入門)・忍者CODE問題集</p>
        </div>
      </li>
      <!-- sass -->
      <li class="skill__item">
        <button class="skill__item-button"><i class="fab fa-sass c-logo -sass"></i>
          <h3 class="main__item-heading">Sass</h3>
        </button>
        <div class="skill__item-text-box">
          <p class="main__item-text">
            BEMを意識した破綻しにくい、再利用しやすいコーディング・scssファイルを分割して管理の容易化。</p>
          <p class="main__item-text">学習教材：Web製作者のためのCSS設計の教科書</p>
        </div>
      </li>
      <!-- git/github -->
      <li class="skill__item">
        <button class="skill__item-button"><i class="fab fa-github c-logo -github"></i>
          <h3 class="main__item-heading">Git/Github</h3>
        </button>
        <div class="skill__item-text-box">
          <p class="main__item-text">
            ソースコードのバージョン管理・ファイルのアップロード・変更を戻すなどの基本動作。</p>
          <a class="main__item-text main__link" href="https://github.com/YusukeSakuraba/MyPortfolio.git" target="_blank"
            rel="noopener noreferrer">Githubアカウントはこちら</a>
          <p class="main__item-text">学習教材：Udemy(Git：もう怖くないGit！チーム開発で必要なGitを完全マスター)・忍者CODE問題集</p>
        </div>
      </li>
    </ul>
  </section>
  <!-- works -->
  <section class="works" id="works">
    <h2 class="main__heading">WORKS</h2>
    <hr class="main__hr">
    <p class="main__text">画像をクリックすると拡大します</p>
    <ul class="works__list main__contents">
      <!-- simple site -->
      <li class="works__item">
        <div class="works__item-text-box">
          <h3 class="works__item-heading"><i class="fas fa-pen"></i>LP模写&#9312;
          </h3>
          <h3 class="works__item-heading">シンプルなホームページ</h3>
        </div>
        <a href="<?php echo get_template_directory_uri();?>/img/simple-site.png"
          data-lightbox="#">
          <img class="works__item-img"
            src="<?php echo get_template_directory_uri();?>/img/simple-site-top.png"
            alt="シンプルなホームページ">
        </a>
      </li>
      <!-- corporate -->
      <li class="works__item">
        <a href="<?php echo get_template_directory_uri();?>/img/corporate-site.png"
          data-lightbox="#">
          <img class="works__item-img"
            src="<?php echo get_template_directory_uri();?>/img/corporate-site-top.png"
            alt="架空コーポレートサイト">
        </a>
        <div class="works__item-text-box">
          <h3 class="works__item-heading"><i class="fas fa-pen"></i>LP模写&#9313;
          </h3>
          <h3 class="works__item-heading">架空コーポレートサイト</h3>
        </div>
      </li>
      <!-- shiro -->
      <li class="works__item">
        <div class="works__item-text-box">
          <h3 class="works__item-heading"><i class="fas fa-pen"></i>デザインカンプからコーディング&#9314;
          </h3>
          <h3 class="works__item-heading">架空LP</h3>
          <h3 class="main__item-text">カンプ作成：ひらともや様</h3>
        </div>
        <a href="<?php echo get_template_directory_uri();?>/img/shiro.png"
          data-lightbox="#">
          <img class="works__item-img"
            src="<?php echo get_template_directory_uri();?>/img/shiro-top.png"
            alt="架空LP">
        </a>
      </li>
      <!-- workwith -->
      <li class="works__item">
        <a href="<?php echo get_template_directory_uri();?>/img/workwith.png"
          data-lightbox="#">
          <img class="works__item-img"
            src="<?php echo get_template_directory_uri();?>/img/workwith-top.png"
            alt="架空LP">
        </a>
        <div class="works__item-text-box">
          <h3 class="works__item-heading"><i class="fas fa-pen"></i>デザインカンプからコーディング&#9315;
          </h3>
          <h3 class="works__item-heading">架空LP</h3>
          <h3 class="main__item-text">カンプ作成：KROWL様</h3>
        </div>
      </li>
      <!-- isara -->
      <li class="works__item">
        <div class="works__item-text-box">
          <h3 class="works__item-heading"><i class="fas fa-pen"></i>LP模写&#9316;
          </h3>
          <h3 class="works__item-heading"><a class="main__link" href="https://isara.life" target="_blank"
              rel="noopener noreferrer">isara.life</a>模写制作LP</h3>
        </div>
        <a href="<?php echo get_template_directory_uri();?>/img/isara.png"
          data-lightbox="#">
          <img class="works__item-img"
            src="<?php echo get_template_directory_uri();?>/img/isara-top.png"
            alt="isara">
        </a>
      </li>
    </ul>
  </section>
  <!-- contact -->
  <section class="contact" id="contact">
    <h2 class="main__heading">CONTACT</h2>
    <hr class="main__hr">
    <p class="main__text">お問い合わせはこちらまで</p>
    <?php echo do_shortcode('[mwform_formkey key="527"]');?>
  </section>
</main>
<?php get_footer();
