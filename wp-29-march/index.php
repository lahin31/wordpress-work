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
                            <p><?php read_more(20);?>.......</p>
                           <button> <a href="<?php the_permalink(); ?>" >Details</a></button>
						</div>
                    </div>
<?php endwhile; ?>
					<!-- Pagination -->
					
					<?php 

					    the_posts_pagination( array(
					    	'screen_reader_text' => ' ',
						    'mid_size' => 3,
						    'prev_text' => __( 'Previous', 'Lahin_WP' ),
						    'next_text' => __( 'Next', 'Lahin_WP' ),

						) ); 
					?>

					
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<?php get_sidebar(); ?>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<?php get_footer(); ?>
