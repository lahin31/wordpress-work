<?php
/**
 * Adds Twitter follow widget.
 */
class TwitterFollowWidget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'twitterfollow_widget', // Base ID
			esc_html__( 'Twitter Follow', 'twt_domain' ), // Name
			array( 'description' => esc_html__( 'Wigets to display twitter follow button', 'twt_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */


	public function widget( $args, $instance ) {
		echo $args['before_widget']; // Whatever you want to display before widget <div>

		// Widget Content Output
		echo '<a href="'.$instance['link'].'" class="twitter-follow-button" data-size="large">Follow <?php echo $instance["title"]?></a>';

		echo $args['after_widget']; // whatever you want to display after the widget </div>
	}



	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$link = ! empty( $instance['link'] ) ? $instance['link'] : esc_html__( 'Twitter Link', 'twt_domain' );
		?>
		<!-- Link -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>">
				<?php esc_attr_e( 'Link:', 'twt_domain' ); ?>
			</label> 
			<input class="widefat" 
				   id="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>" 
				   name="<?php echo esc_attr( $this->get_field_name( 'link' ) ); ?>" 
				   type="text" 
				   value="<?php echo esc_attr( $link ); ?>">
		</p>
		<?php 
	}


	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		
		$instance['link'] = ( ! empty( $new_instance['link'] ) ) ? sanitize_text_field( $new_instance['link'] ) : '';

		return $instance;
	}

}
