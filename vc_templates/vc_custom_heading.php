<?php
/**
 * @var $this WPBakeryShortCode_VC_Custom_heading
 */
$output = $text = $google_fonts = $font_container = $el_class = $css = $google_fonts_data = $font_container_data = $sub_heading=$layout='';

extract( $this->getAttributes( $atts ) );
extract( $this->getStyles( $el_class, $css, $google_fonts_data, $font_container_data, $atts ) );
$settings = get_option( 'wpb_js_google_fonts_subsets' );
$subsets = '';
if ( is_array( $settings ) && ! empty( $settings ) ) {
	$subsets = '&subset=' . implode( ',', $settings );
}
if ( ! empty( $google_fonts_data ) && isset( $google_fonts_data['values']['font_family'] ) ) {
	wp_enqueue_style( 'vc_google_fonts_' . vc_build_safe_css_class( $google_fonts_data['values']['font_family'] ), '//fonts.googleapis.com/css?family=' . $google_fonts_data['values']['font_family'] . $subsets );
}


$output .= '<div class="' . esc_attr( $css_class ) . ' '.$atts['layout'].'" '.(($atts['layout']=="layout2")? "style='text-align:center'" :"").'>';
$style = '';
$output .='<div class="vc_custom_heading-wrap  row " >';
if($atts['layout']=='default' ){
	if(!empty($atts['sub_heading'])){
		$output .='<div class="table-responsive">';
		$output .='<div class="table">';
		
		$output .='<div class="table-cell">';
		$output .= '<' . $font_container_data['values']['tag']  . ' >';
		$output .= $text;
		$output .= '</' . $font_container_data['values']['tag'] . '>';
		$output .= '</div>';
		$output .='<div class="table-cell">';
		$output .= '<p>'.$atts['sub_heading'].'</p>';
		$output .= '</div>';
		$output .='</div>';
		$output .='</div>';
	}else{
		$output .= '<' . $font_container_data['values']['tag'] . ' >';
		$output .= $text;
		$output .= '</' . $font_container_data['values']['tag'] . '>';
	}
}elseif ($atts['layout']=='layout1') {
	$style='';
	if(isset($atts['heading_align'])){
		$style .= ' text-align:' . esc_attr( $atts['heading_align']) . ';';
	}
	if(!empty($style)){
		$style ='style="'.$style.'"';
	}
	$output .= '<p  class="'.$atts['layout'].'" ' . $style . ' >';
	$output .= $text;
	$output .= '</p>';
}elseif ($atts['layout']=='layout2') {
	$output .= '<' . $font_container_data['values']['tag']  . '  >';
	$output .= $text;
	$output .= '</' . $font_container_data['values']['tag'] . '>';
}
$output .= '</div>';
$output .= '<div class="custom-heading-driver '.$atts['layout'].'" ></div>';

$output .= '</div>';

echo $output;