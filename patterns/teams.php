<?php

/**
 * Title: Teams
 * Slug: saaslauncher-agency/teams
 * Categories:  saaslauncher-agency-patterns
 */
$saaslauncher_agency_url        = trailingslashit( get_stylesheet_directory_uri() );
	$saaslauncher_agency_images = array(
		$saaslauncher_agency_url . 'assets/images/team-cover.png',
		$saaslauncher_agency_url . 'assets/images/team-1.png',
		$saaslauncher_agency_url . 'assets/images/team-2.png',
		$saaslauncher_agency_url . 'assets/images/team-3.png',
		$saaslauncher_agency_url . 'assets/images/team-4.png',
	);
	?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"65%","layout":{"type":"constrained","contentSize":"575px","justifyContent":"left"}} -->
<div class="wp-block-column" style="flex-basis:65%"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"mega"} -->
<h2 class="wp-block-heading has-mega-font-size" style="margin-top:0">
<?php
	esc_html_e( 'Sixteen people. No account managers in the middle.', 'saaslauncher-agency' );
?>
</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph -->
<p>
<?php
	esc_html_e( 'We keep the studio small on purpose. Everyone who pitches your project is someone who builds it — strategists, designers and engineers sharing one room and one standard.', 'saaslauncher-agency' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:cover {"url":"<?php echo esc_url( $saaslauncher_agency_images[0] ); ?>","id":573,"dimRatio":0,"isUserOverlayColor":true,"minHeight":760,"sizeSlug":"large","style":{"border":{"radius":{"topLeft":"34px","topRight":"34px","bottomLeft":"34px","bottomRight":"34px"},"width":"1px"},"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:34px;border-top-right-radius:34px;border-bottom-left-radius:34px;border-bottom-right-radius:34px;margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80);min-height:760px"><img class="wp-block-cover__image-background wp-image-573 size-large" alt="" src="<?php echo esc_url( $saaslauncher_agency_images[0] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":{"top":"0","left":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"width":"1px","color":"#35393D","radius":{"topLeft":"34px","topRight":"34px","bottomLeft":"34px","bottomRight":"34px"}}},"backgroundColor":"primary-shade-one"} -->
<div class="wp-block-columns has-border-color has-primary-shade-one-background-color has-background" style="border-color:#35393D;border-width:1px;border-top-left-radius:34px;border-top-right-radius:34px;border-bottom-left-radius:34px;border-bottom-right-radius:34px;margin-top:var(--wp--preset--spacing--70);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"width":"0px","style":"none"},"right":{"color":"var:preset|color|border-color","style":"solid","width":"1px"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained","contentSize":"225px"}} -->
<div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--border-color);border-right-style:solid;border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"id":588,"width":"55px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($saaslauncher_agency_images[1]);?>" alt="" class="wp-image-588" style="aspect-ratio:1;object-fit:cover;width:55px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"fontSize":"x-large"} -->
<h5 class="wp-block-heading has-x-large-font-size" style="margin-top:var(--wp--preset--spacing--60)">Elena Vasquez</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"normal"} -->
<p class="has-normal-font-size" style="margin-top:var(--wp--preset--spacing--30)">Founder & Strategy Director</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--40);text-transform:uppercase">Positioning · Research</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"width":"0px","style":"none"},"right":{"color":"var:preset|color|border-color","style":"solid","width":"1px"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained","contentSize":"225px"}} -->
<div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--border-color);border-right-style:solid;border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"id":597,"width":"55px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($saaslauncher_agency_images[1]);?>" alt="" class="wp-image-597" style="aspect-ratio:1;object-fit:cover;width:55px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"fontSize":"x-large"} -->
<h5 class="wp-block-heading has-x-large-font-size" style="margin-top:var(--wp--preset--spacing--60)">Marcus Aoki</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"normal"} -->
<p class="has-normal-font-size" style="margin-top:var(--wp--preset--spacing--30)">Creative Director</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--40);text-transform:uppercase">Identity · Art direction</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"width":"0px","style":"none"},"right":{"color":"var:preset|color|border-color","style":"solid","width":"1px"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained","contentSize":"225px"}} -->
<div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--border-color);border-right-style:solid;border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"id":598,"width":"55px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($saaslauncher_agency_images[1]);?>" alt="" class="wp-image-598" style="aspect-ratio:1;object-fit:cover;width:55px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"fontSize":"x-large"} -->
<h5 class="wp-block-heading has-x-large-font-size" style="margin-top:var(--wp--preset--spacing--60)">Priya Raman</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"normal"} -->
<p class="has-normal-font-size" style="margin-top:var(--wp--preset--spacing--30)">Head of Product Design</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--40);text-transform:uppercase">SaaS · Design systems</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"width":"0px","style":"none"},"right":{"color":"var:preset|color|border-color","style":"solid","width":"1px"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained","contentSize":"225px"}} -->
<div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--border-color);border-right-style:solid;border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"id":599,"width":"55px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($saaslauncher_agency_images[1]);?>" alt="" class="wp-image-599" style="aspect-ratio:1;object-fit:cover;width:55px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"fontSize":"x-large"} -->
<h5 class="wp-block-heading has-x-large-font-size" style="margin-top:var(--wp--preset--spacing--60)">Tom Berger</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"normal"} -->
<p class="has-normal-font-size" style="margin-top:var(--wp--preset--spacing--30)">Engineering Lead</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--40);text-transform:uppercase">Performance · Headless</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->