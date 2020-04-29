<?php


// Pour compléter les liens
function pf_get_theme_asset($asset) {
  return get_stylesheet_directory_uri().'/'.ltrim($asset, '/');
}


// Le titre
function pf_get_title($separator = "|", $left = true) {
  $separator = ' '.$separator.' ';

  $title = trim(wp_title('', false, 'right'));

  if(!$title) {
    return get_bloginfo('name');
  }

  if($left) {
    return $title.$separator.get_bloginfo('name');
  } else {
    return get_bloginfo('name').$separator.$title; 
  }
}


// 

register_nav_menu('main', 'Le menu de navigation principale');
register_nav_menu('social', 'Le menu de navigation principale');
// pour l'afficher <?php_naw_menu(['theme_location'  => 'social'])

//* Lien du CSS et du JS <3
add_action('wp_enqueue_scripts', 'pf_scripts');
function pf_scripts()
{ 
wp_enqueue_style('dist.app', get_stylesheet_uri());
// wp_enqueue_script('script', get_template_directory_uri() . '/public/js/app.js');
}


//* Fonction qui permet d'ajouter un imaga à la une dans un article
if (function_exists( 'add_theme_support' )) {
    add_theme_support( 'post-thumbnails' );
  }