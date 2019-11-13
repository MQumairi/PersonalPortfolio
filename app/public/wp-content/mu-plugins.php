<?php

function project_post_types() {

  register_post_type('programming_project', array(
    'public' => true,
    'labels' => array('name' => 'Programming Projects'),
    'menu_icon' => 'dashicons-hammer',
    'add_new_item' => 'Add New Programming Project',
    'edit_item' => 'Edit Programming Project',
    'all_items' => 'All Programming Project',
    'singular_name' => 'Programming Project'
    'supports' => array('title', 'editor', 'excerpt')
  ));

	register_post_type('web_project', array(
		'public' => true,
    'labels' => array('name' => 'Web Projects'),
    'menu_icon' => 'dashicons-admin-site',
    'add_new_item' => 'Add New Web Project',
    'edit_item' => 'Edit Web Project',
    'all_items' => 'All Web Project',
    'singular_name' => 'Web Project'
    'supports' => array('title', 'editor', 'excerpt')
	));


}

add_action('init', 'project_post_types');


?>
