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

			<?php 
			$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
			?>

			<article id="authorbox">
				<header class="authorbox-head">
					<?php echo get_avatar($curauth->user_email, '160' ); ?>
					<h1 class="entry-title"><?php _e( 'About the Author', 'comatose' ); ?></h1>
				</header>
				
				<p class="authorinfo-meta"><?php echo ($curauth->description); ?></p>
						
				<ul class="author-links">
					<li class="first"><a href="/author/<?php echo $curauth->user_nicename?>/" title="<?php echo esc_attr(sprintf(__('Read %s&#8217;s blog', 'authorbox'), $curauth->user_nicename)); ?>"> <?php echo __("Blog"); ?></a></li>
					<li><a href="/author/<?php echo $curauth->user_nicename?>/feed/" title="<?php echo esc_attr(sprintf(__('Read %s&#8217;s RSS feed', 'authorbox'), $curauth->user_nicename)); ?>"> <?php echo __("RSS"); ?></a></li>
						
				</ul>
			</article><!-- #post-0 -->

			<div class="post">
				<div class="postentry">
					<div id="authorinfo">
						
					</div>
				</div>
			</div>
			
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