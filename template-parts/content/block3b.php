<?php
/**
 * Template part for front-page block3
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$block3b_linkedicons				= get_field('block3b_linkedicons');

?>

<div id="block3b">
	<div class="cell">
	<?php while (have_rows('block3b_linkedicons')) : the_row();

// vars
$block3b_linkedicon = get_sub_field('block3b_linkedicon');
$block3b_linkedicon_link = get_sub_field('block3b_linkedicon_link');
?>
		<div class="cellIcon">
			<a href="<?php echo $block3b_linkedicon_link; ?>" target="_blank" title="<?php echo $block3b_linkedicon['alt']; ?>" rel="noopener">
				<amp-img 
					src="<?php echo $block3b_linkedicon['url']; ?>"
					layout="intrinsic"
					width="100"
					height="100"
					alt="<?php echo $block3b_linkedicon['alt']; ?>"
					>
				</amp-img>
			</a>
		</div>  
		<?php endwhile; ?>
	</div>
</div>

