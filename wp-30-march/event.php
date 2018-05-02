<?php 
    $events = new WP_Query(array(
        'post_type' => 'event',
        'posts_per_page' => '4'
    ));

    $Event_Serial = 1; 
    ?> 
<?php while( $events ->have_posts() ) : $events->the_post() ; ?>


<div class="col-md-3 w3-Events-bg1  w3-Events-heading">
    <div class="events">
        <?php the_post_thumbnail(); ?>
        <div class="insider">
            <h3><?php echo  $Event_Serial;  ?><span><?php echo get_post_meta(get_the_ID(), 'ML_Events_Country_ID', true);?></span></h3>
            <p><?php the_title(); ?></p>
            <a href="#" data-toggle="modal" data-target="#<?php echo get_the_ID();?>"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
        </div>
    </div>
</div>

<!-- modal -->
<div class="modal about-modal fade" id="<?php echo get_the_ID();?>" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						<h4 class="modal-title"><?php the_title();?></h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
                        <?php the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                    </div>
				</div>
			</div>
		</div>
    </div>
    <?php $Event_Serial++;  ?>
<?php endwhile; ?>

