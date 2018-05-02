<?php 

	function countryFun() {
		add_meta_box('ML_Events_Country_ID', 'Countries for events', 'ML_callBackFun', 'event');
	}

	add_action('add_meta_boxes', 'countryFun');
	
	


	function ML_callBackFun($post)
	{ 

		$countryName = get_post_meta($post->ID, 'ML_Events_Country_ID', true);

		?>
			<label for="countryName"> Country Name: </label>
 			<input class="wide fat" type="text" name="countryName" id="countryName" placeholder="County Name" value="<?php echo $countryName; ?>">


	<?php }


  function ML_save_country($post_id) {
  	if(array_key_exists(countryName, $_POST)) {
  		update_post_meta(
  			$post_id,
  			'ML_Events_Country_ID',
  			$_POST['countryName']
  		);
  	}
  }

  add_action('save_post','ML_save_country');






  





?>