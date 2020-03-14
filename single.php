<?php get_header(); ?>
<div class="pages">
	<div class="container">
	<main role="main">
	<!-- section -->
	<section>
		<div class="post-cat">
			<?php the_category(' '); ?>
		</div>
		<h1 class="single-page-title">
			<?php the_title(); ?>
		</h1>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="single-post-details">
		<!-- post details -->
		<span class="single-author"><?php _e( 'Published by'); ?> <?php the_author_posts_link(); ?></span>

		<span class="date"><?php _e( 'Posted '); ?><?php the_time('M/j/Y'); ?></span>

		<p class="time-to-read"><?php timer(); ?></p>
		<!-- /post details -->
		<div class="social-share-post">
			<?php social_share(); ?>
		</div>
	</div>
	<div class="single-thumbnail">
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) { // Check if Thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(); // Fullsize image for the single post ?>
			</a>
		<?php }
	else { ?>
	<img src="<?php echo get_template_directory_uri(); ?>/img/no-featured.jpg" alt="No-featured" class="size-post-thumbnail">
<?php	}
	 ?>
		<!-- /post thumbnail -->
	</div>

		<div class="row">
				<div class="main-content single-content">
				<?php the_content(); // Dynamic Content ?>
					</div>
					<div class="main-tags">
				<?php the_tags( __( 'Tags: '), ' ', '<br>'); // Separated by commas with a line break at the end ?>
					</div>
				<div class="single-author-bio">
					<div class="row align-items-center">
						<div class="col-sm-2 text-center">
			<?php echo get_avatar(get_the_author_meta('user_email')); ?>
						</div>
						<div class="col-sm-10">
							<div class="user-single-page-social">
						<p class="author-bio-box">
							<?php the_author_posts_link(); ?></p>
						<p>
							<?php
							$userMeta = get_the_author_meta('description');
							echo $userMeta;?>
						</p>
				<?php get_template_part('templates/author-social') ?>
			</div>
						</div>
					</div>

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
	</div>
	<div class="main-comment-section">
		<div class="container">
			<div class="row">
				<div class="col-9">
						<?php comments_template(); ?>
				</div>
			</div>

		</div>

	</div>
</div>


<?php get_footer(); ?>
