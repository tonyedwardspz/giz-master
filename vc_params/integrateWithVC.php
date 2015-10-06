<?php
/*Fancybox*/
if(class_exists('Vc_Manager')){
add_action( 'init', 'cms_integrateWithVC' );
if(!function_exists('cms_integrateWithVC')){
    function cms_integrateWithVC(){
        vc_map(
			array(
				"name" => __("CMS Fancy Box", THEMENAME),
				"base" => "cms_fancybox",
				"class" => "vc-cms-fancy-boxes",
				"category" => __("CmsSuperheroes Shortcodes", THEMENAME),
				"params" => array(
					array(
						"type" => "textfield",
						"heading" => __("Title",THEMENAME),
						"param_name" => "title",
						"value" => "",
						"description" => __("Title Of Fancy Icon Box",THEMENAME),
						"group" => __("General Settings", THEMENAME)
					),
					array(
						"type" => "textarea",
						"heading" => __("Description",THEMENAME),
						"param_name" => "description",
						"value" => "",
						"description" => __("Description Of Fancy Icon Box",THEMENAME),
						"group" => __("General Settings", THEMENAME)
					),
					array(
						"type" => "dropdown",
						"heading" => __("Content Align",THEMENAME),
						"param_name" => "content_align",
						"value" => array(
							"Default" => "default",
							"Left" => "left",
							"Right" => "right",
							"Center" => "center"
							),
						"group" => __("General Settings", THEMENAME)
					),
					array(
						"type" => "dropdown",
						"heading" => __("Select Number Cols",THEMENAME),
						"param_name" => "cms_cols",
						"value" => array(
							"1 Column",
							"2 Columns",
							"3 Columns",
							"4 Columns",
							"6 Columns",
							),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					/* Start Items */
					array(
						"type" => "heading",
						"heading" => __("Fancy Box 1",THEMENAME),
						"param_name" => "heading_1",
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								"1 Column"
								)
							),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						'type' => 'textfield',
						'heading' => __( 'Icon Item 1', THEMENAME ),
						'param_name' => 'icon1',
						'value' => '',
						'settings' => array(
							'emptyIcon' => true, // default true, display an "EMPTY" icon?
							'iconsPerPage' => 200, // default 100, how many icons per/page to display
						),
						'description' => __( 'Select icon from library.', THEMENAME ),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "attach_image",
						"heading" => __("Image Item 1",THEMENAME),
						"param_name" => "image1",
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								"1 Column"
								)
							),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "textfield",
						"heading" => __("Title Item 1",THEMENAME),
						"param_name" => "title1",
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								"1 Column"
								)
							),
						"value" => "",
						"description" => __("Title Of Item",THEMENAME),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "textarea",
						"heading" => __("Content Item 1",THEMENAME),
						"param_name" => "description1",
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								"1 Column"
								)
							),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "textfield",
						"heading" => __("Link 1",THEMENAME),
						"param_name" => "button_link1",
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								"1 Column"
								)
							),
						"value" => "#",
						"description" => __("",THEMENAME),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "heading",
						"heading" => __("Fancy Box 2",THEMENAME),
						"param_name" => "heading_2",
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						'type' => 'textfield',
						'heading' => __( 'Icon Item 2', THEMENAME ),
						'param_name' => 'icon2',
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
							)
						),
						'value' => '',
						'settings' => array(
							'emptyIcon' => true, // default true, display an "EMPTY" icon?
							'iconsPerPage' => 200, // default 100, how many icons per/page to display
						),
						'description' => __( 'Select icon from library.', THEMENAME ),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "attach_image",
						"heading" => __("Image Item 2",THEMENAME),
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
						"param_name" => "image2",
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "textfield",
						"heading" => __("Title Item 2",THEMENAME),
						"param_name" => "title2",
						"value" => "",
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
						"description" => __("Title Of Item",THEMENAME),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "textarea",
						"heading" => __("Content Item 2",THEMENAME),
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
						"param_name" => "description2",
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "textfield",
						"heading" => __("Link 2",THEMENAME),
						"param_name" => "button_link2",
						"value" => "#",
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
						"description" => __("",THEMENAME),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "heading",
						"heading" => __("Fancy Box 3",THEMENAME),
						"param_name" => "heading_3",
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						'type' => 'textfield',
						'heading' => __( 'Icon Item 3', THEMENAME ),
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
						'param_name' => 'icon3',
						'value' => '',
						'settings' => array(
							'emptyIcon' => true, // default true, display an "EMPTY" icon?
							'iconsPerPage' => 200, // default 100, how many icons per/page to display
						),
						'description' => __( 'Select icon from library.', THEMENAME ),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "attach_image",
						"heading" => __("Image Item 3",THEMENAME),
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
						"param_name" => "image3",
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "textfield",
						"heading" => __("Title Item 3",THEMENAME),
						"param_name" => "title3",
						"value" => "",
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
						"description" => __("Title Of Item",THEMENAME),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "textarea",
						"heading" => __("Content Item 3",THEMENAME),
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
						"param_name" => "description3",
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "textfield",
						"heading" => __("Link 3",THEMENAME),
						"param_name" => "button_link3",
						"value" => "#",
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
						"description" => __("",THEMENAME),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "heading",
						"heading" => __("Fancy Box 4",THEMENAME),
						"param_name" => "heading_4",
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								)
							),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						'type' => 'textfield',
						'heading' => __( 'Icon Item 4', THEMENAME ),
						'param_name' => 'icon4',
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								)
							),
						'value' => '',
						'settings' => array(
							'emptyIcon' => true, // default true, display an "EMPTY" icon?
							'iconsPerPage' => 200, // default 100, how many icons per/page to display
						),
						'description' => __( 'Select icon from library.', THEMENAME ),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "attach_image",
						"heading" => __("Image Item 4",THEMENAME),
						"param_name" => "image4",
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								)
							),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "textfield",
						"heading" => __("Title Item 4",THEMENAME),
						"param_name" => "title4",
						"value" => "",
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								)
							),
						"description" => __("Title Of Item",THEMENAME),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "textarea",
						"heading" => __("Content Item 4",THEMENAME),
						"param_name" => "description4",
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								)
							),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "textfield",
						"heading" => __("Link 4",THEMENAME),
						"param_name" => "button_link4",
						"value" => "#",
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								)
							),
						"description" => __("",THEMENAME),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "heading",
						"heading" => __("Fancy Box 6",THEMENAME),
						"param_name" => "heading_6",
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>"6 Columns"
							),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						'type' => 'textfield',
						'heading' => __( 'Icon Item 6', THEMENAME ),
						'param_name' => 'icon6',
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>"6 Columns"
							),
						'value' => '',
						'settings' => array(
							'emptyIcon' => true, // default true, display an "EMPTY" icon?
							'iconsPerPage' => 200, // default 100, how many icons per/page to display
						),
						'description' => __( 'Select icon from library.', THEMENAME ),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "attach_image",
						"heading" => __("Image Item 6",THEMENAME),
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>"6 Columns"
							),
						"param_name" => "image6",
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "textfield",
						"heading" => __("Title Item 6",THEMENAME),
						"param_name" => "title6",
						"value" => "",
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								)
							),
						"description" => __("Title Of Item",THEMENAME),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "textarea",
						"heading" => __("Content Item 6",THEMENAME),
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>"6 Columns"
							),
						"param_name" => "description6",
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					array(
						"type" => "textfield",
						"heading" => __("Link 6",THEMENAME),
						"param_name" => "button_link6",
						"value" => "#",
						'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								)
							),
						"description" => __("",THEMENAME),
						"group" => __("Fancy Icon Settings", THEMENAME)
					),
					/* End Items */
					array(
						"type" => "dropdown",
						"heading" => __("Button Type",THEMENAME),
						"param_name" => "button_type",
						"value" => array(
							"Button" => "button",
							"Text" => "text"
							),
						"group" => __("Buttons Settings", THEMENAME)
					),
					array(
						"type" => "textfield",
						"heading" => __("Text",THEMENAME),
						"param_name" => "button_text",
						"value" => "",
						"description" => __("",THEMENAME),
						"group" => __("Buttons Settings", THEMENAME)
					),
					array(
						"type" => "textfield",
						"heading" => __("Extra Class",THEMENAME),
						"param_name" => "class",
						"value" => "",
						"description" => __("",THEMENAME),
						"group" => __("Template", THEMENAME)
					),
					array(
						"type" => "cms_template",
						"param_name" => "cms_template",
						"shortcode" => "cms_fancybox",
						"group" => __("Template", THEMENAME),
					)
				)
			)
		);

