<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-branding">
	<div id="mobileTopBar">
	&nbsp;
</div>
<?php the_custom_logo(); ?>
<div id="carouselHero" amp-fx="parallax" data-parallax-factor="1.2">
		<div>
	
		
		
		<amp-img 
		media="(max-width: 48.5em) and (max-height:23em)"
  src="<?php echo get_template_directory_uri() ?>/assets/images/SHFdblog.jpg"
  width="640"
			height="480"
			layout="responsive"
			alt="<?php the_title(); ?>">
		</amp-img>
		<amp-img 
		media="(max-width: 48.5em) and (min-height:23em)"
  src="<?php echo get_template_directory_uri() ?>/assets/images/SHFmblog.jpg"
  width="375"
			height="480"
			layout="responsive"
			alt="<?php the_title(); ?>">
		</amp-img>
		<amp-img 
		media="(min-width: 48.6em)"
  src="<?php echo get_template_directory_uri() ?>/assets/images/SHFdblog.jpg"
  width="640"
			height="480"
			layout="responsive"
			alt="<?php the_title(); ?>">
		</amp-img>
	<!-- .post-thumbnail -->
	
</div>

	
</div> <!-- end #carouselHero -->
	
		<p class="site-title">
			The Supreme Blog		
		</p>
		
</div><!-- .site-branding -->
