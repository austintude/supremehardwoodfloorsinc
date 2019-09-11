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
$description_of_work = get_sub_field('description_of_work');
$testimonial_location = get_sub_field('testimonial_location');
$overall = get_sub_field('overall');
$price = get_sub_field('price');
$quality = get_sub_field('quality');
$responsiveness = get_sub_field('responsiveness');
$punctuality = get_sub_field('punctuality');
$professionalism = get_sub_field('professionalism');
?>
            <li>
            <blockquote class="blockquote testimonialsCard">
                <div class="testimonialsContent">
                    <p>
                      <?php echo $testimonial_quote; ?>
                    </p>
                    <?php if ($description_of_work != null) { ?>
                    <div class="testimonialContentBlocks">
                        <div class="leftBlock">
                            <h4>Description of Work:</h4>
                            <h5><?php echo $description_of_work; ?></h5>
                        </div>
                        <div class="rightBlock">
                            <ul>
                                <li>
                                    <div class="leftItem">
                                    Overall: 
                                    </div>
                                    <div class="rightItem">
                                        <?php echo $overall; ?>
                                        </div>
                                </li>
                                <li>
                                <div class="leftItem">
                                    Price: 
                                    </div>
                                    <div class="rightItem">
                                        <?php echo $price; ?>
                    </div>
                                </li>
                                <li>
                                <div class="leftItem">
                                    Quality: 
                                    </div>
                                    <div class="rightItem">
                                        <?php echo $quality; ?>
                                        </div>
                                </li>
                                <li>
                                <div class="leftItem">
                                    Responsiveness: 
                                    </div>
                                    <div class="rightItem">
                                        <?php echo $responsiveness; ?>
                                        </div>
                                </li>
                                <li>
                                <div class="leftItem">
                                    Punctuality: 
                                    </div>
                                    <div class="rightItem">
                                        <?php echo $punctuality; ?>
                                        </div>
                                </li>
                                <li>
                                <div class="leftItem">
                                    Professionalism: 
                                    </div>
                                    <div class="rightItem">
                                        <?php echo $professionalism; ?>
                                        </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <cite class="testimonialsQuote">
                    <?php echo $testimonial_author; ?> - 
                    <span class="testimonialLocation">
                        <?php echo $testimonial_location; ?>
                    </span>
                </cite>
                
            </blockquote>
            
                
            </li>
            <?php endwhile; ?>
    </ol>
</section>