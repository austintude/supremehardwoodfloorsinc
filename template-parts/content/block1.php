<?php
/**
 * Template part for front-page block1
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$block1_title				= get_field('block1_title');
$block1_content			= get_field('block1_content');
$block1_image	= get_field('block1_image');
$block1_image_mobile	= get_field('block1_image_mobile');
$block1_form_url	= get_field('block1_form_url');
$block1_cta			= get_field('block1_cta');
$cta_loading_image			= get_field('cta_loading_image');

?>

<div id="block1">
  <div id="topImg">
  <amp-img 
  src="<?php echo $block1_image_mobile['url']; ?>"
  width="1536"
			height="768"
			layout="responsive"
      alt="<?php echo $block1_image_mobile['alt']; ?>"
      media="(max-width: 63.99em)"
      >
    </amp-img>
    <amp-img 
  src="<?php echo $block1_image['url']; ?>"
  width="6"
			height="6"
			layout="responsive"
      alt="<?php echo $block1_image['alt']; ?>"
      media="(min-width: 64em)"
      >
		</amp-img>
</div>
<div id="contentBlock">
	<h3>
  <?php echo $block1_title; ?>
	</h3>
	<p>
	<?php echo $block1_content; ?>
	</p>
	<amp-lightbox id="my-lightbox" layout="nodisplay">
    <div class="lightbox" on="tap:my-lightbox.close" role="button" tabindex="0">
      
      <amp-iframe width="350" height="300" layout="fixed" 
              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0" 
              src="<?php echo $block1_form_url; ?>">
    <amp-img layout="fill"
             src="<?php echo $cta_loading_image['url']; ?>"
             placeholder></amp-img>
  </amp-iframe>
    </div>
  </amp-lightbox>
  <button id="estimate" class="btn btn-lg btn-danger" on="tap:my-lightbox" role="button" tabindex="0"><?php echo $block1_cta; ?> »</button>
	<!-- <div class="ctaButton ">
		<h5>
			<a href="#">Get A Free Consultation</a>
		</h5>
</div> -->
</div>
</div>