<?php

/**
 * Title: Brand Showcase
 * Slug: saaslauncher-agency/brand-showcase
 * Categories:  saaslauncher-agency-patterns
 */
$saaslauncher_agency_url        = trailingslashit( get_stylesheet_directory_uri() );
	$saaslauncher_agency_images = array(
		$saaslauncher_agency_url . 'assets/images/brand-1.png',
		$saaslauncher_agency_url . 'assets/images/brand-2.png',
		$saaslauncher_agency_url . 'assets/images/brand-3.png',
		$saaslauncher_agency_url . 'assets/images/brand-4.png',
		$saaslauncher_agency_url . 'assets/images/brand-5.png',
		$saaslauncher_agency_url . 'assets/images/brand-6.png',
	);
	?>
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-agency-patterns"],"patternName":"saaslauncher-agency/brand-showcase","name":"Brand Showcase"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|border-color","style":"solid","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border-color","style":"solid","width":"1px"},"left":{"width":"0px","style":"none"}}},"gradient":"gradient-2","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group has-gradient-2-gradient-background has-background" style="border-top-color:var(--wp--preset--color--border-color);border-top-style:solid;border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-style:solid;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="text-transform:uppercase">
<?php
	esc_html_e( 'Trusted by innovative companies worldwide', 'saaslauncher-agency' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"},"margin":{"top":"var:preset|spacing|60","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":159,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $saaslauncher_agency_images[0] ); ?>" alt="" class="wp-image-159"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":160,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $saaslauncher_agency_images[1] ); ?>" alt="" class="wp-image-160"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":161,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $saaslauncher_agency_images[2] ); ?>" alt="" class="wp-image-161"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":162,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $saaslauncher_agency_images[3] ); ?>" alt="" class="wp-image-162"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":163,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $saaslauncher_agency_images[4] ); ?>" alt="" class="wp-image-163"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":164,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $saaslauncher_agency_images[5] ); ?>" alt="" class="wp-image-164"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->