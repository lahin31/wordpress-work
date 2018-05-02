<div class="what-w3ls" id="services">
		<div class="container">
			<h3 class="w3ls_head"><span>Our </span>Services</h3>
			<p class="w3agile">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
				<div class="what-grids">
                <?php 
	                $ourServices = new WP_Query(array(
	                    'post_type' => 'ourservice',
	                    'posts_per_page' => '4'
	                ));
	                $serial = 1;
                 ?>

                    <?php while( $ourServices->have_posts()) : $ourServices->the_post(); ?> 
                        <?php if( $serial == 1 ) : ?>
                            <div class="col-md-6 what-grid">
                                <div class="what-agile-info">
                                        <h4><?php the_title(); ?></h4>
                                        <?php the_content(); ?>
                                </div>
                                <?php the_post_thumbnail(' ', array('class' => 'img-responsive')); ?>
                            </div>
                        <?php else : ?>


	
					<div class="col-md-6 what-grid1">
						<div class="what-top">
							<div class="what-left">

								<?php $icons = get_post_meta(get_the_ID(), 'ML_Icon_Id', true) ?>
								<i class="<?php echo $icons; ?>" aria-hidden="true"></i>
							</div>
							<div class="what-right">
								<h4><?php the_title(); ?></h4>
								<p><?php the_content(); ?></p>
							</div>
								<div class="clearfix"></div>
						</div>
					</div>




                         <?php endif; ?>
                        <?php $serial++; ?>
		            	
		            <?php endwhile;?> 
					<div class="clearfix"></div>
                </div>
                

				<div class="about-info-grids">
				<div class="col-md-4 col-sm-4 about-info about-info1">
					<i class="fa fa-info-circle agile-sicon" aria-hidden="true"></i>
					<h4>how we<span class="head-w3l"> work</span></h4>
					<div class="h4-underline"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
					</div>
				<div class="col-md-4 col-sm-4 about-info about-info2">
					<i class="fa fa-question-circle agile-sicon" aria-hidden="true"></i>
					<h4>what we <span class="head-w3l"> do</span></h4>
					<div class="h4-underline"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
					</div>
				<div class="col-md-4 col-sm-4 about-info about-info3">
					<i class="fa fa-registered agile-sicon" aria-hidden="true"></i>
					<h4>why choose<span class="head-w3l"> us</span></h4>
					<div class="h4-underline"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
					</div>
					<div class="clearfix"></div>
		</div>
	</div>
	</div>