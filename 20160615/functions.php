<?php
 // Changing excerpt length
   /*
   function new_excerpt_length($length) {
       return 30;
   }
   add_filter('excerpt_length', 'new_excerpt_length');
   */
   add_filter( 'excerpt_length', 'bb_excerpt_length', 999 );
   function bb_excerpt_length( $length ) {
       return 30;  //修改想要的長度
   }

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' ); 

set_post_thumbnail_size( 300, 300, array( 'top', 'center')  );
// add_image_size( 'category-thumb', 280, 280 );

 //post thumbnails
   add_theme_support( 'post-thumbnails' );

  
?>