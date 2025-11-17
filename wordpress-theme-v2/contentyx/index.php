<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package Contentyx
 * @since 2.0.0
 */

get_header();
?>

<main id="main" class="site-main">
    <div class="container" style="padding: 4rem 0;">
        
        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    </header>

                    <div class="entry-content">
                        <?php
                        the_content();

                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'contentyx'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>
                </article>

            <?php endwhile; ?>

            <?php
            the_posts_navigation();

        else :
            ?>

            <div class="no-results">
                <h1><?php esc_html_e('Nothing Found', 'contentyx'); ?></h1>
                <p><?php esc_html_e('It seems we can\'t find what you\'re looking for.', 'contentyx'); ?></p>
            </div>

        <?php endif; ?>

    </div>
</main>

<?php
get_footer();
