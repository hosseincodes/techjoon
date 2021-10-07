<?php
if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 580, 580, true ); // default Featured Image dimensions (cropped)
  // additional image sizes
  // delete the next line if you do not need additional image sizes
  add_image_size( 'wwshthumb', 580, 365, false );
  add_image_size( 'article-homesize', 730, 424, true );
  add_image_size( 'article-homelittle', 545, 306, true );
}
