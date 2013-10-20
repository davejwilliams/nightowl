<?php
/*
Template Name: With-Sidebar
*/

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

	<div class="row">
		<div class="large-12 columns"><h4><?php the_title(); ?></h4></div>

		<div class="large-12 columns"><?php the_content(); ?></div>
	</div>

	<?php
	// If comments are open or we have at least one comment, load up the comment template
	//if ( comments_open() || '0' != get_comments_number() )
	//	comments_template();
	?>

<?php endwhile; // end of the loop. ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
