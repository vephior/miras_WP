<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Miras
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'miras' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
		<img src="<?php echo get_template_directory_uri(); ?>/images/atlantamedicare-logo.jpg">	
		
		<?php
			$miras_description = get_bloginfo( 'description', 'display' );
			if ( $miras_description || is_customize_preview() ) :
		?>
	
				<p class="site-description"><?php echo $miras_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		
		
		<div class="site-clock">
			<div class="site-clock-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-clock.png">			
			</div>
			<div class="site-clock-content">
				<p><?php echo "Monday - Friday 08:00-19:00"; ?></p>	
				<p><?php echo "Saturday and Sunday - CLOSED"; ?></p>	
			</div>		
		</div><!-- .site-clock-->
		
		
		<div class="site-tel">
			<div class="site-tel-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-tel.png">	
			</div>
			<div class="site-tel-content">
				<p><?php echo "(+66) 02 042 1140"; ?></p>
				<p><?php echo "office@atlantamedicare.co.th"; ?></p>
			</div>
		</div><!--.site tel -->
		
		
				<div class="site-location">
			<div class="site-location-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-location.png">	
			</div>
			<div class="site-location-content">
				<p><?php echo "250 ladphroad"; ?></p>
				<p><?php echo "Bangkok Thailand"; ?></p>
				</div>
		</div><!--.site location -->
			
			
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'miras' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
