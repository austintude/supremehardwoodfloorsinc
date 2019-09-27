<?php
/**
 * Template part for front-page block1
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$product_lines			= get_field('product_lines');

?>

<section id="productLinesBlock">

<div class="productBlocks">

<?php while (have_rows('product_lines')) : the_row();

// vars
$product_line_company = get_sub_field('product_line_company');
$product_line_company_logo	 = get_sub_field('product_line_company_logo');
$product_line_link = get_sub_field('product_line_link');
$product_line_collection_title = get_sub_field('product_line_collection_title');
$product_line_items = get_sub_field('product_line_items');

?>

<div class="productItem">

<div class="companyBlock">
<a href="<?php echo $product_line_link; ?>" rel="noreferrer noopener" target="_blank">
<?php if (!empty($product_line_company_logo)) { ?>
<div class="companyLogo">
<amp-img 
src="<?php echo $product_line_company_logo['url']; ?>" 
layout="fixed-height"
height="60"
alt="<?php echo $product_line_company_logo['alt']; ?>">
      </amp-img>
      </div> <!-- .companyLogo -->
<?php } ?>
      <div class="companyName">
      <h3>
      <?php echo $product_line_company; ?>
      </h3>
      </div> <!-- .companyName -->
      </a>
      </div> <!-- .companyBlock -->
     
<div class="collection">
      <div class="collectionTitle">
       <h3> 
           <?php echo $product_line_collection_title; ?>
</h3>
</div> <!-- collectionTitle -->
<div class="collectionList">
      <ul>
      <?php while (have_rows('product_line_items')) : the_row();

// vars
$product_line_item = get_sub_field('product_line_item');
$product_line_item_image	 = get_sub_field('product_line_item_image');
?>
<li>
      <div class="lineItem">
      <?php echo $product_line_item; ?>
</div> <!-- .lineItem -->

<?php if (!empty($product_line_item_image)) { ?>
<div class="lineItemThumb">

<amp-img 
src="<?php echo $product_line_item_image['url']; ?>" 
layout="flex-item"
alt="<?php echo $product_line_item_image['alt']; ?>">
      </amp-img>
</div> <!-- .lineItemThumb -->
<?php } ?>

</li>
<?php endwhile; ?>
</ul>
</div> <!-- .collectionList -->
</div>
</div> <!-- end -->
<?php endwhile; ?>
</div>
</section>