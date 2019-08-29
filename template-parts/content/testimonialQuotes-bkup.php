<?php
/**
 * Template part for front-page block1
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$facebook_testimonials		= get_field('facebook_testimonials');

?>

<section id="testimonialsBlock">
    <ol class="testimonialsList testimonialsList">

            <!-- <li>
            <blockquote class="blockquote testimonialsCard emphasized">
                <div class="testimonialsContent h3">
                <div class="testimonialsMedia">
                    <img src="https://cdn.dribbble.com/assets/testimonials/haraldur-thorleifsson-3d7c4231b37800e4470a4f38dae39cb869860e7f067972081b311243933b4114.jpg" alt="Haraldur thorleifsson">
                </div>
                <p>There is absolutely no doubt in my mind that without Dribbble, I would not have been able to make the jump to Ueno, a digital agency I started in 2014. The work I got through Dribbble made it possible for me to have something to build on. We now have about 45 people on our team, a lot of whom we found and recruited through Dribbble.</p>
                </div>
                <cite class="testimonialsQuote">
                <picture>
    <source srcset="https://cdn.dribbble.com/users/40433/avatars/normal/41b86a77ca368dd4a969397ef39ba9a6.png?1472167036" media="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx)">
    <source srcset="https://cdn.dribbble.com/users/40433/avatars/small/41b86a77ca368dd4a969397ef39ba9a6.png?1472167036">
    <img class="photo" alt="ueno." src="https://cdn.dribbble.com/users/40433/avatars/small/41b86a77ca368dd4a969397ef39ba9a6.png?1472167036">
    </picture>

                <span><a href="/ueno">ueno.</a></span>
                </cite>
            </blockquote>
            </li> -->
<!-- insert acf sub-repeater here -->
<?php while (have_rows('facebook_testimonials')) : the_row();

// vars
$facebook_testimonial = get_sub_field('facebook_testimonial');
?>
            <li>
            <blockquote class="blockquote testimonialsCard">
                <p class="testimonialsContent">
                <?php echo $facebook_testimonial; ?>
                </p>
                <cite class="testimonialsQuote">
                <?php echo $facebook_testimonial; ?>
                </cite>
            </blockquote>
            </li>
    </ol>
</section>