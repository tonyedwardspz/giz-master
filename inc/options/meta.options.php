<?php
/**
 * Meta options
 * 
 * @author Fox
 * @since 1.0.0
 */
class CMSMetaOptions
{
    public function __construct()
    {
        add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
        add_action('admin_enqueue_scripts', array($this, 'admin_script_loader'));
    }
    /* add script */
    function admin_script_loader()
    {
        global $pagenow;
        if (is_admin() && ($pagenow == 'post-new.php' || $pagenow == 'post.php')) {
            wp_enqueue_style('metabox', get_template_directory_uri() . '/inc/options/css/metabox.css');

            wp_enqueue_script('easytabs', get_template_directory_uri() . '/inc/options/js/jquery.easytabs.min.js');
            wp_enqueue_script('metabox', get_template_directory_uri() . '/inc/options/js/metabox.js');
        }
    }
    /* add meta boxs */
    public function add_meta_boxes()
    {
        $this->add_meta_box('template_page_options', __('Setting', THEMENAME), 'page');
        $this->add_meta_box('regency', __('Regency', THEMENAME), 'testimonial');
        $this->add_meta_box('team_regency', __('Regency', THEMENAME), 'team');
        $this->add_meta_box('team_social', __('Social', THEMENAME), 'team');
        $this->add_meta_box('post_custom_link', __('Cusstom link', THEMENAME), 'post');
        $this->add_meta_box('page_revolution_slider', __('Revolution slider', THEMENAME), 'page');
        $this->add_meta_box('portfolio_info', __('Portfolio info', THEMENAME), 'porfolio');
    }
    
