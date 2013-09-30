<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package nightowl
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!-- FOUNDATION -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.css">
	<script src="<?php bloginfo('template_directory'); ?>/js/vendor/custom.modernizr.js"></script>
	<!-- END FOUNDATION -->

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive-nav.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/mystyles.css">

	<?php
	/* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
	wp_head();
	?>
</head>

<body <?php body_class(); ?>>

<?php do_action('before'); ?>

<!-- HEADER AREA -->
<header class="topBand">
	<div class="row" style="min-width: 500px;">
		<div class="small-4 medium-6 large-6 columns">
			<a href="<?php echo esc_url(home_url('/')); ?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/nightowl_logo.png" alt="Nightowl Web Studio"></a>
			<!--<h6 class="site-description"><?php //bloginfo('description'); ?></h6>-->
		</div>

		<div class="small-8 medium-6 large-6 columns">
			<h4 class="right mobilesOnly" id="phoneNumber"><a href="tel:+7329862253">732-986-2253</a></h4>
			<h4 class="right desktopOnly" id="phoneNumber">732-986-2253</h4>
			<p class="clearboth right"><a class="right" href="mailto:contact@nightowlwebstudio.com">contact@nightowlwebstudio.com</a>
			</p>
		</div>
	</div>
</header>
<!-- END HEADER AREA -->

<!-- NAV AREA -->
<div id="navBand">
	<div class="row">
		<a class="toggleMenu" href="#"><img src="<?php bloginfo('template_directory'); ?>/images/toggle-menu.png"></a>
		<div><?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav')); ?></div>
	</div>
</div>
<!-- END NAV AREA -->
