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
	<amp-carousel height="600" 
		width="1200"
		layout="responsive"
		type="slides"
		autoplay
		delay="5500">
	<div>
		<amp-img 
		media="(max-width: 48.5em) and (max-height:23em)"
  src="../wp-content/themes/wprig-supremehardwoodfloorsinc/assets/images/indoors-circle-window-min.jpg"
  width="640"
			height="480"
			layout="responsive"
			alt="indoors circle window min">
		</amp-img>
		<amp-img 
		media="(max-width: 48.5em) and (min-height:23em)"
  src="../wp-content/themes/wprig-supremehardwoodfloorsinc/assets/images/indoors-story-min.jpg"
  width="640"
			height="480"
			layout="responsive"
			alt="indoors circle window story">
		</amp-img>
		<amp-img 
		media="(min-width: 48.6em)"
  src="../wp-content/themes/wprig-supremehardwoodfloorsinc/assets/images/indoors-circle-window.jpg"
  width="640"
			height="480"
			layout="responsive"
			alt="indoors circle window">
		</amp-img>
		<!-- <figcaption class="paragraph">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</figcaption> -->
	</div>
    <div>
	<amp-img 
		media="(max-width: 48.5em) and (max-height:23em)"
  src="../wp-content/themes/wprig-supremehardwoodfloorsinc/assets/images/governors-mansion-min.jpg"
  width="481"
			height="639"
			layout="responsive"
			alt="governors-mansion-min">
		</amp-img>
		<amp-img 
		media="(max-width: 48.5em) and (min-height:23em)"
  src="../wp-content/themes/wprig-supremehardwoodfloorsinc/assets/images/governors-mansion-story-min.jpg"
  width="640"
			height="480"
			layout="responsive"
			alt="governors-mansion-story-min">
		</amp-img>
		<amp-img 
		media="(min-width: 48.6em)"
  src="../wp-content/themes/wprig-supremehardwoodfloorsinc/assets/images/governors-mansion.jpg"
  width="640"
			height="480"
			layout="responsive"
			alt="governors-mansion">
		</amp-img>	
		<!-- <figcaption class="paragraph">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</figcaption> -->
	</div>
	<div>
	<amp-img 
		media="(max-width: 48.5em) and (max-height:23em)"
  src="../wp-content/themes/wprig-supremehardwoodfloorsinc/assets/images/kitchen-bright-min.jpg"
  width="640"
			height="480"
			layout="responsive"
			alt="kitchen-bright-min">
		</amp-img>
		<amp-img 
		media="(max-width: 48.5em) and (min-height:23em)"
  src="../wp-content/themes/wprig-supremehardwoodfloorsinc/assets/images/kitchen-bright-story-min.jpg"
  width="640"
			height="480"
			layout="responsive"
			alt="kitchen-bright-story-min">
		</amp-img>
		<amp-img 
		media="(min-width: 48.6em)"
  src="../wp-content/themes/wprig-supremehardwoodfloorsinc/assets/images/kitchen-bright.jpg"
  width="640"
			height="480"
			layout="responsive"
			alt="kitchen-bright">
		</amp-img>	
		<!-- <figcaption class="paragraph">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</figcaption> -->
	</div>
	</amp-carousel>
</div> <!-- end #carouselHero -->
	

	<?php
	if ( is_front_page() && is_home() ) {
		?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php
	} else {
		?>
		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
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
