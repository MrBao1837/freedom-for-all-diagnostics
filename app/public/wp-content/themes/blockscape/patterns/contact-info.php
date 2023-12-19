<?php
/**
 * Title: Contact Info
 * Slug: contact-info
 * Categories: blockscape-contact
 * Keywords: contact, contact info, contact details
 */
?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium-large"} -->
<h3 class="wp-block-heading has-medium-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Get In Touch', 'blockscape' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"textColor":"heading","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-heading-color has-text-color"><!-- wp:image {"id":255,"sizeSlug":"full","linkDestination":"none","className":"is-style-default is-style-in-flex"} -->
<figure class="wp-block-image size-full is-style-default is-style-in-flex"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/contact-info-email.svg' ) ); ?>" alt="" class="wp-image-255"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
<p style="font-size:18px"><?php esc_html_e('email@companyname.com', 'blockscape'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"textColor":"heading","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-heading-color has-text-color"><!-- wp:image {"id":255,"sizeSlug":"full","linkDestination":"none","className":"is-style-default is-style-in-flex"} -->
<figure class="wp-block-image size-full is-style-default is-style-in-flex"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/contact-info-phone.svg' ) ); ?>" alt="" class="wp-image-255"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
<p style="font-size:18px"><?php esc_html_e('+01 2345 6789', 'blockscape'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->