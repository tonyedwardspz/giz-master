<?php

/**
 * Auto create .css file from Theme Options
 * @author Fox
 * @version 1.0.0
 */
class CMSSuperHeroes_StaticCss
{

    public $scss;
    
    function __construct()
    {
        global $smof_data;
        
        /* scss */
        $this->scss = new scssc();
        
        /* set paths scss */
        $this->scss->setImportPaths(get_template_directory() . '/assets/scss/');
             
        /* generate css over time */
        if (!empty($smof_data['dev_mode'])) {
            $this->generate_file();
        } else {
            /* save option generate css */
            add_action("redux/options/smof_data/saved", array(
                $this,
                'generate_file'
            ));
        }
    }

    /**
     * generate css file.
     *
     * @since 1.0.0
     */
    public function generate_file()
    {
        global $smof_data;
        if (! empty($smof_data)) {
            
            /* write options to scss file */
            file_put_contents(get_template_directory() . '/assets/scss/options.scss', $this->css_render(), LOCK_EX); // Save it
            
            /* minimize CSS styles */
            if (!$smof_data['dev_mode']) {
                $this->scss->setFormatter('scss_formatter_compressed');
            }
            
            /* compile scss to css */
            $css = $this->scss_render();
            
            $file = "static.css";
            
            if($smof_data['presets_color'] != '0'){
                $file = "presets-".esc_attr($smof_data['presets_color']).".css";
            }
            
            /* write static.css file */
            file_put_contents(get_template_directory() . '/assets/css/' . $file, $css, LOCK_EX); // Save it
        }
    }
    
    /**
     * scss compile
     * 
     * @since 1.0.0
     * @return string
     */
    public function scss_render(){
        /* compile scss to css */
        return $this->scss->compile('@import "master.scss"');
    }
    
    /**
     * main css
     *
     * @since 1.0.0
     * @return string
     */
    public function css_render()
    {
        global $smof_data, $cms_base;
        ob_start();
        /* custom css. */
        echo esc_attr($smof_data['custom_css']);
        /* google fonts. */
        $cms_base->setGoogleFont($smof_data['google-font-1'], $smof_data['google-font-selector-1']);
        $cms_base->setGoogleFont($smof_data['google-font-2'], $smof_data['google-font-selector-2']);
        $cms_base->setGoogleFont($smof_data['google-font-3'], $smof_data['google-font-selector-3']);
        $cms_base->setGoogleFont($smof_data['google-font-4'], $smof_data['google-font-selector-4']);
  
        /*Styling====*/
        if($smof_data['primary_color']){
            echo '$primary_color:'.esc_attr($smof_data['primary_color']).';';
        }
        if(!empty($smof_data['presets_color'])) echo '$preset_color:'. esc_attr($smof_data['presets_color']).';';
            
        /*End Styling====*/
        /*Body*/
        if($smof_data['body_margin']){
            echo '$body_margin:'.esc_attr($smof_data['body_margin']).';';
        }
        if($smof_data['body_padding']){
            echo '$body_padding:'.esc_attr($smof_data['body_padding']).';';
        }

        /*Header*/
        if($smof_data['header_margin']){
            echo '$header_margin:'.esc_attr($smof_data['header_margin']).';';
        }
        if($smof_data['header_padding']){
            echo '$header_padding:'.esc_attr($smof_data['header_padding']).';';
        }
        
        if($smof_data['main_logo_height']){
            echo '$main_logo_height:'.esc_attr($smof_data['main_logo_height']).';';
        }

        /*Content Main*/
        if($smof_data['container_padding']){
            echo '$container_padding:'.esc_attr($smof_data['container_padding']).';';
        }
        if($smof_data['container_margin']){
            echo '$container_margin:'.esc_attr($smof_data['container_margin']).';';
        }

        /*Footer*/
        if($smof_data['footer_margin']){
            echo '$footer_margin:'.esc_attr($smof_data['footer_margin']).';';
        } 
        if($smof_data['footer_padding']){
            echo '$footer_padding:'.esc_attr($smof_data['footer_padding']).';';
        } 
        if($smof_data['footer_botton_margin']){
            echo '$footer_botton_margin:'.esc_attr($smof_data['footer_botton_margin']).';';
        } 
         if($smof_data['footer_botton_padding']){
            echo '$footer_botton_padding:'.esc_attr($smof_data['footer_botton_padding']).';';
        } 

        /*Font H3*/
        if($smof_data['font_h3']['line-height']){
            echo '$h3_line_height:'.esc_attr($smof_data['font_h3']['line-height']).';';
            echo '$h3_font_size:'.esc_attr($smof_data['font_h3']['line-height']).';';
            echo '$h3_font_weight:'.esc_attr($smof_data['font_h3']['line-height']).';';
            echo '$h3_font_family:'.esc_attr($smof_data['font_h3']['line-height']).';';
        }

         /** Breadcrumb **/
          if($smof_data['breacrumb_typography']){
            if(!empty($smof_data['breacrumb_typography']['font-family'])){
                echo '$breadcrumb_font_family:'.esc_attr($smof_data['breacrumb_typography']['font-family']).';';
            }
            if(!empty($smof_data['breacrumb_typography']['font-weight'])){
                echo '$breadcrumb_font_weight:'.esc_attr($smof_data['breacrumb_typography']['font-weight']).';';
            }
            if(!empty($smof_data['breacrumb_typography']['font-size'])){
               echo '$breadcrumb_font_size:'.esc_attr($smof_data['breacrumb_typography']['font-size']).';';
           }
            if(!empty($smof_data['breacrumb_typography']['font-height'])){
                echo '$breadcrumb_line_height:'.esc_attr($smof_data['breacrumb_typography']['line-height']).';';
            }
            if(!empty($smof_data['breacrumb_typography']['color'])){
                echo '$breadcrumb_color:'.esc_attr($smof_data['breacrumb_typography']['color']).';';
            }
          }
        return ob_get_clean();
    }
}

new CMSSuperHeroes_StaticCss();