/******* Custom Heading *******/
	vc_map( array(
			'name' => __( 'Custom Heading', THEMENAME ),
			'base' => 'vc_custom_heading',
			'icon' => 'icon-wpb-ui-custom_heading',
			'show_settings_on_create' => true,
			'category' => __( 'Content', THEMENAME ),
			'description' => __( 'Text with Google fonts', THEMENAME ),
			'params' => array(
				array(
					'type' => 'textarea',
					'heading' => __( 'Text', THEMENAME ),
					'param_name' => 'text',
					'admin_label' => true,
					'value' => __( 'This is custom heading element with Google Fonts', THEMENAME),
					'description' => __( 'If you are using non-latin characters be sure to activate them under Settings/Visual Composer/General Settings.', THEMENAME),
				),
				array(
					'type' => 'dropdown',
			        'heading' => __("Layout", THEMENAME),
			        'param_name' => 'layout',
			        'value' => array(
			            'Default' => 'default',
			            'Layout 1' => 'layout1',
			            'Layout 2' => 'layout2'
			        ),
			    ),
				array(
					'type' => 'dropdown',
			        'heading' => __("Text align", THEMENAME),
			        'param_name' => 'heading_align',
			        'value' => array(
			            'Left' => 'left',
			            'Center' => 'center',
			            'Right' => 'right'
			        ),
			        "dependency" => array(
			            "element" => "layout",
			            "value" => array(
				                "layout1",
			            )
			        )
			    ),
				array(
					'type' => 'textfield',
					'heading' => __("Sub heading", THEMENAME),
			        'param_name' => 'sub_heading',
			        'description' => '',
			        "dependency" => array(
			            "element" => "layout",
			            "value" => array(
			                "default"
			            )
			        )
				),
				array(
					'type' => 'vc_link',
					'heading' => __( 'URL (Link)', 'js_composer' ),
					'param_name' => 'link',
					'description' => __( 'Add link to custom heading.', 'js_composer' ),
					// compatible with btn2 and converted from href{btn1}
				),
				array(
					'type' => 'font_container',
					'param_name' => 'font_container',
					'value' => 'tag:h2|text_align:left',
					'settings' => array(
						'fields' => array(
							'tag' => 'h2', // default value h2
							'text_align',
							'font_size',
							'line_height',
							'color',
							//'font_style_italic'
							//'font_style_bold'
							//'font_family'

							'tag_description' => __( 'Select element tag.', 'js_composer' ),
							'text_align_description' => __( 'Select text alignment.', 'js_composer' ),
							'font_size_description' => __( 'Enter font size.', 'js_composer' ),
							'line_height_description' => __( 'Enter line height.', 'js_composer' ),
							'color_description' => __( 'Select heading color.', 'js_composer' ),
							//'font_style_description' => __('Put your description here','js_composer'),
							//'font_family_description' => __('Put your description here','js_composer'),
						),
					),
					// 'description' => __( '', 'js_composer' ),
				),
				array(
					'type' => 'checkbox',
					'heading' => __( 'Use theme default font family?', 'js_composer' ),
					'param_name' => 'use_theme_fonts',
					'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
					'description' => __( 'Use font family from the theme.', 'js_composer' ),
				),
				array(
					'type' => 'google_fonts',
					'param_name' => 'google_fonts',
					'value' => 'font_family:Abril%20Fatface%3Aregular|font_style:400%20regular%3A400%3Anormal',
					// default
					//'font_family:'.rawurlencode('Abril Fatface:400').'|font_style:'.rawurlencode('400 regular:400:normal')
					// this will override 'settings'. 'font_family:'.rawurlencode('Exo:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic').'|font_style:'.rawurlencode('900 bold italic:900:italic'),
					'settings' => array(
						//'no_font_style' // Method 1: To disable font style
						//'no_font_style'=>true // Method 2: To disable font style
						'fields' => array(
							//'font_family' => 'Abril Fatface:regular',
							//'Exo:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic',// Default font family and all available styles to fetch
							//'font_style' => '400 regular:400:normal',
							// Default font style. Name:weight:style, example: "800 bold regular:800:normal"
							'font_family_description' => __( 'Select font family.', 'js_composer' ),
							'font_style_description' => __( 'Select font styling.', 'js_composer' )
						)
					),
					'dependency' => array(
						'element' => 'use_theme_fonts',
						'value_not_equal_to' => 'yes',
					),
					// 'description' => __( '', 'js_composer' ),
				),
				array(
					'type' => 'textfield',
					'heading' => __( 'Extra class name', THEMENAME),
					'param_name' => 'el_class',
					'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', THEMENAME),
				),
				array(
					'type' => 'css_editor',
					'heading' => __( 'Css', THEMENAME ),
					'param_name' => 'css',
					'group' => __( 'Design options', THEMENAME )
				)
				
			),
		) );

