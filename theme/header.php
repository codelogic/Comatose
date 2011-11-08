<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
	<link rel="stylesheet/less" type="text/less" href="<?php echo get_stylesheet_directory_uri() ?>/css/content-demo.less"/> 
	<link rel="stylesheet" type="text/css" media="print" href="<?php echo get_stylesheet_directory_uri() ?>/css/print.css" />
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.0.6.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.6.4.min.js"><\/script>')</script>
	
	<?php wp_head(); ?>
		
	<script src="<?php echo get_stylesheet_directory_uri() ?>/js/less-1.1.4.js" type="text/javascript"></script>
	<script src="<?php echo get_stylesheet_directory_uri() ?>/js/typesetter.js" type="text/javascript" ></script>
	<script src="<?php echo get_stylesheet_directory_uri() ?>/js/cufon-yui.js" type="text/javascript"></script>
	<script src="<?php echo get_stylesheet_directory_uri() ?>/js/bebas-neue-400.font.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
			Cufon.replace('h1, h2, h3, h4, h5, h6, legend, nav a', { hover: true });
			Cufon.now();
		});

		// http://groups.google.com/group/cufon/browse_thread/thread/6031a7648834859c?pli=1
		$(window).bind('resize', (function() {
			var timer;
			return function() {
				clearTimeout(timer);
				timer = setTimeout(function() {
					Cufon.refresh();
				}, 100); // 100ms
			};
		})()); 
	</script>

	<script defer src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
	<script defer src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
  
	<!--[if lt IE 9]>
		<script src="js/html5.js"> </script>
	<![endif]-->
</head>
 
<body <?php body_class(); ?>>
 
    <header id="page-header">
		<div>
			<hgroup class="colfull">
				<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2><?php bloginfo( 'description' ); ?></h2>
			</hgroup>
	 
			<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to the 'starkers_menu' function which can be found in functions.php.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
			<?php wp_nav_menu( array( 'container' => 'nav', 'fallback_cb' => 'starkers_menu', 'theme_location' => 'primary' ) ); ?>
			
			<div id="headsearch" class="colfull">
			<?php get_search_form(); ?>
			</div>
		</div>
    </header>
	
	<div id="content">