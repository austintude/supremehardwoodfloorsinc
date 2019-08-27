<?php
/**
 * Template Name: About Page Template
 *
 * When active, by adding the heading above and providing a custom name
 * this template becomes available in a drop-down panel in the editor.
 *
 * Filename can be anything.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-custom-page-templates-for-global-use
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header('custom');

wp_rig()->print_styles( 'wp-rig-content' );

?>
	<main id="primary" class="site-main">
		<?php 
			get_template_part( 'template-parts/content/aboutBlock1' );
			get_template_part( 'template-parts/content/aboutBlock2' );
			get_template_part( 'template-parts/content/aboutBlock3' );
			get_template_part( 'template-parts/content/aboutBlock4' );
			get_template_part( 'template-parts/content/aboutBlock5' );
		?>
		
	</main><!-- #primary -->
<?php
get_footer();
