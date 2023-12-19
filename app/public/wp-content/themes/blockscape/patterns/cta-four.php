<?php

/**
 * Title: Call To Action Four
 * Slug: call-to-action-four
 * Categories: blockscape-cta
 * Keywords: cta, call to action
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","right":"64px","bottom":"0px","left":"64px"}},"border":{"radius":"12px"}},"gradient":"primary-blue","className":"is-style-mob-pd_top-40  is-style-mob-pd_lr-25","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-mob-pd_top-40 is-style-mob-pd_lr-25 has-primary-blue-gradient-background has-background" style="border-radius:12px;padding-top:80px;padding-right:64px;padding-bottom:0px;padding-left:64px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
    <div class="wp-block-group " style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.3"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"white","fontSize":"x-large"} -->
        <p class="has-text-align-left has-white-color has-text-color has-x-large-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;line-height:1.3">
            <strong><?php esc_html_e('Make an appointment for a consultation online now.', 'blockscape'); ?></strong>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"48px","top":"24px"}}},"textColor":"white"} -->
        <p class="has-white-color has-text-color" style="margin-top:24px;margin-bottom:48px"><?php esc_html_e('If you need help with modern workplace, cloud infrastructure, or IT service, you can schedule a free initial consultation.', 'blockscape'); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"verticalAlignment":null} -->
        <div class="wp-block-columns"><!-- wp:column {"width":"55%"} -->
            <div class="wp-block-column" style="flex-basis:55%"><!-- wp:buttons {"className":"is-style-justify-left","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal","flexWrap":"wrap"}} -->
                <div class="wp-block-buttons is-style-justify-left"><!-- wp:button {"backgroundColor":"white","textColor":"primary","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-blockscape-button-icon-after is-style-bs-button-2","fontSize":"small"} -->
                    <div class="wp-block-button has-custom-font-size is-style-blockscape-button-icon-after is-style-bs-button-2 has-small-font-size" style="font-style:normal;font-weight:600"><a class="wp-block-button__link has-primary-color has-white-background-color has-text-color has-background wp-element-button"><?php esc_html_e('Book an Appointment', 'blockscape'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:image {"align":"left","id":46,"width":249,"height":310,"sizeSlug":"full","linkDestination":"none","className":"alignleft is-style-mg-0"} -->
                <figure class="wp-block-image alignleft size-full is-resized is-style-mg-0">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/cta-contact.png')); ?>" alt="" class="wp-image-46" width="249" height="310" />
                </figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->