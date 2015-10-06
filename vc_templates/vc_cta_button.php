<?php
$output = $color = $icon = $size = $target = $href = $title = $call_text = $call_text_font_size = $call_text_color =$button_color= $position = $el_class =$button_background= '';
extract(shortcode_atts(array(
    'button_type' => 'btn-default',
    'button_type_children' => '',
    'size' => '',
    'target' => '',
    'href' => '',
    'href_children' => '',
    'title' => __('Text on the button', "js_composer"),
    'title_children' => '',
    'call_text' => '',
    'call_image' => '',
    'call_text_font_size' => '',
    'call_text_color' => '',
    'position' => 'cta_align_right',
    'call_out_icon' => '',
    'el_class' => '',
    'css_animation' => '',
    'button_background' => '',
    'button_color' => '',
), $atts));
$el_class = $this->getExtraClass($el_class);
$class_icon='';
if ($call_out_icon) {
    $class_icon.='call-icon-active';
}
if ( $target == 'same' || $target == '_self' ) { $target = ''; }
if ( $target != '' ) { $target = ' target="'.$target.'"'; }
$button_type = ( $button_type != '' ) ? ' btn '.$button_type : '';
$button_type_children = ( $button_type != '' ) ? ' btn '.$button_type_children : '';
$size = ( $size != '' && $size != '' ) ? ' '.$size : ' '.$size;

$a_class = '';
if ( $el_class != '' ) {
    $tmp_class = explode(" ", $el_class);
    if ( in_array("prettyphoto", $tmp_class) ) {
        wp_enqueue_script( 'prettyphoto' );
        wp_enqueue_style( 'prettyphoto' );
        $a_class .= ' prettyphoto'; $el_class = str_ireplace("prettyphoto", "", $el_class);
    }
}
$button_children = '';
if(!empty($title_children)) {
    $button_children = '<a class="wpb_button_a cs-button-children" href="'.$href_children.'"'.$target.'><span class=" '.$button_type_children.$size.'">'.$title_children.'</span></a>';
}
if ( $href != '' ) {
    $btn_style='';
    if(!empty($button_background)){
        $btn_background='style=" background:'.$button_background.';"';
    }else{
        $btn_background='';
    }
    if(!empty($button_color)){
         $btn_color='style=" color:'.$button_color.';"';
    }else{
        $btn_color='';
    }

    
    $button = '<span '.$btn_color.' >'.$title.'</span>';
    $button = '<a class="wpb_button_a cs-button-call'.$a_class.'" href="'.$href.'"'.$target.' '.$btn_background.' >' . $button . '</a>';
} else {
    //$button = '<button class=" '.$button_type.$size.$icon.'">'.$title.$i_icon.'</button>';
    $button = '';
    $el_class .= ' cta_no_button';
}
if($call_image!=''){
    $image=wp_get_attachment_image($call_image,'full');
}else{
    $image='';
}
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'cs_call_to_action wpb_content_element vc_clearfix ' . $position . $el_class, $this->settings['base'], $atts );
$css_class .= $this->getCSSAnimation($css_animation);

$output .= '<div class="'.$css_class.'">';
$output .='<span class="wpb_call_image">'.$image.'</span>';
$output .= apply_filters('wpb_cta_text', '<span class="wpb_call_text '.$class_icon.'" style="font-size: '.$call_text_font_size.';color: '.$call_text_color.';"><i class="'.$call_out_icon.'"></i>'. $call_text . '</span>', array('content'=>$call_text));
//$output .= '<span class="wpb_call_text">'. $call_text . '</span>';
if ( $position != 'cta_align_bottom' ) $output .='<span class="wpb_call_button">'. $button.'</span>';
if ( $position == 'cta_align_bottom' ) $output .= '<span class="wpb_call_button">'.$button.'</span>';
if ( $position != 'cta_align_bottom' ) $output .= $button_children;
if ( $position == 'cta_align_bottom' ) $output .= $button_children;
$output .= '</div> ' . $this->endBlockComment('.cs_call_to_action') . "\n";

echo ''.$output;