<?php



// creating a function load_css to connect with header and apply styling for it 


function load_css(){
    //  to register the style in header.php 
    // get_template_directory_uri is used to fetch the path of bootstrap link 
    wp_register_style('bootstrap' , get_template_directory_uri() . 'css/bootstrap.min.css' , array(),
    false, 'all'); // array and other are for dependencies
    wp_enqueue_style('bootstrap');      
    wp_register_style('custom' , get_template_directory_uri() . '/css/custom.css' , array() , false);    
    wp_enqueue_style( 'custom');
   

   

}
// function to run and hook into header
add_action('wp_enqueue_scripts', 'load_css');



//function to include javascript 
function load_js(){
    //  TO include jquery in our page 
    wp_enqueue_script('jquery');
    // get_template_directory_uri is used to fetch the path of bootstrap link 
    wp_register_script('bootstrap' , get_template_directory_uri() . 'js/bootstrap.min.js' , 'jquery',
    false, true); // array and other are for dependencies
    wp_enqueue_script('bootstrap');  

}
// function to run and hook into header
add_action('wp_enqueue_scripts', 'load_js');



// adding support for menus

add_theme_support('menus');
add_theme_support('widgets');


// Tell wordpress to add the support of menus

register_nav_menus(

    array(

        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
);


// Register sidebars

function my_sidebars(){
         register_sidebar(
             array(
                 'name' => 'Page Sidebar',
                 'id' => 'page-sidebar',
                 'before_title' => '<h4 class="widget-title">',
                 'after_title' => '</h4>'
             )  
         );

         register_sidebar(
            array(
                'name' => 'Blog Sidebar',
                'id' => 'blog-sidebar',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
            )  
        );
}
// widgets init is used as hook to load 
add_action('widgets_init' , 'my_sidebars')



// // creating a function load_js to connect with header and apply Javascript for it 

// function load_js(){
 
//         wp_register_script('bootstrap' , get_template_directory_uri() . 'js/bootstrap.min.js' 'jquery'
//         ,false , 'all');
//         // wp_register_script('bootstrap' , get_template_directory_uri() . 'js/bootstrap.min.js' 'jquery- for dependencies',false - for versions , true - if false include in header or true include in footer);
//         wp_enqueue_style('bootstrap');  
// }
// add_action('wp_enqueue_scripts' 'load_js')

?>