<?php

/**
 * Title: CTA
 * Slug: saaslauncher-agency/cta
 * Categories: saaslauncher-agency-patterns
 */
$saaslauncher_agency_url    = trailingslashit( get_stylesheet_directory_uri() );
$saaslauncher_agency_images = array(
	$saaslauncher_agency_url . 'assets/images/cta.png',
);

?>
<!-- wp:group {"metadata":{"patternName":"saaslauncher-agency/cta","name":"CTA","categories":["saaslauncher-agency-patterns"]},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"120px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:cover {"url":"<?php echo esc_url( $saaslauncher_agency_images[0] ); ?>","id":462,"isUserOverlayColor":true,"minHeight":500,"gradient":"gradient-3","sizeSlug":"large","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"860px"}} -->
<div class="wp-block-cover" style="border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;margin-top:0;margin-bottom:0;min-height:500px"><img class="wp-block-cover__image-background wp-image-462 size-large" alt="" src="<?php echo esc_url( $saaslauncher_agency_images[0] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-gradient-3-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center">
<?php
	esc_html_e( 'Try It Free. Scale When You’re Ready.', 'saaslauncher-agency' );
?>
</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--50)">
<?php
	esc_html_e( 'Get your website live fast with scalable SaaS tools designed to maximize performance and fuel seamless, sustainable business growth.', 'saaslauncher-agency' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-with-arrow-icon"} -->
<div class="wp-block-button is-style-button-with-arrow-icon"><a class="wp-block-button__link wp-element-button">
<?php
	esc_html_e( 'Try For Free', 'saaslauncher-agency' );
?>
</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->