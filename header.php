<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-with, initial-scale=1.0">
		<meta name="author" content="Lau de Hoop">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark bg-primary" role="navigation">
			<div class="container">
		    	<!-- Brand and toggle get grouped for better mobile display -->
		    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
		        	<span class="navbar-toggler-icon"></span>
		    	</button>
		    	<a class="navbar-brand" href="#">Navigeren</a>
		        <?php
		        	wp_nav_menu( 
		        		array(
			            	'theme_location'    => 'hoofd-menu',
			            	'depth'             => 2,
			            	'container'         => 'div',
			            	'container_class'   => 'collapse navbar-collapse',
			            	'container_id'      => 'bs-example-navbar-collapse-1',
			            	'menu_class'        => 'nav navbar-nav',
			            	'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			            	'walker'            => new WP_Bootstrap_Navwalker(),
			            )	
		        	);
		        ?>
		        <a href="<?php echo home_url(); ?>">
		        	<img src="<?php echo get_template_directory_uri() . '/img/djlauwy.png' ?>" alt="DJ Lauwy Logo" height="50px">
		        </a>
		    </div>
		</nav>
		<div class="jumbotron" style="background-image: url(<?php echo get_template_directory_uri() . '/img/banner.jpg'; ?>);">
			<div class="container">
				<h1 class="display-4"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				<p class="lead"><?php bloginfo('description'); ?></p>
			</div>
		</div>