<?php

/**
 * Title: Brand Showcase
 * Slug: saaslauncher-agency/brand-showcase
 * Categories: saaslauncher-agency-patterns
 */
$saaslauncher_agency_url    = trailingslashit( get_stylesheet_directory_uri() );
$saaslauncher_agency_images = array(
	$saaslauncher_agency_url . 'assets/images/logo-1.png',
	$saaslauncher_agency_url . 'assets/images/logo-2.png',
	$saaslauncher_agency_url . 'assets/images/logo-3.png',
	$saaslauncher_agency_url . 'assets/images/logo-4.png',
	$saaslauncher_agency_url . 'assets/images/logo-5.png',
);

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"backgroundColor":"secondary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center"><?php
	esc_html_e('Recognized and Trusted by Top Companies', 'saaslauncher-agency');
?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"58px"},"blockGap":{"top":"16px","left":"24px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:58px"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":139,"width":"413px","height":"auto","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="
<?php
	echo esc_url( $saaslauncher_agency_images[0] );
?>
" alt="" class="wp-image-139" style="width:413px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":139,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="
<?php
	echo esc_url( $saaslauncher_agency_images[1] );
?>
" alt="" class="wp-image-139"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":139,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="
<?php
	echo esc_url( $saaslauncher_agency_images[2] );
?>
" alt="" class="wp-image-139"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":139,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="
<?php
	echo esc_url( $saaslauncher_agency_images[3] );
?>
" alt="" class="wp-image-139"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":139,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="
<?php
	echo esc_url( $saaslauncher_agency_images[4] );
?>
" alt="" class="wp-image-139"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":139,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="
<?php
	echo esc_url( $saaslauncher_agency_images[2] );
?>
" alt="" class="wp-image-139"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->