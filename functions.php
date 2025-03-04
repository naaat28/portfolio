<?php

  add_action('wp_enqueue_scripts', 'add_styles');

  function add_styles() {
    // reset style
    wp_register_style(
        'reset_css',
        get_template_directory_uri() . '/css/reset.css', 
        array(), 
        '1.0'
    );

    // main style
    wp_register_style(
        'main_css', 
        get_template_directory_uri() . '/css/main.css',
        array('reset_css'), 
        '1.0'
    );

    // styleの追加
    wp_enqueue_style(
      'reset_style',
      get_template_directory_uri() . '/css/reset.css',
      array(),
      '1.0'
    );

    wp_enqueue_style(
      'main_style',
      get_template_directory_uri() . '/css/main.css',
      array(),
      '1.0'
    );

    wp_enqueue_script('gsap_js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), '3.12.2');
    wp_enqueue_script('gsap_scroll_trigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap_js'), '3.12.2');


    if ( is_front_page() ) {
      wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', array(), '1.0');
    }

if ( is_page('about') ) {
  wp_enqueue_script('common_js', get_template_directory_uri() . '/js/common.js',  array(), '1.0', true);
}

if ( is_singular('works') ) {
  wp_enqueue_script('script_js', get_template_directory_uri() . '/js/script.js',  array(), '1.0', true);
}

if ( is_404() ) {
  wp_enqueue_script('script_js', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
}

}


add_filter('script_loader_tag', 'add_defer', 10, 2);
function add_defer($tag, $handle) {
  if ($handle !== 'main_js') {
    return $tag;
  }
  return str_replace(' src=', ' defer src=', $tag);
}






