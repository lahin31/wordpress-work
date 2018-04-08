<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php wp_title(); ?></title>
<link href='http://fonts.googleapis.com/css?family=Nova+Mono' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
<link href="<?php echo get_template_directory_uri(); ?>/assets/style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="<?php bloginfo('home');?>">Black/White </a></h1>
				<p>Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a></p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
        <?php 
            wp_nav_menu(
                array (
                    'theme_location' => 'my-top-menu'
                )
            )
        ?>
		<!-- <ul>
			<li class="current_page_item"><a href="#">Home</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Photos</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Links</a></li>
			<li><a href="#">Contact</a></li>
		</ul> -->
	</div>
	<!-- end #menu -->
