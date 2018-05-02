<?php get_header(); ?>
<!-- /banner -->	
    <?php get_template_part('slider');?>
	<!-- about -->
		<?php echo get_template_part('aboutus'); ?>

<!-- //about -->
<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						<h4 class="modal-title">Fashion</h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/a2.jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- what -->
	
	<?php get_template_part('ourService'); ?>
<!-- //what -->	


<!-- /fashion events -->
<div class="w3-Events" id="events">
	<div class="w3-head-all">
		<h3 class="w3ls_head">Our Events</h3>
		</div>
		<div class="w3-Events-grids">
			<?php get_template_part('event'); ?>
			<div class="clearfix"></div>
		</div>
</div>

	

<!-- //fashion events -->
<!--Gallery -->
    <?php get_template_part('fashion'); ?>

<!-- //Gallery -->

<!-- team -->
    <?php get_template_part('ourTeam'); ?>
<!-- //team -->
	
	<!-- contact form -->
		<?php get_template_part('contact-form'); ?>
	<!-- contact form -->


<!-- subscribe -->
	<div class="subscribe jarallax">
		<div class="container">
			<div class="agileits-title title2">
				<h3 class="agileits-title sub">Subscribe</h3>
			</div>   
			<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit sed quia non numquam eius.</p>
			<form action="#" method="post">
				<input type="email" name="email" placeholder="Email Address" class="user" required="">
				<input type="submit" value="Subscribe">
			</form>
			<div class="footer-agileinfo-social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>

		</div>
	</div>
	<!-- //subscribe -->
<?php get_footer(); ?>