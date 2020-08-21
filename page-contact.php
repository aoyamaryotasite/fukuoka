<?php
/*
Template Name: new
*/
?>
<?php get_header(); ?>
<header>
  <nav class="navbar navbar-expand-xl navbar-light bg-light">
      <a class="navbar-brand" href="https://asamini.com/"><img src="<?php echo get_template_directory_uri(); ?>/logos.png" class="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="https://asamini.com/">Home </span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://asamini.com/youtubeacting/">YOUTUBE運用代行</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://asamini.com/operation/">動画編集支援</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="https://asamini.com/sns/">SNS運用支援</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="https://asamini.com/about/">私たちについて</a>
          </li>
          <li class="nav-item">
          <a class="nav-link " href="https://asamini.com/contact/">お問い合わせ</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div id="overwrap">
<div class="top-wrapper">
  <div class="container">
    <h1>お問い合わせ</h1>
  </div>
</div>
<div class="boxA">
<div class="box2">
<div class="contact">
<?php echo apply_filters('the_content', '[contact-form-7 id="579" title="お問い合わせ"]'); ?>
</div>
</div>
</div>
<?php get_footer(); ?>