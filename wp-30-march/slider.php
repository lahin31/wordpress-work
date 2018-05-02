<div id="exampleSlider">
    <?php 
        $sliders = new WP_Query(array(
            'post_type' => 'slider',
            'posts_per_page' => '3'
        ));
        ?>
<?php while($sliders -> have_posts()) : $sliders -> the_post(); ?>
<div class="sliderBox" id="sl1" >


             <?php the_post_thumbnail(' ', array('class' => 'sliderClass')); ?>

    <div class="centered"> 
        <h3><a href="<?php the_permalink(); ?>"> <?php echo rwmb_meta( 'prefix-main_title' ); ?> </a></h3>
        <h4><?php echo rwmb_meta( 'prefix-main_title' ); ?> </h4>
         <p><?php echo rwmb_meta('prefix-main_text'); ?></p>
    </div>    
</div>
<?php endwhile; ?>
</div>
<!-- //banner -->