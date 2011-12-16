<?php
/**
 * Main index page.
 *
 * @package Comatose
 * @subpackage v1
 * @since Comatose v1.0
 */
 ?>
<?php get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<?php comatose_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php comatose_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'comatose' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Search for something else. Or google it.', 'comatose' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>