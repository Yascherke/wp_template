<?php

// Styles and scripts function

function universal_scripts_setup() {
    wp_enqueue_style('ms', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/src/styles/bootstrap/bootstrap.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/src/styles/custom.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('b-bundle', get_template_directory_uri() . '/src/scripts/bootstrap/bootstrap.bundle.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/src/scripts/bootstrap/bootstrap.js');

    wp_enqueue_style('slick', get_template_directory_uri() . 'src/scripts/slick/slick/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/src/scripts/slick/slick-theme.css');
    wp_enqueue_script('slick', get_template_directory_uri() . '/src/scripts/slick/slick.min.js');

}

add_action('wp_enqueue_scripts', 'universal_scripts_setup');

// theme menu function

function universal_theme_setup() {
    add_theme_support('menus');

    register_nav_menu('primary', 'Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'universal_theme_setup');


// theme support function

add_theme_support('html5', array('search-form'));

add_theme_support('custom-background');
add_theme_support('custom-header');

add_theme_support('post-thumbnails');
add_theme_support('editor-font-sizes ');

add_theme_support('post-formats', array('aside', 'image', 'video'));





// widgets

function widgets_setup() {
    register_sidebar(
        array(
            'name'	=> 'Top Sidebar',
            'id'	=> 'sidebar-1',
            'class'	=> 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3><hr>',
        )
    );

    register_sidebar(
      array(
          'name'	=> 'Bottom Sidebar',
          'id'	=> 'sidebar-2',
          'class'	=> 'custom',
          'description' => 'Second Sidebar',
          'before_widget' => '<aside id="%1$s" class="widget %2$s">',
          'after_widget'  => '</aside>',
          'before_title'  => '<h3 class="widget-title">',
          'after_title'   => '</h3><hr>',
      )
    );
}

add_action('widgets_init', 'widgets_setup');