    public function add_meta_box($id, $label, $post_type, $context = 'advanced', $priority = 'default')
    {
        add_meta_box('_cms_' . $id, $label, array($this, $id), $post_type, $context, $priority);
    }
    /* --------------------- PAGE ---------------------- */
    function template_page_options() {
        ?>
        <div id="tabs">
    	    <div class="tab-container clearfix">
                <ul class="etabs clearfix">
                    <li class="tab"><a href="#tabs-general"><i class="fa fa-server"></i><?php _e('General', THEMENAME); ?></a></li>
                    <li class="tab"><a href="#tabs-header"><i class="fa fa-diamond"></i><?php _e('Header', THEMENAME); ?></a></li>
                    <li class="tab"><a href="#tabs-page-title"><i class="fa fa-connectdevelop"></i><?php _e('Page Title', THEMENAME); ?></a></li>
                    <li class="tab"><a href="#tabs-page-setting"><i class="fa fa-connectdevelop"></i><?php _e('Select Categories', THEMENAME); ?></a></li>
                </ul>
                <div class='panel-container'>
                    <div id="tabs-general">
                        <?php
                            cms_options(array(
                                'id' => 'full_width',
                                'label' => __('Full Width',THEMENAME),
                                'type' => 'switch',
                                'options' => array('on'=>'1','off'=>''),
                            ));
                            cms_options(array(
                                'subtitle' => __('select presets color.', THEMENAME),
                                'id' => 'presets_color',
                                'type' => 'imegesselect',
                                'label' => __('Presets Color', THEMENAME),
                                'options' => array(
                                    '0' => get_template_directory_uri().'/inc/options/images/presets/pr-c-0.png',
                                    '1' => get_template_directory_uri().'/inc/options/images/presets/pr-c-1.png',
                                    '2' => get_template_directory_uri().'/inc/options/images/presets/pr-c-2.png',
                                    '3' => get_template_directory_uri().'/inc/options/images/presets/pr-c-3.png',
                                    '4' => get_template_directory_uri().'/inc/options/images/presets/pr-c-4.png',
                                    '5' => get_template_directory_uri().'/inc/options/images/presets/pr-c-5.png',
                                    )
                            ));
                            cms_options(array(
                                'id' => 'page_logo',
                                'label' => __('Page logo',THEMENAME),
                                'type' => 'switch',
                                'options' => array('on'=>'1','off'=>''),
                                'follow' => array('1'=>array('#page_logo_enable')),
                            ));

                            cms_options(array(
                                'id' => 'page_background',
                                'label' => __('Page background ',THEMENAME),
                                'type' => 'switch',
                                'options' => array('on'=>'1','off'=>''),
                                'follow' => array('1'=>array('#page_background_enable')),
                            ));
                            cms_options(array(
                                'id' => 'page_mode',
                                'label' => __('Page mode ',THEMENAME),
                                'type' => 'select',
                                'options' => array('light_mode'=>'Light Mode','dark_mode'=>'Dark Mode'),
                                'value' => 'light_mode',
                            ));
                        ?>
                        <div id="page_logo_enable">
                                <?php
                            cms_options(array(
                                'id' => 'page_logo_image',
                                'label' => __('Logo image',THEMENAME),
                                'type' => 'image',
                            )); ?>
                        </div>
                        <div id="page_background_enable">
                            <?php
                                cms_options(array(
                                    'id' => 'page_background_image',
                                    'label' => __('Background image',THEMENAME),
                                    'type' => 'image',
                                ));
                                cms_options(array(
                                    'id' => 'page_background_image_repeat',
                                    'label' => __('Background repeat',THEMENAME),
                                    'type' => 'select',
                                    'value'=>'',
                                    'options'=>array(
                                        ''=>'Background Repeat',
                                        'no-repeat'=>'No repeat',
                                        'repeat'=>'Repeat All',
                                        'repeat-x'=>'Repeat Horizontally',
                                        'repeat-y'=>'Repeat Vertically',
                                        'inherit'=>'Inherit',
                                    ),
                                ));
                                cms_options(array(
                                    'id' => 'page_background_image_position',
                                    'label' => __('Background position',THEMENAME),
                                    'type' => 'select',
                                    'value'=>'',
                                    'options'=>array(
                                        ''=>'Background Position ',
                                        'left top'=>'Left Top',
                                        'left center'=>'Left center',
                                        'left bottom'=>'Left Bottom',
                                        'center top'=>'Center Top',
                                        'center center'=>'Center Center',
                                        'center bottom'=>'Center Bottom',
                                        'right top'=>'Right Top',
                                        'right center'=>'Right center',
                                        'right bottom'=>'Right Bottom',
                                    ),
                                ));
                                cms_options(array(
                                    'id' => 'page_background_color',
                                    'label' => __('Background Color',THEMENAME),
                                    'type' => 'color',
                                ));
                            ?>

                        </div>
                    </div>
                
                <div id="tabs-header">
                <?php
                /* header. */
                            cms_options(array(
                                'id' => 'header_mode',
                                'label' => __('Header Mode',THEMENAME),
                                'type' => 'select',
                                'value'=>'dark_mode',
                                'options'=>array(
                                    'light_mode'=>'Light Mode',
                                    'dark_mode'=>'Dark Mode'
                                )
                            ));
                            
                        ?>
                </div>
                <div id="tabs-page-title">
                <?php
                /* page title. */
                cms_options(array(
                    'id' => 'page_title',
                    'label' => __('Page Title',THEMENAME),
                    'type' => 'switch',
                    'options' => array('on'=>'1','off'=>''),
                    'follow' => array('1'=>array('#page_title_enable')),
                ));   ?>
                    <div id="page_title_enable">
                        <?php 
                        cms_options(array(
                            'id' => 'page_title_text',
                            'label' => __('Title',THEMENAME),
                            'type' => 'text',
                        ));
                        cms_options(array(
                            'id' => 'page_title_type',
                            'label' => __('Layout',THEMENAME),
                            'type' => 'imegesselect',
                            'options' => array(
                                '' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-0.png',
                                '1' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-1.png',
                                '2' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-2.png',
                                '3' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-5.png',
                                '4' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-6.png',
                            ),
                        ));
                        cms_options(array(
                            'id' => 'page_sub_title',
                            'label' => __('Sub title',THEMENAME),
                            'type' => 'text',
                        )); ?>
                        <div id="#page_title_image">
                           <?php cms_options(array(
                                'id' => 'page_title_image',
                                'label' => __('Page title image background',THEMENAME),
                                'type' => 'image',
                            ));?>
                        </div>
                    </div>
                </div>
                <div id="tabs-page-setting">
                    <?php 
                    $args = array(
                        'type'                     => 'post',
                        'child_of'                 => 0,
                        'parent'                   => '',
                        'orderby'                  => 'name',
                        'order'                    => 'ASC',
                        'hide_empty'               => 1,
                        'hierarchical'             => 1,
                        'exclude'                  => '',
                        'include'                  => '',
                        'number'                   => '',
                        'taxonomy'                 => 'category',
                        'pad_counts'               => false 
                    ); 
                     $categories = get_categories( $args );
                     $options=array();
                     $options[]=__('All categories',THEMENAME);
                     foreach ($categories as $key => $category) {
                        $options[$category->term_id]=$category->name;
                     }
                    cms_options(array(
                        'id' => 'page_categories',
                        'label' => __('Select category',THEMENAME),
                        'type' => 'multiple',
                        'options'=>$options,
                    )); 
                    cms_options(array(
                        'id' => 'page_number_posts',
                        'label' => __('Number Posts',THEMENAME),
                        'type' => 'text',
                    ));
                    ?>
                </div>
                </div>
            </div>
        </div>
        <?php
    }

