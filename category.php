<?php get_header(); ?>
<div class="pages">
	<div class="container-fluid">
	<main role="main">
		<!-- section -->
		<section>
			<h1 class="single-page-title">
			<?php _e( 'Categories : <span class="title-common">'	); single_cat_title(); ?></span>
			</h1>
			<div class="common-center-posts">
			<div class="container">
			<div class="row">
					<?php get_template_part('loop-cat'); ?>
					<?php get_template_part('pagination'); ?>
				</div>
			</div>
		</div>
		</div>

		<!-- Subscriber Section -->
		<?php get_template_part('templates/subscriber'); ?>

<!-- Recent Posts -->
		<div class="common-recent">
<?php get_template_part('recent-posts'); ?>
		</div>

		</section>
		<!-- /section -->
	</main>


	</div>
</div>
<?php get_footer(); ?>
