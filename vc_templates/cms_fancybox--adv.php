<div class="cms-fancyboxes-wraper <?php echo esc_attr($atts['template']);?> container-fluid" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php if($atts['title']!=''):?>
        <div class="cms-fancyboxes-head">
            <div class="cms-fancyboxes-title">
                <?php echo apply_filters('the_title',$atts['title']);?>
            </div>
            <div class="cms-fancyboxes-description">
                <?php echo apply_filters('the_content',$atts['description']);?>
            </div>
        </div>
    <?php endif;?>
    <div class="row cms-fancyboxes-body">
        <?php
            $columns = ((int)$atts['cms_cols'])?(int)$atts['cms_cols']:1;
            $item_class = "";
            switch($columns){
                    case "1 Column":
                        $item_class = "";
                        break;
                    case "2 Columns":
                        $item_class = "col-xs-12 col-sm-6 col-md-4 col-lg-6";
                        break;
                    case "3 Columns":
                        $item_class = "col-xs-12 col-sm-4 col-md-4 col-lg-4";
                        break;
                    case "4 Columns":
                        $item_class = "col-xs-12 col-sm-6 col-md-4 col-lg-3";
                        break;
                    case "6 Columns":
                        $item_class = "col-xs-12 col-sm-6 col-md-4 col-lg-2";
                        break;

                    default:
                        $item_class = "";
                        break;
                }
            for($i=1;$i<=$columns;$i++){ ?>
                <?php if($i!=5):?>
                <?php
                $icon = isset($atts['icon'.$i])?$atts['icon'.$i]:'';
                $content = isset($atts['description'.$i])?$atts['description'.$i]:'';
                $image = isset($atts['image'.$i])?$atts['image'.$i]:'';
                $title = isset($atts['title'.$i])?$atts['title'.$i]:'';
                $button_link = isset($atts['button_link'.$i])?$atts['button_link'.$i]:'';
                $image_url = '';
                if (!empty($image)) {
                    $attachment_image = wp_get_attachment_image_src($image, 'full');
                    $image_url = $attachment_image[0];
                }
                ?>
                    <div class="cms-fancyboxes-adv-item <?php echo esc_attr($item_class);?> ">
                        <div class="cms-fancyboxes-adv-item-wrap">
                            <?php if($image_url):?>
                            <div class="fancy-box-image">
                                <a href="<?php echo esc_url($button_link);?>" ><img src="<?php echo esc_attr($image_url);?>" /></a>
                            </div>
                            <?php else:?>
                            <div class="fancy-box-icon">
                                <a href="<?php echo esc_url($button_link);?>" ><i class="<?php echo esc_attr($icon);?>"></i></a>
                            </div>
                            <?php endif;?>
                            <?php if($title):?>
                                <h3><?php echo apply_filters('the_title',$title);?></h3>
                                <div class="fancy-box-driver"></div>
                            <?php endif;?>

                            <div class="fancy-box-content">
                                <?php echo apply_filters('the_content',$content);?>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
            <?php }
        ?>
    </div>
</div>