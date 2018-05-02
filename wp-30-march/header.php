<!DOCTYPE html>
<html lang="zxx" <?php language_attributes(); ?> >
<head>
<title><?php wp_title(); ?></title>
<!-- custom-theme -->
<meta charset="<?php bloginfo('chartset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Fashion Models Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<?php wp_head(); ?>
</head>	
<body <?php body_class(); ?> >
<!-- banner -->
	<div class="banner" id="home">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a class="navbar-brand" href="<?php bloginfo('home'); ?>"> <?php bloginfo('name'); ?></span></a></h1>

					<!-- <h1><a href="<?php // bloginfo('home'); ?>"> <?php //the_custom_logo(); ?> </a></h1> -->
 			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				

				<?php 
				 wp_nav_menu( array( 
					'menu' => 'Top menu', 
					'menu_class' => 'nav navbar-nav', 
					'menu_id' => 'ML_top_Menu',
					'link_before' => '<span>',
					'link_after' => '</span>',
				    'theme_location' => 'my-top-menu'
    			  ) );
				?>
			
			
			</div>
			<div class="w3_agile_search">
				<form method="get">
					<input type="search" name="s" placeholder="Search Keywords..." required="" />
					<input type="submit" value="Search">
				</form>

			</div>
		</nav>
		</div>