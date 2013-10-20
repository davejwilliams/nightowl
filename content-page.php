<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package nightowl
 */
?>

<div class="row">


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header large-12 columns">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'nightowl' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php //edit_post_link( __( 'Edit', 'nightowl' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->

</div>