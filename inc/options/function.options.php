<?php
global $cms_base;
/* get local fonts. */
$local_fonts = is_admin() ? $cms_base->getListLocalFontsName() : array() ;
/**
 * Home Options
 * 
 * @author Fox
 */
$this->sections[] = array(
    'title' => __('Main Options', THEMENAME),
    'icon' => 'el-icon-dashboard',
    'fields' => array(
        array(
            'id' => 'intro_product',
            'type' => 'intro_product',
        )
    )
);
/* Start Dummy Data*/
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
$msg = $disabled = '';
if (!class_exists('WPBakeryVisualComposerAbstract') or !class_exists('CmssuperheroesCore') or !function_exists('cptui_create_custom_post_types')){
    $disabled = ' disabled ';
    $msg='You should be install visual composer, Cmssuperheroes and Custom Post Type UI plugins to import data.';
}
$this->sections[] = array(
    'icon' => 'el-icon-briefcase',
    'title' => __('Demo Content', THEMENAME),
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => '<input type=\'button\' name=\'sample\' id=\'dummy-data\' '.$disabled.' value=\'Import Now\' /><div class=\'cms-dummy-process\'><div  class=\'cms-dummy-process-bar\'></div></div><div id=\'cms-msg\'><span class="cms-status"></span>'.$msg.'</div>',
            'id' => 'theme',
            'icon' => true,
            'default' => 'wp-bullet',
            'options' => array(
                'wp-bullet' => get_template_directory_uri().'/screenshot.png'
            ),
            'type' => 'image_select',
            'title' => 'Select Theme'
        )
    )
);

$this->sections[] = array(
    'title' => __('Bullet Survey', THEMENAME),
    'icon' => 'el-icon-heart-empty',
    'fields' => array(
        array(
            'id' => 'iframe',
            'type' => 'iframe',
        )
    )
);

/* End Dummy Data*/
/**
 * Header Options
 * 
 * @author Fox
 */
$this->sections[] = array(
    'title' => __('Header', THEMENAME),
    'icon' => 'el-icon-credit-card',
    'fields' => array(
        array(
            'id' => 'header_layout',
            'title' => __('Layouts', THEMENAME),
            'subtitle' => __('select a layout for header', THEMENAME),
            'default' => '',
            'type' => 'image_select',
            'options' => array(
                '' => get_template_directory_uri().'/inc/options/images/header/h-default.png',
                
            )
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', THEMENAME),
            'id' => 'header_margin',
            'type' => 'text',
            'title' => 'Margin',
            'default' => ''
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', THEMENAME),
            'id' => 'header_padding',
            'type' => 'text',
            'title' => 'Padding',
            'default' => ''
        ),
    )
);


/* Logo */
$this->sections[] = array(
    'title' => __('Logo', THEMENAME),
    'icon' => 'el-icon-picture',
    'subsection' => true,
    'fields' => array(
        array(
            'title' => __('Logo', THEMENAME),
            'subtitle' => __('Select an image file for your logo.', THEMENAME),
            'id' => 'main_logo',
            'type' => 'media',
            'url' => true,
            'default' => array(
                'url'=>get_template_directory_uri().'/assets/images/logo.png'
            )
        ),
        array(
            'subtitle' => __('in pixels.', THEMENAME),
            'id' => 'main_logo_height',
            'type' => 'text',
            'title' => 'Height',
            'default' => ''
        ),
    )
);

/**
 * Page Title
 *
 * @author Fox
 */
$this->sections[] = array(
    'title' => __('Page Title & BC', THEMENAME),
    'icon' => 'el-icon-map-marker',
    'fields' => array(
        array(
            'id' => 'page_title_layout',
            'title' => __('Layouts', THEMENAME),
            'subtitle' => __('select a layout for page title', THEMENAME),
            'default' => '1',
            'type' => 'image_select',
            'options' => array(
                '' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-0.png',
                '1' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-1.png',
                '5' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-5.png',
                '6' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-6.png',
            )
        ),
    )
);
/* Page Title */
$this->sections[] = array(
    'icon' => 'el-icon-podcast',
    'title' => __('Page Title', THEMENAME),
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => __('Sub page title', THEMENAME),
            'id' => 'page_sub_title',
            'type' => 'text',
            'title' => 'Sub page title',
            'default' => ''
        ),
        array(
            'title' => __('Page title image', THEMENAME),
            'id' => 'page_title_image',
            'type' => 'media',
            'url' => true,
        ),
        array(
            'id' => 'page_title_typography',
            'type' => 'typography',
            'title' => __('Typography', THEMENAME),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('.page-title #page-title-text h1'),
            'units' => 'px',
            'subtitle' => __('Typography option with title text.', THEMENAME),
            'default' => array(
                'color' => '',
            )
        ),
    )
);
/* Breadcrumb */
$this->sections[] = array(
    'icon' => 'el-icon-random',
    'title' => __('Breadcrumb', THEMENAME),
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => __('The text before the breadcrumb home.', THEMENAME),
            'id' => 'breacrumb_home_prefix',
            'type' => 'text',
            'title' => __('Breadcrumb Home Prefix', THEMENAME),
            'default' => 'You are here:  Home'
        ),
        array(
            'id' => 'breacrumb_typography',
            'type' => 'typography',
            'title' => __('Typography', THEMENAME),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('.page-title #breadcrumb-text','.page-title #breadcrumb-text ul li a'),
            'units' => 'px',
            'subtitle' => __('Typography option with title text.', THEMENAME),
            'default' => array(
                'color' => '',
            )
        ),
    )
);

