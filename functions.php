<?php

	//laad stijlbladen en scripts
	function laadStijlblad(){
		wp_enqueue_style('stijl', get_stylesheet_uri());
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap.css');
		wp_enqueue_style('googlefont', '//fonts.googleapis.com/css2?family=Jura:wght@700&display=swap');
		wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/bootstrap.min.js', array('jquery'), 1.1, true);
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
	add_action( 'init', 'register_navwalker' );

	// widgets registreren
	function registreer_widgets(){
		register_sidebar(
			array(
				'id' => 'aside',
				'name' => __('Widget aside'),
				'description' => __('widget voor het aside-element'),
				'before_widget' => '<div class="widget-aside">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widget-titel">',
				'after_title' => '</h3>',
			)
		);

		register_sidebar(
			array(
				'id' => 'onder',
				'name' => __('Widget footer'),
				'description' => __('widget voor de footer'),
				'before_widget' => '<div class="widget-footer">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widget-footer-titel">',
				'after_title' => '</h3>',
			)
		);

	}

	add_action( 'init', 'registreer_widgets' );

?>