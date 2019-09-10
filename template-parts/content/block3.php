<?php
/**
 * Template part for front-page block3
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$block3_images	= get_field('block3_images');
$block3_angled_line	= get_field('block3_angled_line');

?>

<div id="block3">
<?php while (have_rows('block3_images')) : the_row();

// vars
$block3_icon = get_sub_field('block3_icon');
$block3_image = get_sub_field('block3_image');
$block3_location = get_sub_field('block3_location');
$block3_title = get_sub_field('block3_title');
$block3_content = get_sub_field('block3_content');
$block3_cta_url = get_sub_field('block3_cta_url');
$block3_cta_txt = get_sub_field('block3_cta_txt');

?>
	<div class="blockSection" id="<?php echo $block3_location; ?>">
	<div class="titleBlock">
		<div>
	<amp-img 
	class="icon"
  src="<?php echo $block3_icon['url']; ?>"
  width="1"
			height="1"
			layout="responsive"
			alt="<?php echo $block3_icon['alt']; ?>">
		</amp-img>
</div>
<div class="titleSection">
<amp-img 
	class="angle"
  src="<?php echo $block3_angled_line['url']; ?>"
  width="46"
			height="221"
			layout="responsive"
			alt="<?php echo $block3_angled_line['alt']; ?>"
			media="(min-width: 48.6em)"
			>
		</amp-img>
		<h3>
		<?php echo $block3_title; ?>
		</h3>
</div>

</div>
<div class="titleImg">
		<amp-img 
  src="<?php echo $block3_image['url']; ?>"
  width="1"
			height="1"
			layout="responsive"
			alt="<?php echo $block3_image['alt']; ?>">
		</amp-img>
		<p>
		<?php echo $block3_content; ?>
		</p>
		<div class="ctaButton">
			<h5>
				<a href="<?php echo $block3_cta_url; ?>"><?php echo $block3_cta_txt; ?></a>
			</h5>
	</div>
</div>
</div>
<?php endwhile; ?>
	
</div>

