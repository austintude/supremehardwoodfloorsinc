<?php
/**
 * Template part for Gallery
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$gallery_images	= get_field('gallery_images');

?>
<div class="galleryBlocks">
<?php while (have_rows('gallery_images')) : the_row();

// vars
$gallery_category = get_sub_field('gallery_category');
$gallery_category_id = get_sub_field('gallery_category_id');
$gallery_category_title = get_sub_field('gallery_category_title');
$gallery_category_image = get_sub_field('gallery_category_image');
$gallery_category_image_caption = get_sub_field('gallery_category_image_caption');
$gallery_category_content = get_sub_field('gallery_category_content');
?>

<div id="gallery-<?php echo $gallery_category_id; ?>" class="galleryItem">
<amp-img lightbox="<?php echo $gallery_category_id; ?>" amp-lightbox-group="<?php echo $gallery_category_id; ?>" src="<?php echo $gallery_category_image['url']; ?>" width="400" height="300" layout="responsive"
aria-describedby="<?php echo $gallery_category_id; ?>">
      </amp-img>
      <div hidden id="<?php echo $gallery_category_id; ?>">
        <?php echo $gallery_category_image_caption; ?>
</div>
<div hidden>
	
		<?php while (have_rows('gallery_category')) : the_row();

// vars
$gallery_image_mobile = get_sub_field('gallery_image_mobile');
$gallery_image_ipad_landscape_plus = get_sub_field('gallery_image_ipad_landscape_plus');
$gallery_image_caption = get_sub_field('gallery_image_caption');
$gallery_image_caption_id = get_sub_field('gallery_image_caption_id');
?>
	
<div>
		<amp-img 
  src="<?php echo $gallery_image_ipad_landscape_plus['url']; ?>"
  width="640"
			height="480"
			layout="responsive"
            alt="<?php echo $gallery_image_ipad_landscape_plus['alt']; ?>"
            lightbox="<?php echo $gallery_category_id; ?>"
            aria-describedby="<?php echo $gallery_image_caption_id; ?>"
            >
        </amp-img>
        <div hidden id="<?php echo $gallery_image_caption_id; ?>">
        <?php echo $gallery_image_caption; ?>
</div>
</div> 
		
	
	<?php endwhile; ?>
</div><!-- close hidden div -->
<div class="categoryTitle" id="category-<?php echo $gallery_category_id; ?>">
       <h3> 
           <?php echo $gallery_category_content; ?>
</h3>
</div>
</div> <!-- end -->
<?php endwhile; ?>
</div>