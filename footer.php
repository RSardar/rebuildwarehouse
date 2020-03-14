			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container-fluid">
					<div class="main-footer-section">
						<div class="container-fluid">
							<div class="row align-items-center">
								<div class="col-md-7">
									<div class="left-footer">
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
									<div class="website-socials">
										<p>Follow us on : </p>
										<ul class="footer-social-pages">
											<li>
												<a href="#" target="\_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook-logo.png" alt="Logo" class="logo-img"></a>
											</li>
											<li>
												<a href="#" target="\_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.png" alt="Logo" class="logo-img"></a>
											</li>
											<li>
												<a href="#" target="\_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/wordpress.png" alt="Logo" class="logo-img"></a>
											</li>
											<li>
												<a href="#" target="\_blank"></a>
											</li>
										</ul>
									</div>

									<div class="footer-menu">
										<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-left')) ?>
									</div>


								</div>
								</div>
								<div class="col-md-5">
									<div class="right-footer-menu">
									<div class="divider-subscribe">
										<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-right')) ?>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.

				</p>
				</div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>


	</body>
</html>
