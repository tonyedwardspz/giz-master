<div class="cms-counter-wraper cms-counter-layout-1 <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
	<?php if($atts['title']!=''):?>
        <div class="cms-counter-head">
            <div class="cms-counter-title">
                <?php echo apply_filters('the_title',$atts['title']);?>
            </div>
            <div class="cms-counter-description">
                <?php echo apply_filters('the_content',$atts['description']);?>
            </div>
        </div>
    <?php endif;?>
    <?php 
        if(!empty($atts['text_color'])){
            $style="style='color:".$atts['text_color']."'";
        }
    ?>
    <div class="row cms-counter-body">
        <?php
            $columns = (int)$atts['cms_cols'];
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
                    $title = isset($atts['title'.$i])?$atts['title'.$i]:'';
                    $icon = isset($atts['icon'.$i])?$atts['icon'.$i]:'';
                    $type = isset($atts['type'.$i])?$atts['type'.$i]:'';
                    $suffix = isset($atts['suffix'.$i])?$atts['suffix'.$i]:'';
                    $prefix = isset($atts['prefix'.$i])?$atts['prefix'.$i]:'';
                    $digit = isset($atts['digit'.$i])?$atts['digit'.$i]:'60';
                    ?>
                    <div class="cms-counter-item <?php echo esc_attr($item_class);  ?>" <?php if(!empty($style)) echo $style;?>>
                        <?php if( $icon ): ?>
        					<span class="cms-icon"><i class="fa <?php echo esc_attr($icon); ?>"></i></span>
        				<?php endif; ?>
        				<div id="counter_<?php echo esc_attr($atts['html_id'].'_item_'.$i);?>" class="cms-counter <?php echo esc_attr(strtolower($type));?>" data-suffix="<?php echo esc_attr($suffix);?>" data-prefix="<?php echo esc_attr($prefix);?>" data-type="<?php echo esc_attr(strtolower($type));?>" data-digit="<?php echo esc_attr($digit);?>">
        				</div>
                        <?php if($title):?>
                            <span class="cms-title"><?php echo apply_filters('the_title',$title);?></span>
                        <?php endif;?>
        			</div>
                <?php endif;?>
            <?php }
        ?>
    </div>
</div>