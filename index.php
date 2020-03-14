<?php get_header(); ?>
<div class="container-semi">
	<main role="main">
		<!-- section -->
		<section>

			<h1>check out our latest blogs</h1>

			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
