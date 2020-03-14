<?php get_header('home'); ?>
	<main role="main">
		<!-- section -->
		<section>

			<!-- Banner Section -->
			<div class="hero-banner">
				<div class="main-banner-section">
				<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6">
						<div class="index-video-features">
						<?php get_template_part('templates/videos'); ?>
						</div>
					</div>
					<div class="col-lg-6 pl-0">
						<?php get_template_part('templates/loop-common'); ?>
					</div>
				</div>
				</div>
				</div>
				<div class="banner-bottom">
				<div class="row m-0">
					<div class="col-lg-6">
						<p class="banner-header-p">explore</p>
					</div>
					<div class="col-lg-6">
						<p class="banner-header-p">trending</p>
						<ul>
						<?php
						$categories = get_categories();
						$catArr = array();
						$catSlag = array();
						foreach($categories as $category){
							array_push($catArr,$category->name);
						}
						foreach ($categories as $category) {
							array_push($catSlag,$category->term_id);
						}

						for($i=0;$i<count($catArr);$i++){
							echo '<li><a href="' . get_category_link($catSlag[$i]) . '">' . $catArr[$i] . '</a></li>';
						}
							 ?>
						</ul>
					</div>
				</div>
				</div>
			</div>
</div>
			<div class="front-page-blogs-cat">
				<div class="container-fluid">
					<?php get_template_part('templates/front-loop'); ?>
				</div>
			</div>

			<!-- Subscriber Section -->
			<?php get_template_part('templates/subscriber'); ?>

			<div class="bulk-post-four">
				<div class="container-fluid">
				<div class="front-page-bluk-page">
				<?php get_template_part('loop'); ?>
			</div>
		</div>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
