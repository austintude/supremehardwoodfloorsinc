<?php
/**
 * Template part for front-page block1
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;



?>

<section id="productLinesBlock">

<?php $loop = new WP_Query( array( 'post_type' => 'productlines', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
			
                <?php while( $loop->have_posts() ) : $loop->the_post(); 
                
                ?>
               
               <div class="galleryBlocks">
<?php 
$product_line_title = get_field('product_line_title');
$product_line_desc = get_field('product_line_desc');
$product_line_img = get_field('product_line_img');
$product_line_link = get_field('product_line_link');
?>

<div id="gallery-<?php echo $product_line_title; ?>" class="galleryItem">
<img 
src="<?php echo $product_line_img['url']; ?>" 
width="400" 
height="300"
layout="responsive"
alt="<?php echo $product_line_img['alt']; ?>"
/>
     
	

</div>
		
	
<div class="categoryTitle" id="category-<?php echo $product_line_title; ?>">
       <h3> 
           <?php echo $product_line_desc; ?>
</h3>
</div>
</div>

<?php 
endwhile; 
wp_reset_query(); 
?>
</section>