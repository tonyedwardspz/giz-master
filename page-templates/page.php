<?php
/**
 * Template Name: Page VC
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 * @author Fox
 */

get_header(); ?>
<div id="page-default" class="clearfix">
	<div id="primary" >
		<div id="content" role="main">
                <div class="page-content">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'single-templates/content', 'page' ); ?>

				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
		</div><!-- #content -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>