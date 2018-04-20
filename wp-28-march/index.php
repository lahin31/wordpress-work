<?php get_header(); ?>

<div class="tm-home-img-container">
    <img src="<?php echo get_template_directory_uri();?>/assets/img/tm-home-img.jpg" alt="Image" class="hidden-lg-up img-fluid">
</div>

<section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                        <h2 class="tm-gold-text tm-title">Introduction</h2>
                        <p class="tm-subtitle">Suspendisse ut magna vel velit cursus tempor ut nec nunc. Mauris vehicula, augue in tincidunt porta, purus ipsum blandit massa.</p>
                    </div>
                </div>
                <div class="row">
                <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                        <a href="<?php the_permalink(); ?> "> <?php the_post_thumbnail(); ?> </a>
                            <!-- <img src="<?php ?>/assets/img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-20 img-fluid"> -->
                            <h4 class="tm-margin-b-20 tm-gold-text"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h4>
                            <p class="tm-margin-b-20"><?php read_more(20);?>.......</p>
                            <!-- <p class="tm-margin-b-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam modi, odio doloribus non voluptas rem incidunt nobis ad accusamus! Quam quo vel deleniti fuga minima?</p> -->
                            <a href="<?php the_permalink(); ?>" class="tm-btn text-uppercase">Detail</a>    
                        </div>  

                    </div>

<?php endwhile; ?>
<?php endif; ?>

                    

                   
                </div> <!-- row -->

                <div class="row tm-margin-t-big">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="tm-2-col-left">
                            
                            <h3 class="tm-gold-text tm-title">Pellentesque fermentum mauris et posuere</h3>
                            <p class="tm-margin-b-30">Vivamus accumsan blandit ligula. Sed lobortis efficitur sapien</p>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/tm-img-660x330-1.jpg" alt="Image" class="tm-margin-b-40 img-fluid">
                            <p>
                                Donec tempor lobortis tortor, in feugiat massa facilisis sed. Ut dignissim viverra pretium. In eu justo maximus turpis feugiat finibus scelerisque nec eros. Cras nec lectus tempor nibh vestibulum eleifend et ac elit.
                            </p>
                            <p>Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id. Fusce sagittis ultricies felis, non luctus mauris lacinia quis.</p>
                            <p class="m-b-2"> Ut fringilla lacus ac tempor ullamcorper. Mauris iaculis placerat ex et mattis. Mauris id vulputate lectus, id fermentum sapien.
                            </p>
                            <a href="#" class="tm-btn text-uppercase">Read More</a>

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                        <div class="tm-2-col-right">

                            <div class="tm-2-rows-md-swap">
                                <div class="tm-overflow-auto row tm-2-rows-md-down-2">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <h3 class="tm-gold-text tm-title">
                                            Categories
                                        </h3>
                                        <nav>
                                        <?php //wp_list_pages(); ?>
                                            <?php wp_list_categories('title_&orderby=id'); ?>
                                            <?php //wp_list_cats();?>
                                            <?php echo get_num_queries(); ?>


                                        </nav>    
                                    </div> <!-- col -->

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-xs-m-t">
                                        <h3 class="tm-gold-text tm-title">
                                            Useful Links
                                        </h3>
                                        <nav>
                                            <ul class="nav">
                                                <li><a href="#" class="tm-text-link">Suspendisse sed dui nulla</a></li>
                                                <li><a href="#" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                                                <li><a href="#" class="tm-text-link">Duiss nec purus et eros</a></li>
                                                <li><a href="#" class="tm-text-link">Etiam pulvinar et ligula sed</a></li>
                                                <li><a href="#" class="tm-text-link">Proin egestas eu felis et iaculis</a></li>
                                            </ul>
                                        </nav>    
                                    </div> <!-- col -->
                                </div>                        
                                
                                <?php get_sidebar();?>

                        </div>
                        
                    </div>
                </div> <!-- row -->

            </div>
        </section>

<?php get_footer(); ?>