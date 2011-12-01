<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
		</div> <!-- main -->
		
		<!--<div id="footer-bar">
			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				//get_sidebar( 'footer' );
			?>
		</div>-->
		
		<!-- page footer -->
		<footer id="colophon"> <!-- note to self: colophon: A brief description of publication or production notes relevant to the edition, in modern books usually located at the reverse of the title page, but can also sometimes be located at the end of the book. Also, a printer's mark or logotype -->
			<div id="colophon-container">
				<div id="colophon-container2">
					<p class="site-copyright">&copy; <a href="#"><?php bloginfo( 'name' ); ?></a>. All Rights Reserved.</p>
					<p class="site-generator">
						Powered by <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'comatose' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'comatose' ); ?>" rel="generator"><?php printf( __( '%s', 'comatose' ), 'WordPress' ); ?></a> and <a href="http://paulrohde.com/tags/comatose" title="Subtle thoughts.">Comatose</a></p>
					<p class="site-feed-links">
						<a href="#">Entries Feed</a> and <a href="#">Comments Feed</a></p>
				</div>
			</div>
		</footer>
		
	</div><!-- page -->
	
	<?php wp_footer(); ?>
	
	<!-- Remote jQuery with local fallback; taken from HTML5 Boilerplate http://html5boilerplate.com -->
	<!-- jQuery version might not be the latest; check jquery.com -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo(get_template_directory_uri() . '/js/lib/jquery-1.6.3.js'); ?>"%3E%3C/script%3E'))</script>
	<script src="<?php echo(get_template_directory_uri() . '/js/lib/cufon.js'); ?>"></script>
	<script src="<?php echo(get_template_directory_uri() . '/js/lib/bebas-neue-400.font.js'); ?>"></script>

	
	<!-- Below is your script file -->
	<script src="<?php echo(get_template_directory_uri() . '/js/general.js'); ?>"></script>

	<!-- Change UAXXXXXXXX1 to be your site's ID -->
	<!-- <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
		load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
	</script> -->
	
</body>
</html>