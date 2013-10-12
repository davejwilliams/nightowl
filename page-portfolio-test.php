<?php
/*
Template Name: Portfolio Test
*/
?>

<?php get_header(); ?>

	<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',
				helpers : {
					media : {}
				}
			});
		});
	</script>

	<div id="primary" class="content-area clearfix">
		<main id="main" class="site-main clearfix" role="main">
			<div class="row" style="min-width: 500px;">

				<!-- CREATE PORTFOLIO MENU BASED ON CATEGORIES -->
				<?php
				//This will pull in a list of categories under the 'genre' taxonomy
				//and add them to an array called $categories
				$args = array(
					'type' => 'post',
					'child_of' => 0,
					'parent' => '',
					'orderby' => 'name',
					'order' => 'ASC',
					'hide_empty' => 0,
					'hierarchical' => 1,
					'exclude' => '',
					'include' => '',
					'number' => '',
					'taxonomy' => 'genre',
					'pad_counts' => false

				);
				$categories = get_categories($args);
				?>

				<ul id="portMenu">

					<?php
					//This will create the first list item 'All' which will remove any variables in the URL
					$permalink = get_permalink();
					$permalink = explode('?', $permalink);
					echo '<li><a href="' . $permalink[0] . '">All</a></li>';

					//This will loop through the array stored in $categories and output each value into a list
					//each list item will be a link that will set a value in the url to be used below.
					foreach ($categories as $category) {
						echo '<li><a href="?category=' . strtolower($category->name) . '">' . $category->name . 's</a></li>';
					}
					?>
				</ul>
				<!-- END CREATE PORTFOLIO MENU BASED ON CATEGORIES -->






				<!-- TEST AREA -->

				<?php
				//This will pull in the value set in the url to display certain items in the portfolio

				// WP_Query arguments
				$category = htmlspecialchars($_GET["category"]);

				$args = array(
					'post_type' => 'portfoliopiece',
					'genre' => $category,
					//'posts_per_page'         => '1',
				);
				?>

				<?php
				$go = new WP_Query( $args );
				while ( $go->have_posts() ) : $go->the_post();
					?>
					<?php
					$imgID = get_post_thumbnail_id();
					$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					?>
					<article class="work">
						<a class="group fancybox" rel="fancybox" href="<?php echo $url; ?>" >
							<div class="work-thumb">
								<?php the_post_thumbnail('thumb'); ?>
							</div>
							<h4 class="work-info work-title">
								<?php the_title(); ?>
							</h4>
							<div class="work-info work-content">
								<?php the_content(); ?>
							</div>
						</a>
					</article>
				<?php endwhile; wp_reset_query(); ?>

				<!-- END TEST AREA -->







			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>