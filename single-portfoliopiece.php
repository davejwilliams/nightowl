<?php
/**
 * The Template for displaying all single portfolio pieces.
 *
 * @package nightowl
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- FOUNDATION -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.css">
	<script src="<?php bloginfo('template_directory'); ?>/js/vendor/custom.modernizr.js"></script>
	<!-- END FOUNDATION -->

	<style>
		div {
			-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
			-moz-box-sizing: border-box;    /* Firefox, other Gecko */
			box-sizing: border-box;         /* Opera/IE 8+ */
		}
		#portPiece {
			font: 14px Arial, Helvetica, sans-serif;
			color: graytext;
		}

		#portImage {
			display: inline-block;
			max-width: 100%;
			margin-bottom: 5px;
			padding: 0;
			border: 1px solid graytext;
		}
		#portVisit{
			display: block;
			margin-left: 20px;
			/*text-align: right;*/
		}
		#portDetails{
			background-color: graytext;
			color: #ffffff;
			padding: 10px 15px 15px;
			margin-bottom: 10px;
			margin-top: 5px;
			border: 1px solid #000000;
		}
		#portDetails p{
			margin: 0;
		}
		#infoIcon{
			width: 30px;
			margin: -40px 0 0 -30px;
		}
		h6{
			color: #1B75BA;
			/*font-size: 18px;*/
		}
		strong{
			font-weight: bold;
			font-size: 12px;
			margin-left: -5px;
		}
	</style>

</head>

<body>


<?php while (have_posts()) : the_post(); ?>

	<div class="row" id="portPiece">

		<div class="large-12 columns">
			<h6><?php the_title(); ?></h6>

			<div id="portImage">
				<?php if (has_post_thumbnail()): ?>
					<?php the_post_thumbnail('large'); ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="large-12 columns">


			<?php if ( get_field( "url" ) ): ?>
				<a href="http://www.<?php the_field('url'); ?>" id="portVisit" target="_blank">Visit Site >></a>
			<?php else: ?>
				<p></p>
			<?php endif; ?>


			<div id="portDetails">
				<img id="infoIcon" src="<?php bloginfo('template_directory'); ?>/images/info.png">
				<strong>Details: </strong><?php the_content(); ?>
			</div>
		</div>


		<div class="large-12 columns">
			<a href="http://www.example.com/" target="_parent"> Contact us</a> now to find out how we can create a website you'll be proud of.
		</div>

	</div>

<?php endwhile; // end of the loop. ?>
</body>