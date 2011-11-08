<?php
/**
 * The loop that displays a single post.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<section id="page-content">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<header>
					<h1><?php the_title(); ?></h1>
					<div class="posted-on-meta">
					<?php starkers_posted_on(); ?>
					</div>
				</header>

				<?php the_content(); ?>
						
				<?php wp_link_pages( array( 'before' => '<nav>' . __( 'Pages:', 'starkers' ), 'after' => '</nav>' ) ); ?>
				
				<footer>
					<div class="posted-in-meta">
					<?php starkers_posted_in(); ?>
					<?php edit_post_link( __( 'Edit', 'starkers' ), '', '' ); ?>
					</div>
				</footer>
					
			</article>

			<?php comments_template( '', true ); ?>
			
		</section>

<?php endwhile; // end of the loop. ?>