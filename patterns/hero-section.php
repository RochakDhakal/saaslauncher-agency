<?php

/**
 * Title: Hero Section
 * Slug: saaslauncher-agency/hero-section
 * Categories: saaslauncher-agency-patterns
 */
$saaslauncher_agency_url    = trailingslashit( get_stylesheet_directory_uri() );
$saaslauncher_agency_images = array(
	$saaslauncher_agency_url . 'assets/images/star.png',
	$saaslauncher_agency_url . 'assets/images/hero.png',
);
?>
<!-- wp:group {"metadata":{"patternName":"saaslauncher-agency/hero-section","name":"Hero Section","categories":["saaslauncher-agency-patterns"]},"style":{"spacing":{"padding":{"top":"120px","bottom":"120px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"secondary","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"950px"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-default","layout":{"type":"constrained","contentSize":"400px"}} -->
<div class="wp-block-group is-style-default"><!-- wp:group {"style":{"spacing":{"blockGap":"8px","margin":{"top":"0","bottom":"0"},"padding":{"right":"12px","left":"12px","top":"6px","bottom":"6px"}},"border":{"color":"#ffffff30","width":"1px","style":"solid","radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"}}},"backgroundColor":"transparent","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color has-transparent-background-color has-background" style="border-color:#ffffff30;border-style:solid;border-width:1px;border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px;margin-top:0;margin-bottom:0;padding-top:6px;padding-right:12px;padding-bottom:6px;padding-left:12px"><!-- wp:image {"id":33,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|light-shade"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $saaslauncher_agency_images[0] ); ?>" alt="" class="wp-image-33"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"left"}}} -->
<p class="has-text-align-left">
<?php
	esc_html_e( '4.9 Ratings based on 1,000+ reviews', 'saaslauncher-agency' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"is-style-default","style":{"typography":{"textAlign":"center","fontStyle":"normal","fontWeight":"600"}},"fontSize":"giga"} -->
<h2 class="wp-block-heading has-text-align-center is-style-default has-giga-font-size" style="font-style:normal;font-weight:600">
<?php
	esc_html_e( 'Build Quickly. Grow Rapidly.', 'saaslauncher-agency' );
?>
<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">
<?php
	esc_html_e( 'No Coding Required', 'saaslauncher-agency' );
?>
</mark></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"24px"}}},"layout":{"type":"constrained","contentSize":"850px"}} -->
<div class="wp-block-group" style="margin-top:24px"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">
<?php
	esc_html_e( 'Get your website live fast with scalable SaaS tools designed to maximize performance and fuel seamless, sustainable business growth.', 'saaslauncher-agency' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-with-arrow-icon"} -->
<div class="wp-block-button is-style-button-with-arrow-icon"><a class="wp-block-button__link wp-element-button">
<?php
	esc_html_e( 'Get Started', 'saaslauncher-agency' );
?>
</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-outline","style":{"border":{"width":"1px"},"spacing":{"padding":{"left":"36px","right":"36px","top":"16px","bottom":"16px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"borderColor":"border-color"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-border-color-border-color wp-element-button" style="border-width:1px;padding-top:16px;padding-right:36px;padding-bottom:16px;padding-left:36px">
<?php
	esc_html_e( 'Schedule Demo', 'saaslauncher-agency' );
?>
</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php	echo esc_url( $saaslauncher_agency_images[1] ); ?>","id":123,"dimRatio":0,"isUserOverlayColor":true,"minHeight":680,"sizeSlug":"large","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"},"width":"1px"},"spacing":{"margin":{"top":"var:preset|spacing|80"}}},"borderColor":"border-color"} -->
<div class="wp-block-cover has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;margin-top:var(--wp--preset--spacing--80);min-height:680px"><img class="wp-block-cover__image-background wp-image-123 size-large" alt="" src="<?php echo esc_url( $saaslauncher_agency_images[1] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->