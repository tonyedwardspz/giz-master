<?php
/**
 * Add call to action params
 * 
 * @author Fox
 * @since 1.0.0
 */
/*
     * Call to Action Button ----------------------------------------------------------
     */
$target_arr = array (
        __ ( 'Same window', THEMENAME ) => '_self',
        __ ( 'New window', THEMENAME ) => "_blank"
);
$button_type = array (
        __ ( 'Button Default', THEMENAME ) => 'btn-default btn-alt-v1',
        __ ( 'Button Primary', THEMENAME ) => 'btn-primary',
        __ ( 'Button Default Alt', THEMENAME ) => 'btn-default btn-trans',
        __ ( 'Button Default Alt White', THEMENAME ) => 'btn-default btn-trans btn-white',
        __ ( 'Button Primary Alt White', THEMENAME ) => 'btn btn-alt-v1 btn-white'
);
$button_type_children = array (
        __ ( 'Button Default', THEMENAME ) => 'btn-default btn-alt-v1',
        __ ( 'Button Primary', THEMENAME ) => 'btn-primary',
        __ ( 'Button Default Alt', THEMENAME ) => 'btn-default btn-trans',
        __ ( 'Button Default Alt White', THEMENAME ) => 'btn-default btn-trans btn-white',
        __ ( 'Button Primary Alt White', THEMENAME ) => 'btn btn-alt-v1 btn-white'
);
$size_arr = array (
        __ ( 'Default', THEMENAME ) => 'size-default',
        __ ( 'Large', THEMENAME ) => 'btn-lg',
        __ ( 'Medium', THEMENAME ) => 'btn-md',
        __ ( 'Mini', THEMENAME ) => 'btn-xs',
        __ ( 'Cms custom', THEMENAME ) => 'btn-cms'
);
vc_map ( array (
    'name' => __ ( 'Call to Action Button', THEMENAME ),
    'base' => 'vc_cta_button',
    'icon' => 'icon-wpb-call-to-action',
    'category' => __ ( 'Content', THEMENAME ),
    'description' => __ ( 'Catch visitors attention with CTA block', THEMENAME ),
    'params' => array (
        array (
                'type' => 'textarea',
                'admin_label' => true,
                'heading' => __ ( 'Text', THEMENAME ),
                'param_name' => 'call_text',
                'value' => __ ( 'Click edit button to change this text.', THEMENAME ),
                'description' => __ ( 'Enter your content.', THEMENAME )
        ),
        array (
            'type' => 'attach_image',
            'admin_label' => true,
            'heading' => __ ( 'Image', THEMENAME ),
            'param_name' => 'call_image',
            'value' => __ ( 'Click edit button to change this image.', THEMENAME ),
            'description' => __ ( 'Select image.', THEMENAME )
        ),
        array (
                'type' => 'textfield',
                'heading' => __ ( 'Text on the font size', THEMENAME ),
                'param_name' => 'call_text_font_size',
                'value' => __ ( '', THEMENAME ),
                'description' => __ ( 'Text on font size px.', THEMENAME )
        ),
        array (
                'type' => 'colorpicker',
                'heading' => __ ( 'Text on the color', THEMENAME ),
                'param_name' => 'call_text_color',
                'value' => __ ( '', THEMENAME ),
                'description' => __ ( 'Text on color.', THEMENAME )
        ),
        array (
                'type' => 'textfield',
                'heading' => __ ( 'Text on the button', THEMENAME ),
                'param_name' => 'title',
                'value' => __ ( 'Text on the button', THEMENAME ),
                'description' => __ ( 'Text on the button.', THEMENAME )
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __( 'Button color', THEMENAME ),
            'save_always' => true,
            'param_name' => 'button_color',
            // fully compatible to btn1 and btn2
            'value' => __( 'Button color', THEMENAME ),
        ),        
        array(
            'type' => 'colorpicker',
            'heading' => __( 'Button background color', THEMENAME ),
            'save_always' => true,
            'param_name' => 'button_background',
            // fully compatible to btn1 and btn2
            'value' => __( 'Button background color', THEMENAME ),
        ),
        array (
                'type' => 'textfield',
                'heading' => __ ( 'URL (Link)', THEMENAME ),
                'param_name' => 'href',
                'description' => __ ( 'Button link.', THEMENAME )
        ),
        array (
                'type' => 'dropdown',
                'heading' => __ ( 'Target', THEMENAME ),
                'param_name' => 'target',
                'value' => $target_arr,
                'dependency' => array (
                        'element' => 'href',
                        'not_empty' => true
                )
        ),
        array (
                'type' => 'dropdown',
                'heading' => __ ( 'Button align', THEMENAME ),
                'param_name' => 'position',
                'value' => array (
                        __ ( 'Align right', THEMENAME ) => 'cs_align_right',
                        __ ( 'Align left', THEMENAME ) => 'cs_align_left'
                ),
                'description' => __ ( 'Select button alignment.', THEMENAME )
        ),
        array (
                'type' => 'textfield',
                'heading' => __ ( 'Call Out Icon', THEMENAME ),
                'param_name' => 'call_out_icon',
                'description' => __ ( 'Select icon website(http://fortawesome.github.io/Font-Awesome/icons - http://ionicons.com/', THEMENAME )
        ),
        array (
                'type' => 'textfield',
                'heading' => __ ( 'Text on the button children', THEMENAME ),
                'param_name' => 'title_children',
                'value' => __ ( '', THEMENAME ),
                'description' => __ ( 'Text on the button children.', THEMENAME )
        ),
        array (
                'type' => 'textfield',
                'heading' => __ ( 'URL (Link) Children', THEMENAME ),
                'param_name' => 'href_children',
                'description' => __ ( 'Button link children.', THEMENAME )
        ),
        array (
                'type' => 'dropdown',
                'heading' => __ ( 'Button Type Children', THEMENAME ),
                'param_name' => 'button_type_children',
                'value' => $button_type_children,
                'description' => __ ( 'Button Type Children.', THEMENAME ),
                'param_holder_class' => 'vc-button-type-dropdown'
        ),
        array (
                'type' => 'textfield',
                'heading' => __ ( 'Extra class name', THEMENAME ),
                'param_name' => 'el_class',
                'description' => __ ( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', THEMENAME )
        ),
		array(
	            "type" => "cms_template",
	            "param_name" => "cms_template",
	            "shortcode" => "vc_cta_button",
	            "group" => __("Template", THEMENAME),
	        )
    ),
    'js_view' => 'VcCallToActionView'
) );