<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Comatose
 * @subpackage v1
 * @since Comatose v1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<nav id="nav-single">
						<span class="nav-previous"><?php previous_post_link( '%link', __( 'Previous', 'comatose' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next', 'comatose' ) ); ?></span>
					</nav><!-- #nav-single -->

					<?php get_template_part( 'content', 'single' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>