/**
 * Body
 *
 * @author Fox
 */
$this->sections[] = array(
    'title' => __('Body', THEMENAME),
    'icon' => 'el-icon-website',
    'fields' => array(
        array(
            'subtitle' => __('Set layout boxed default(Wide).', THEMENAME),
            'id' => 'body_layout',
            'type' => 'switch',
            'title' => __('Boxed Layout', THEMENAME),
            'default' => false,
        ),
        array(
            'id'       => 'body_background',
            'type'     => 'background',
            'title'    => __( 'Background', THEMENAME ),
            'subtitle' => __( 'body background with image, color, etc.', THEMENAME ),
            'output'   => array('body'),
            'default'  => array(
                'background-color' => '#dfdfdf',
            )
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', THEMENAME),
            'id' => 'body_margin',
            'type' => 'text',
            'title' => 'Margin',
            'default' => ''
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', THEMENAME),
            'id' => 'body_padding',
            'type' => 'text',
            'title' => 'Padding',
            'default' => ''
        )
    )
);

/**
 * Content
 * 
 * Archive, Pages, Single, 404, Search, Category, Tags .... 
 * @author Fox
 */
$this->sections[] = array(
    'title' => __('Content', THEMENAME),
    'icon' => 'el-icon-compass',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'container_background',
            'type'     => 'background',
            'title'    => __( 'Background', THEMENAME ),
            'subtitle' => __( 'Container background with image, color, etc.', THEMENAME ),
            'output'   => array('#main'),
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', THEMENAME),
            'id' => 'container_margin',
            'type' => 'text',
            'title' => 'Margin',
            'default' => ''
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', THEMENAME),
            'id' => 'container_padding',
            'type' => 'text',
            'title' => 'Padding',
            'default' => ''
        )
    )
);



/**
 * Footer
 *
 * @author Fox
 */
$this->sections[] = array(
    'title' => __('Footer', THEMENAME),
    'icon' => 'el-icon-credit-card',
);

/* Footer top */
$this->sections[] = array(
    'title' => __('Top', THEMENAME),
    'icon' => 'el-icon-fork',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'footer_background',
            'type'     => 'background',
            'title'    => __( 'Background', THEMENAME ),
            'subtitle' => __( 'footer background with image, color, etc.', THEMENAME ),
            'output'   => array('footer #footer-top'),
            'default'   => array()
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', THEMENAME),
            'id' => 'footer_margin',
            'type' => 'text',
            'title' => 'Margin',
            'default' => '0 0 20px 0'
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', THEMENAME),
            'id' => 'footer_padding',
            'type' => 'text',
            'title' => 'Padding',
            'default' => '20px 0 20px 0'
        )
    )
);

/* footer botton */
$this->sections[] = array(
    'title' => __('Botton', THEMENAME),
    'icon' => 'el-icon-bookmark',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'footer_botton_background',
            'type'     => 'background',
            'title'    => __( 'Background', THEMENAME ),
            'subtitle' => __( 'background with image, color, etc.', THEMENAME ),
            'output'   => array('footer #footer-bottom'),
            'default'   => array()
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', THEMENAME),
            'id' => 'footer_botton_margin',
            'type' => 'text',
            'title' => 'Margin',
            'default' => '0px'
        ),
        array(
            'subtitle' => __('in pixels, top right bottom left, ex: 10px 10px 10px 10px', THEMENAME),
            'id' => 'footer_botton_padding',
            'type' => 'text',
            'title' => 'Padding',
            'default' => '30px'
        ),
        array(
            'subtitle' => __('enable button back to top.', THEMENAME),
            'id' => 'footer_botton_back_to_top',
            'type' => 'switch',
            'title' => __('Back To Top', THEMENAME),
            'default' => true,
        )
    )
);