    function regency(){
        cms_options(array(
            'id' => 'regency',
            'label' => __('Testimonial Regency',THEMENAME),
            'type' => 'text'
        ));
    }

    function team_regency(){
        cms_options(array(
            'id' => 'regency',
            'label' => __('Team Regency',THEMENAME),
            'type' => 'text'
        ));
    }

    function team_social(){ ?>
<div class="social-item">
    <?php
    cms_options(array(
        'id' => 'social_1',
        'label' => __('Item 1',THEMENAME),
        'type' => 'text'
    ));
    cms_options(array(
        'id' => 'social_1_icon',
        'label' => __('Icon',THEMENAME),
        'type' => 'text'
    ));
    ?>
</div>
        <hr>
<div class="social-item">
    <?php
    cms_options(array(
        'id' => 'social_2',
        'label' => __('Item 2',THEMENAME),
        'type' => 'text'
    ));
    cms_options(array(
        'id' => 'social_2_icon',
        'label' => __('Icon',THEMENAME),
        'type' => 'text'
    ));
    ?>
</div>
        <hr>
<div class="social-item">
    <?php
    cms_options(array(
        'id' => 'social_3',
        'label' => __('Item 3',THEMENAME),
        'type' => 'text'
    ));
    cms_options(array(
        'id' => 'social_3_icon',
        'label' => __('Icon',THEMENAME),
        'type' => 'text'
    ));
    ?>
</div>
        <hr>
<div class="social-item">
    <?php
    cms_options(array(
        'id' => 'social_4',
        'label' => __('Item 4',THEMENAME),
        'type' => 'text'
    ));
    cms_options(array(
        'id' => 'social_4_icon',
        'label' => __('Icon',THEMENAME),
        'type' => 'text'
    ));
    ?>
</div>
        <hr>
<div class="social-item">
    <?php
    cms_options(array(
        'id' => 'social_5',
        'label' => __('Item 5',THEMENAME),
        'type' => 'text'
    ));
    cms_options(array(
        'id' => 'social_5_icon',
        'label' => __('Icon',THEMENAME),
        'type' => 'text'
    ));
    ?>
</div>
        <hr>
<div class="social-item">
    <?php
    cms_options(array(
        'id' => 'social_6',
        'label' => __('Item 6',THEMENAME),
        'type' => 'text'
    ));
    cms_options(array(
        'id' => 'social_6_icon',
        'label' => __('Icon',THEMENAME),
        'type' => 'text'
    ));
    ?>
</div>
  <?php  }

  function post_custom_link(){
    cms_options(array(
        'id' => 'custom_link',
        'label' => __('Custom link',THEMENAME),
        'type' => 'text'
    ));
  }

  function page_revolution_slider(){
    if ( class_exists( 'RevSlider' ) ) {

            $slider = new RevSlider();

            $arrSliders = $slider->getArrSliders();
            $revsliders = array();
            $revsliders[] =__('Select slider',THEMENAME);

            if ( $arrSliders ) {
                foreach ( $arrSliders as $slider ) {
                    /** @var $slider RevSlider */
                    $revsliders[ $slider->getAlias() ] = $slider->getTitle();
                }
            } else {
                $revsliders[ __( 'No sliders found', 'js_composer' ) ] = 0;
            }
             cms_options(array(
                'id' => 'page_slider',
                'label' => __('Page slider',THEMENAME),
                'type' => 'select',
                'options'=>$revsliders,
            ));
        }
  }
  function portfolio_info(){
    cms_options(array(
        'id' => 'client',
        'label' => __('Client',THEMENAME),
        'type' => 'text',
    ));
    cms_options(array(
        'id' => 'live_demo',
        'label' => __('Live Demo',THEMENAME),
        'type' => 'text',
    ));
  }

  
}

new CMSMetaOptions();