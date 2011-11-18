<div class="searchform">
	<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
		<label for="s" class="assistive-text">Search</label>
		<input type="text" class="field" name="s" class="s" value="<?php the_search_query(); ?>" placeholder="c#, linq, html, code, photography etc.." />
		<input type="submit" class="submit add-on" name="submit" class="searchsubmit" value="Search" />
	</form>
</div>