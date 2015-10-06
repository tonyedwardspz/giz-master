<?php
/**
 * @name : Default
 * @package : CMSSuperHeroes
 * @author : Fox
 */
?>
<?php global $smof_data, $cms_meta;
    if(!empty($cms_meta->_cms_page_logo) && !empty($cms_meta->_cms_page_logo_image) && (!is_search())){
        $logo= wp_get_attachment_url(esc_attr($cms_meta->_cms_page_logo_image));
    }else{
        $logo=esc_url($smof_data['main_logo']['url']);
    }
 ?>

<div id="cs-header" class="header ">
    <div id="header-logo" class="header-left">
        <a href="<?php echo home_url(); ?>"><img alt="" src="<?php echo $logo; ?>"></a>
        <div class="mobile-search-icon hidden-lg hidden-md"><?php dynamic_sidebar('sidebar-10'); ?></div> 
        <div id="menu-mobile" class=" navbar-collapse hidden-lg hidden-md"><i class="fa fa-bars"></i></div>
    </div>
    <div id="header-navigation" class="header-left">
        <nav id="site-navigation" class="main-navigation" role="navigation">
             <?php
                    
                    $attr = array(
                        'menu' =>cms_menu_location(),
                        'menu_class' => 'nav-menu menu-main-menu',
                    );
                    
                    $menu_locations = get_nav_menu_locations();
                    
                    if(!empty($menu_locations['primary'])){
                        $attr['theme_location'] = 'primary';
                    }
                    
                    /* enable mega menu. */
                    if(class_exists('HeroMenuWalker')){ $attr['walker'] = new HeroMenuWalker(); }
                    
                    /* main nav. */
                    wp_nav_menu( $attr ); ?>
        </nav>
    </div>

    <div class="sidebar-left header-left hidden-sm hidden-xs">
        <?php dynamic_sidebar('sidebar-left'); ?>
		<?php get_sidebar(); ?>
    </div>
</div>
<!-- #site-navigation -->