<div class="searchform">
	<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
		<label for="s" class="assistive-text">Search</label>
		<input type="text" results="5" class="field s" name="s" value="<?php the_search_query(); ?>" placeholder="Search ..." x-webkit-speech />
		<input type="submit" class="submit add-on" name="submit" class="searchsubmit" value="Search" />
	</form>
</div>