/**
 * Styling
 * 
 * css color.
 * @author Fox
 */
$this->sections[] = array(
    'title' => __('Styling', THEMENAME),
    'icon' => 'el-icon-adjust',
    'fields' => array(
        array(
            'subtitle' => __('select presets color.', THEMENAME),
            'id' => 'presets_color',
            'type' => 'image_select',
            'title' => __('Presets Color', THEMENAME),
            'default' => '0',
            'options' => array(
                '0' => get_template_directory_uri().'/inc/options/images/presets/pr-c-0.png',
                '1' => get_template_directory_uri().'/inc/options/images/presets/pr-c-1.png',
                '2' => get_template_directory_uri().'/inc/options/images/presets/pr-c-2.png',
                '3' => get_template_directory_uri().'/inc/options/images/presets/pr-c-3.png',
                '4' => get_template_directory_uri().'/inc/options/images/presets/pr-c-4.png',
                '5' => get_template_directory_uri().'/inc/options/images/presets/pr-c-5.png',
            )
        ),
        array(
            'subtitle' => __('set color main color.', THEMENAME),
            'id' => 'primary_color',
            'type' => 'color',
            'title' => __('Primary Color', THEMENAME),
            'default' => '#0099cc'
        ),
    )
);


/**
 * Typography
 * 
 * @author Fox
 */
$this->sections[] = array(
    'title' => __('Typography', THEMENAME),
    'icon' => 'el-icon-text-width',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'font_body',
            'type' => 'typography',
            'title' => __('Body Font', THEMENAME),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'text-align' => false,
            'output'  => array('body'),
            'units' => 'px',
            'subtitle' => __('Typography option with each property can be called individually.', THEMENAME),
            'default'     => array(
                'color'       => '#696969', 
                'font-family' => 'Vollkorn', 
                'google'      => true,
                'font-size'   => '13px', 
            )
        ),
        array(
            'id' => 'font_h1',
            'type' => 'typography',
            'title' => __('H1', THEMENAME),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('h1'),
            'units' => 'px',
            'default'     => array( 
                'font-family' => 'Montserrat', 
                'google'      => true,
            )
        ),
        array(
            'id' => 'font_h2',
            'type' => 'typography',
            'title' => __('H2', THEMENAME),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('h2'),
            'units' => 'px',
            'default'     => array( 
                'font-family' => 'Montserrat', 
                'google'      => true,
            )
        ),
        array(
            'id' => 'font_h3',
            'type' => 'typography',
            'title' => __('H3', THEMENAME),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('h3'),
            'units' => 'px',
            'default'     => array( 
                'font-family' => 'Montserrat', 
                'google'      => true,
            )
        ),
        array(
            'id' => 'font_h4',
            'type' => 'typography',
            'title' => __('H4', THEMENAME),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('h4'),
            'units' => 'px',
            'default'     => array( 
                'font-family' => 'Montserrat', 
                'google'      => true,
            )
        ),
        array(
            'id' => 'font_h5',
            'type' => 'typography',
            'title' => __('H5', THEMENAME),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('h5'),
            'units' => 'px',
            'default'     => array( 
                'font-family' => 'Montserrat', 
                'google'      => true,
            )
        ),
        array(
            'id' => 'font_h6',
            'type' => 'typography',
            'title' => __('H6', THEMENAME),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('h6'),
            'units' => 'px',
            'default'     => array( 
                'font-family' => 'Montserrat', 
                'google'      => true,
            )
        ),
    )
);

