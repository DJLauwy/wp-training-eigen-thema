<?php

	//laad stijlbladen
	function laadStijlblad(){
		wp_enqueue_style('stijl', get_stylesheet_uri());
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap.css');
	}

	add_action('init', 'laadStijlblad');

	//menu registreren
	function registreerMenu(){
		$argumenten = array(
			'hoofd-menu' => __('Hoofdmenu')
		);
		register_nav_menus();
	}

	add_action('init', 'registreerMenu');

	/**
	 * Register Custom Navigation Walker
	 */
	function register_navwalker(){
		require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
	}
	add_action( 'after_setup_theme', 'register_navwalker' );

?>