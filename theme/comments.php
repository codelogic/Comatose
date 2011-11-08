<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.  The actual display of comments is
 * handled by a callback to starkers_comment which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

<?php if ( post_password_required() ) : ?>
				<p><?php _e( 'This post is password protected. Enter the password to view any comments.', 'starkers' ); ?></p>
<?php
		return;
	endif;
?>

<?php
	// You can start editing here -- including this comment!
?>

<?php if ( have_comments() ) : ?>
			<?php /* STARKERS NOTE: The following h3 id is left intact so that comments can be referenced on the page */ ?>
			<h3 id="comments-title"><?php
			printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), 'starkers' ),
			number_format_i18n( get_comments_number() ), '' . get_the_title() . '' );
			?></h3>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
	<nav>
		<?php previous_comments_link( __( '&larr; Older Comments', 'starkers' ) ); ?>
		<?php next_comments_link( __( 'Newer Comments &rarr;', 'starkers' ) ); ?>
	</nav>
<?php endif; // check for comment navigation ?>

				<?php
					wp_list_comments( array( 'style' => 'div', 'callback' => 'starkers_comment', 'end-callback' => 'starkers_comment_close' ) );
				?>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
	<nav>
		<?php previous_comments_link( __( '&larr; Older Comments', 'starkers' ) ); ?>
		<?php next_comments_link( __( 'Newer Comments &rarr;', 'starkers' ) ); ?>
	</nav>
<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:

	if ( ! comments_open() ) :
?>
	<h3 id="comments-title"><?php _e( 'Comments are closed.', 'starkers' ); ?></h3>
<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>

<?php comment_form(); ?>