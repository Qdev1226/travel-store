<?php
/**
 * Title: Latest Post
 * Slug: travel-store/latest-post
 * Categories: travel-store
 *
 * @package Travel Store
 * @since 1.0.0
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"className":"slider-image","layout":{"type":"default"}} -->
<div class="wp-block-group slider-image" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"0","top":"0"},"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading -->
<h2 class="wp-block-heading">Latest Post</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"30px","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|30","padding":{"right":"0","left":"0","top":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-date {"textAlign":"center"} /-->

<!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"typography":{"fontSize":"22px","textDecoration":"none","textTransform":"uppercase"}},"className":"tsp-latest-post"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|20","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"post-description","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group post-description"><!-- wp:image {"id":1162,"width":15,"height":15,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/arrow-right-solid.png" alt="" class="wp-image-1162" style="object-fit:cover;width:15px;height:15px" width="15" height="15"/></figure>
<!-- /wp:image -->

<!-- wp:read-more {"content":"READ MORE"} /--></div>
<!-- /wp:group -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->