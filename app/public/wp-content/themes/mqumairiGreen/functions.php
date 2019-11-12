<?php

function mqumairiFiles() {
  wp_enqueue_style('mqumairiStylesheet', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'mqumairiFiles');

 ?>
