<?php
/**
 * Template part for front-page block1
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$contact_us_phone			= get_field('contact_us_phone');
$contact_us_phone_link			= get_field('contact_us_phone_link');
$contact_us_street			= get_field('contact_us_street');
$contact_us_city			= get_field('contact_us_city');
$contact_us_state			= get_field('contact_us_state');
$contact_us_zip			= get_field('contact_us_zip');
$contact_us_open_datetime			= get_field('contact_us_open_datetime');
$contact_us_open_days_times			= get_field('contact_us_open_days_times');
$contact_us_closed			= get_field('contact_us_closed');
$contact_us_form			= get_field('contact_us_form');
$cta_loading_image			= get_field('cta_loading_image');

?>

<section id="contactUsBlock">
    <div class="leftBlock" vocab="http://schema.org/" typeof="LocalBusiness">
        <h3>Our Office</h3>
	<section id="physical">
	
        <div id="address">		
            <address property="address" typeof="PostalAddress">
			<h5><?php bloginfo( 'name' ); ?></h5>
            <h5><span property="streetAddress"><?php echo $contact_us_street; ?></span>
            <br>
            <span property="addressLocality"><?php echo $contact_us_city; ?></span>,
            
			<span property="addressRegion"><?php echo $contact_us_state; ?></span> <?php echo $contact_us_zip; ?></h5>
</address>
        </div>
</section>
<div id="phone">
			<span property="telephone"><a href="tel:<?php echo $contact_us_phone_link; ?>"><?php echo $contact_us_phone; ?></a></span>
		</div>
<div id="hours">
	<h4>Hours of Operation</h4>
			<ul>
				<li>
				<time itemprop="openingHours" datetime="<?php echo $contact_us_form; ?>"><?php echo $contact_us_open_days_times; ?></time>
				</li>
				
				<li>
				Closed <?php echo $contact_us_closed; ?>
				</li>
			</ul>
			
		</div>
</div>
<div class="rightBlock">
<amp-iframe width="300" height="300" layout="responsive" 
              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0" 
              src="<?php echo $contact_us_form; ?>">
    <amp-img layout="fill"
             src="<?php echo $cta_loading_image['url']; ?>"
             placeholder></amp-img>
  </amp-iframe>
</div>
</section>