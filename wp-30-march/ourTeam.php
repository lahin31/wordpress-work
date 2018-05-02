<div class="w3-team banner-bottom " id="team">
<div class="container">
    <div class="w3-head-all w3-team-head">
           <h3 class="w3ls_head">meet our team</h3>
       </div>
    <div class="w3ls_banner_bottom_grids">
    <?php 
        $ourTeams = new WP_Query(array(
            'post_type' => 'ourteam',
            'posts_per_page' => '4'
        )); 
        ?>

    <?php while( $ourTeams->have_posts()) : $ourTeams->the_post(); ?> 

        <div class="col-md-3 w3_agile_team_grid">
            <div class="w3layouts_team_grid">
                <?php the_post_thumbnail('ourTeamImg', array('class' => 'img-responsive')); ?>
                <div class="w3layouts_team_grid_pos">
                    <div class="wthree_text">
                        <ul class="agileits_social_list">
                            <li>
                                <a href="<?php echo get_post_meta( get_the_ID(), 'ML_team_social_icon_facebook', true); ?>" class="w3_agile_facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo get_post_meta( get_the_ID(), 'ML_team_social_icon_twitter', true); ?>" class="agile_twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <p><?php echo get_post_meta(get_the_ID(), 'ML_team_title_meta', true); ?></p>
        </div>

        <?php endwhile; ?>

        <div class="clearfix"> </div>
    </div>
</div>
</div>