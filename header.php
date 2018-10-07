<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php if   ( is_home() )     { bloginfo('name'); echo ' - '; bloginfo('description'); }
				elseif ( is_category() ) { single_cat_title(); echo ' - '; bloginfo('name'); }
				elseif ( is_single() )   { single_post_title(); echo ' - '; bloginfo('name'); }
				elseif ( is_page() )     { single_post_title(); echo ' - '; bloginfo('name'); }
				else {
          wp_title('', true);
         } ?>
		</title>

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Load Css File's -->
		<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap-grid.min.css" rel="stylesheet" />
		<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap-reboot.min.css" rel="stylesheet" />
		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">





		<?php wp_head(); ?>
	</head>
	<body>

		<nav class="navbar navbar-expand-lg navbar-yellow bg-yellow">
			<div class="container">


		  <a class="navbar-brand" href="#"><?php if ( function_exists( 'get_custom_logo' ) ) { echo get_custom_logo();} ?>
 </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <i class="fas fa-bars"></i>
		  </button>
		  <!-- <div class="collapse navbar-collapse" id=""> -->
        <div id="navbarNavAltMarkup" class="collapse navbar-collapse">
          <?php wp_nav_menu(
            array(
              'menu'				=>	'primary',
              'theme_location'	=>	'primary',
              'depth'				=>	2,
              'container'			=>	'',
              'container_class'	=>	'',
              'container_id'		=>	'',
              'menu_class'		=>	'navbar-nav pull-right',
              'fallback_cb'		=>	'WP_Bootstrap_Navwalker::fallback',
              'walker'			=>	new WP_Bootstrap_Navwalker()
            )
          ); ?>
		    <!-- <div class="navbar-nav pull-right">
		      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" href="#">Features</a>
		      <a class="nav-item nav-link" href="#">Pricing</a>
		      <a class="nav-item nav-link disabled" href="#">Disabled</a>
		    </div> -->
		  </div>

			</div>
		</nav>
