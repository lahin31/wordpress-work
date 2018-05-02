<?php 

	function countryVotesFun() {
		add_meta_box('ML_Events_Country_Votes_ID', 'Countries Votes for events', 'ML_callBackFunForVotes', 'event');
	}

	add_action('add_meta_boxes', 'countryVotesFun');
	
	


	function ML_callBackFunForVotes($post)
	{ 

		$countryVotes = get_post_meta($post->ID, 'ML_Events_Country_Votes_ID', true);

		?>
			<label for="countryVotes"> Votes: </label>
 			<input class="wide fat" type="text" name="countryVotes" id="countryVotes" placeholder="County Name" value="<?php echo $countryVotes; ?>">


	<?php }


  function ML_save_country_votes($post_id) {
  	if(array_key_exists(countryVotes, $_POST)) {
  		update_post_meta(
  			$post_id,
  			'ML_Events_Country_Votes_ID',
  			$_POST['countryVotes']
  		);
  	}
  }

  add_action('save_post','ML_save_country_votes');






  





?>