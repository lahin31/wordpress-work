<div class="gallery" id="gallery">
	<div class="container">
	<div class="w3-head-all">
		<h3 class="w3ls_head">Our Gallery</h3>
		</div>
		<div class="agileinfo_work_grids">
            
        <?php 
            $fashions = new WP_Query(array(
               'post_type' => 'fashion',
               'posts_per_page' => '9' 
            ));
         
            ?>
            <?php if($fashions->have_posts() ) :  ?>
                <?php while($fashions->have_posts()) : $fashions->the_post(); ?>
        
                <div class="col-md-4 w3_agile_work_grid gallery1">
                    <div class="wthree_work_grid1">
                    <?php $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
						<a href="<?php echo  $feat_image_url; ?>" class="b-link-stripe b-animate-go  swipebox" title="Fashion">
							<div class="agile_work_grid w3_agileits_sub_work">
                              
                            <?php the_post_thumbnail('fashionImage', array('class' => 'img-responsive')); ?>
                            
                            <div class="agileits_w3layouts_work">
								Fashion
							</div>
							</div>
						</a>
                    </div>
                </div>

        <!-- <div class="modal about-modal fade" id="<?php// echo //$feat_image_url; ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header"> 
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                            <h4 class="modal-title">Fashion Events</h4>
                    </div> 
                    <div class="modal-body">
                        <div class="agileits-w3layouts-info">
                            <p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
            
        <?php endwhile; ?>
        <?php endif; ?> 
                

                


				<div class="clearfix"> </div>
			</div>
			
		</div>
</div>	
