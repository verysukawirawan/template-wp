<?php
    function _themes_setup(){
        //load_theme_textdomain( 'twentytwentyone', get_template_directory() . '/languages' );
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support(
            'post-formats',
            array(
                'link',
                'aside',
                'gallery',
                'image',
                'quote',
                'status',
                'video',
                'audio',
                'chat',
            )
        );
        add_theme_support('post-thumbnails');
        //set_post_thumbnail_size( 1568, 9999 );
        register_nav_menus(
            array(
                'primary' => esc_html__('Primary menu', 'textdomian'),
                'footer'  => esc_html__('Secondary menu', 'textdomain'),
            )
        );
        add_theme_support(
            'html5',
            array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets',
            )
        );


        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');
        add_theme_support('editor-styles');

        //$editor_stylesheet_path = './assets/css/style-editor.css';
        //add_editor_style( $editor_stylesheet_path );

        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');

        // Add support for custom line height controls.
        add_theme_support('custom-line-height');

        // Add support for experimental link color control.
        add_theme_support('link-color');

        // Add support for experimental cover block spacing.
        add_theme_support('custom-spacing');

        // Add support for custom units.
        // This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
        //add_theme_support( 'custom-units' );

        add_filter('rss_widget_feed_link', '__return_empty_string');
        add_theme_support( 'editor-color-palette', array(
            array(
                'name' => esc_attr__( 'Purple', 'text-domain' ),
                'slug' => 'mtlightpurle',
                'color' => '#B0569A',
            ),
            array(
                'name' => esc_attr__( 'Black', 'text-domain' ),
                'slug' => 'mtblack',
                'color' => '##1F1F1F',
            ),
            array(
                'name' => esc_attr__( 'Yellow', 'text-domain' ),
                'slug' => 'mtyellow',
                'color' => '#FAA71B',
            ),
        ));
    }
    add_action('after_setup_theme', '_themes_setup');

?>
