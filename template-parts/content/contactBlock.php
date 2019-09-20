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
        <h3>Showroom</h3>
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
				 <?php echo $contact_us_closed; ?>
				</li>
			</ul>
			
        </div>
        <div id="googleMap">
        <amp-iframe width="600" height="450" layout="responsive" 
			  sandbox="allow-scripts allow-same-origin allow-popups" 
			  frameborder="0" 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.9253453531173!2d-97.97253728514455!3d30.210678117656027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865b46175527c0e7%3A0x535fb8c6947321da!2sSupreme%20Hardwood%20Floors!5e0!3m2!1sen!2sus!4v1568318062947!5m2!1sen!2sus">
    <amp-img layout="fill"
             src="<?php echo get_template_directory_uri() ?>/assets/images/Google-Map-Supreme.jpg"
			 placeholder>
			</amp-img>
  </amp-iframe>
</div>
</div>
<div class="rightBlock">
    <h4> Contact Us</h4>
<amp-iframe width="300" height="300" layout="responsive" 
              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0" 
              src="<?php echo $contact_us_form; ?>">
    <amp-img layout="fill"
             src="<?php echo $cta_loading_image['url']; ?>"
             placeholder></amp-img>
  </amp-iframe>
</div>
</section>