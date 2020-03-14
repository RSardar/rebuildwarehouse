<?php get_header(); ?>
<div class="pages">

<div class="container-fluid">


	<main role="main">
		<!-- section -->
		<section>

			<h1  class="single-page-title"><?php echo sprintf( __( '<span class="title-common">%s</span> Search Results for : <span class="title-common">'), $wp_query->found_posts ); echo get_search_query(); ?></span></h1>
<div class="row">
	<div class="col-md-8">
		<?php get_template_part('loop-common'); ?>

		<?php get_template_part('pagination'); ?>
	</div>
	<div class="col-sm-4">
<?php get_sidebar(); ?>
	</div>
</div>


		</section>
		<!-- /section -->
	</main>


</div>
</div>
<?php get_footer(); ?>
