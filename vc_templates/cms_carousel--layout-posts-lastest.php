<div class="cms-carousel-layout-lastest-post cms-carousel " id="<?php echo esc_attr($atts['html_id']);?>">
    <?php
    $posts = $atts['posts'];
    $i=1;
    while($posts->have_posts()){
        $posts->the_post();
        $post_meta=cms_post_meta_data();
        $categories=get_the_category(get_the_ID());
        $cat='';
        foreach($categories as $category){
            if($cat==''){
                $cat='<a href="'.get_category_link($category->term_id ).'">'.$category->name.'</a>';
            }else{
                $cat .=', <a href="'.get_category_link($category->term_id ).'">'.$category->name.'</a>';
            }
        }
        $format=get_post_format(get_the_ID());

        switch($format){
            case 'video':
                $format_class="fa fa-film";
                break;
            case 'audio':
                $format_class="fa fa-music";
                break;
            case 'link':
                $format_class="fa fa-link";
                break;
            case 'gallery':
                $format_class="fa fa-picture-o";
                break;
            default:
                $format_class="fa fa-expand";
                break;
        }
        $likes=get_post_meta(get_the_ID(),'_cms_post_likes');
        if(empty($likes[0])){
            $like=0;
        }else{
            $like=$likes[0];
        }


        ?>
        <div class="cms-carouse-post-item <?php echo (($i%2==0)?'team-item-even':'team-item-odd');?>">
            <div class="post-media">
                <div class="post-media-image pull-left">
                    <div class="cms-carousel-post-item-overlay"></div>
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
                    <svg  class="decor engle-duplicate engle-bottom-right" height="14%" preserveAspectRatio="none" version="1.1" viewBox="0 -1 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                        <path d="M 0 0 q 50 180 100 0 l 0 100 -100 0 0 -37 z" stroke="" stroke-width="0"  > </path>
                    </svg>
                </div>
                <div class="post-media-extra">
                    <?php 
                    $id=get_the_ID();
                    if(!empty($id)):
                    ?>
                        <div class="post-date post-media-extra-item"><?php echo get_the_date('d-m-Y',get_the_ID());?></div>
                    <?php endif; ?>
                    <div class="post-like post-media-extra-item"><span class="post-number-likes"><?php echo $like; ?></span><i class="fa fa-thumbs-o-up"></i></div>

                </div>
                <div class="cms-carouse-post-item-format">
                    <div class="cms-carouse-post-item-format-wrap">
                        <div class="cms-carouse-post-item-format-icon">
                            <a href="<?php the_permalink();?>"><i class="<?php echo $format_class; ?>"></i></a>
                        </div>
                        <div class="cms-carouse-post-item-overlay"></div>
                    </div>


                </div>

            </div>
            <div class="cms-carousel-post-content">
                <div class="cms-carousel-post-title">
                    <h3><a href="<?php the_permalink();?>"> <?php the_title();?></a></h3>
                    <p class="post-extra">
                        <span><?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></span>
                        <span><?php echo __(', in '.$cat,THEMENAME);?></span>
                    </p>
                </div>
                <div class="cms-carouse-post-driver"></div>
                <p><?php echo cshero_string_limit_words( strip_tags( get_the_excerpt() ),30)."...";?></p>
            </div>
        </div>
        <?php
        $i++;
    }
    wp_reset_postdata();
    wp_reset_postdata();
    ?>

</div>

<div class="cms-carousel-navigation cms-carousel-posts-lastest-navigation ">
    <div class="cms-carousel-nav">
        <div class="cms-carousel-nav-item cms-carousel-prev" data-slide="<?php echo esc_attr($atts['html_id']);?>" ><i class="<?php echo esc_attr($atts['left_arrow']);?>" ></i> </div>
        <?php if(!empty($atts['custom_text']) && !empty($atts['custom_link'])):?>
        <div class="cms-carousel-nav-item cms-carousel-see-full"><a href="<?php echo esc_attr($atts['custom_link']);?>" ><?php echo esc_attr($atts['custom_text']);?></a> </div>
        <?php endif; ?>
        <div class="cms-carousel-nav-item cms-carousel-next" data-slide="<?php echo esc_attr($atts['html_id']);?>" ><i class="<?php echo esc_attr($atts['right_arrow']);?>" ></i> </div>
    </div>

</div>