/* extra font. */
$this->sections[] = array(
    'title' => __('Extra Fonts', THEMENAME),
    'icon' => 'el el-fontsize',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'google-font-1',
            'type' => 'typography',
            'title' => __('Font 1', THEMENAME),
            'google' => true,
            'font-backup' => false,
            'font-style' => false,
            'color' => false,
            'text-align'=> false,
            'line-height'=>false,
            'font-size'=> false,
            'subsets'=> false,
        ),
        array(
            'id' => 'google-font-selector-1',
            'type' => 'textarea',
            'title' => __('Selector 1', THEMENAME),
            'subtitle' => __('add html tags ID or class (body,a,.class,#id)', THEMENAME),
            'validate' => 'no_html',
        ),
        array(
            'id' => 'google-font-2',
            'type' => 'typography',
            'title' => __('Font 2', THEMENAME),
            'google' => true,
            'font-backup' => false,
            'font-style' => false,
            'color' => false,
            'text-align'=> false,
            'line-height'=>false,
            'font-size'=> false,
            'subsets'=> false,
        ),
        array(
            'id' => 'google-font-selector-2',
            'type' => 'textarea',
            'title' => __('Selector 2', THEMENAME),
            'subtitle' => __('add html tags ID or class (body,a,.class,#id)', THEMENAME),
            'validate' => 'no_html',
        ),
        array(
            'id' => 'google-font-3',
            'type' => 'typography',
            'title' => __('Font 3', THEMENAME),
            'google' => true,
            'font-backup' => false,
            'font-style' => false,
            'color' => false,
            'text-align'=> false,
            'line-height'=>false,
            'font-size'=> false,
            'subsets'=> false,
        ),
        array(
            'id' => 'google-font-selector-3',
            'type' => 'textarea',
            'title' => __('Selector 3', THEMENAME),
            'subtitle' => __('add html tags ID or class (body,a,.class,#id)', THEMENAME),
            'validate' => 'no_html',
        ), 
        array(
            'id' => 'google-font-4',
            'type' => 'typography',
            'title' => __('Font 4', THEMENAME),
            'google' => true,
            'font-backup' => false,
            'font-style' => false,
            'color' => false,
            'text-align'=> false,
            'line-height'=>false,
            'font-size'=> false,
            'subsets'=> false,
        ),
        array(
            'id' => 'google-font-selector-4',
            'type' => 'textarea',
            'title' => __('Selector 4', THEMENAME),
            'subtitle' => __('add html tags ID or class (body,a,.class,#id)', THEMENAME),
            'validate' => 'no_html',
        ),
    )
);

/* local fonts. */
$this->sections[] = array(
    'title' => __('Local Fonts', THEMENAME),
    'icon' => 'el-icon-bookmark',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'local-fonts-1',
            'type'     => 'select',
            'title'    => __( 'Fonts 1', THEMENAME ),
            'options'  => $local_fonts,
            'default'  => '',
        ),
        array(
            'id' => 'local-fonts-selector-1',
            'type' => 'textarea',
            'title' => __('Selector 1', THEMENAME),
            'subtitle' => __('add html tags ID or class (body,a,.class,#id)', THEMENAME),
            'validate' => 'no_html',
            'default' => '',
            'required' => array(
                0 => 'local-fonts-1',
                1 => '!=',
                2 => ''
            )
        ),
        array(
            'id'       => 'local-fonts-2',
            'type'     => 'select',
            'title'    => __( 'Fonts 2', THEMENAME ),
            'options'  => $local_fonts,
            'default'  => '',
        ),
        array(
            'id' => 'local-fonts-selector-2',
            'type' => 'textarea',
            'title' => __('Selector 2', THEMENAME),
            'subtitle' => __('add html tags ID or class (body,a,.class,#id)', THEMENAME),
            'validate' => 'no_html',
            'default' => '',
            'required' => array(
                0 => 'local-fonts-2',
                1 => '!=',
                2 => ''
            )
        )
    )
);

/**
 * Custom CSS
 * 
 * extra css for customer.
 * @author Fox
 */
$this->sections[] = array(
    'title' => __('Custom CSS', THEMENAME),
    'icon' => 'el-icon-bulb',
    'fields' => array(
        array(
            'id' => 'custom_css',
            'type' => 'ace_editor',
            'title' => __('CSS Code', THEMENAME),
            'subtitle' => __('create your css code here.', THEMENAME),
            'mode' => 'css',
            'theme' => 'monokai',
        )
    )
);
/**
 * Animations
 *
 * Animations options for theme. libs css, js.
 * @author Fox
 */
$this->sections[] = array(
    'title' => __('Animations', THEMENAME),
    'icon' => 'el-icon-magic',
    'fields' => array(
        array(
            'subtitle' => __('Enable animation mouse scroll...', THEMENAME),
            'id' => 'smoothscroll',
            'type' => 'switch',
            'title' => __('Smooth Scroll', THEMENAME),
            'default' => false
        ),
        array(
            'subtitle' => __('Enable animation parallax for images...', THEMENAME),
            'id' => 'paralax',
            'type' => 'switch',
            'title' => __('Images Paralax', THEMENAME),
            'default' => true
        ),
    )
);
/**
 * Optimal Core
 * 
 * Optimal options for theme. optimal speed
 * @author Fox
 */
$this->sections[] = array(
    'title' => __('Optimal Core', THEMENAME),
    'icon' => 'el-icon-idea',
    'fields' => array(
        array(
            'subtitle' => __('no minimize , generate css over time...', THEMENAME),
            'id' => 'dev_mode',
            'type' => 'switch',
            'title' => __('Dev Mode (not recommended)', THEMENAME),
            'default' => false
        )
    )
);