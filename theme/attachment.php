<?php
/**
 * The template for displaying attachments.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
 
get_header(); ?>
 
    <?php get_template_part( 'loop', 'attachment' ); ?>
 
<?php get_footer(); ?>