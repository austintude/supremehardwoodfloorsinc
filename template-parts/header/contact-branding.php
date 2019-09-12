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
	
		
		
		<!-- <iframe 
		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.9253453531173!2d-97.97253728514455!3d30.210678117656027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865b46175527c0e7%3A0x535fb8c6947321da!2sSupreme%20Hardwood%20Floors!5e0!3m2!1sen!2sus!4v1568318062947!5m2!1sen!2sus" 
		width="600" 
		height="450" 
		frameborder="0" 
		style="border:0;" 
		allowfullscreen="">
	</iframe> -->

	<amp-iframe width="600" height="450" layout="responsive" 
			  sandbox="allow-scripts allow-same-origin allow-popups" 
			  frameborder="0" 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.9253453531173!2d-97.97253728514455!3d30.210678117656027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865b46175527c0e7%3A0x535fb8c6947321da!2sSupreme%20Hardwood%20Floors!5e0!3m2!1sen!2sus!4v1568318062947!5m2!1sen!2sus">
    <amp-img layout="fill"
             src="<?php echo get_template_directory_uri() ?>/assets/images/Google-Map-Supreme.jpg"
			 placeholder>
			</amp-img>
  </amp-iframe>

		<!-- <amp-img 
		media="(max-width: 48.5em) and (max-height:23em)"
  src="<?php echo $featured_img_url; ?>"
  width="640"
			height="480"
			layout="responsive"
			alt="<?php the_title(); ?>">
		</amp-img>
		<amp-img 
		media="(max-width: 48.5em) and (min-height:23em)"
  src="<?php echo $featured_img_url; ?>"
  width="640"
			height="480"
			layout="responsive"
			alt="<?php the_title(); ?>">
		</amp-img>
		<amp-img 
		media="(min-width: 48.6em)"
  src="<?php echo $featured_img_url; ?>"
  width="640"
			height="480"
			layout="responsive"
			alt="<?php the_title(); ?>">
		</amp-img> -->
	<!-- .post-thumbnail -->
	
	</div>
</div> <!-- end #carouselHero -->
	
		<p class="site-title"><?php the_title(); ?></p>

		<?php if ($service_hero_description != null) { ?>
		<p class="site-description">
		<?php echo $service_hero_description; ?>
		</p>

		<?php }  ?>
</div><!-- .site-branding -->
