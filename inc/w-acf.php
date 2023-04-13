<?php

/**
 * Load ACF json
 * 
 * @author weable team
 */
function acf_json_load_point($paths)
{
    unset($paths[0]);

    $paths[] = get_template_directory_uri() . '/acf-json';

    return $paths;
}
add_filter('acf/settings/load_json', 'acf_json_load_point');

/**
 * Add ACF option page
 * 
 * @author weable team
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Cấu hình website',
		'menu_title'	=> 'Cấu hình website',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
        'icon_url' => 'dashicons-superhero-alt',
	));
	
}

/**
 * ACF blocks registant
 * 
 * @author weable team
 */
add_action('acf/init', 'tpa_acf_init_block_types');
function tpa_acf_init_block_types() {

    /**
     * Elements registant
     */
    if( function_exists('acf_register_block_type') ) {

        /**
         * [W-Elements] Section
         */
        acf_register_block_type( array(
            'name'              => 'w-element-container',
            'title'             => __('[W-Elements] Section'),
            'description'       => __('Element "Section"'),
            'render_template'   => 'template-parts/blocks/elements/w-element-container.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'preview',
            'align'             => 'full',
            'keywords'          => array( '[W-Elements] Section', 'acf' ),
            'supports'          => array(
                'align' => true,
                'mode' => false,
                'jsx' => true
            ),
        ));
    }

    /**
     * Blocks registant
     */
    if( function_exists('acf_register_block_type') ) {

        /** 
         * [W-Section] Banner Hero
         */
        acf_register_block_type(array(
            'name'              => 'banner-hero',
            'title'             => __('[W-Section] Banner Hero'),
            'description'       => __('Slider'),
            'render_template'   => 'template-parts/blocks/sections/banner-hero.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Banner Hero', 'acf' ),
        ));

        /** 
         * [W-Section] Project Items
         */
        acf_register_block_type(array(
            'name'              => 'project-items',
            'title'             => __('[W-Section] Project Items'),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/project-items.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Project Items', 'acf' ),
        ));

      
           /** 
         * [W-Section] List Product
         */
        acf_register_block_type(array(
            'name'              => 'listProduct',
            'title'             => __('[W-Section] List Product'),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/listProduct.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] List Product', 'acf' ),
        ));

        
           /** 
         * [W-Section] List Product Slider
         */
        acf_register_block_type(array(
            'name'              => 'listProductSlider',
            'title'             => __('[W-Section] List Product Slider'),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/listProductSlider.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] List Product Slider', 'acf' ),
        ));

         

           /** 
         * [W-Section] Blogs
         */
        acf_register_block_type(array(
            'name'              => 'blogs',
            'title'             => __('[W-Section] Blogs'),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/blogs.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Blogs', 'acf' ),
        ));

       



    }

    
}