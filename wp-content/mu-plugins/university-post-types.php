<?php

function university_post_types() {
	register_post_type('event', array(
		'show_in_rest' => true,
		'supports' => array('title', 'editor', 'excerpt'),
		'rewrite' => array('slug' => 'events'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Events',
			'add_new_item' => 'Add new event',
			'edit_item' => 'Edit event',
			'all_items' => 'All events',
			'singular_name' => 'Event',
		),
		'menu_icon' => 'dashicons-calendar',
	));
}

add_action('init', 'university_post_types');
