<?php
/*
Plugin Name: Extend Formidable Form Token
Description: Fix error for Formidable forms: Form token is invalid. Please refresh the page.
Version: 1.0
Author: Brian Chin
Author URI: https://wpspeedexpert.com
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Extend times to check before today.
 * https://formidableforms.com/knowledgebase/frm_form_token_check_before_today/
 */
add_filter( 'frm_form_token_check_before_today', 'my_custom_function' );
function my_custom_function( $times ) {
    array_push( $times, 3 * DAY_IN_SECONDS ); // Three days ago.

    return $times;
}
