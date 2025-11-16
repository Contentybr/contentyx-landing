<?php
/**
 * Header do tema
 *
 * @package Contentyx
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#main"><?php _e('Pular para o conteúdo', 'contentyx'); ?></a>

    <?php if (!is_page_template('page-templates/landing-page.php')) : ?>
    <header id="masthead" class="site-header">
        <div class="container">
            <div class="header-inner">
                <div class="site-branding">
                    <?php
                    if (has_custom_logo()) :
                        the_custom_logo();
                    else :
                        ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-full-text.png" alt="<?php bloginfo('name'); ?>" class="site-logo">
                        </a>
                        <?php
                    endif;
                    ?>
                </div>

                <nav id="site-navigation" class="main-navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ));
                    ?>
                </nav>

                <div class="header-cta">
                    <a href="<?php echo esc_url(get_theme_mod('contentyx_cta_url', '#pricing')); ?>" class="btn btn-primary">
                        <?php echo esc_html(get_theme_mod('contentyx_cta_text', 'Começar Teste Gratuito')); ?>
                    </a>
                </div>

                <button class="mobile-menu-toggle" aria-label="Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>
    <?php endif; ?>
