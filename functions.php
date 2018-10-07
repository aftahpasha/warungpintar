<?php
require ('inc/wp_bootstrap_navwalker.php');
require ('inc/wp_bootstrap_pagination.php');
require ('inc/wp_btpm_img_attac.php');


add_theme_support( 'custom-logo' );

// Register for navigation menu
register_nav_menus(
	array(
		'primary'	=>__('Primary Menu', 'Home'),
		)
	);


	function themename_custom_logo_setup() {
	    $defaults = array(
	        'height'      => 100,
	        'width'       => 300,
	        'flex-height' => true,
	        'flex-width'  => true,
					'class' => 'navbar-brand',
	        'header-text' => array( 'site-title', 'site-description' ),
	    );
	    add_theme_support( 'custom-logo', $defaults );
	}
	add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
