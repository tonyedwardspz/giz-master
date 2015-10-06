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
$post_meta=cms_post_meta_data();
//echo '<pre>';
//var_dump($post_meta);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<a href="<?php the_permalink()?>"><?php cms_archive_post_icon(); ?></a>
		<?php the_excerpt(); ?>
		<span class="entry-post-title clearfix"><?php the_title(); ?></span>
		<span class="entry-post-customlink clearfix"><?php echo $post_meta->_cms_custom_link; ?></span>
	</div>
	<!-- .entry-content -->
</article>
<!-- #post -->
