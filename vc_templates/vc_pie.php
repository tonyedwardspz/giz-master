<?php
$title = $el_class = $value = $label_value= $units = $bar_width=$pie_padding=$pie_border_width=$pie_border_color='';
extract(shortcode_atts(array(
'title' => '',
'el_class' => '',
'value' => '50',
'units' => '',
'color' => 'turquoise',
'label_value' => '',
'pie_color' => '',
'pie_border_width' => '0',
'pie_padding' => '0',
'bar_width' => '5',
'pie_border_color' => '',
), $atts));
wp_enqueue_script('cms_chart', get_template_directory_uri() . '/assets/js/cms.jquery.vc_chart.js', array( 'jquery', 'waypoints', 'progressCircle'), '1.0.0', true);
//wp_enqueue_script('cms_chart');
$pie_color=cms_hex2rgb($pie_color);
$pie_border_color=cms_hex2rgb($pie_border_color);
$el_class = $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'vc_pie_chart wpb_content_element' . $el_class, $this->settings['base'], $atts );
$output = "\n\t".'<div class= "'.$css_class.'" data-pie-value="'.$value.'" data-pie-width="'.$bar_width.'" data-pie-padding="'.$pie_padding.'" data-pie-border="'.$pie_border_width.'" data-pie-border-color="'.$pie_border_color.'" data-pie-label-value="'.$label_value.'" data-pie-units="'.$units.'" data-pie-color="'.$pie_color.'">';
    $output .= "\n\t\t".'<div class="wpb_wrapper">';
        $output .= "\n\t\t\t".'<div class="vc_pie_wrapper">';
            $output .= "\n\t\t\t".'<span class="vc_pie_chart_back"></span>';
            $output .= "\n\t\t\t".'<div class="vc_pie_chart_info"><div class="vc_pie_chart_info_wrap"><div class="vc_pie_chart_info_inner"><h2 class="pie_chart_value">'.$value.' '.$units.'</h2><p class="pie_chart_title" style="color:'.$pie_color.'">'.$title.'</p></div></div></div>';
            $output .= "\n\t\t\t".'<canvas width="101" height="101"></canvas>';
            $output .= "\n\t\t\t".'</div>';
        //wpb_widget_title(array('title' => $title, 'extraclass' => 'wpb_pie_chart_heading'));
    $output .= "\n\t\t".'</div>'.$this->endBlockComment('.wpb_wrapper');
    $output .= "\n\t".'</div>'.$this->endBlockComment('.wpb_pie_chart')."\n";

echo $output;