<?php
/*
Plugin Name: Disable Fonts : TwentyFifteen
Plugin URI: https://github.com/ms-studio/disable-fonts-twentyfifteen
GitHub Plugin URI: https://github.com/ms-studio/disable-fonts-twentyfifteen
Description: Disables default fonts of the TwentyFifteen theme.
Version: 1.0.0
Author: Manuel Schmalstieg
Author URI: https://github.com/ms-studio

*/

/**
 * Enqueue webfont CSS.
 */
function coursweb_disable_fontstyles_twentyfifteen() {

	wp_dequeue_style( 'deppo-font-enqueue' );

}
add_action( 'wp_enqueue_scripts', 'coursweb_disable_fontstyles_twentyfifteen' );

