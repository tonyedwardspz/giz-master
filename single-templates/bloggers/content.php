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
$gallery=$cms_base->getShortcodeFromContent('gallery', get_the_content());
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
	    <div class="post-header-media">
			<div class="post-format-icon">
				<?php cms_archive_post_icon(); ?>
			</div>
			<?php if(empty($gallery)):?>
				<div class="post-image">
					<?php if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false)):
	                            $class = ' has-thumbnail';
	                            $thumbnail = get_the_post_thumbnail(get_the_ID(),'medium-rectangle');
	                        else:
	                            $class = ' no-image';
	                            $thumbnail = '<img src="'.THEME_IMAGES.'no-image.jpg" alt="'.get_the_title().'" />';
	                        endif;
	                        echo $thumbnail; ?>
				</div>
			<?php else: 
				preg_match('/\[gallery.*ids=.(.*).\]/', $gallery, $ids);
        		$array_id = explode(",", $ids[1]);
			?>
				<div class="post-gallery">
					<?php 
					$i=0;
					foreach ($array_id as $key => $img):  
						$image=wp_get_attachment_image_src($img,'medium-square');
					if(!empty($image[0])):
						
					?>
						<div class="post-gallery-item col-xs-12 col-sm-12 col-md-6 col-lg-6 <?php if(($i%2==0) && ($i !=0)) echo 'clear'; ?>">
							<img src="<?php echo $image[0]; ?>" alt="" />
						</div>
					<?php $i++; endif; ?>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
			<div class="post-media-extra">
				<?php 
				$id = get_the_ID();
				if(!empty($id)):?>
                    <div class="post-date post-media-extra-item"><?php echo get_the_date('d-m-Y',get_the_ID());?></div>
                <?php endif; ?>
                <div class="post-like post-media-extra-item">
					<?php cms_get_post_like(); ?>
				</div>
			</div>
		</div>
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
