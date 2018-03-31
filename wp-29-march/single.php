<?php get_header(); ?> 
<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
                    <?php while(have_posts()):the_post(); ?>
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
                    <div style="clear: both;">&nbsp;</div>
                    <?php comments_template();?>
                    <?php if(!comments_open() && get_comments_number()) : ?> 
                    <p><?php _e('Comments are closed'); ?></p>
<?php endif; ?>
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