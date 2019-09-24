<?php
/**
 * Template part for front-page block3
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$block4_location_icon				= get_field('block4_location_icon');
$block4_phone_icon				= get_field('block4_phone_icon');
$block4_mail_icon				= get_field('block4_mail_icon');
$block4_amp_iframe_placeholder				= get_field('block4_amp_iframe_placeholder');
$block4_subscribe_form				= get_field('block4_subscribe_form');



?>

<div id="block4" vocab="http://schema.org/" typeof="LocalBusiness">
	<div id="findUs">
			<div id="mapIcon">
					<amp-img 
						class="icon"
						src="<?php echo $block4_location_icon['url']; ?>"
						width="120"
						height="120"
						layout="intrinsic"
						alt="<?php echo $block4_location_icon['alt']; ?>">
					</amp-img> 
				
					<h4>Find Us</h4>
			</div>
			<div class="secondLine">
			<address property="address" typeof="PostalAddress">
			<div id="address">
			<h5><span property="streetAddress">12010 W Highway 290 Suite 250</span>,
			<span property="addressLocality">Austin</span>,
			<span property="addressRegion">TX</span> 78737</h5>
		</div>
		</div>
	</div>
	<div id="phone">
		<div id="phoneIcon">
			<a href="tel:5122885545">
				<amp-img 
					class="icon"
					src="<?php echo $block4_phone_icon['url']; ?>"
					width="120"
					height="120"
					layout="intrinsic"
					alt="<?php echo $block4_phone_icon['alt']; ?>">
				</amp-img> 
			</a>
			<a href="tel:5122885545">	
				<h4>Call Us</h4>
			</a>
		</div>
		<div class="secondLine">
		<h5>Mon-Fri 8am-5pm CST <span property="telephone"><a href="tel:5122885545">(512) 288-5545</a></span></h5>
		</div>
	</div>
	<div id="subscribe">
		<div id="envelopeIcon">
				<amp-img 
					src="<?php echo $block4_mail_icon['url']; ?>"
					width="120"
					height="120"
					layout="intrinsic"
					alt="<?php echo $block4_mail_icon['alt']; ?>">
				</amp-img> 
				<h4>Newsletter Subscription *</h4>
		</div>
		<div class="secondLine" id="ctaIframe">
			<amp-iframe 
				width="360" 
				height="150" 
				layout="fixed" 
				sandbox="allow-scripts allow-same-origin allow-popups" 
				frameborder="0" 
				src="<?php echo $block4_subscribe_form; ?>"
				media="(max-width: 43.5em) and (min-height:27em)"
				>
				<amp-img layout="fill"
					src="<?php echo $block4_amp_iframe_placeholder['url']; ?>"
					placeholder>
				</amp-img>
			</amp-iframe>
			<amp-iframe 
				width="580" 
				height="110" 
				layout="fixed" 
				sandbox="allow-scripts allow-same-origin allow-popups" 
				frameborder="0" 
				src="<?php echo $block4_subscribe_form; ?>"
				media="(max-width: 43.5em) and (max-height:26em)"
				>
				<amp-img layout="fill"
					src="<?php echo $block4_amp_iframe_placeholder['url']; ?>"
					placeholder>
				</amp-img>
			</amp-iframe>
			<amp-iframe 
				width="610" 
				height="110" 
				layout="fixed" 
				sandbox="allow-scripts allow-same-origin allow-popups" 
				frameborder="0" 
				src="<?php echo $block4_subscribe_form; ?>"
				media="(min-width: 43.6em) and (min-height:27em) and (max-width: 48.5em)"
				>
				<amp-img layout="fill"
					src="<?php echo $block4_amp_iframe_placeholder['url']; ?>"
					placeholder>
				</amp-img>
			</amp-iframe>
			<amp-iframe 
				width="310" 
				height="150" 
				layout="fixed" 
				sandbox="allow-scripts allow-same-origin allow-popups" 
				frameborder="0" 
				src="<?php echo $block4_subscribe_form; ?>"
				media="(min-width: 48.6em)"
				>
				<amp-img layout="fill"
					src="<?php echo $block4_amp_iframe_placeholder['url']; ?>"
					placeholder>
				</amp-img>
			</amp-iframe>
		</div>
  
	</div>
</div>

