<?php

function register_general_settings($field)
{
    add_settings_field(
        $field,               //The ID
        $field,         // the label for field
        function () use ($field) {
            $data = esc_attr(get_option($field, ''));

            printf(
                '<input type="text" name="' . $field . '" value="%1$s" id="' . $field . '" />',
                $data
            );
        },  //The callback function
        'general'                       //the page
    );
    register_setting(
        'general',
        $field
    );
}

function initialize_my_theme_options()
{
    register_general_settings('address');
    register_general_settings('contact');
    register_general_settings('email');
}
add_action('admin_init', 'initialize_my_theme_options');
