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
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-item-inner">
		<div class="post-media ">
			<?php cms_archive_video(); ?>
	    </div>
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
					echo cshero_string_limit_words( strip_tags( get_the_excerpt() ),30)."...";
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
