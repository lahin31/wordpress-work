<!-- footer -->
<div class="footer w3-w3layouts">
		<div class="container">
		<?php  dynamic_sidebar('home_footer_widget'); ?>
			<?php dynamic_sidebar('home_footer_bottom'); ?> 
				<div class="clearfix"> </div>
			</div>  
		</div>
	</div>


	<div class="copy-right"> 
		<?php dynamic_sidebar('home_footer_copyright'); ?>
	</div> 
	<!-- //footer -->

	<?php wp_footer(); ?>
</body>
</html>