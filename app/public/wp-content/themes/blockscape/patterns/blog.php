<?php

/**
 * Title: Blog
 * Slug: blog-default
 * Categories: blockscape-blog
 * Keywords: blog
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","right":"15px","left":"15px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"section-bg","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-section-bg-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:15px;padding-bottom:0px;padding-left:15px"><!-- wp:spacer {"height":"118px","className":"is-style-has-mb-30","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
    <div style="margin-top:0px;margin-bottom:0px;height:118px" aria-hidden="true" class="wp-block-spacer is-style-has-mb-30"></div>
    <!-- /wp:spacer -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"30px","left":"136px"},"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"width":"648px"} -->
        <div class="wp-block-column" style="flex-basis:648px"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"0px","top":"0"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"color":{"background":"#3773fe14"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-background" style="border-radius:10px;background-color:#3773fe14;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"8px","right":"16px","bottom":"8px","left":"16px"}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"}},"textColor":"primary"} -->
                    <p class="has-primary-color has-text-color" style="padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px;font-size:16px;font-style:normal;font-weight:600">Knowledge Center</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"16px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                <h2 style="margin-top:16px;margin-right:0px;margin-bottom:0px;margin-left:0px"><?php esc_html_e( 'Latest Article &amp; Blog', 'blockscape' ); ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"536px","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
        <div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:536px"><!-- wp:paragraph {"fontSize":"medium"} -->
            <p class="has-medium-font-size"><?php esc_html_e( 'Effective communication and collaboration within the team can help harness these qualities and drive the team towards its goals.', 'blockscape' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:query {"queryId":55,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","className":"is-style-mg-0"} -->
    <div class="wp-block-query alignwide is-style-mg-0"><!-- wp:spacer {"height":"72px","className":"is-style-has-mb-40","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <div style="margin-top:0px;margin-bottom:0px;height:72px" aria-hidden="true" class="wp-block-spacer is-style-has-mb-40"></div>
        <!-- /wp:spacer -->

        <!-- wp:post-template {"className":"is-style-hover-animation is-style-mg-0","fontFamily":"figtree"} -->
        <!-- wp:post-featured-image {"isLink":true,"height":"","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"bottom":"0px","top":"0px"}}},"className":"fr-hover-scale-img"} /-->

        <!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"},"margin":{"top":"0px","bottom":"0px"}},"border":{"radius":{"bottomLeft":"12px","bottomRight":"12px","topLeft":"0px","topRight":"0px"}}},"backgroundColor":"white"} -->
        <div class="wp-block-group has-white-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;margin-top:0px;margin-bottom:0px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
            <div class="wp-block-group"><!-- wp:post-terms {"term":"category","textAlign":"left","separator":"  ","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"14px"}},"className":"is-style-blockscape-tags-nounder"} /-->

                <!-- wp:post-date {"style":{"typography":{"fontSize":"14px"}}} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"lineHeight":"1.6","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"8px"}}},"fontSize":"medium-large"} /-->

            <!-- wp:post-excerpt {"moreText":"Read more → ","style":{"spacing":{"margin":{"top":"16px"}}},"textColor":"lightgrey","className":"is-style-show-three-lines"} /-->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->

    <!-- wp:spacer {"height":"40px","className":"is-style-has-mb-30","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
    <div style="margin-top:0px;margin-bottom:0px;height:40px" aria-hidden="true" class="wp-block-spacer is-style-has-mb-30"></div>
    <!-- /wp:spacer -->

    <!-- wp:buttons {"layout":{"type":"flex","verticalAlignment":"center","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
    <div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"className":"is-style-bs-button-1 is-style-blockscape-button-icon-after"} -->
        <div class="wp-block-button is-style-bs-button-1 is-style-blockscape-button-icon-after"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Read All Blog', 'blockscape' ); ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

    <!-- wp:spacer {"height":"118px","className":"is-style-has-mb-50","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
    <div style="margin-top:0px;margin-bottom:0px;height:118px" aria-hidden="true" class="wp-block-spacer is-style-has-mb-50"></div>
    <!-- /wp:spacer -->
</div>
<!-- /wp:group -->