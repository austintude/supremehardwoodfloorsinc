





NOT CURRENTLY WORKING!












<?php
/**
 * Template Name: Blog Page Template
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

get_header('blog');

wp_rig()->print_styles( 'wp-rig-content' );

?>
<main id="primary" class="site-main">
<?php
	
	function get_posts( $args = null ) {
    $defaults = array(
        'numberposts'      => 5,
        'category'         => 0,
        'orderby'          => 'date',
        'order'            => 'DESC',
        'include'          => array(),
        'exclude'          => array(),
        'meta_key'         => '',
        'meta_value'       => '',
        'post_type'        => 'post',
        'suppress_filters' => true,
    );
 
    $r = wp_parse_args( $args, $defaults );
    if ( empty( $r['post_status'] ) ) {
        $r['post_status'] = ( 'attachment' == $r['post_type'] ) ? 'inherit' : 'publish';
    }
    if ( ! empty( $r['numberposts'] ) && empty( $r['posts_per_page'] ) ) {
        $r['posts_per_page'] = $r['numberposts'];
    }
    if ( ! empty( $r['category'] ) ) {
        $r['cat'] = $r['category'];
    }
    if ( ! empty( $r['include'] ) ) {
        $incposts            = wp_parse_id_list( $r['include'] );
        $r['posts_per_page'] = count( $incposts );  // only the number of posts included
        $r['post__in']       = $incposts;
    } elseif ( ! empty( $r['exclude'] ) ) {
        $r['post__not_in'] = wp_parse_id_list( $r['exclude'] );
    }
 
    $r['ignore_sticky_posts'] = true;
    $r['no_found_rows']       = true;
 
    $get_posts = new WP_Query;
    return $get_posts->query( $r );
 
}
?>
	<?php
		if ( have_posts() ) {

			get_template_part( 'template-parts/content/page_header' );

			while ( have_posts() ) {
				the_post();

				get_template_part( 'template-parts/content/entry', get_post_type() );
			}

			if ( ! is_singular() ) {
				get_template_part( 'template-parts/content/pagination' );
			}
		} else {
			get_template_part( 'template-parts/content/error' );
		}
		?>
        
	</main><!-- #primary -->
<?php
get_sidebar();
get_footer();
