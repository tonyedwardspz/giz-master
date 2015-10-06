<div class="layout-testimonials cms-carousel <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php
    $posts = $atts['posts'];
    while($posts->have_posts()){
        $posts->the_post();
        $testimonial_meta=cms_post_meta_data();
        ?>
        <div class="cms-carousel-item">
            <div class="media">
                <div class="media-wrap">
                    <div class="media-image  ">
                        <?php
                            if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'related-img', false)):
                                $class = ' has-thumbnail';
                                $thumbnail = get_the_post_thumbnail(get_the_ID(),'related-img');
                            else:
                                $class = ' no-image';
                                $thumbnail = '<img src="'.THEME_IMAGES.'no-image.jpg" alt="'.get_the_title().'" />';
                            endif;
                            echo '<div class="cms-grid-media '.esc_attr($class).'">'.$thumbnail.'</div>';
                        ?>
                    </div>
                    <div class="media-info">
                        <div class="cms-carousel-title">
                            <h3><?php the_title();?></h3>
                        </div>
                        <div class="cms-carousel-regency">
                            <?php echo esc_attr($testimonial_meta->_cms_regency) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cms-carousel-content">
                <?php the_excerpt();?>
            </div>
        </div>
        <?php
    }
    ?>
</div>