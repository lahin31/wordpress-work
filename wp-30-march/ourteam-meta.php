<?php

function ML_teamSocialIcon() {
	add_meta_box('ML_team_social_icon_facebook', 'Facebook', 'ML_facebook_callback', 'ourteam');
	add_meta_box('ML_team_social_icon_twitter', 'Twitter', 'ML_twitter_callback', 'ourteam');
	add_meta_box('ML_team_title_meta', 'Team Title', 'ML_title_callback', 'ourteam');
}

add_action('add_meta_boxes', 'ML_teamSocialIcon');

function ML_facebook_callback($post) {

	$fbUrl = get_post_meta($post->ID, 'ML_team_social_icon_facebook', true);

	?>
	<label for="fbUrl">Facebook URL</label>
	<input type="text" placeholder="Facebook url" name="fbUrl" id="fbUrl" class="regular-text" value="<?php echo $fbUrl; ?>">
	<?php 

}

function ML_twitter_callback($post) {
		$twtUrl = get_post_meta($post->ID, 'ML_team_social_icon_twitter', true);
	?>
	<label for="twtUrl">Twitter Url</label>
	<input type="text" placeholder="Twitter URL" name="twtUrl" id="twtUrl" class="regular-text" value="<?php echo $twtUrl;?>">
	<?php
}

function ML_title_callback($post) {
		$title = get_post_meta($post->ID, 'ML_team_title_meta', true);
	?>
	<label for="title">Title</label>
	<input type="text" placeholder="Our Team Title" name="title" id="title" class="regular-text" value="<?php echo $title;?>">
	<?php
}

function save_fb_url($post_id) {
	if(array_key_exists(fbUrl, $_POST)) {
		update_post_meta (
			$post_id,
			'ML_team_social_icon_facebook',
			$_POST['fbUrl']
			
		);
	}
}

add_action('save_post', 'save_fb_url');

function save_twt_url($post_id) {

	if(array_key_exists(twtUrl, $_POST)) {
			update_post_meta (
				$post_id,
				'ML_team_social_icon_twitter',
				$_POST['twtUrl']
			);
		}
}

add_action('save_post', 'save_twt_url');

function save_title($post_id) {
	if(array_key_exists(title, $_POST)) {
		update_post_meta (
			$post_id,
			'ML_team_title_meta',
			$_POST['title']
		);
	}
}

add_action('save_post', 'save_title');