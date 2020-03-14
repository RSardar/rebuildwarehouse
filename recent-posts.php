<p class="recent-post-title">recent posts</p>
<div class="recent-common">
<div class="custom-recent">

<div class="row m-0">
<?php
$mainPostId = get_the_ID();
$recent = array(
	'post_type'              => 'post',
	'post_status'            => 'publish',
	'orderby'                => 'date',
	'posts_per_page'				 => 8
);
// create the query
?>
<div class="row m-0">
<?php $recentP = new WP_Query( $recent ); ?>
<?php if ($recentP->have_posts()){
   while ($recentP->have_posts()) {
   $recentP->the_post();
	 ?>
<div class="col-md-3 custom-post-col-4">
	<div class="single-front-blog">
		<?php if ( has_post_thumbnail()){ // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</a>
		<?php }
	else { ?>
	<img src="<?php echo get_template_directory_uri(); ?>/img/no-featured.jpg" alt="No-featured" class="size-post-thumbnail">
	<?php	}
	 ?>
	 <div class="front-single-post-dts">
	 		<!-- post title -->
	   <div class="front-cat"><?php the_category(', '); ?></div>
	 		<h2 class="post-title">
	 			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	 		</h2>
	 		<!-- /post title -->
	 	</div>
	</div>
</div>

<?php } } ?>
</div>
</div>
</div>
</div>
