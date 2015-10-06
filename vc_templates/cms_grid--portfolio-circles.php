<?php
    /* get categories */
$taxo='portfolio-categories';
        $categories = get_terms('portfolio-categories');
        $taxonomi=array();
        $posts = $atts['posts'];

        while($posts->have_posts()){
            $posts->the_post();
            $results=get_the_terms( get_the_ID(), 'portfolio-categories');
            foreach($results as $result){
                if(!in_array($result->term_id,$taxonomi)){
                    $taxonomi[]=$result->term_id;
                }
            }

        }

?>
<div class="cms-grid-wraper cms-grid-layout-circles <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php if($atts['filter']=="true"):?>
        <div class="cms-grid-filter">
            <ul class="cms-filter-category">
                <li><a class="active" href="#" data-group="all">All</a></li>
                <?php
                    foreach($categories as $category):
                        if(in_array($category->term_id,$taxonomi)):
                    ?>
                    <li><a href="#" data-group="<?php echo esc_attr('category-'.$category->slug);?>">
                            <?php echo __($category->name, THEMENAME);?>
                        </a>
                    </li>
                <?php endif; endforeach;?>
            </ul>
        </div>
    <?php endif;?>
    <div class="row cms-grid cms-grid-portfolio <?php echo esc_attr($atts['grid_class']);?>">
        <?php
        $posts = $atts['posts'];
        while($posts->have_posts()){
            $posts->the_post();
            $groups = array();
            $groups[] = '"all"';
            $cats='';
            foreach(cmsGetCategoriesByPostID(get_the_ID(),$taxo) as $category){
                $groups[] = '"category-'.$category->slug.'"';
                if( $cats==''){
                    $cats .=$category->name;
                }else{
                    $cats .=', '.$category->name;
                }
            }
            ?>
            <div class="cms-grid-item <?php echo esc_attr($atts['item_class']);?>" data-groups='[<?php echo implode(',', $groups);?>]'>
                <div class="cms-grid-item-wrap">
                    <?php
                        if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium-square', false)):
                            $class = ' has-thumbnail';
                            $thumbnail = get_the_post_thumbnail(get_the_ID(),'medium-square');
                        else:
                            $class = ' no-image';
                            $thumbnail = '<img src="'.THEME_IMAGES.'no-image.jpg" alt="'.get_the_title().'" />';
                        endif;
                        echo '<div class="cms-grid-media '.esc_attr($class).'">'.$thumbnail.'</div>';
                    ?>

                    <div class="cms-grid-item-meta">
                        <div class="cms-grid-item-icons">
                            <a class="cms-grid-portfolio-item-lightbox" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(),'full') );?>" > <i class="fa fa-search"></i></a>
                            <a class="cms-grid-portfolio-item-link" href="<?php the_permalink();?>" > <i class="fa fa-expand"></i></a>
                        </div>
                        
                    </div>
                    <div class="cms-grid-item-overlay">

                    </div>
                </div>
            </div>
            <?php
        }
            wp_reset_postdata();
            wp_reset_postdata();
        ?>
    </div>
    <?php if(!empty($atts['custom_link']) && !empty($atts['custom_link_text'])): ?>
    <div class="cms-grid-footer">
        <a href="<?php echo esc_attr($atts['custom_link']);?>"><?php echo esc_attr($atts['custom_link_text']);?></a>
    </div>
    <?php endif; ?>
</div>