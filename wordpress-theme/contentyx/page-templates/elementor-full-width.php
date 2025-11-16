<?php
/**
 * Template Name: Elementor Full Width
 * Template Post Type: page
 *
 * Template para uso com Elementor (com header/footer)
 *
 * @package Contentyx
 * @since 1.0.0
 */

get_header();
?>

<main id="main" class="site-main">
    <?php
    while (have_posts()) :
        the_post();
        the_content();
    endwhile;
    ?>
</main>

<?php
get_footer();
