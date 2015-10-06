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
    /* get shortcode audio. */
    $audio = $cms_base->getShortcodeFromContent('audio', get_the_content());
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-header">
		<?php if(!empty($audio)):?>
			<div class="post-header-media">
				<?php cms_archive_audio(); ?>
			</div>
		<?php endif;?>
	    
		<h2 class="entry-title">
			<a href="<?php the_permalink();?>">
            	<?php if(is_sticky()): ?>
            		<i class="fa fa-thumb-tack"></i>
            	<?php endif; ?> 
            	<?php the_title();?>
            </a>
		</h2>
		<div class="post-details"><?php cms_archive_detail(); ?></div>
		<div class="entry-header-driver"></div>
	</div>
	<!-- .entry-header -->
	<div class="entry-driver"></div>
	<div class="entry-content">
		<?php the_excerpt(); 
			wp_link_pages( array(
    			'before'      => '<div class="pagination loop-pagination"><span class="page-links-title">' . __( 'Pages:',THEMENAME) . '</span>',
    			'after'       => '</div>',
    			'link_before' => '<span class="page-numbers">',
    			'link_after'  => '</span>',
			) );
		?>
	</div>
	<!-- .entry-content -->

	<footer class="entry-meta">
	    <?php cms_archive_readmore(); ?>
	    <!-- .readmore link -->
		<?php //edit_post_link( __( 'Edit', THEMENAME ), '<span class="edit-link">', '</span>' ); ?>
	</footer>
	<!-- .entry-meta -->
</article>
<!-- #post -->
