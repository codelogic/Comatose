<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>
	<section>
		<?php
			get_sidebar( 'footer' );
		?>
	</section>

	</div><!-- #content -->
	
	<footer id="page-footer">
		<div class="container">
			<div class="colfull">
				<p class="footercopyright">Copyright &copy; 2007 - 
					<?php $the_year = date("Y"); echo $the_year; ?>
					<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>. All Rights Reserved.
				
				<p class="footerpoweredby">
					Powered by <a href="http://paulrohde.com/">Cleverness</a> and <a href="http://paulrohde.com/tags/comatose" title="Subtle thoughts.">Comatose</a></p>
				
				<p class="footerfeedlinks">
					<a href="http://www.paulrohde.com/feed/">Entries Feed</a> and <a href="http://www.paulrohde.com/comments/feed/">Comments Feed</a></p>
			</div>
		</div>
	</footer>
	
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
</body>
</html>