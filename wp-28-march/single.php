<?php get_header(); ?>

<?php while( have_posts()) : the_post(); ?>
<section>
<div class="container">
    <h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
    <div>
        <a href="<?php the_permalink(); ?>">
            <?php if(has_post_thumbnail()): ?> 
                <?php the_post_thumbnail(); ?>
        </a>
        <?php endif; ?>
        <p><?php the_content(); ?></p>
        <?php the_category(); ?>
        <?php edit_post_link(); ?>
        <?php comments_template(); ?>
    </div>
</div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>