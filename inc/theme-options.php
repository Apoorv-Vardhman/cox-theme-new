<?php
function cox_add_admin_page() {
    add_menu_page( 'Cox Theme Options', 'Cox Theme', 'manage_options', 'cox_theme', 'cox_theme_create_page', 'dashicons-buddicons-buddypress-logo', 110 );
    add_submenu_page( 'cox_theme', 'Cox Contact Form', 'Contact Form', 'manage_options', 'cox_theme_contact', 'cox_contact_form_page' );
}
add_action( 'admin_menu', 'cox_add_admin_page' );

function cox_theme_create_page() {
    require_once( get_template_directory() . '/inc/admin/cox-admin.php' );
}

function cox_contact_form_page() {
    require_once( get_template_directory() . '/inc/admin/cox-contact-form.php' );
}
