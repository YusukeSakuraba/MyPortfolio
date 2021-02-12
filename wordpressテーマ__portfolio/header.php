<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta name="description"
    content="<?php bloginfo('description');?>">
  </title>
  <!-- サイトアイコン -->
  <link rel="icon"
    href="<?php echo get_template_directory_uri();?>/img/favicon.ico">
  <?php wp_head();?>
</head>

<body>
  <?php if (is_home()):?>
  <!-- ヘッダー -->
  <header class="header" id="home">
    <nav class="header__nav hamburger__menu" id="global-nav">
      <div class="fullscreenmenu">
        <div id="nav">
          <ul class="header__nav-list">
            <li class="header__nav-item"><a class="header__nav-link" href="#home">Home</a></li>
            <li class="header__nav-item"><a class="header__nav-link" href="#about">About</a></li>
            <li class="header__nav-item"><a class="header__nav-link" href="#skill">Skill</a></li>
            <li class="header__nav-item"><a class="header__nav-link" href="#works">Works</a></li>
            <li class="header__nav-item"><a class="header__nav-link" href="#contact">Contact</a></li>
          </ul>
        </div>
        <button class="menu"><span></span><span></span><span></span></button>
      </div>
    </nav>
    <div class="header__main-visual">
      <div class="header__text-box">
        <h1 class="header__title"> YUSUKE SAKURABA</h1>
        <h2 class="header__sub-title">PORTFOLIO</h2>
        <p class="header__text">スキルを身に着け 自由に生きる</p>
      </div>
    </div>
  </header>
  <?php endif;
