<?php get_header(); ?>



<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?> 
        <h2 class="title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
        <p><?php the_content();?></p>
    <?php endwhile;?>
<?php endif; ?> 

<!-- <?php //get_sidebar(); ?> -->

<?php get_template_part('name'); ?>

<?php get_footer(); ?>

