<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package nightowl
 */
?>

<footer>
	<div class="row">
		<div class="large-4 columns">
			<h6>Hours</h6>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam asperiores aut deleniti iure
				modi neque nesciunt quaerat quia, quod? Commodi distinctio eaque et laborum magnam magni neque vero
				voluptate?
			</p>
		</div>
		<div class="large-4 columns">
			<h6>Connect With Us</h6>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam asperiores aut deleniti iure
				modi neque nesciunt quaerat quia, quod? Commodi distinctio eaque et laborum magnam magni neque vero
				voluptate?
			</p>
		</div>
		<div class="large-4 columns">
			<h6>Free Quote</h6>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam asperiores aut deleniti iure
				modi neque nesciunt quaerat quia, quod? Commodi distinctio eaque et laborum magnam magni neque vero
				voluptate?
			</p>
		</div>
		<!--<div class="large-12 columns">
				<?php //do_action( 'nightowl_credits' ); ?>
				<a href="http://wordpress.org/" rel="generator"><?php //printf( __( 'Proudly powered by %s', 'nightowl' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php //printf( __( 'Theme: %1$s by %2$s.', 'nightowl' ), 'nightowl', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div>-->
	</div>
</footer>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/responsive-nav.js"></script>


<!-- FOUNDATION -->
<script>
	document.write('<script src=' +
		('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
		'.js><\/script>')
</script>

<script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/foundation/foundation.orbit.js"></script>
<!--

  <script src="js/foundation/foundation.js"></script>

  <script src="js/foundation/foundation.alerts.js"></script>

  <script src="js/foundation/foundation.clearing.js"></script>

  <script src="js/foundation/foundation.cookie.js"></script>

  <script src="js/foundation/foundation.dropdown.js"></script>

  <script src="js/foundation/foundation.forms.js"></script>

  <script src="js/foundation/foundation.joyride.js"></script>

  <script src="js/foundation/foundation.magellan.js"></script>

  <script src="js/foundation/foundation.orbit.js"></script>

  <script src="js/foundation/foundation.reveal.js"></script>

  <script src="js/foundation/foundation.section.js"></script>

  <script src="js/foundation/foundation.tooltips.js"></script>

  <script src="js/foundation/foundation.topbar.js"></script>

  <script src="js/foundation/foundation.interchange.js"></script>

  <script src="js/foundation/foundation.placeholder.js"></script>

  <script src="js/foundation/foundation.abide.js"></script>

  -->

<script>
	$(document).foundation();
</script>

<!-- END FOUNDATION -->

<?php wp_footer(); ?>

</body>
</html>