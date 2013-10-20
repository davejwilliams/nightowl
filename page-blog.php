<?php
/*
Template Name: Blog
*/

get_header(); ?>

<div class="row">

	<div class="large-9 columns">

		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => 'post', 'posts_per_page' => 10, 'paged' => $paged );
		$wp_query = new WP_Query($args);
		while ( have_posts() ) : the_post(); ?>
			<h6><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h6>
		<?php endwhile; ?>

	</div>

	<div class="large-3 columns">

		<?php get_sidebar(); ?>

	</div>


<!-- then the pagination links -->
<?php next_posts_link( '&larr; Older posts' ); ?>
<?php previous_posts_link( 'Newer posts &rarr;' ); ?>

</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
