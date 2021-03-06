<?php get_header(); ?>
	<main role="main">
		<!-- section -->
		<section class="veincontent">
			<?php $bgImage = get_the_post_thumbnail_url(); ?>
			<div class="jumbotron row align-items-center justify-content-center" style="background-image:url(<?php echo $bgImage; ?>);">
					<div class="col-12 black_highlight text-center">
							<h1><?php the_title(); ?></h1>
					</div>
			</div>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="row justify-content-center">
				<div class="blog-content col-md-8">
					<?php the_content(); // Dynamic Content ?>
				</div>
				<div class="blog-content col-md-3">
					<p><?php _e( 'Written by ', 'html5blank' ); the_author(); ?></p>
					<!-- post details -->
					<p><span class="date"><?php the_time('F j, Y'); ?></span></p>
					<!-- /post details -->
				</div>
			</div>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
