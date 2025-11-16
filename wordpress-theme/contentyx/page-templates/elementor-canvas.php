<?php
/**
 * Template Name: Elementor Canvas
 * Template Post Type: page
 *
 * Template para uso com Elementor (sem header/footer)
 *
 * @package Contentyx
 * @since 1.0.0
 */

// Evitar acesso direto
if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <div id="page" class="site">
        <main id="main" class="site-main">
            <?php
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
            ?>
        </main>
    </div>

    <?php wp_footer(); ?>
</body>
</html>
