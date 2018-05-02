<div>
	<?php 
		$aboutUS = new WP_Query(array(
			'post_type' => 'aboutus',
			'posts_per_page' => '7'
		));
		$serial = 1;
		?>

<div class="w3layouts-about" id="about">
	<div class="container">
		<div class="w3-about-grids">
			

			<div class="col-md-6 w3-about-left">
			    <section class="slider">
				    

					<?php while($aboutUS->have_posts()) : $aboutUS->the_post(); ?>
					
						<?php 
							$images = rwmb_meta('prefix-abt_image', array('size' => 'thumbnail')); 
						?>

						<?php foreach( $images as $image ) :  ?>

					    	<img src="<?php echo $image['url'];?>" alt="" />

						<?php endforeach; ?>

					<?php endwhile; ?>
			    </section>
			</div>


			<!-- About US -->
			<div class="col-md-6 w3-about-right">
				<h1><?php echo get_the_title();?></h1>
				<h5><span>SubTitle: </span><?php echo rwmb_meta('prefix-subtitle'); ?></h5>
				<p><?php the_content(); ?></p>
				<div class="w3l-button">
					<a href="#" data-toggle="modal" data-target="#myModal">More</a>
				</div>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
</div>
</div>