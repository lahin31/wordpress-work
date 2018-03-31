<div>
    <ul>
    <?php 
        $languages = new WP_Query(array(
            'post_type'  => 'language',
            'posts_per_page' => '4'
        ));
    ?>
    <?php while($languages->have_posts()): $languages->the_post(); ?> 
        <li>
        <?php the_title(); ?>
        </li>
    <?php endwhile; ?>
    </ul>
</div>