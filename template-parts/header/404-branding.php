<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$service_hero_description			= get_field('service_hero_description');
$hero_images	= get_field('hero_images');

?>

<div class="site-branding">
	<div id="mobileTopBar">
	&nbsp;
</div>
<?php the_custom_logo(); ?>

	
		
</div><!-- .site-branding -->
