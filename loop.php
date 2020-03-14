<div class="row m-0">
<?php
// setup query
$args = array(
	'post_type'              => 'post',
	'post_status'            => 'publish',
	'orderby'                => 'date',
	'offset'								 => 2
);
// create the query
$posts = new WP_Query( $args ); ?>
<?php if ($posts->have_posts()): while ($posts->have_posts()) : $posts->the_post(); ?>
<div class="col-lg-3 col-sm -6 mb-4 mb-lg-0 custom-post-col-4">
<div class="single-front-blog">
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()){ // Check if thumbnail exists ?>
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
  </div>
	<!-- /article -->
</div>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>

</div>
