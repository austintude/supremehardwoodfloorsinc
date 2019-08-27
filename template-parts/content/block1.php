<?php
/**
 * Template part for front-page block1
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div id="block1">
  <div id="topImg">
  <amp-img 
  src="../wp-content/themes/wprig-supremehardwoodfloorsinc/assets/images/floor-sample-min.jpg"
  width="1536"
			height="768"
			layout="responsive"
      alt="floor-sample-min"
      media="(max-width: 63.99em)"
      >
    </amp-img>
    <amp-img 
  src="../wp-content/themes/wprig-supremehardwoodfloorsinc/assets/images/floor-sample-square.jpg"
  width="6"
			height="6"
			layout="responsive"
      alt="floor-sample-square"
      media="(min-width: 64em)"
      >
		</amp-img>
</div>
<div id="contentBlock">
	<h3>
		The Fine Art of Luxury
	</h3>
	<p>
	This is a fantastic little painting. When things happen - enjoy them. They're little gifts. Get tough with it, get strong. 
	</p>
	<amp-lightbox id="my-lightbox" layout="nodisplay">
    <div class="lightbox" on="tap:my-lightbox.close" role="button" tabindex="0">
      
      <amp-iframe width="350" height="300" layout="fixed" 
              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0" 
              src="https://page.co/qQY60">
    <amp-img layout="fill"
             src="../wp-content/themes/supremehardwoodfloorsinc/assets/images/supreme-hardwood-floors-form-loading.png"
             placeholder></amp-img>
  </amp-iframe>
    </div>
  </amp-lightbox>
  <button id="estimate" class="btn btn-lg btn-danger" on="tap:my-lightbox" role="button" tabindex="0">Get your free estimate now! »</button>
	<!-- <div class="ctaButton ">
		<h5>
			<a href="#">Get A Free Consultation</a>
		</h5>
</div> -->
</div>
</div>