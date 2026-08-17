<?php

	/**
	 * Title: Header Default
	 * Slug: saaslauncher-agency/header-default
	 * Categories: header,saaslauncher-agency-patterns
	 */
	$saaslauncher_agency_url    = trailingslashit( get_stylesheet_directory_uri() );
	$saaslauncher_agency_images = array(
		$saaslauncher_agency_url . 'assets/images/time.png',
		$saaslauncher_agency_url . 'assets/images/icon.png',
	);
	?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":45,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-large"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"style":{"spacing":{"blockGap":"16px"}}} -->
	<!-- wp:home-link /-->
	<!-- wp:page-list /-->
<!-- /wp:navigation -->
</div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-with-arrow-icon"} -->
<div class="wp-block-button is-style-button-with-arrow-icon"><a class="wp-block-button__link wp-element-button">
<?php
	esc_html_e( 'Get Started', 'saaslauncher-agency' );
?>
</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
