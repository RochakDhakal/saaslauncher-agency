<?php

/**
 * Title: Services
 * Slug: saaslauncher-agency/services
 * Categories: saaslauncher-agency-patterns
 */
$saaslauncher_agency_url    = trailingslashit( get_stylesheet_directory_uri() );
$saaslauncher_agency_images = array(
	$saaslauncher_agency_url . 'assets/images/service-icon-1.png',
	$saaslauncher_agency_url . 'assets/images/service-icon-2.png',
	$saaslauncher_agency_url . 'assets/images/services-1.png',
	$saaslauncher_agency_url . 'assets/images/services-2.png',
);
?>
<!-- wp:group {"metadata":{"patternName":"saaslauncher-agency/services","name":"Services","categories":["saaslauncher-agency-patterns"]},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"","layout":{"type":"constrained","contentSize":"540px","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"},"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"small","borderColor":"border-color"} -->
<p class="has-border-color has-border-color-border-color has-heading-color-color has-text-color has-link-color has-small-font-size" style="border-width:1px;border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)">
<?php
	esc_html_e( 'Analytics & Reporting', 'saaslauncher-agency' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"heading-color","fontSize":"jumbo"} -->
<h2 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-jumbo-font-size" style="font-style:normal;font-weight:700">
<?php
	esc_html_e( 'Intelligent Insights at Your Fingertips', 'saaslauncher-agency' );
?>
</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">
<?php
	esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'saaslauncher-agency' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"260px","justifyContent":"left"}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:50%"><!-- wp:image {"id":240,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $saaslauncher_agency_images[0] ); ?>" alt="" class="wp-image-240" style="object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40)">
<?php
	esc_html_e( 'Scheduled & Real-Time Reporting', 'saaslauncher-agency' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"12px"}}},"fontSize":"normal"} -->
<p class="has-normal-font-size" style="margin-top:12px">
<?php
	esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor,', 'saaslauncher-agency' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"260px","justifyContent":"left"}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:50%"><!-- wp:image {"id":240,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $saaslauncher_agency_images[1] ); ?>" alt="" class="wp-image-240" style="object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40)">
<?php
	esc_html_e( 'AI-Based Deep Productive Analysis', 'saaslauncher-agency' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"12px"}}},"fontSize":"normal"} -->
<p class="has-normal-font-size" style="margin-top:12px">
<?php
	esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor,', 'saaslauncher-agency' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url( $saaslauncher_agency_images[2] ); ?>","id":252,"dimRatio":0,"isUserOverlayColor":true,"minHeight":550,"sizeSlug":"full","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;min-height:550px"><img class="wp-block-cover__image-background wp-image-252 size-full" alt="" src="<?php echo esc_url( $saaslauncher_agency_images[2] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"120px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:120px"><!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained","contentSize":"540px","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url( $saaslauncher_agency_images[3] ); ?>","id":258,"dimRatio":0,"isUserOverlayColor":true,"minHeight":550,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;min-height:550px"><img class="wp-block-cover__image-background wp-image-258 size-full" alt="" src="<?php echo esc_url( $saaslauncher_agency_images[3] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","layout":{"type":"constrained","contentSize":"540px"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"},"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"small","borderColor":"border-color"} -->
<p class="has-border-color has-border-color-border-color has-heading-color-color has-text-color has-link-color has-small-font-size" style="border-width:1px;border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)">
<?php
	esc_html_e( 'Growth & Scaling', 'saaslauncher-agency' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"heading-color","fontSize":"jumbo"} -->
<h2 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-jumbo-font-size" style="font-style:normal;font-weight:700">
<?php
	esc_html_e( 'Unmatched Flexibility and Scalability!', 'saaslauncher-agency' );
?>
</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">
<?php
	esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'saaslauncher-agency' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"className":"is-style-button-with-arrow-icon"} -->
<div class="wp-block-button is-style-button-with-arrow-icon"><a class="wp-block-button__link wp-element-button">
<?php
	esc_html_e( 'Learn More', 'saaslauncher-agency' );
?>
</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->