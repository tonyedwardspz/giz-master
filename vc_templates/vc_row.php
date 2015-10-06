<?php
global $smof_data;

/** @var $this WPBakeryShortCode_VC_Row */
extract( shortcode_atts( array(
	'el_class' => '',
	'full_width' => false,
	'bg_style' => '',
	'bd_p_speed' => 0.1,
	'bg_video_mp4' => '',
	'bg_video_webm' => '',
	'row_data' => '',
	'css' => '',
    'video_image_thumb' => '',
    'bg_overlay_color' => '',
    'bg_overlay_opacity' => '',
    'bg_overlay_pattern' => '',
	'bg_overlay' => 0,
), $atts ) );

$row_style = ''; $video_style = '';
/** bg style image */
switch ($bg_style){
    case 'img_parallax':
        if($smof_data['paralax']){
            $el_class .= " cms_parallax";
            $row_data .= " data-speed = $bd_p_speed";
            $row_style .= "background-position: 50% 0;background-repeat:no-repeat;background-attachment:fixed;background-size:cover;";
        }
        break;
    case 'img_fixed':
        $row_style .= "background-attachment:fixed;background-size:cover;";
        break;
    case 'hvideo':
        $image_bg=wp_get_attachment_url($video_image_thumb);
        $row_style .="background-position: center;background-repeat:no-repeat;background-size:cover;background-image:url($image_bg);";
        $el_class .= "row-bg-video stripe-video-wrap";
        $video_style = '<div class="cms-bg-video">'.do_shortcode('[video  control="false" loop="on" preload="none" height="0" width="0" mp4="'.$bg_video_mp4.'" webm="'.$bg_video_webm.'"]').'</div>';
        break;
}
$overlay_style ='';
$background='';
if(!empty($bg_overlay_color)){
    if(!empty($bg_overlay_opacity)){
        $background .=cms_hex2rgb($bg_overlay_color,$bg_overlay_opacity);
    }else{
        $background .=cms_hex2rgb($bg_overlay_color);
    }
    
    
    $overlay_style .='position:absolute; top:0; left:0; right:0; bottom:0;';
}


if(!empty($bg_overlay_pattern)){
    $image_pattern=wp_get_attachment_url($bg_overlay_pattern);
    $background .=' url('.$image_pattern.') repeat top left;';
}

if($background !=''){
   $overlay_style .='background:'.$background.';';
}


$el_class = $this->getExtraClass( $el_class );

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'row ' . ( $this->settings( 'base' ) === 'cms_row_inner' ? 'cms_inner ' : '' ) . get_row_css_class() . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

if($bg_overlay==1){
    $row_style .= 'position:relative;';
}
$style = ' style ="'.$row_style.'"';  //$this->buildStyle();


?>
<div class=" <?php echo esc_attr( $css_class ); ?>"<?php echo esc_attr($row_data); ?><?php echo $style; ?>>

    <?php echo $video_style; ?>
    
    <div class="cms-bg-overlay" style="<?php echo $overlay_style; ?>"></div>

    <?php if($full_width): ?><div class="container"><?php endif ; ?>
    <?php if($bg_style=='hvideo'){
            $btn_html = '<div class="exp-videobg-wrap"><div class="exp-videobg-control-btn control-btn-circle exp-mbot"><i class="fa exp-icon fa-play"></i></div></div>';
            $content=$btn_html.$content;
        ?>
        <div class="cms_videbg_content_wrap">
       <?php } ?>
            <?php echo wpb_js_remove_wpautop( $content ); ?>
            <?php if($bg_style=='hvideo'){ ?>
        </div>
        <?php }?>

    
    <?php if($full_width): ?></div><?php endif ; ?>
    
</div>
