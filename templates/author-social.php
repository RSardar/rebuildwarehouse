<div class="author-social-pages">
<div class="social_details clearfix">
<?php if(!empty(get_the_author_meta('facebook'))) { ?>
<a target="_blank" href="<?php the_author_meta('facebook'); ?>" title="facebook" target="_blank" id="facebook">
<div class="author_social_icon">
  <img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook-logo.png" alt="Logo" class="logo-img">
</div>
</a>
<?php } ?>
</div>
<div class="social_details  clearfix">
<?php if(!empty(get_the_author_meta('url'))) { ?>
<a target="_blank" href="<?php the_author_meta('url'); ?>" title="url" target="_blank" id="url">
<div class="author_social_icon clearfix">
  <img src="<?php echo get_template_directory_uri(); ?>/img/icons/wordpress.png" alt="Logo" class="logo-img">
</div>
</a>
<?php } ?>
</div></div>
