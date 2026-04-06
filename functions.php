<?php
function minimal_gray_theme_enqueue_styles() {
    // Optimized Local CSS (Tailwind JIT + Custom Styles + Local Fonts)
    wp_enqueue_style('theme-optimized', get_template_directory_uri() . '/style-min.css', array(), time());
    wp_enqueue_style('theme-custom', get_template_directory_uri() . '/assets/css/custom.css', array('theme-optimized'), time());
}
add_action('wp_enqueue_scripts', 'minimal_gray_theme_enqueue_styles');

function minimal_gray_theme_setup() {
    load_theme_textdomain( 'minimal-gray-theme', get_template_directory() . '/languages' );
    register_nav_menu('primary', __('Primary Menu', 'minimal-gray-theme'));
    
    // Habilitar soporte para Gutenberg y miniaturas
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'sixteen-nine', 800, 450, true );
}
add_action('after_setup_theme', 'minimal_gray_theme_setup');

// Asegurar que Gutenberg está habilitado para todos los post types
function enable_gutenberg_for_all_posts() {
    $post_types = get_post_types( array( 'public' => true ), 'objects' );
    foreach ( $post_types as $post_type ) {
        if ( ! post_type_supports( $post_type->name, 'editor' ) ) {
            add_post_type_support( $post_type->name, 'editor' );
        }
    }
}
add_action( 'init', 'enable_gutenberg_for_all_posts', 20 );

// Remover cualquier restricción de Gutenberg
add_filter( 'use_block_editor_for_post', '__return_true' );
add_filter( 'use_block_editor_for_post_type', '__return_true' );

function create_servicios_post_type() {
    register_post_type( 'servicios',
        array(
            'labels' => array(
                'name' => __( 'Servicios' ),
                'singular_name' => __( 'Servicio' ),
                'add_new' => __( 'A&ntilde;adir Nuevo Servicio' ),
                'add_new_item' => __( 'A&ntilde;adir Nuevo Servicio' ),
                'edit_item' => __( 'Editar Servicio' ),
                'new_item' => __( 'Nuevo Servicio' ),
                'view_item' => __( 'Ver Servicio' ),
                'search_items' => __( 'Buscar Servicios' ),
                'not_found' => __( 'No se encontraron servicios' ),
                'not_found_in_trash' => __( 'No se encontraron servicios en la papelera' ),
            ),
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
            'menu_icon' => 'dashicons-admin-tools',
            'rewrite' => array( 'slug' => 'servicios' ),
        )
    );
}
add_action( 'init', 'create_servicios_post_type' );

function flush_servicios_rewrite_rules() {
    if ( ! get_transient( 'servicios_rewrite_flushed' ) ) {
        $GLOBALS['wp_rewrite']->init();
        $GLOBALS['wp_rewrite']->flush_rules();
        set_transient( 'servicios_rewrite_flushed', 1, 60 );
    }
}
add_action( 'init', 'flush_servicios_rewrite_rules', 99 );

// Registro de meta para servicios
function register_servicios_meta() {
    register_meta( 'post', 'service_url', array(
        'object_subtype' => 'servicios',
        'type' => 'string',
        'sanitize_callback' => 'esc_url',
        'show_in_rest' => true,
    ));
    
    register_meta( 'post', 'service_gallery', array(
        'object_subtype' => 'servicios',
        'type' => 'string',
        'sanitize_callback' => 'wp_kses_post',
        'show_in_rest' => true,
    ));
}
add_action( 'init', 'register_servicios_meta' );

function create_portfolio_post_type() {
    register_post_type( 'portfolio',
        array(
            'labels' => array(
                'name' => __( 'Portfolio' ),
                'singular_name' => __( 'Proyecto' ),
                'add_new' => __( 'A&ntilde;adir Nuevo Proyecto' ),
                'add_new_item' => __( 'A&ntilde;adir Nuevo Proyecto' ),
                'edit_item' => __( 'Editar Proyecto' ),
                'new_item' => __( 'Nuevo Proyecto' ),
                'view_item' => __( 'Ver Proyecto' ),
                'search_items' => __( 'Buscar Proyectos' ),
                'not_found' => __( 'No se encontraron proyectos' ),
                'not_found_in_trash' => __( 'No se encontraron proyectos en la papelera' ),
            ),
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
            'menu_icon' => 'dashicons-format-gallery',
            'rewrite' => array( 'slug' => 'portfolio' ),
        )
    );
    
    register_meta( 'post', 'project_url', array(
        'object_subtype' => 'portfolio',
        'type' => 'string',
        'sanitize_callback' => 'esc_url',
        'show_in_rest' => true,
    ));
    
    register_meta( 'post', 'project_gallery', array(
        'object_subtype' => 'portfolio',
        'type' => 'string',
        'sanitize_callback' => 'wp_kses_post',
        'show_in_rest' => true,
    ));
}
add_action( 'init', 'create_portfolio_post_type' );