/******* pie*******/
		vc_map( array(
			'name' => __( 'Pie Chart', THEMENAME ),
			'base' => 'vc_pie',
			'class' => '',
			'icon' => 'cs_icon_for_vc',
			'category' => __( 'CmsSuperheroes Shortcodes', 'THEMENAME' ),
			'description' => __( 'Animated pie chart', 'THEMENAME' ),
			'params' => array(
				array(
					'type' => 'textfield',
					'heading' => __( 'Widget title', 'THEMENAME' ),
					'param_name' => 'title',
					'description' => __( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'THEMENAME' ),
					'admin_label' => true
				),
				array(
					'type' => 'textfield',
					'heading' => __( 'Pie value', 'THEMENAME' ),
					'param_name' => 'value',
					'description' => __( 'Input graph value here. Choose range between 0 and 100.', 'THEMENAME' ),
					'value' => '50',
					'admin_label' => true
				),
				array(
					'type' => 'textfield',
					'heading' => __( 'Pie label value', 'THEMENAME' ),
					'param_name' => 'label_value',
					'description' => __( 'Input integer value for label. If empty "Pie value" will be used.', 'THEMENAME' ),
					'value' => ''
				),
				array(
					'type' => 'textfield',
					'heading' => __( 'Units', 'THEMENAME' ),
					'param_name' => 'units',
					'description' => __( 'Enter measurement units (if needed) Eg. %, px, points, etc. Graph value and unit will be appended to the graph title.', 'THEMENAME' )
				),
				array(
					'type' => 'textfield',
					'heading' => __( 'Bar width', 'THEMENAME' ),
					'param_name' => 'bar_width',
				),
				array(
					'type' => 'colorpicker',
					'heading' => __( 'Color', 'THEMENAME' ),
					'param_name' => 'pie_color',
				),
				array(
					'type' => 'dropdown',
					'heading' => __( 'Pie border', 'THEMENAME' ),
					'param_name' => 'pie_border',
					'value' => array(
						"Disable"=>'0',
						'Enable'=>'1'
					),
				),
				array(
					'type' => 'colorpicker',
					'heading' => __( 'Border Color', 'THEMENAME' ),
					'param_name' => 'pie_border_color',
					'dependency' => array(
						"element"=>"pie_border",
						"value"=>array(
							"1"
						)
					),
				),
				array(
					'type' => 'textfield',
					'heading' => __( 'Border width', 'THEMENAME' ),
					'param_name' => 'pie_border_width',
					'dependency' => array(
						"element"=>"pie_border",
						"value"=>array(
							"1"
						)
					),
				),
				array(
					'type' => 'textfield',
					'heading' => __( 'Padding', 'THEMENAME' ),
					'param_name' => 'pie_padding',
					'dependency' => array(
						"element"=>"pie_border",
						"value"=>array(
							"1"
						)
					),
				),
				array(
					'type' => 'textfield',
					'heading' => __( 'Extra class name', 'THEMENAME' ),
					'param_name' => 'el_class',
					'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'THEMENAME' )
				),

			)
		) );

