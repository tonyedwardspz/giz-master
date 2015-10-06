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
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<?php  if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false)):?>
		<div class="post-header-media">
			<?php 
	               
						$class = ' has-thumbnail';
	                    $thumbnail = get_the_post_thumbnail(get_the_ID(),'full');;
	                echo '<div class="cms-grid-media '.esc_attr($class).'">'.$thumbnail.'</div>';
					
	            ?>
		</div>
		<?php endif; ?>
		<h2 class="entry-title">
			 <a href="<?php the_permalink();?>">
            	<?php if(is_sticky()): ?>
            		<i class="fa fa-thumb-tack"></i>
            	<?php endif; ?> 
            	<?php the_title();?>
            </a>
		</h2>
		<?php cms_single_detail(); ?>
	</div>
	<!-- .entry-header -->

	<div class="entry-content">

			<?php
				the_content();
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
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8">
				<?php 
					$tags=get_the_tags();
					$list_tags='';
					if(!empty($tags)){
						foreach ($tags as $tag) {
							if($list_tags==''){
								$list_tags='<a class="post-tag" href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>';
							}else{
								$list_tags .=', <a class="post-tag" href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>';
							}
						}
					}
					if($list_tags !=''){
						echo '<span class="list_tags">'.__('Tags: ',THEMENAME).'</span>'.$list_tags ;
					}
				?>

			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<?php
				
			    	cms_get_socials_share();
			    ?>
			</div>
	   	</div>
	</footer>
	<!-- .entry-meta -->
</article>
<!-- #post -->
