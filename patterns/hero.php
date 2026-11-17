<?php
/**
 * Title: Hero
 * Slug: keahi/hero
 * Categories: keahi
 */
?>
<!-- wp:group {"metadata":{"name":"Hero"},"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|50","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"stretch","width":"45%","style":{"spacing":{"padding":{"top":"0","bottom":"0","right":"0","left":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:45%"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"hero-portrait","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}}}} -->
<figure class="wp-block-image size-full has-custom-border hero-portrait"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-portrait.jpg" alt="" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"50%","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50);flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"-0.01em","fontWeight":"600"}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:-0.01em"><?php esc_html_e('Web &amp; Graphic Designer', 'keahi');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.05","fontWeight":"600","letterSpacing":"-0.04em"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-xxx-large-font-size" style="margin-top:var(--wp--preset--spacing--20);font-weight:600;letter-spacing:-0.04em;line-height:1.05"><?php esc_html_e('I design websites built on structure, character, and purpose', 'keahi');?></h1>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"textColor":"primary","className":"is-style-outline","style":{"border":{"color":"#1e1e1e","width":"2px","radius":{"topLeft":"3px","topRight":"3px","bottomLeft":"3px","bottomRight":"3px"}},"typography":{"letterSpacing":"-0.02em","fontWeight":"600","textTransform":"uppercase"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"normal"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color has-link-color has-border-color has-normal-font-size has-custom-font-size wp-element-button" href="#contact" style="border-color:#1e1e1e;border-width:2px;border-top-left-radius:3px;border-top-right-radius:3px;border-bottom-left-radius:3px;border-bottom-right-radius:3px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--50);font-weight:600;letter-spacing:-0.02em;text-transform:uppercase"><?php esc_html_e('Contacts', 'keahi');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->