function flush_portfolio_rewrite_rules() {
    if ( ! get_transient( 'portfolio_rewrite_flushed' ) ) {
        $GLOBALS['wp_rewrite']->init();
        $GLOBALS['wp_rewrite']->flush_rules();
        set_transient( 'portfolio_rewrite_flushed', 1, 60 );
    }
}
add_action( 'init', 'flush_portfolio_rewrite_rules', 99 );
function minimal_gray_theme_custom_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['webp'] = 'image/webp';
    $mimes['avif'] = 'image/avif';
    $mimes['heic'] = 'image/heic';
    $mimes['heif'] = 'image/heif';
    $mimes['bmp'] = 'image/bmp';
    $mimes['ico'] = 'image/x-icon';
    $mimes['tiff|tif'] = 'image/tiff';
    return $mimes;
}
add_filter('upload_mimes', 'minimal_gray_theme_custom_mime_types');

// Registro de Sidebar
function minimal_gray_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar Principal', 'minimal-gray-theme' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets en el sidebar del sitio.', 'minimal-gray-theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-8">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-lg font-bold mb-4 pb-2 border-b" style="color:#fff; border-color:rgba(255,255,255,0.2);">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'minimal_gray_theme_widgets_init' );

// Forzar Header UTF-8
function minimal_gray_theme_force_utf8_header() {
    header('Content-Type: text/html; charset=UTF-8');
}
add_action('send_headers', 'minimal_gray_theme_force_utf8_header');
// Customizer Integration
function minimal_gray_customize_register($wp_customize) {
    // Section: Brand Settings
    $wp_customize->add_section('minimal_gray_brand_settings', array(
        'title'    => __('Configuración de Marca', 'minimal-gray-theme'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('footer_description', array(
        'default'           => 'Elevamos marcas a través de un diseño minimalista, funcional y de alto impacto técnico.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_description', array(
        'label'    => __('Descripción Pie de Página', 'minimal-gray-theme'),
        'section'  => 'minimal_gray_brand_settings',
        'type'     => 'textarea',
    ));

    $wp_customize->add_setting('location_text', array(
        'default'           => 'Buenos Aires, Argentina',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('location_text', array(
        'label'    => __('Ubicación', 'minimal-gray-theme'),
        'section'  => 'minimal_gray_brand_settings',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('copyright_extra', array(
        'default'           => 'Disfruta del Minimalismo.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('copyright_extra', array(
        'label'    => __('Texto Extra Copyright', 'minimal-gray-theme'),
        'section'  => 'minimal_gray_brand_settings',
        'type'     => 'text',
    ));

    // Section: Social Media
    $wp_customize->add_section('minimal_gray_social_settings', array(
        'title'    => __('Redes Sociales', 'minimal-gray-theme'),
        'priority' => 31,
    ));

    $socials = array('linkedin' => 'LinkedIn', 'instagram' => 'Instagram', 'x' => 'X');
    foreach ($socials as $key => $label) {
        $wp_customize->add_setting('social_' . $key, array(
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control('social_' . $key, array(
            'label'    => $label,
            'section'  => 'minimal_gray_social_settings',
            'type'     => 'url',
        ));
    }

    // Section: Footer CTA
    $wp_customize->add_section('minimal_gray_footer_cta', array(
        'title'    => __('Pie de Página CTA', 'minimal-gray-theme'),
        'priority' => 32,
    ));

    $wp_customize->add_setting('footer_cta_title', array(
        'default'           => '¿Listo para el impacto?',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_cta_title', array(
        'label'    => __('Título CTA', 'minimal-gray-theme'),
        'section'  => 'minimal_gray_footer_cta',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('footer_cta_desc', array(
        'default'           => 'Tu próximo gran proyecto merece un diseño a medida y funcional.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_cta_desc', array(
        'label'    => __('Descripción CTA', 'minimal-gray-theme'),
        'section'  => 'minimal_gray_footer_cta',
        'type'     => 'textarea',
    ));
}
add_action('customize_register', 'minimal_gray_customize_register');
?>