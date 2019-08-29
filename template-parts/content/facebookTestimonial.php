<?php
/**
 * Template part for Testimonial Page
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$facebook_testimonials		= get_field('facebook_testimonials');

?>
<section id="testimonialGrid">

<!-- insert acf sub-repeater here -->
  <?php while (have_rows('facebook_testimonials')) : the_row();

// vars
$facebook_testimonial = get_sub_field('facebook_testimonial');
?>
<div class="fbtest">
  <iframe src="<?php echo $facebook_testimonial; ?>" width="500" height="407" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
  </div> 
  <?php endwhile; ?>
   



</div>


  </section>