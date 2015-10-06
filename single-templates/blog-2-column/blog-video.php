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
		<div class="post-media ">
			<div class="post-media-wrap">
				<div class="post-media-image pull-left">
		            <?php 
		                if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false)):
		                    $class = ' has-thumbnail';
		                    $thumbnail = get_the_post_thumbnail(get_the_ID(),'medium-rectangle-1');
		                else:
		                    $class = ' no-image';
		                    $thumbnail = '<img src="'.THEME_IMAGES.'no-image.jpg" alt="'.get_the_title().'" />';
		                endif;
		                echo '<div class="cms-grid-media '.esc_attr($class).'">'.$thumbnail.'</div>';
		            ?>
		        </div>
			</div>
           

	    </div>
	    <div class="post-content ">
	        <div class="post-title">
	            <h3 >
					<a href="<?php the_permalink();?>">
		            	<?php if(is_sticky()): ?>
		            		<i class="fa fa-thumb-tack"></i>
		            	<?php endif; ?> 
		            	<?php the_title();?>
		            </a>
				</h3>
            	<p class="post-details">
			        <span class="detail-date"><?php _e('on ', THEMENAME); ?><?php echo get_the_date('d-m-Y',get_the_ID());?></span>
			        <?php if(has_category()): ?>
			        <span class="detail-terms"><?php the_terms( get_the_ID(), 'category', __(', in ', THEMENAME), ' , ' ); ?></span>
			        <?php endif; ?>
			        
			    </p>
	        </div>
	        <div class="cms-driver"></div>
	        <p><?php echo cshero_string_limit_words( strip_tags( get_the_excerpt() ),25)."...";?></p>
	        <?php cms_archive_readmore(); ?>
	    </div>
	</div>
</article>
<!-- #post -->
