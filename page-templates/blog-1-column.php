<?php
/**
 * Template Name: Blog 1 column
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 * @author Fox
 */

get_header(); ?>
<?php global $wp_query, $paged,$cms_base, $cms_meta; 
    if(!empty($cms_meta->_cms_page_number_posts)){
        $posts_per_page=esc_attr($cms_meta->_cms_page_number_posts);
    }else{
        $posts_per_page=get_option('posts_per_page');
    }
?>
<div id="page-blog">
        <div id="primary">
            <div id="blog-content" role="main">
                <?php if(!empty($cms_meta->_cms_page_slider)): ?>
                <div class="page-slider">
                        <?php 
                        $slide = esc_attr($cms_meta->_cms_page_slider); 
                        cms_revolution_slider($slide);
                        ?>
                </div>
                <?php endif; ?>
                <div class="page-blog-1-column">
                    <div class="page-wrapper">
                        <div class="blog-items">
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
                            
                            <?php if ( have_posts() ) :
                             ?>
                                <?php while ( have_posts() ) : the_post();
                                ?>
                                <div class="post-item">
                                    <?php
                                        get_template_part( 'single-templates/blog-1-column/blog', get_post_format() );
                                    ?>
                                </div>
                                <?php
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
            </div><!-- #content -->
        </div>
</div>
<?php get_footer(); ?>