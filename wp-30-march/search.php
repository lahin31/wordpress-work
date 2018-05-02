<?php get_header(); ?>

<div class="container">
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post() ; ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_post_thumbnail(); ?>
		<?php endwhile; ?>
	<?php else: ?>
		<h3>No results found</h3>
	<?php endif; ?>
</div>

<?php get_footer(); ?>