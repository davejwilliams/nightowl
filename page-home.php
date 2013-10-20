<?php
/*
Template Name: Home
*/

get_header(); ?>



<!----------------------------------------------------------------->

<!-- Moon Background -->
<div id="cloudBackground" class="clearfix">
	<div id="clouds01"></div>
	<div id="clouds02"></div>
	<div id="clouds03"></div>
</div>
<!-- END Moon Background -->

<!-- Grass & Slider -->
<div id="grassBand">

	<div class="row scroller">
		<div class="large-12 columns">
			<ul data-orbit
			    data-options="navigation_arrows:false; timer_speed:5000; bullets:false; slide_number:false; resume_on_mouseout:true; animation_speed:2000;">
				<li class="slider">
					<div class="large-12 columns">
						<p>
							SLIDE 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam omnis recusandae
							repellat sit soluta. Animi corporis culpa delectus ea et inventore iste labore modi
							numquam quo sunt, suscipit tempore vero.
						</p>
					</div>
				</li>
				<li class="slider">
					<div class="large-12 columns">
						<p>
							SLIDE 2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam omnis recusandae
							repellat sit soluta. Animi corporis culpa delectus ea et inventore iste labore modi
							numquam quo sunt, suscipit tempore vero.
						</p>
					</div>
				</li>
				<li class="slider">
					<div class="large-12 columns">
						<p>
							SLIDE 3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam omnis recusandae
							repellat sit soluta. Animi corporis culpa delectus ea et inventore iste labore modi
							numquam quo sunt, suscipit tempore vero.
						</p>
					</div>
				</li>
				<li class="slider">
					<div class="large-12 columns">
						<p>
							SLIDE 4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam omnis recusandae
							repellat sit soluta. Animi corporis culpa delectus ea et inventore iste labore modi
							numquam quo sunt, suscipit tempore vero.
						</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

</div>
<!-- END Grass & Slider -->

<!-- Main Content -->
<div id="mainBand">
	<div class="row" id="ourDifference">
		<div class="large-12 columns">
			<p><?php the_field('main_blurb'); ?></p>



<!--			<p><strong>Our Difference</strong> - Night Owl Web Studio takes pride in providing a friendly and-->
<!--				efficient website design service, working directly with our clients from the initial concept to the-->
<!--				final design. Our team will listen to your ideas, dreams and goals and guide you through the-->
<!--				implementation of your website. We have worked with businesses of all sizes and understand that each-->
<!--				of our client's needs are unique - your website should be too.-->

<!--				Establishing an online presence enables your company to be in millions-->
<!--				of homes at once. We create custom, compelling (often clever) web design and print media for emerging and-->
<!--				established brands. We also offer custom-designed websites for larger businesses that need specific database-->
<!--				applications or content management solutions. We can even maintain and market your website. We're here to help!-->
<!--			</p>-->
		</div>
	</div>

	<div class="row">
		<div class="large-4 columns">
			<h6><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/icons-why-us.png"><a href="#">Why Us?</a></h6>

			<p>Have you ever bought something expecting it to work as advertised and it didn’t right out of the box?
				Or, hired someone expecting a certain level of customer service…</p>
		</div>

		<div class="large-4 columns">
			<h6><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/icons-web-design.png"><a href="#">Web Design</a></h6>

			<p>Your website is the face of your business and it speaks volumes about who you are to your visitors.
				It’s often the only determining factor in a potential customer’s…</p>
		</div>

		<div class="large-4 columns">
			<h6><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/icons-wordpress-cms.png"><a href="#">WordPress CMS</a></h6>

			<p>All websites are created in WordPress™. This allows you to easily make edits to your website
				yourself any time you like. You can manage your own pages, products and…</p>
		</div>

		<div class="large-4 columns">
			<h6><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/icons-e-commerce.png"><a href="#">E-Commerce</a></h6>

			<p>Whether you only want to sell one product or thousands. Take complete control over your online
				storefront and give your customers a smooth and seamless…</p>
		</div>

		<div class="large-4 columns">
			<h6><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/icons-seo-social-media.png"><a href="#">SEO & Social Media</a></h6>

			<p>We use industry standard search engine optimization practices during the development of every
				website that we build. In today’s competitive…</p>
		</div>

		<div class="large-4 columns">
			<h6><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/icons-graphic-design.png"><a href="#">Graphic Design</a></h6>

			<p>Once you have a website you will want to make sure that you also look good on paper to tie
				everything together. We can provide all of the traditional marketing materials…</p>
		</div>
	</div>

	<div class="row">
		<div class="large-12 small-12 columns">
			<hr class="embossed">
		</div>
	</div>



	<div class="row">
		<!------------ WHAT'S NEW ------------>
		<?php
		global $more;
		$more = 0;

		$post_per_page = 3; // -1 shows all posts
		$args=array('posts_per_page' => $post_per_page);
		//$argsExample=array('category_name' => 'Latest News', 'posts_per_page' => $post_per_page);
		?>

		<div class="large-6 small-12 columns" id="whatsNew">
			<h6><a href="#">What's New</a></h6>
			<ul>
				<?php query_posts($args); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<!--<li>
					<a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a>
					<?php //the_date(); ?>
					<p><?php //echo get_excerpt(50); ?></p>
				</li>-->

					<li>
						<p><?php echo get_excerpt(70); ?></p>
					</li>
					<li><hr class="embossed"></li>
				<?php endwhile; ?>
				<?php endif; ?>
			</ul>
		</div>
		<!------------ END WHAT'S NEW ------------>


		<!------------ TESTIMONIALS ------------>
		<div class="large-6 small-12 columns">
			<h6><a href="#">Testimonials</a></h6>
			<p class="bubble">
				"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam omnis recusandae
				repellat sit soluta. Animi corporis culpa delectus ea et inventore iste labore modi
				numquam quo sunt, suscipit tempore vero."
			</p>
			<p class="testimonial-name">Lindsay Williams<br>
				<span class="testimonial-company">Broadway Bound Dance Centre, Toms River, NJ</span>
			</p>
		</div>
	</div>

	<div class="row">
		<div class="large-12 columns">
			<h6>Latest Works</h6>
			<ul class="large-block-grid-6 small-block-grid-2">
				<li><img src="http://placehold.it/350x150"></li>
				<li><img src="http://placehold.it/350x150"></li>
				<li><img src="http://placehold.it/350x150"></li>
				<li><img src="http://placehold.it/350x150"></li>
				<li><img src="http://placehold.it/350x150"></li>
				<li><img src="http://placehold.it/350x150"></li>
			</ul>
		</div>
	</div>

</div>
<!-- END Main Content -->

<!----------------------------------------------------------------->





<?php //get_sidebar(); ?>
<?php get_footer(); ?>
