<?php
/**
 * Template part for front-page block2
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$block2_carousel_of_images	= get_field('block2_carousel_of_images');

?>

<div id="block2">
<div id="carousel2">
	<amp-carousel height="600" 
		width="1200"
		layout="responsive"
		type="slides"
		autoplay
		delay="5500">
	
	<?php while (have_rows('block2_carousel_of_images')) : the_row();

// vars
$block2_image_mobile = get_sub_field('block2_image_mobile');
$block2_image_ipad_landscape_plus = get_sub_field('block2_image_ipad_landscape_plus');
$block2_sub_title = get_sub_field('block2_sub_title');
$block2_title = get_sub_field('block2_title');
$block2_content = get_sub_field('block2_content');
$block2_cta_url = get_sub_field('block2_cta_url');
$block2_cta_txt = get_sub_field('block2_cta_txt');

?>
	<div>
	
		<amp-img 
		media="(max-width: 48.5em)"
  src="<?php echo $block2_image_mobile['url']; ?>"
  width="1200"
			height="600"
			layout="responsive"
			alt="<?php echo $block2_image_mobile['alt']; ?>"
			class="box2">
		</amp-img>
		<amp-img 
		media="(min-width: 48.6em)"
  src="<?php echo $block2_image_ipad_landscape_plus['url']; ?>"
  width="1200"
			height="600"
			layout="responsive"
			alt="<?php echo $block2_image_ipad_landscape_plus['alt']; ?>"
			class="box2">
		</amp-img>
		<figcaption class="paragraph box1">
			<h5><?php echo $block2_sub_title; ?></h5>
			<h4><?php echo $block2_title; ?></h4>
			<p>
			<?php echo $block2_content; ?>
			</p>
			<div class="ctaButton">
				<h5>
					<a href="<?php echo $block2_cta_url; ?>"><?php echo $block2_cta_txt; ?></a>
				</h5>
			</div>
		</figcaption>
	</div>

	<?php endwhile; ?>
	</amp-carousel>
</div> <!-- end #carouselHero -->
</div>

