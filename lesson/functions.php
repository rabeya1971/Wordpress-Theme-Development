<?php
// Enqueue scripts and styles
function lessonlms_theme_scripts(){
    
    //google Font
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,400&family=Sen:wght@700&display=swap', array(), null);

    //Theme Style CSS
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css'); 

    //Responsive CSS
    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css'); 

    //Slick Slider CSS
    wp_enqueue_style('slick-css','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), '1.9.0');

    //Box icon
    wp_enqueue_style('boxicon-css', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css', array(), '2.1.4'); 

    //style css
     wp_enqueue_style('lesson-theme-style', get_stylesheet_uri()); 

      //jQuery
    wp_enqueue_script('jquery');

    //slick js 
    wp_enqueue_script('slick-js' , 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'),'1.9.0', true);

    //Main JS
    wp_enqueue_script('main-js' , get_template_directory_uri() . '/assets/js/script.js', array('jquery'),'1.9.0', true);

}
add_action("wp_enqueue_scripts","lessonlms_theme_scripts");

function lessonlms_theme_registration() {
  add_theme_support( 'custom-logo',array(
    'height' => 30,
    'width' => 80,
  ) );

  register_nav_menus(array(
  'primary_menu' => __('Primary Menu', 'lessonlms'),
  'mobile_menu' => __('Mobile Menu', 'lessonlms'),
  'footer_menu_1' => __('Footer Menu 1', 'lessonlms'),
  'footer_menu_2' => __('Footer Menu 2', 'lessonlms')
  ));
}
add_action('after_setup_theme', 'lessonlms_theme_registration');