<?php
/**
 * Plugin Name: Better SEO
 * Plugin URI: http://cloudstuffs.com
 * Description: This plugin adds some Open Graph tags to our single posts.
 * Version: 1.0.0
 * Author: Faizan Ayubi
 * Author URI: http://swiftdeal.org/member/faizan
 * License: GPL2
 */

add_action( 'wp_head', 'betterSEO' );
function betterSEO() {
	if( is_single() ) {
	?>
		<meta property="og:title" content="<?php the_title() ?>" />
		<meta property="og:site_name" content="<?php bloginfo( 'name' ) ?>" />
		<meta property="og:url" content="<?php the_permalink() ?>" />
		<meta property="og:description" content="<?php the_excerpt() ?>" />
		<meta property="og:type" content="article" />
    
		<?php 
			if ( has_post_thumbnail() ) :
				$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); 
		?>
			<meta property="og:image" content="<?php echo $image[0]; ?>"/>  
		<?php endif; ?>
  <?php
  }
}