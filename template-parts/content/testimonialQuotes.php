<?php
/**
 * Template part for front-page block1
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$testimonial_quotes				= get_field('testimonial_quotes');
// insert acf repeater here

?>

<section id="testimonialsBlock">
    <ol class="testimonialsList testimonialsList">
        <!-- insert acf sub-repeater here -->
  <?php while (have_rows('testimonial_quotes')) : the_row();

// vars
$testimonial_quote = get_sub_field('testimonial_quote');
$testimonial_author = get_sub_field('testimonial_author');
?>
            <li>
            <blockquote class="blockquote testimonialsCard">
                <p class="testimonialsContent">
             <?php echo $testimonial_quote; ?>
                </p>
                <cite class="testimonialsQuote">
                <?php echo $testimonial_author; ?>
                </cite>
            </blockquote>
            </li>
            <?php endwhile; ?>
    </ol>
</section>