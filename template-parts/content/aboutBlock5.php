<?php
/**
 * Template part for front-page block5
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$about_us_block5_title				= get_field('about_us_block5_title');
$about_us_block5_pre_image_content				= get_field('about_us_block5_pre_image_content');
$about_us_block5_image	= get_field('about_us_block5_image');
$about_us_block5_image_mobile	= get_field('about_us_block5_image_mobile');
$about_us_block5_sub_title	= get_field('about_us_block5_sub_title');
$about_us_block5_content			= get_field('about_us_block5_content');
$about_us_block5_cta			= get_field('about_us_block5_cta');
$about_us_block5_form_url			= get_field('about_us_block5_form_url');
$about_us_cta_loading_image			= get_field('about_us_cta_loading_image');

?>
<div class="preBlock" id="philanthropy">
<h2>
  <?php echo $about_us_block5_title; ?>
  </h2>
  <div class="contentBlock">
    <p>
    <?php echo $about_us_block5_pre_image_content; ?>
    </p>
</div>
</div>
<div id="block1" class="oddBlock">
  <div id="topImg">
  <amp-img 
  src="<?php echo $about_us_block5_image_mobile['url']; ?>"
  width="1536"
			height="768"
			layout="responsive"
      alt="<?php echo $about_us_block5_image_mobile['alt']; ?>"
      media="(max-width: 63.99em)"
      >
    </amp-img>
    <amp-img 
  src="<?php echo $about_us_block5_image['url']; ?>"
  width="6"
			height="6"
			layout="responsive"
      alt="<?php echo $about_us_block5_image['alt']; ?>"
      media="(min-width: 64em)"
      >
		</amp-img>
</div>
<div id="contentBlock">
	<h3>
  <?php echo $about_us_block5_sub_title; ?>
	</h3>
	<p>
	<?php echo $about_us_block5_content; ?>
	</p>
	<amp-lightbox id="my-lightbox" layout="nodisplay">
    <div class="lightbox" on="tap:my-lightbox.close" role="button" tabindex="0">
      
      <amp-iframe width="350" height="300" layout="fixed" 
              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0" 
              src="<?php echo $about_us_block5_form_url; ?>">
    <amp-img layout="fill"
             src="<?php echo $about_us_cta_loading_image['url']; ?>"
             placeholder></amp-img>
  </amp-iframe>
    </div>
  </amp-lightbox>
  <button id="estimate" class="btn btn-lg btn-danger" on="tap:my-lightbox" role="button" tabindex="0"><?php echo $about_us_block5_cta; ?> »</button>
	
</div>
</div>