<?php
/**
 * Custom Page Title
 */

 function my_custom_site_title($title) {
    if (is_home() || is_front_page()) {
        $title = 'Site Critivo | Criação de Sites para Pequenas Empresas e  Profissionais Autônomos';
    } elseif (is_single()) {
        $title = get_the_title() . ' | ' . get_bloginfo('name');
    } elseif (is_category()) {
        $title = single_cat_title('', false) . ' | ' . get_bloginfo('name');
    } else {
        $title .=get_the_title() . ' | ' . get_bloginfo('name');
    }
    return $title;
  }
  add_filter('pre_get_document_title', 'my_custom_site_title');
  
  /**
  * Custom Favicon
  */
  
  function my_custom_favicon() {
  echo '<link rel="icon" type="image/svg" href="' . get_template_directory_uri() . '/assets/img/logo/icon_alt.svg">';
  }
  add_action('wp_head', 'my_custom_favicon');

/**
 * Add Customizer
 
 */
add_action( 'customize_register', function( $wp_customize ) {
    //Redes Sociais
    $wp_customize->add_section( 'tema-redes-sociais' , array(
    'title'      => "Redes Sociais",
        'priority'   => 40,
    ) );
  
        //Whatsapp
        $wp_customize->add_setting( 'social-whatsapp', array(
            'default'           => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        ) );
        $wp_customize->add_control( 'social-whatsapp', array(
            'label'    => "Whatsapp",
            'description' => '',
            'section'  => 'tema-redes-sociais',
            'type' => 'text',
        ) );

            //Whatsapp API
            $wp_customize->add_setting( 'social-whatsapp-api', array(
                'default'           => '',
                'sanitize_callback' => 'wp_filter_nohtml_kses'
            ) );
            $wp_customize->add_control( 'social-whatsapp-api', array(
                'label'    => "Whatsapp API",
                'description' => '',
                'section'  => 'tema-redes-sociais',
                'type' => 'text',
            ) );

    // Email
    $wp_customize->add_section( 'tema-email' , array(
        'title'      => "E-mail",
            'priority'   => 40,
        ) );

    //E-mail
    $wp_customize->add_setting( 'social-email', array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ) );
    $wp_customize->add_control( 'social-email', array(
        'label'    => "E-mail",
        'description' => '',
        'section'  => 'tema-email',
        'type' => 'text',
    ) );

    //Linkedin
    $wp_customize->add_setting( 'social-linkedin', array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ) );
    $wp_customize->add_control( 'social-linkedin', array(
        'label'    => "Linkedin",
        'description' => '',
        'section'  => 'tema-redes-sociais',
        'type' => 'text',
    ) );

    //GitHub
    $wp_customize->add_setting( 'social-github', array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ) );
    $wp_customize->add_control( 'social-github', array(
        'label'    => "GitHub",
        'description' => '',
        'section'  => 'tema-redes-sociais',
        'type' => 'text',
    ) );
})
?>