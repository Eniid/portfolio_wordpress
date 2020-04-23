<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    wp_head();
    ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/dist/app.css" media="all" />
    <title>Document</title>
</head>
<body>
<h1>Portfolio de Céline! </h1>


<input class="burger" type="checkbox">
<div class="side_bar"> 
    <nav class="main_menu">
        <ul>
        <li class="main_menu_item"><a href="#" class="nav_curent_page">HOME</a></li>
        <li class="main_menu_item"><a href="#">MY PROJECTS</a></li>
        <ul>
        <?php 
        if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                <li class="nav_project"><a href="<?php the_permalink() ?>" class="post_link"><?php the_title(); ?></a></li>
        <?php endwhile; endif;?>
        </ul>
        <li class="main_menu_item"><a href="#">ABOUT ME</a></li>
        </ul>
    </nav>
</div>
