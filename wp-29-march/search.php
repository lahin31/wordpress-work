<?php get_header(); ?> 
<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
                  
                
                <?php if  (have_posts() ) : ?>
                
                <?php while( have_posts() )  : the_post() ; ?>
					<div class="post">
						<h2 class="title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
						<p class="meta">Posted by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a> on <?php the_time('d M, Y'); ?>
							&nbsp;&bull;&nbsp; <a href="#" class="#">Comments (<?php comments_number('0', '1', '%'); ?>)</a> &nbsp;&bull;&nbsp; <a href="<?php the_permalink(); ?>"  class="permalink">Full article</a></p>
						<div class="entry">
                            <p><a href="<?php the_permalink(); ?> "> <?php the_post_thumbnail(); ?> </a></p>
                            <p><?php the_content();?></p>
						</div>
                    </div>
                    <?php endwhile; ?>

                <?php else :  ?>

                    <h1> No Result Found ! </h1>

                <?php endif; ?>

                    <div style="clear: both;">&nbsp;</div>
                 
                     
				</div>
				<!-- end #content -->
				<?php get_sidebar(); ?>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
                </div>
            </div> 
        </div> 
</div> 
<?php get_footer(); ?>