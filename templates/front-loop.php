
<?php
// $categories = get_categories();
// $catArr = array();
// foreach($categories as $category){
// 	array_push($catArr,$category->name);
// }
// echo '<p><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></p>';
$myArr = array('decor','garden','services');
for($i=0;$i<count($myArr);$i++){
// setup query
$args = array(
	'post_type'              => 'post',
	'post_status'            => 'publish',
	'orderby'                => 'date',
  'posts_per_page'         => 6,
  'category_name'          => $myArr[$i]
);?>
<div class="featured-cat-posts">
	<h2 class="featured-index-cat-title">	<?php echo $myArr[$i]; ?></h2>
<div class="row m-0">
<?php // create the query
$posts = new WP_Query( $args ); ?>
<?php if ($posts->have_posts()): while ($posts->have_posts()) : $posts->the_post(); ?>
<div class="col-md-4 custom-post-col">
<div class="single-front-blog">
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) {  // Check if thumbnail exists ?>
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
</div></div>
<?php } ?>
