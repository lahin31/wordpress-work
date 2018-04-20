<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title(); ?></title>
<!--
Classic Template
http://www.templatemo.com/tm-488-classic
-->
                                         <!-- Bootstrap style -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
          <?php wp_head(); ?>
</head>

    <body <?php body_class(); ?> >
       
        <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="<?php bloginfo('home');?>" class="navbar-brand tm-site-name">Classic</a>
                    
                    <!-- navbar -->

                    <nav class="navbar tm-main-nav">


                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        <?php 
                        wp_nav_menu (
                            array (
                                'theme_location' => 'lahin-top-menu',
                                'menu_class' => 'nav navbar-nav',
                            )
                        );
                    ?>     
                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                                       
                        </div>
                        
                    </nav>  
                 














                    <nav class="navbar tm-main-nav">


                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        
                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item active">
                                    <a href="<?php bloginfo('home'); ?>" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog.html" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">Contact</a>
                                </li>
                            </ul>                        
                        </div>
                        
                    </nav>  

                </div>                                  
            </div>            
        </div>
