<div class="row m-0">

<?php
// setup query
$args = array(
	'post_type'              => 'videos',
	'post_status'            => 'publish',
	'orderby'                => 'date'
);
// create the query
$posts = new WP_Query( $args ); ?>
<?php if ($posts->have_posts()): while ($posts->have_posts()) : $posts->the_post(); ?>
<div class="col-lg-12 pr-0 custom-post-col-4">
<div class="single-front-blog video-post-single">
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>

<?php /* global $post;
$postid = $post->ID;
$meta_key = 'featured_video_uploading';
$meta_value = get_post_meta($postid, $meta_key, true);
if( $media = wp_get_attachment_url($meta_value)) {  // getting video here
    $image = '<video controls="" src="'.$media.'" class="custom-video"></video>';
    echo $image;
} */?>
<div id="play_btn" class="play_btn">

		<div class="play-icon"></div>
	</div>

		<!-- /post thumbnail -->


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
