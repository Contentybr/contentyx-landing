<?php
/**
 * Contentyx Theme Functions
 *
 * @package Contentyx
 * @since 1.0.0
 */

// Evitar acesso direto
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configuração do tema
 */
function contentyx_setup() {
    // Suporte a título dinâmico
    add_theme_support('title-tag');
    
    // Suporte a imagens destacadas
    add_theme_support('post-thumbnails');
    
    // Suporte a HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    
    // Suporte a logo customizado
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Suporte a cores customizadas
    add_theme_support('editor-color-palette', array(
        array(
            'name'  => 'Azul Neon',
            'slug'  => 'blue-neon',
            'color' => '#00A8FF',
        ),
        array(
            'name'  => 'Azul Profundo',
            'slug'  => 'blue-deep',
            'color' => '#0057FF',
        ),
        array(
            'name'  => 'Laranja Neon',
            'slug'  => 'orange-neon',
            'color' => '#FF8A00',
        ),
        array(
            'name'  => 'Amarelo Dourado',
            'slug'  => 'yellow-gold',
            'color' => '#FFD33D',
        ),
    ));
    
    // Registrar menu
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'contentyx'),
        'footer'  => __('Menu Footer', 'contentyx'),
    ));
}
add_action('after_setup_theme', 'contentyx_setup');

/**
 * Enfileirar scripts e estilos
 */
function contentyx_scripts() {
    // Google Fonts - Inter
    wp_enqueue_style('contentyx-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap', array(), null);
    
    // Estilo principal
    wp_enqueue_style('contentyx-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Script principal
    wp_enqueue_script('contentyx-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
    
    // Smooth scroll
    wp_enqueue_script('contentyx-smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'contentyx_scripts');

/**
 * Registrar áreas de widgets
 */
function contentyx_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'contentyx'),
        'id'            => 'sidebar-1',
        'description'   => __('Adicione widgets aqui.', 'contentyx'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    // Footer widgets
    $footer_columns = 4;
    for ($i = 1; $i <= $footer_columns; $i++) {
        register_sidebar(array(
            'name'          => sprintf(__('Footer %d', 'contentyx'), $i),
            'id'            => 'footer-' . $i,
            'description'   => sprintf(__('Widget área do footer %d', 'contentyx'), $i),
            'before_widget' => '<div class="footer-widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));
    }
}
add_action('widgets_init', 'contentyx_widgets_init');

/**
 * Suporte a Elementor
 */
function contentyx_elementor_support() {
    // Registrar localizações do Elementor
    add_theme_support('elementor');
    
    // Suporte a largura total
    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'contentyx_elementor_support');

/**
 * Customizer - Opções do tema
 */
function contentyx_customize_register($wp_customize) {
    // Seção de cores
    $wp_customize->add_section('contentyx_colors', array(
        'title'    => __('Cores do Contentyx', 'contentyx'),
        'priority' => 30,
    ));
    
    // CTA Button Text
    $wp_customize->add_setting('contentyx_cta_text', array(
        'default'           => 'Começar Teste Gratuito',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('contentyx_cta_text', array(
        'label'    => __('Texto do CTA Principal', 'contentyx'),
        'section'  => 'title_tagline',
        'type'     => 'text',
    ));
    
    // CTA Button URL
    $wp_customize->add_setting('contentyx_cta_url', array(
        'default'           => '#pricing',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('contentyx_cta_url', array(
        'label'    => __('URL do CTA Principal', 'contentyx'),
        'section'  => 'title_tagline',
        'type'     => 'url',
    ));
}
add_action('customize_register', 'contentyx_customize_register');

/**
 * Adicionar suporte a página de landing
 */
function contentyx_register_landing_page_template() {
    // Template será carregado automaticamente de page-templates/
}
add_action('init', 'contentyx_register_landing_page_template');

/**
 * Remover admin bar no front-end para melhor visualização
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Adicionar classes customizadas ao body
 */
function contentyx_body_classes($classes) {
    if (is_page_template('page-templates/landing-page.php')) {
        $classes[] = 'landing-page';
    }
    return $classes;
}
add_filter('body_class', 'contentyx_body_classes');

/**
 * Shortcode para botão CTA
 */
function contentyx_cta_button_shortcode($atts) {
    $atts = shortcode_atts(array(
        'text' => 'Começar Agora',
        'url'  => '#',
        'type' => 'primary',
    ), $atts);
    
    $class = 'btn btn-' . esc_attr($atts['type']);
    
    return sprintf(
        '<a href="%s" class="%s">%s</a>',
        esc_url($atts['url']),
        $class,
        esc_html($atts['text'])
    );
}
add_shortcode('contentyx_cta', 'contentyx_cta_button_shortcode');

/**
 * Shortcode para gradiente de texto
 */
function contentyx_text_gradient_shortcode($atts, $content = null) {
    return '<span class="text-gradient">' . do_shortcode($content) . '</span>';
}
add_shortcode('text_gradient', 'contentyx_text_gradient_shortcode');

/**
 * Desabilitar Gutenberg em páginas específicas (opcional)
 */
function contentyx_disable_gutenberg($use_block_editor, $post) {
    if (is_page_template('page-templates/landing-page.php')) {
        return false; // Desabilita Gutenberg para usar Elementor
    }
    return $use_block_editor;
}
// add_filter('use_block_editor_for_post', 'contentyx_disable_gutenberg', 10, 2);

/**
 * Adicionar meta tags para SEO
 */
function contentyx_add_meta_tags() {
    if (is_page_template('page-templates/landing-page.php')) {
        ?>
        <meta name="description" content="Contentyx - Ferramenta profissional de geração de conteúdo com IA. Velocidade, estratégia e consistência para Social Medias, Agências e Criadores.">
        <meta name="keywords" content="geração de conteúdo, IA, social media, marketing digital, contentyx">
        <meta property="og:title" content="Contentyx - Crie conteúdo em volume com consistência">
        <meta property="og:description" content="Transforme briefing em roteiros prontos. Teste grátis por 7 dias.">
        <meta property="og:type" content="website">
        <meta name="twitter:card" content="summary_large_image">
        <?php
    }
}
add_action('wp_head', 'contentyx_add_meta_tags');