/********** Cms_counter ***********/
		vc_map(
			array(
				"name" => __("CMS Counter", THEMENAME),
			    "base" => "cms_counter",
			    "class" => "vc-cms-counter",
			    "category" => __("CmsSuperheroes Shortcodes", THEMENAME),
			    "params" => array(
			    	array(
			            "type" => "textfield",
			            "heading" => __("Title",THEMENAME),
			            "param_name" => "title",
			            "value" => "",
			            "description" => __("",THEMENAME),
			            "group" => __("General Settings", THEMENAME)
			        ),
			        array(
			            "type" => "textarea",
			            "heading" => __("Description",THEMENAME),
			            "param_name" => "description",
			            "value" => "",
			            "description" => __("",THEMENAME),
			            "group" => __("General Settings", THEMENAME)
			        ),
			        array(
			            "type" => "colorpicker",
			            "heading" => __("Text color",THEMENAME),
			            "param_name" => "text_color",
			            "description" => __("",THEMENAME),
			            "group" => __("General Settings", THEMENAME)
			        ),
			        array(
			            "type" => "dropdown",
			            "heading" => __("Content Align",THEMENAME),
			            "param_name" => "content_align",
			            "value" => array(
			            	"Default" => "default",
			            	"Left" => "left",
			            	"Right" => "right",
			            	"Center" => "center"
			            	),
			            "group" => __("General Settings", THEMENAME)
			        ),
			        array(
			            "type" => "dropdown",
			            "heading" => __("Select Number Cols",THEMENAME),
			            "param_name" => "cms_cols",
			            "value" => array(
			            	"1 Column",
			            	"2 Columns",
			            	"3 Columns",
			            	"4 Columns",
			            	"6 Columns",
			            	),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        /* Counters */
			        array(
			            "type" => "heading",
			            "heading" => __("Counter 1",THEMENAME),
			            "param_name" => "heading_1",
			            'dependency' => array(
			            	"element"=>"cms_cols",
			            	"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								"1 Column"
								)
			            	),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "textfield",
			            "heading" => __("Title Counter 1",THEMENAME),
			            "param_name" => "title1",
			            'dependency' => array(
			            	"element"=>"cms_cols",
			            	"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								"1 Column"
								)
			            	),
			            "value" => "",
			            "description" => __("Title Of Item",THEMENAME),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "dropdown",
			            "heading" => __("Counter Type 1",THEMENAME),
			            "param_name" => "type1",
			            "value" => array(
			            	"Zero",
			            	"Random"
			            	),
			            'dependency' => array(
			            	"element"=>"cms_cols",
			            	"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								"1 Column"
								)
			            	),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
						'type' => 'iconpicker',
						'heading' => __( 'Icon Counter 1', THEMENAME ),
						'param_name' => 'icon1',
			            'value' => '',
			            'dependency' => array(
							'element' => 'type',
							'value' => 'fontawesome',
						),
						'settings' => array(
							'emptyIcon' => true, // default true, display an "EMPTY" icon?
							'iconsPerPage' => 200, // default 100, how many icons per/page to display
						),
						'description' => __( 'Select icon from library.', THEMENAME ),
						"group" => __("Counters Settings", THEMENAME)
					),
			        array(
			            "type" => "textfield",
			            "heading" => __("Digit 1",THEMENAME),
			            "param_name" => "digit1",
			            "value" => "69",
			            'dependency' => array(
			            	"element"=>"cms_cols",
			            	"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								"1 Column"
								)
			            	),
			            "description" => __("",THEMENAME),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "textfield",
			            "heading" => __("Suffix 1",THEMENAME),
			            "param_name" => "suffix1",
			            "value" => "",
			            'dependency' => array(
			            	"element"=>"cms_cols",
			            	"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								"1 Column"
								)
			            	),
			            "description" => __("",THEMENAME),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "textfield",
			            "heading" => __("Prefix 1",THEMENAME),
			            "param_name" => "prefix1",
			            'dependency' => array(
			            	"element"=>"cms_cols",
			            	"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								"1 Column"
								)
			            	),
			            "value" => "",
			            "description" => __("",THEMENAME),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "heading",
			            "heading" => __("Counter 2",THEMENAME),
			            "param_name" => "heading_2",
			            'dependency' => array(
			            	"element"=>"cms_cols",
			            	"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
			            	),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "textfield",
			            "heading" => __("Title Counter 2",THEMENAME),
			            "param_name" => "title2",
			            "value" => "",
			            'dependency' => array(
			            	"element"=>"cms_cols",
			            	"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
			            	),
			            "description" => __("Title Of Item",THEMENAME),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "dropdown",
			            "heading" => __("Counter Type 2",THEMENAME),
			            "param_name" => "type2",
			            'dependency' => array(
			            	"element"=>"cms_cols",
			            	"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
			            "value" => array(
			            	"Zero",
			            	"Random"
			            	),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
						'type' => 'iconpicker',
						'heading' => __( 'Icon Counter 2', THEMENAME ),
						'param_name' => 'icon2',
			            'value' => '',
						'settings' => array(
							'emptyIcon' => true, // default true, display an "EMPTY" icon?
							'iconsPerPage' => 200, // default 100, how many icons per/page to display
						),
						'dependency' => array(
			            	"element"=>"cms_cols",
			            	"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
						'description' => __( 'Select icon from library.', THEMENAME ),
						"group" => __("Counters Settings", THEMENAME)
					),
			        array(
			            "type" => "textfield",
			            "heading" => __("Digit 2",THEMENAME),
			            "param_name" => "digit2",
			            "value" => "69",
			            'dependency' => array(
			            	"element"=>"cms_cols",
			            	"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
			            "description" => __("",THEMENAME),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "textfield",
			            "heading" => __("Suffix 2",THEMENAME),
			            "param_name" => "suffix2",
			            "value" => "",
			            'dependency' => array(
			            	"element"=>"cms_cols",
			            	"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
			            "description" => __("",THEMENAME),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "textfield",
			            "heading" => __("Prefix 2",THEMENAME),
			            "param_name" => "prefix2",
			            "value" => "",
			            'dependency' => array(
			            	"element"=>"cms_cols",
			            	"value"=>array(
								"2 Columns",
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
			            "description" => __("",THEMENAME),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "heading",
			            "heading" => __("Counter 3",THEMENAME),
			            "param_name" => "heading_3",
			            'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "textfield",
			            "heading" => __("Title Counter 3",THEMENAME),
			            "param_name" => "title3",
			            "value" => "",
			            'dependency' => array(
			            	"element"=>"cms_cols",
			            	"value"=>array(
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
			            	),
			            "description" => __("Title Of Item",THEMENAME),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "dropdown",
			            "heading" => __("Counter Type 3",THEMENAME),
			            "param_name" => "type3",
			            'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
			            "value" => array(
			            	"Zero",
			            	"Random"
			            	),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
						'type' => 'iconpicker',
						'heading' => __( 'Icon Counter 3', THEMENAME ),
						'param_name' => 'icon3',
			            'value' => '',
						'settings' => array(
							'emptyIcon' => true, // default true, display an "EMPTY" icon?
							'iconsPerPage' => 200, // default 100, how many icons per/page to display
						),
						'dependency' => array(
			            	"element"=>"cms_cols",
			            	"value"=>array(
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
						'description' => __( 'Select icon from library.', THEMENAME ),
						"group" => __("Counters Settings", THEMENAME)
					),
			        array(
			            "type" => "textfield",
			            "heading" => __("Digit 3",THEMENAME),
			            "param_name" => "digit3",
			            'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
			            "value" => "69",
			            "description" => __("",THEMENAME),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "textfield",
			            "heading" => __("Suffix 3",THEMENAME),
			            "param_name" => "suffix3",
			            'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
			            "value" => "",
			            "description" => __("",THEMENAME),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "textfield",
			            "heading" => __("Prefix 3",THEMENAME),
			            "param_name" => "prefix3",
			            'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								"3 Columns",
								)
							),
			            "value" => "",
			            "description" => __("",THEMENAME),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "heading",
			            "heading" => __("Counter 4",THEMENAME),
			            "param_name" => "heading_4",
			            'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								)
							),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "textfield",
			            "heading" => __("Title Counter 4",THEMENAME),
			            "param_name" => "title4",
			            "value" => "",
			            'dependency' => array(
			            	"element"=>"cms_cols",
			            	"value"=>array(
								"6 Columns",
								"4 Columns",
								)
			            	),
			            "description" => __("Title Of Item",THEMENAME),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "dropdown",
			            "heading" => __("Counter Type 4",THEMENAME),
			            "param_name" => "type4",
			            'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								)
							),
			            "value" => array(
			            	"Zero",
			            	"Random"
			            	),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
						'type' => 'iconpicker',
						'heading' => __( 'Icon Counter 4', THEMENAME ),
						'param_name' => 'icon4',
			            'value' => '',
						'settings' => array(
							'emptyIcon' => true, // default true, display an "EMPTY" icon?
							'iconsPerPage' => 200, // default 100, how many icons per/page to display
						),
						'dependency' => array(
			            	"element"=>"cms_cols",
			            	"value"=>array(
								"6 Columns",
								"4 Columns",
								)
							),
						'description' => __( 'Select icon from library.', THEMENAME ),
						"group" => __("Counters Settings", THEMENAME)
					),
			        array(
			            "type" => "textfield",
			            "heading" => __("Digit 4",THEMENAME),
			            "param_name" => "digit4",
			            'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								)
							),
			            "value" => "69",
			            "description" => __("",THEMENAME),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "textfield",
			            "heading" => __("Suffix 4",THEMENAME),
			            "param_name" => "suffix4",
			            'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								)
							),
			            "value" => "",
			            "description" => __("",THEMENAME),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "textfield",
			            "heading" => __("Prefix 4",THEMENAME),
			            "param_name" => "prefix4",
			            'dependency' => array(
							"element"=>"cms_cols",
							"value"=>array(
								"6 Columns",
								"4 Columns",
								)
							),
			            "value" => "",
			            "description" => __("",THEMENAME),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "heading",
			            "heading" => __("Counter 6",THEMENAME),
			            "param_name" => "heading_6",
			            'dependency' => array(
							"element"=>"cms_cols",
							"value"=>"6 Columns"
							),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "textfield",
			            "heading" => __("Title Counter 6",THEMENAME),
			            "param_name" => "title6",
			            "value" => "",
			            'dependency' => array(
			            	"element"=>"cms_cols",
			            	"value"=>array(
								"6 Columns",
								)
			            	),
			            "description" => __("Title Of Item",THEMENAME),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "dropdown",
			            "heading" => __("Counter Type 6",THEMENAME),
			            "param_name" => "type6",
			            'dependency' => array(
							"element"=>"cms_cols",
							"value"=>"6 Columns"
							),
			            "value" => array(
			            	"Zero",
			            	"Random"
			            	),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
						'type' => 'iconpicker',
						'heading' => __( 'Icon Counter 6', THEMENAME ),
						'param_name' => 'icon6',
			            'value' => '',
						'settings' => array(
							'emptyIcon' => true, // default true, display an "EMPTY" icon?
							'iconsPerPage' => 200, // default 100, how many icons per/page to display
						),
						'dependency' => array(
			            	"element"=>"cms_cols",
			            	"value"=>array(
								"6 Columns",
								)
							),
						'description' => __( 'Select icon from library.', THEMENAME ),
						"group" => __("Counters Settings", THEMENAME)
					),
			        array(
			            "type" => "textfield",
			            "heading" => __("Digit 6",THEMENAME),
			            "param_name" => "digit6",
			            'dependency' => array(
							"element"=>"cms_cols",
							"value"=>"6 Columns"
							),
			            "value" => "69",
			            "description" => __("",THEMENAME),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "textfield",
			            "heading" => __("Prefix 6",THEMENAME),
			            "param_name" => "prefix6",
			            'dependency' => array(
							"element"=>"cms_cols",
							"value"=>"6 Columns"
							),
			            "value" => "",
			            "description" => __("",THEMENAME),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        array(
			            "type" => "textfield",
			            "heading" => __("Suffix 6",THEMENAME),
			            "param_name" => "suffix6",
			            'dependency' => array(
							"element"=>"cms_cols",
							"value"=>"6 Columns"
							),
			            "value" => "",
			            "description" => __("",THEMENAME),
			            "group" => __("Counters Settings", THEMENAME)
			        ),
			        /* End Counters */
			        array(
			            "type" => "textfield",
			            "heading" => __("Extra Class",THEMENAME),
			            "param_name" => "class",
			            "value" => "",
			            "description" => __("",THEMENAME),
			            "group" => __("Template", THEMENAME)
			        ),
			    	array(
			            "type" => "cms_template",
			            "param_name" => "cms_template",
			            "shortcode" => "cms_counter",
			            "group" => __("Template", THEMENAME),
			        )
				)
			)
		);
