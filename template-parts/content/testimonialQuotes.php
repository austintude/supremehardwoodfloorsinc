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
$testimonial_date = get_sub_field('testimonial_date');
$overall = get_sub_field('overall');
$price = get_sub_field('price');
$quality = get_sub_field('quality');
$responsiveness = get_sub_field('responsiveness');
$punctuality = get_sub_field('punctuality');
$professionalism = get_sub_field('professionalism');
?>
            <li>
            <blockquote class="blockquote testimonialsCard" itemscope itemtype="http://schema.org/Review">
                <div class="testimonialsContent">
                    <span itemprop="itemReviewed" itemtype="http://schema.org/localBusiness">
                    <p itemprop="reviewBody">
                      <?php echo $testimonial_quote; ?>
                    </p>
</span>
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
                                    <span class="rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                                        <meta itemprop="worstRating" content="0">
                                            <span itemprop="ratingValue">
                                            <?php echo $overall; ?>
                                            </span> / 
                                            <span itemprop="bestRating">
                                            <?php echo $overall; ?> 
                                                </span>
                                    </span>
                                        </div>
                                </li>
                                <li>
                                <div class="leftItem">
                                    Price: 
                                    </div>
                                    <div class="rightItem">
                                    <span class="rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                                        <meta itemprop="worstRating" content="0">
                                            <span itemprop="ratingValue">
                                            <?php echo $price; ?>
                    </span> 
                    / 
                                                <span itemprop="bestRating">
                                                    
                                        <?php echo $price; ?>
                    </span>
                    </span>
                    </div>
                                </li>
                                <li>
                                <div class="leftItem">
                                    Quality: 
                                    </div>
                                    <div class="rightItem">
                                    <span class="rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                                        <meta itemprop="worstRating" content="0">
                                            <span itemprop="ratingValue">
                                            <?php echo $quality; ?>
                    </span> / 
                    <span itemprop="bestRating">
                    <?php echo $quality; ?>
                    </span>
                    </span>
                                        </div>
                                </li>
                                <li>
                                <div class="leftItem">
                                    Responsiveness: 
                                    </div>
                                    <div class="rightItem">
                                    <span class="rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                                        <meta itemprop="worstRating" content="0">
                                            <span itemprop="ratingValue">
                                            <?php echo $responsiveness; ?>
                    </span> / 
                    <span itemprop="bestRating">
                                                    
                                        <?php echo $responsiveness; ?>
                    </span>
                    </span>
                                        </div>
                                </li>
                                <li>
                                <div class="leftItem">
                                    Punctuality: 
                                    </div>
                                    <div class="rightItem">
                                    <span class="rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                                        <meta itemprop="worstRating" content="0">
                                            <span itemprop="ratingValue">
                                            <?php echo $punctuality; ?>
                    </span> / 
                    <span itemprop="bestRating">
                                                    
                                        <?php echo $punctuality; ?>
                    </span>
                    </span>
                                        </div>
                                </li>
                                <li>
                                <div class="leftItem">
                                    Professionalism: 
                                    </div>
                                    <div class="rightItem">
                                    <span class="rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                                        <meta itemprop="worstRating" content="0">
                                            <span itemprop="ratingValue">
                                            <?php echo $professionalism; ?>
                    </span> / 
                    <span itemprop="bestRating">
                                                    
                                        <?php echo $professionalism; ?>
                    </span>
                    </span>
                                        </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <cite class="testimonialsQuote">
                    <span itemprop="author" itemscope itemtype="http://schema.org/Person">
                    <?php echo $testimonial_author; ?>
                    </span> - 
                    <span class="testimonialLocation">
                        <?php echo $testimonial_location; ?>
                    </span> - 
                    <meta itemprop="datePublished" content="<?php echo $testimonial_date; ?>">
                    <span class="testimonialDate">
                        <?php echo $testimonial_date; ?>
                    </span>

                </cite>
                
            </blockquote>
            
                
            </li>
            <?php endwhile; ?>
    </ol>
</section>