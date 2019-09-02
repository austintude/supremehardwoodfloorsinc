<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$hero_images	= get_field('hero_images');

?>

<div class="site-branding">
	<div id="mobileTopBar">
	&nbsp;
</div>
<?php the_custom_logo(); ?>
<div id="carouselHero" amp-fx="parallax" data-parallax-factor="1.2">
	<amp-carousel height="600" 
		width="1200"
		layout="responsive"
		type="slides"
		autoplay
		delay="5500">
		<?php while (have_rows('hero_images')) : the_row();

// vars
$hero_image_mobile = get_sub_field('hero_image_mobile');
$hero_image_mobile_landscape = get_sub_field('hero_image_mobile_landscape');
$hero_image_ipad_landscape_plus = get_sub_field('hero_image_ipad_landscape_plus');
?>
	<div>
	
		<amp-img 
		media="(max-width: 48.5em) and (max-height:23em)"
  src="<?php echo $hero_image_mobile_landscape['url']; ?>"
  width="640"
			height="480"
			layout="responsive"
			alt="<?php echo $hero_image_mobile_landscape['alt']; ?>">
		</amp-img>
		<amp-img 
		media="(max-width: 48.5em) and (min-height:23em)"
  src="<?php echo $hero_image_mobile['url']; ?>"
  width="640"
			height="480"
			layout="responsive"
			alt="<?php echo $hero_image_mobile['alt']; ?>">
		</amp-img>
		<amp-img 
		media="(min-width: 48.6em)"
  src="<?php echo $hero_image_ipad_landscape_plus['url']; ?>"
  width="640"
			height="480"
			layout="responsive"
			alt="<?php echo $hero_image_ipad_landscape_plus['alt']; ?>">
		</amp-img>
		
	</div>
	<?php endwhile; ?>
</amp-carousel>
</div> <!-- end #carouselHero -->
	

	<?php
	if ( is_front_page() && is_home() ) {
		?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php
	} else {
		?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php
	}
	?>

	<?php
	$wp_rig_description = get_bloginfo( 'description', 'display' );
	if ( $wp_rig_description || is_customize_preview() ) {
		?>
		<p class="site-description">
			<?php echo $wp_rig_description; /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?>
		</p>
		<?php
	}
	?>
</div><!-- .site-branding -->
