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
           <?php $gallery=cms_archive_gallery(); ?>
           <?php if(!empty($gallery)): ?>
		        <span class="post-format-icon" ><?php cms_archive_post_icon();?></i></span>
		        <div class="post-media-extra">
		            <?php 
		            $id=get_the_ID();
		            if(!empty($id)):?>
		                <div class="post-media-extra-item post-date "><?php echo get_the_date('d-m-Y',get_the_ID());?></div>
		            <?php endif; ?>
		            <div class="post-media-extra-item post-like"><?php cms_get_post_like(); ?></div>

		        </div>
	    	<?php endif; ?>
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
            	<?php cms_archive_detail();?>
	        </div>
	        <div class="cms-driver"></div>
	        <p><?php echo cshero_string_limit_words( strip_tags( get_the_excerpt() ),30)."...";?></p>
	    	<?php cms_archive_readmore(); ?>
	    </div>
	</div>
</article>
<!-- #post -->
