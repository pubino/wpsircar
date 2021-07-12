<?php
/**
 * Register header widget area.
 *
 * @since WPSircar 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function wpsircar_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Header Widgets', 'wpsircar' ),
    'id'            => 'wpsircar-hdr-widget',
    'description'   => __( 'Add widgets here to appear in your header area.', 'wpsircar' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ));
}
add_action( 'widgets_init', 'wpsircar_widgets_init' );
