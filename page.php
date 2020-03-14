<?php get_header(); ?>
<div class="pages">
	<div class="container-fluid">


	<main role="main">
		<!-- section -->
		<section>

			<h1 class="single-page-title "><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="main-content">
				<?php the_content(); ?>
			</div>




				<br class="clear">

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>
	<!-- Subscriber Section -->
	<?php get_template_part('templates/subscriber'); ?>

<!-- Recent Posts -->
	<div class="common-recent">
<?php get_template_part('recent-posts'); ?>
	</div>

</div>
</div>
<?php get_footer(); ?>
