<?php
function add_css()
{
   wp_register_style('bootstrap', get_template_directory_uri() . './assets/css/bootstrap.min.css', false,'1.1','all');
   wp_enqueue_style( 'bootstrap');

   wp_register_style('all_min', get_template_directory_uri() . './assets/css/all.min.css', false,'1.1','all');
   wp_enqueue_style( 'all_min');

   wp_register_style('font-awesome', get_template_directory_uri() . './assets/css/font-awesome.min.css', false,'1.1','all');
   wp_enqueue_style( 'font-awesome');
   
   wp_register_style('swiper', get_template_directory_uri() . './assets/css/swiper-bundle.min.css', false,'1.1','all');
   wp_enqueue_style( 'swiper');

   wp_register_style('style', get_template_directory_uri() . './assets/css/style.css', false,'1.1','all');
   wp_enqueue_style( 'style');

   wp_register_style('pstyle', get_template_directory_uri() . './assets/css/pstyle.css', false,'1.1','all');
   wp_enqueue_style( 'pstyle');

   wp_register_style('nstyle', get_template_directory_uri() . './assets/css/nstyle.css', false,'1.1','all');
   wp_enqueue_style( 'nstyle');

//    wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', false,'1.1','all');
//    wp_enqueue_style( 'responsive');
}
add_action('wp_enqueue_scripts', 'add_css');





function add_script()
{
   wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bootstrap');
   wp_register_script('gsap', get_template_directory_uri() . '/assets/js/gsap.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'gsap');
   wp_register_script('app', get_template_directory_uri() . '/assets/js/app.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'app');
   wp_register_script('particles', get_template_directory_uri() . '/assets/js/particles.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'particles');
   wp_register_script('ScrollTrigger', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'ScrollTrigger');
   wp_register_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'swiper');
   wp_register_script('myscript', get_template_directory_uri() . '/assets/js/script.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'myscript');
   wp_register_script('three', get_template_directory_uri() . '/assets/js/three.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bootstrap');
}
add_action('wp_enqueue_scripts', 'add_script');