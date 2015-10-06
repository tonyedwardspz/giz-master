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
global $cms_base, $i ;

$gallery=$cms_base->getShortcodeFromContent('gallery', get_the_content());

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-item-inner">
		<div class="post-media">
	        <div class="post-media-image pull-left">
	            <div class="post-item-overlay"></div>
	            <?php 
	                if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false)):
	                    $class = ' has-thumbnail';
	                    $thumbnail = get_the_post_thumbnail(get_the_ID(),'medium-square');
	                else:
	                    $class = ' no-image';
	                    $thumbnail = '<img src="'.THEME_IMAGES.'no-image.jpg" alt="'.get_the_title().'" />';
	                endif;
	                echo '<div class="cms-grid-media '.esc_attr($class).'">'.$thumbnail.'</div>';
	            ?>
	            <?php 
	            if( $i==0 || $i==1 || $i==2):?>
	            <svg  class="decor engle-duplicate engle-bottom-right" height="14%" preserveAspectRatio="none" version="1.1" viewBox="0 -1 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
	                <path d="M 0 0 q 50 180 100 0 l 0 100 -100 0  0 -37 z" stroke="" stroke-width="0"  />
	            </svg>
	        	<?php endif; ?>
	        </div>
	        <div class="post-media-extra">
	            <?php 
	            $id = get_the_ID();
	            if(!empty($id)):?>
	                <div class="post-media-extra-item post-date "><?php echo get_the_date('d-m-Y',get_the_ID());?></div>
	            <?php endif; ?>
	            <div class="post-media-extra-item post-like"><?php cms_get_post_like(); ?></div>

	        </div>
	        <a class="post-format-icon" href="<?php the_permalink();?>"><?php cms_archive_post_icon();?></i></a>

	    </div>
	    <div class="post-content">
	        <div class="post-title">
	            <h3>
					<a href="<?php the_permalink();?>">
		            	<?php if(is_sticky()): ?>
		            		<i class="fa fa-thumb-tack"></i>
		            	<?php endif; ?> 
		            	<?php the_title();?>
		            </a>
				</h3>
            	<?php cms_archive_detail();?>
	        </div>
	        <div class="post-entry-driver"></div>
	        <p><?php echo cshero_string_limit_words( strip_tags( get_the_excerpt() ),30)."...";?></p>
	    </div>
	</div>
</article>
<!-- #post -->
