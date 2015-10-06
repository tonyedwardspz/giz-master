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
global $cms_base;
$short_desc=cshero_string_limit_words( strip_tags( get_the_excerpt() ),30);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-item-inner">
	<?php if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false)): ?>
		<div class="post-media ">
		
	        <div class="post-media-image pull-left">
	            <?php 
	                
	                    $class = ' has-thumbnail';
	                    $thumbnail = get_the_post_thumbnail(get_the_ID(),'full');
	               
	                echo '<div class="cms-grid-media '.esc_attr($class).'">'.$thumbnail.'</div>';
	            ?>
	        </div>
	    
	    </div>
	    <?php endif; ?>
	    <div class="post-content ">
	    	
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
	        	<div class="cms-driver"></div>
	        <div class="entry-content">
				<?php 
					
					if(!empty($short_desc)) echo $short_desc."...";
	    			wp_link_pages( array(
	        			'before'      => '<div class="pagination loop-pagination"><span class="page-links-title">' . __( 'Pages:',THEMENAME) . '</span>',
	        			'after'       => '</div>',
	        			'link_before' => '<span class="page-numbers">',
	        			'link_after'  => '</span>',
	    			) );
				?>
			</div>

	         <?php cms_archive_readmore(); ?>
	    </div>
	</div>
</article>
<!-- #post -->
