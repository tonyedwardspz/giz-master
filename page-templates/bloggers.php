<?php
/**
 * Template Name: Bloggers
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 * @author Fox
 */

get_header(); ?>
<?php global $wp_query, $paged,$cms_base, $post; 
$page_object = get_queried_object();
$page_id     = get_queried_object_id();
 if(!empty($cms_meta->_cms_page_number_posts)){
        $posts_per_page=esc_attr($cms_meta->_cms_page_number_posts);
    }else{
        $posts_per_page=get_option('posts_per_page');
    }
?>
<div id="page-bloggers-page" class="clearfix">
        <div id="primary">
            <div id="content" role="main">
                
                <div class="page-bloggers">
                    <div class="page-wrapper">
                        <div class="page-bloggers">
                            <?php 
                                $args = array (
                                 'post_type' => 'post' ,
                                 'showposts' => $posts_per_page ,
                                 'paged' => $paged ,
                                 );
                                if(!empty($cms_meta->_cms_page_categories)){
                                    $args['cat']=esc_attr($cms_meta->_cms_page_categories);
                                }
                                $custom='';
                                foreach ($args as $key => $value) {
                                    if($custom==''){
                                        $custom .=$key.'='.$value;
                                    }else{
                                        $custom .='&'.$key.'='.$value;
                                    }
                                }
                                $wp_query->query($custom);

                            ?>
                            
                            <?php if (have_posts() ) : ?>
                                <?php while ( have_posts() ) : the_post();
                                    /* Include the post format-specific template for the content. If you want to
                                     * this in a child theme then include a file called called content-___.php
                                     * (where ___ is the post format) and that will be used instead.
                                     */
                                    get_template_part( 'single-templates/bloggers/content', get_post_format() );
                                endwhile; // end of the loop.?>
                                
                                <?php cms_paging_nav(); ?>
                                
                            <?php else : ?>
                                <?php get_template_part( 'single-templates/content', 'none' ); ?>
                            <?php 
                                endif;
                                wp_reset_postdata();
                            ?> 
                        </div>
                    </div>
                </div>
                <div class="page-content clearfix">
                <?php 
                $wp_query->query('post_type=page&page_id='.$page_id);
                ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="entry-content">
                                <?php the_content(); ?> 
                        </div>
                    <?php endwhile; // end of the loop. ?>
                    <?php  wp_reset_postdata(); ?>
                </div>
            </div><!-- #content -->
        </div>
</div>
<?php get_footer(); ?>