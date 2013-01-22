<?php
include 'vimeo.php';


function register_button( $buttons ) {
   array_push( $buttons, "|", "vimeo" );
   return $buttons;
}

function add_plugin( $plugin_array ) {
   $plugin_array['vimeo'] = get_stylesheet_directory_uri() . '/js/vimeo.js';
   return $plugin_array;
}

function my_vimeo_button() {

   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
      return;
   }

   if ( get_user_option('rich_editing') == 'true' ) {
      add_filter( 'mce_external_plugins', 'add_plugin' );
      add_filter( 'mce_buttons', 'register_button' );
   }

}

add_action('init', 'my_vimeo_button');
?>