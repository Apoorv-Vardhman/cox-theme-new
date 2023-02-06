<?php
function custom_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
        <div class="custom-form"> 
        <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search your keyword..." />
        <button type="submit"><i class="fas fa-search"></i></button> 
      </div>
      </form>';

    return $form;
}
add_filter( 'get_search_form', 'custom_search_form', 40 );

function my_register_sidebars()
{
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            /*'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',*/
        )
    );
}
add_action( 'widgets_init', 'my_register_sidebars' );

//Activate custom settings
add_action( 'admin_init', 'cox_custom_settings' );

function cox_custom_settings()
{
    //Contact Form Options
    register_setting( 'cox-contact-options', 'activate_contact' );
    add_settings_section( 'cox-contact-section', 'Contact Form', 'cox_contact_section', 'cox_theme_contact');
    add_settings_field( 'activate-form', 'Activate Contact Form', 'cox_activate_contact', 'cox_theme_contact', 'cox-contact-section' );

}

function cox_contact_section() {
    echo 'Activate and Deactivate the Built-in Contact Form';
}

function cox_activate_contact() {
    $options = get_option( 'activate_contact' );
    $checked = ( @$options == 1 ? 'checked' : '' );
    echo '<label><input type="checkbox" id="activate_contact" name="activate_contact" value="1" '.$checked.' /></label>';
}