<?php
/**
 * Template part for front-page block2
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$about_us_block2_title				= get_field('about_us_block2_title');
$about_us_block2_pre_image_content				= get_field('about_us_block2_pre_image_content');
$about_us_block2_image	= get_field('about_us_block2_image');
$about_us_block2_image_mobile	= get_field('about_us_block2_image_mobile');
$about_us_block2_sub_title	= get_field('about_us_block2_sub_title');
$about_us_block2_content			= get_field('about_us_block2_content');
$about_us_block2_cta			= get_field('about_us_block2_cta');
$about_us_block2_form_url			= get_field('about_us_block2_form_url');
$about_us_cta_loading_image			= get_field('about_us_cta_loading_image');

?>
<div class="preBlock" id="team">
  <h2>
  <?php echo $about_us_block2_title; ?>
  </h2>
  <div class="contentBlock">
  <span class="blockContent">
    <?php echo $about_us_block2_pre_image_content; ?>
</span>
</div>
</div>
<div id="block1" class="evenBlock">
  
<div id="contentBlock">
	<h3>
  <?php echo $about_us_block2_sub_title; ?>
	</h3>
	<span class="blockContent">
	<?php echo $about_us_block2_content; ?>
</span>
	<amp-lightbox id="my-lightbox" layout="nodisplay">
    <div class="lightbox" on="tap:my-lightbox.close" role="button" tabindex="0">
      
      <amp-iframe width="350" height="300" layout="fixed" 
              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0" 
              src="<?php echo $about_us_block2_form_url; ?>">
    <amp-img layout="fill"
             src="<?php echo $about_us_cta_loading_image['url']; ?>"
             placeholder></amp-img>
  </amp-iframe>
    </div>
  </amp-lightbox>
  <button id="estimate" class="btn btn-lg btn-danger" on="tap:my-lightbox" role="button" tabindex="0"><?php echo $about_us_block2_cta; ?> »</button>
	<!-- <div class="ctaButton ">
		<h5>
			<a href="#">Get A Free Consultation</a>
		</h5>
</div> -->
</div>
<div id="topImg">
  <amp-img 
  src="<?php echo $about_us_block2_image_mobile['url']; ?>"
  width="412"
			height="320"
			layout="responsive"
      alt="<?php echo $about_us_block2_image_mobile['alt']; ?>"
      media="(max-width: 63.99em)"
      >
    </amp-img>
    <amp-img 
  src="<?php echo $about_us_block2_image['url']; ?>"
  width="832"
			height="512"
			layout="responsive"
      alt="<?php echo $about_us_block2_image['alt']; ?>"
      media="(min-width: 64em)"
      >
		</amp-img>
</div>
</div>