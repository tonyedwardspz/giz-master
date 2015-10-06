<?php
/**
 * Add row params
 * 
 * @author Fox
 * @since 1.0.0
 */
if (shortcode_exists('vc_row')) {
    vc_add_param('vc_row', array(
        'type' => 'checkbox',
        'heading' => __("Content Boxed", THEMENAME),
        'param_name' => 'full_width',
        'value' => array(
            'Yes' => true
        ),
        'description' => __("Yes = content boxed, default content full width.", THEMENAME)
    ));
    vc_add_param('vc_row', array(
        'type' => 'dropdown',
        'heading' => __("Background Style", THEMENAME),
        'param_name' => 'bg_style',
        'value' => array(
            'Default' => '',
            'Image / Parallax' => 'img_parallax',
            'Image / Fixed' => 'img_fixed',
            'Hosted Video' => 'hvideo'
        ),
        'group' => 'Design Options',
        'description' => __("Select the kind of background would you like to set for this row.", THEMENAME)
    ));
    vc_add_param('vc_row', array(
        'type' => 'dropdown',
        'heading' => __("Background overlay ", THEMENAME),
        'param_name' => 'bg_overlay',
        'group' => 'Design Options',
        'description' => __(".Background overlay .", THEMENAME),
        'value' => array(
            'Disable' => '0',
            'Enable' => '1',
            
        ),
    ));
    vc_add_param('vc_row', array(
        'type' => 'textfield',
        'heading' => __("Parallax Speed", THEMENAME),
        'param_name' => 'bd_p_speed',
        'group' => 'Design Options',
        "dependency" => array(
            "element" => "bg_style",
            "value" => array(
                "img_parallax"
            )
        ),
        'description' => __("Set speed moving for parallax default 0.1 .", THEMENAME)
    ));
	vc_add_param('vc_row', array(
        'type' => 'attach_image',
        'heading' => __("Video image thumbnail", THEMENAME),
        'param_name' => 'video_image_thumb',
        'group' => 'Design Options',
        "dependency" => array(
            "element" => "bg_style",
            "value" => array(
                "hvideo"
            )
        ),
    ));
    vc_add_param('vc_row', array(
        'type' => 'textfield',
        'heading' => __("MP4 (URL)", THEMENAME),
        'param_name' => 'bg_video_mp4',
        'group' => 'Design Options',
        "dependency" => array(
            "element" => "bg_style",
            "value" => array(
                "hvideo"
            )
        ),
        'description' => __(".mp4 video.", THEMENAME)
    ));
    vc_add_param('vc_row', array(
        'type' => 'textfield',
        'heading' => __("WEBM (URL)", THEMENAME),
        'param_name' => 'bg_video_webm',
        'group' => 'Design Options',
        "dependency" => array(
            "element" => "bg_style",
            "value" => array(
                "hvideo"
            )
        ),
        'description' => __(".webm video.", THEMENAME)
    ));
    vc_add_param('vc_row', array(
        'type' => 'colorpicker',
        'heading' => __("Background overlay color", THEMENAME),
        'param_name' => 'bg_overlay_color',
        'group' => 'Design Options',
        'description' => __(".Background overlay color.", THEMENAME),
        "dependency" => array(
            "element" => "bg_overlay",
            "value" => array(
                "1"
            )
        ),
    ));
    vc_add_param('vc_row', array(
        'type' => 'textfield',
        'heading' => __("Background overlay opacity", THEMENAME),
        'param_name' => 'bg_overlay_opacity',
        'group' => 'Design Options',
        'description' => __(".Background overlay opacity.", THEMENAME),
        "dependency" => array(
            "element" => "bg_overlay",
            "value" => array(
                "1"
            )
        ),
    ));
    vc_add_param('vc_row', array(
        'type' => 'attach_image',
        'heading' => __("Background overlay pattern ", THEMENAME),
        'param_name' => 'bg_overlay_pattern',
        'group' => 'Design Options',
        'description' => __(".Background overlay pattern.", THEMENAME),
        "dependency" => array(
            "element" => "bg_overlay",
            "value" => array(
                "1"
            )
        ),
    ));
}