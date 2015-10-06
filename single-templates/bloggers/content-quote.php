<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 */
if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false)):
            //var_dump(get_post_thumbnail_id(get_the_ID()), 'full', false));
            $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
        else:
            $url = THEME_IMAGES.'no-image.jpg';
        endif;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="entry-content" style="background:url(<?php echo $url;?>) no-repeat center center /cover; ">
		<div class="entry-overlay"></div>
        <div class="entry-quote-content">
        	<div class="entry-quote-content-wrap">
				<span class="entry-quote-icon">&ldquo;</span>
				<?php cms_archive_quote(); ?>
				<span><?php the_title(); ?></span>
			</div>
		</div>
	</div>
	<!-- .entry-content -->
</article>
<!-- #post -->