/* Graph
---------------------------------------------------------- */
		vc_map( array(
			'name' => __( 'Progress Bar', THEMENAME ),
			'base' => 'vc_progress_bar',
			'icon' => 'icon-wpb-graph',
			'category' => __( 'Content', THEMENAME ),
			'description' => __( 'Animated progress bar', THEMENAME ),
			'params' => array(
				array(
					'type' => 'textfield',
					'heading' => __( 'Widget title', THEMENAME ),
					'param_name' => 'title',
					'description' => __( 'Enter text which will be used as widget title. Leave blank if no title is needed.', THEMENAME )
				),
				array(
					'type' => 'exploded_textarea',
					'heading' => __( 'Graphic values', THEMENAME ),
					'param_name' => 'values',
					'description' => __( 'Input graph values, titles and color here. Divide values with linebreaks (Enter). Example: 90|Development|#e75956', THEMENAME ),
					'value' => "90|Development,80|Design,70|Marketing"
				),
				array(
					'type' => 'textfield',
					'heading' => __( 'Units', THEMENAME ),
					'param_name' => 'units',
					'description' => __( 'Enter measurement units (if needed) Eg. %, px, points, etc. Graph value and unit will be appended to the graph title.', THEMENAME )
				),
				array(
					'type' => 'dropdown',
					'heading' => __( 'Bar color', THEMENAME ),
					'param_name' => 'bgcolor',
					'value' => array(
						__( 'Grey', THEMENAME ) => 'bar_grey',
						__( 'Blue', THEMENAME ) => 'bar_blue',
						__( 'Turquoise', THEMENAME ) => 'bar_turquoise',
						__( 'Green', THEMENAME ) => 'bar_green',
						__( 'Orange', THEMENAME ) => 'bar_orange',
						__( 'Red', THEMENAME ) => 'bar_red',
						__( 'Black', THEMENAME ) => 'bar_black',
						__( 'Custom Color', THEMENAME ) => 'custom',
						__( 'Primary Color', THEMENAME ) => 'primary_color'
					),
					'description' => __( 'Select bar background color.', THEMENAME ),
					'admin_label' => true
				),
				array(
					'type' => 'colorpicker',
					'heading' => __( 'Bar custom color', THEMENAME ),
					'param_name' => 'custombgcolor',
					'description' => __( 'Select custom background color for bars.', THEMENAME ),
					'dependency' => array( 'element' => 'bgcolor', 'value' => array( 'custom' ) )
				),
				array(
					'type' => 'checkbox',
					'heading' => __( 'Options', THEMENAME ),
					'param_name' => 'options',
					'value' => array(
						__( 'Add Stripes?', THEMENAME ) => 'striped',
						__( 'Add animation? Will be visible with striped bars.', THEMENAME ) => 'animated'
					)
				),
				array(
					'type' => 'textfield',
					'heading' => __( 'Extra class name', THEMENAME ),
					'param_name' => 'el_class',
					'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', THEMENAME )
				)
			)
		) );
    }
}
}