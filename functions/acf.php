<?php
/*------------------------------------*\
	Advanced Custom Fields
\*------------------------------------*/

/**
 * REMOVE ACF MENU FOR NON ADMINS
 */
add_filter('acf/settings/show_admin', 'my_acf_show_admin');
function my_acf_show_admin( $show ) {
    return current_user_can('manage_options');
}

/**
 * ENQUEUE AN ADMIN STYLESHEET FOR STYLING ACF
 */
function enqueue_acf_styles() {
    wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/assets/dist/css/admin.css', false, '1.0.0' );
    wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'enqueue_acf_styles' );

/**
 * BUILD ADVANCED CUSTOM FIELDS
 * Copy generated code from the Advanced Custom Fields Plugin
 */
