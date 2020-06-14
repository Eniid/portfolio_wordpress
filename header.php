<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Céline Everaert, Web designer et Web devlopper">
    <meta name="keywords" content="Céline Everaert, portfolio, web designer, web devlopper">
    <meta name="author" content="Everaert Céline">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="http://portfolio.celine-everaert.com/">
    <meta name="twitter:title" content="Céline Everaert : Portfolio">
    <meta name="twitter:description" content="Portfolio de Céline Everaert, Web designer et Web devlopper">
    <meta name="twitter:creator" content="@enidHBC">

    <meta property="og:title" content="Céline Everaert : Portfolio">
    <meta property="og:url" content="http://portfolio.celine-everaert.com/">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:site_name" content="Céline Everaert : Portfolio">
    <meta property="og:description" content="Portfolio de Céline Everaert, Web designer et Web devlopper">
    <meta property="og:type" content="website">

    <?php 
    wp_head();
    ?>

  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/img/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/img/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/img/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/dist/app.css" media="all" />
    <title><?= pf_get_title('|', true) ?></title>

</head>
<body>
<h1 role="heading" aria-level="1"><?= pf_get_title(',', false) ?></h1>

<input class="burger" type="checkbox">
<label class="switch">
  <input type="checkbox" id="switch_cb">
  <span class="slider round"></span>
  <img src="<?php bloginfo('template_url'); ?>/img/star.svg" alt="" class="star star_one">
  <img src="<?php bloginfo('template_url'); ?>/img/star.svg" alt="" class="star star_two">
  <img src="<?php bloginfo('template_url'); ?>/img/star.svg" alt="" class="star star_tree">
  <img src="<?php bloginfo('template_url'); ?>/img/star.svg" alt="" class="star star_four">

  <img src="<?php bloginfo('template_url'); ?>/img/cloud.svg" alt="" class="cloud cloud_one">
  <img src="<?php bloginfo('template_url'); ?>/img/cloud.svg" alt="" class="cloud cloud_two">
</label>

<a href="http://portfolio.celine-everaert.com/"><img src="<?php bloginfo('template_url'); ?>/img/pp.png" alt="" class="nav_profile-pic"></a>

<?php wp_nav_menu(); ?>



<div class="social_nav"> 
    <a href="https://twitter.com/EnidHBC"><img src="<?php bloginfo('template_url'); ?>/img/twitter.svg" alt="" class="social"></a>
    <a href="https://github.com/Eniid"><img src="<?php bloginfo('template_url'); ?>/img/g.svg" alt="" class="social"></a>
    <a href="https://www.linkedin.com/in/c%C3%A9line-everaert-22a668147/"><img src="<?php bloginfo('template_url'); ?>/img/in.svg" alt="" class="social"></a>
</div>

