<?php
//Fired in add_action( 'after_setup_theme', 'sek_register_modules', 50 );
function sek_get_module_params_for_sek_level_animation_module() {
    $pro_text = '';
    if ( !sek_is_pro() ) {
        $pro_text = sek_get_pro_notice_for_czr_input( __('add animations to anything', 'nimble-builder') );
    }
    return array(
        'dynamic_registration' => true,
        'module_type' => 'sek_level_animation_module',
        //'name' => __('Width options', 'nimble-builder'),
        // 'sanitize_callback' => 'function_prefix_to_be_replaced_sanitize_callback__czr_social_module',
        // 'validate_callback' => 'function_prefix_to_be_replaced_validate_callback__czr_social_module',
        // 'starting_value' => array(
        //     'outer-section-width' => '100%',
        //     'inner-section-width' => '100%'
        // ),
        'tmpl' => array(
            'item-inputs' => array(
                'anim_type' => array(
                    'input_type'  => 'inactive',
                    'default'     => '',
                    'refresh_markup' => false,
                    'refresh_stylesheet' => false,
                    'html_before' => $pro_text . '<hr/>'
                )
            )
        )//tmpl
    );
}

?>