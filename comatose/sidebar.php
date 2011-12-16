<?php
/**
 * Comatose - Sidebar
 * 
 * @package Comatose
 * @subpackage v1
 * @since Comatose v1.0
 */

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
			<div id="secondary-content">
				<?php if ( ! dynamic_sidebar( 'primary-sidebar' ) ) : // note, this will display the primary sidebar, else if none exists, do whatever is below. ?>

					<aside id="archives" class="widget">
						<h3 class="widget-title"><?php _e( 'Archives', 'comatose' ); ?></h3>
						<ul>
							<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
						</ul>
					</aside>

					<aside id="meta" class="widget">
						<h3 class="widget-title"><?php _e( 'Meta', 'comatose' ); ?></h3>
						<ul>
							<?php wp_register(); ?>
							<li><?php wp_loginout(); ?></li>
							<?php wp_meta(); ?>
						</ul>
					</aside>
				<?php endif; // end sidebar widget area ?>
			</div>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>