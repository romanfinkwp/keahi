<?php
/**
 * Title: Footer
 * Slug: keahi/footer
 * Categories: keahi
 */
?>
<!-- wp:group {"metadata":{"name":"Footer"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"0","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"primary","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-primary-background-color has-text-color has-background has-link-color" id="contact" style="border-top-style:none;border-top-width:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"textColor":"secondary","fontSize":"tiny"} -->
<p class="has-secondary-color has-text-color has-tiny-font-size" style="font-weight:600;letter-spacing:-0.01em"><?php esc_html_e('Social', 'keahi');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"top":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|white"},":hover":{"color":{"text":"var:preset|color|accent"}}}}},"textColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-white-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|accent"}}}},"typography":{"fontWeight":"600","letterSpacing":"-0.02em"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:600;letter-spacing:-0.02em"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
echo sprintf( esc_html__( '%1$sTelegram%2$s', 'keahi' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"},":hover":{"color":{"text":"var:preset|color|accent"}}}},"typography":{"fontWeight":"600","letterSpacing":"-0.02em"}},"fontSize":"small"} -->
<p class="has-link-color has-small-font-size" style="font-weight:600;letter-spacing:-0.02em"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
echo sprintf( esc_html__( '%1$sBehance%2$s', 'keahi' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|accent"}}}},"typography":{"fontWeight":"600","letterSpacing":"-0.02em"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:600;letter-spacing:-0.02em"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
echo sprintf( esc_html__( '%1$sInstagram%2$s', 'keahi' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|accent"}}}},"typography":{"fontWeight":"600","letterSpacing":"-0.02em"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:600;letter-spacing:-0.02em"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
echo sprintf( esc_html__( '%1$sLinkedIn%2$s', 'keahi' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%"><!-- wp:heading {"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.04em","lineHeight":"1.05"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-link-color has-xx-large-font-size" style="font-weight:600;letter-spacing:-0.04em;line-height:1.05"><?php esc_html_e('That\'s the end of the site. Want to build yours?', 'keahi');?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"textColor":"border-tone","className":"is-style-outline","style":{"border":{"width":"2px"},"typography":{"letterSpacing":"-0.02em","fontWeight":"600","textTransform":"uppercase"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|border-tone"}}}},"borderColor":"border-tone"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-border-tone-color has-text-color has-link-color has-border-color has-border-tone-border-color wp-element-button" href="mailto:example@example.com" style="border-width:2px;padding-top:10px;padding-right:var(--wp--preset--spacing--30);padding-bottom:10px;padding-left:var(--wp--preset--spacing--30);font-weight:600;letter-spacing:-0.02em;text-transform:uppercase"><?php esc_html_e('Discuss a project', 'keahi');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|secondary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--secondary);border-top-width:1px;margin-top:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"},":hover":{"color":{"text":"var:preset|color|accent"}}}},"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"textColor":"secondary","fontSize":"tiny"} -->
<p class="has-secondary-color has-text-color has-link-color has-tiny-font-size" style="font-weight:600;letter-spacing:-0.01em"><?php
printf( esc_html__( 'Keahi theme by %s', 'keahi' ), '<a href="https://wordpress.org/themes/keahi/">Roman Fink</a>' );
?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"},":hover":{"color":{"text":"var:preset|color|accent"}}}},"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"textColor":"secondary","fontSize":"tiny"} -->
<p class="has-secondary-color has-text-color has-link-color has-tiny-font-size" style="font-weight:600;letter-spacing:-0.01em"><?php
printf( esc_html__( 'Powered by %s', 'keahi' ), '<a href="https://wordpress.org/" target="_blank">WordPress</a>' );
?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","iconBackgroundColor":"primary","iconBackgroundColorValue":"#1e1e1e","size":"has-small-icon-size","className":"is-style-default","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->