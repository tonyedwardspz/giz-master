<div class="cms-carousel-layout-team cms-carousel " id="<?php echo esc_attr($atts['html_id']);?>">
    <?php
    $posts = $atts['posts'];
    $i=1;
    while($posts->have_posts()){
        $posts->the_post();
        $team_meta=cms_post_meta_data();
        ?>
        <div class="cms-team-item ">
            <div class="cms-team-item-wrap <?php echo (($i%2==0)?'team-item-even':'team-item-odd');?>">
            <div class="team-media">
                <div class="team-media-image pull-left">
                    <div class="cms-team-item-overlay"></div>
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
                    <?php if($i%2==0): ?>
                        <svg class="decor engle-duplicate engle-bottom-right item-even" height="16%" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0 L100 100 L0 100" stroke-width="0" stroke="" width="100%"> </path>
                        </svg>
                    <?php else: ?>
                        <svg  class="decor engle-duplicate engle-bottom-right item-odd" height="16%" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 100 L100 0 L100 100" stroke-width="0" stroke="" width="100%"></path>
                        </svg>
                    <?php endif; ?>
                </div>
                <div class="team-media-social">

                    <ul>
                        <?php if(!empty($team_meta->_cms_social_1)):?>
                            <li><a href="<?php echo esc_attr($team_meta->_cms_social_1); ?>"><i class="<?php echo esc_attr($team_meta->_cms_social_1_icon); ?>"></i></a></li>
                        <?php endif; ?>
                        <?php if(!empty($team_meta->_cms_social_2)):?>
                            <li><a href="<?php echo esc_attr($team_meta->_cms_social_2); ?>"><i class="<?php echo esc_attr($team_meta->_cms_social_2_icon); ?>"></i></a></li>
                        <?php endif; ?>
                        <?php if(!empty($team_meta->_cms_social_3)):?>
                            <li><a href="<?php echo esc_attr($team_meta->_cms_social_3); ?>"><i class="<?php echo esc_attr($team_meta->_cms_social_3_icon); ?>"></i></a></li>
                        <?php endif; ?>
                        <?php if(!empty($team_meta->_cms_social_4)):?>
                            <li><a href="<?php echo esc_attr($team_meta->_cms_social_4); ?>"><i class="<?php echo esc_attr($team_meta->_cms_social_4_icon); ?>"></i></a></li>
                        <?php endif; ?>
                        <?php if(!empty($team_meta->_cms_social_5)):?>
                            <li><a href="<?php echo esc_attr($team_meta->_cms_social_5); ?>"><i class="<?php echo esc_attr($team_meta->_cms_social_5_icon); ?>"></i></a></li>
                        <?php endif; ?>
                        <?php if(!empty($team_meta->_cms_social_6)):?>
                            <li><a href="<?php echo esc_attr($team_meta->_cms_social_6); ?>"><i class="<?php echo esc_attr($team_meta->_cms_social_6_icon); ?>"></i></a></li>
                        <?php endif; ?>
                    </ul>

                </div>

            </div>
            <div class="cms-team-content">

                <div class="cms-team-title">
                    <h3><?php the_title();?></h3>
                </div>
                <div class="cms-team-regency">
                    <?php echo esc_attr($team_meta->_cms_regency) ?>
                </div>
                <div class="cms-team-driver"></div>
                <?php the_excerpt();?>
            </div>
        </div>
        </div>
        <?php
        $i++;
    }
    ?>

</div>

<div class="cms-carousel-navigation cms-carousel-team-navigation   ">
    <div class="cms-carousel-nav">
            <div class="cms-carousel-nav-item cms-carousel-prev" data-slide="<?php echo esc_attr($atts['html_id']);?>" ><i class="<?php echo esc_attr($atts['left_arrow']);?>" ></i> </div>
            <?php if(!empty($atts['custom_text']) && !empty($atts['custom_link'])):?>
                <div class="cms-carousel-nav-item cms-carousel-see-full"><a href="<?php echo esc_attr($atts['custom_link']);?>" ><?php echo esc_attr($atts['custom_text']);?></a> </div>
            <?php endif; ?>
            <div class="cms-carousel-nav-item cms-carousel-next" data-slide="<?php echo esc_attr($atts['html_id']);?>" ><i class="<?php echo esc_attr($atts['right_arrow']);?>" ></i> </div>

    </div>

</div>
