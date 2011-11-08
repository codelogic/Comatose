<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

<section id="page-content">

<?php if ( have_posts() ) : ?>
		<h1 class="sectiontitle"><?php printf( __( 'Search Results for: %s', 'starkers' ), '' . get_search_query() . '' ); ?></h1>
			<?php
				get_template_part( 'loop', 'search' );
			?>
<?php else : ?>
		<h1 class="sectiontitle"><?php _e( 'Nothing Found', 'starkers' ); ?></h1>
			<p id="noresultsmessage"><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'starkers' ); ?></p>
<?php endif; ?>

</section>

<?php get_sidebar(); ?>



<?php get_footer(); ?>