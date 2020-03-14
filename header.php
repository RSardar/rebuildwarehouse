<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
			<div class="container-fluid">
				<div class="row m-0 align-items-center">
					<div class="header-left-menu">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/menu.png" alt="Logo" class="humberg-bars">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/close.png" alt="Logo" class="humberg-close">
					</div>

					<!-- logo -->
					<div class="logo header-logo">
						<a href="<?php echo home_url(); ?>">
							<logo class="custom-logo">
						<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
		$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		if ( has_custom_logo() ) {
						echo '<img src="'. esc_url( $logo[0] ) .'">';
		} else {
						echo '<div class="if-No-Logo"><p class="logo-site-name">'. get_bloginfo('name') .'</p></div>' ;
					}
						?>
					</logo>
						</a>
					</div>
					<!-- /logo -->
					<div class="top-search-bar">
						<!-- search -->
						<div class="top-search">
								<i class="fas fa-search"></i>
						</div>
						<!-- /search -->
					</div>

					</div>
				</div>
				<div class="toggle-Nav">
					<div class="navabr-search">
<?php get_template_part('searchform');	 ?>
					</div>
					<div class="top-bar-fixed-nav">
						<div class="row m-0">
							<?php if(has_nav_menu('header-menu')){
								first_nav();
							} ?>
					</div></div>
				</div></div>
			</header>
			<!-- /header -->
