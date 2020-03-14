<?php get_header(); ?>
<div class="pages">
	<div class="container-fluid">
	<main role="main">
		<!-- section -->
		<section>
			<div class="author-page-details mt-0">

				<h1  class="single-page-title "><?php _e( 'Author : <span class="title-common">'); echo get_the_author(); ?></span></h1>
<div class="author-page-meta">
<div class="row align-items-center	">
	<div class="col-sm-2">
<?php echo get_avatar(get_the_author_meta('user_email')); ?>
	</div>
	<div class="col-sm-10">
			<?php if ( get_the_author_meta('description')) : ?>

			<?php echo wpautop( get_the_author_meta('description') ); ?>
			<?php endif; ?>
			<?php get_template_part('templates/author-social') ?>
		</div>
	</div>
</div>

			</div>
<div class="common-center-posts">
<div class="container">
<div class="row">
		<?php if (have_posts()): the_post(); ?>

		<?php rewind_posts(); while (have_posts()) : the_post(); ?>

	<div class="col-md-6 custom-post-col-4">
		<div class="single-front-blog">

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) { // Check if thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
					</a>
				<?php }
				else { ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/no-featured.jpg" alt="No-featured" class="size-post-thumbnail">
			<?php	}
				 ?>

				<!-- /post thumbnail -->
		<div class="front-single-post-dts">
				<!-- post title -->
		  <div class="front-cat"><?php the_category(', '); ?></div>
				<h2 class="post-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				<!-- /post title -->
			</div>

			</article>
			<!-- /article -->
</div></div>
		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

			<?php get_template_part('pagination'); ?>
</div></div>
</div>
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
