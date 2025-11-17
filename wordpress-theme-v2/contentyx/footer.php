<?php
/**
 * The footer for our theme
 *
 * @package Contentyx
 * @since 2.0.0
 */
?>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <?php if (is_active_sidebar('footer-1')) : ?>
                    <div class="footer-column">
                        <?php dynamic_sidebar('footer-1'); ?>
                    </div>
                <?php else : ?>
                    <div class="footer-column">
                        <h4><?php esc_html_e('Produto', 'contentyx'); ?></h4>
                        <ul>
                            <li><a href="#features"><?php esc_html_e('Recursos', 'contentyx'); ?></a></li>
                            <li><a href="#pricing"><?php esc_html_e('Preços', 'contentyx'); ?></a></li>
                            <li><a href="#how-it-works"><?php esc_html_e('Como Funciona', 'contentyx'); ?></a></li>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer-2')) : ?>
                    <div class="footer-column">
                        <?php dynamic_sidebar('footer-2'); ?>
                    </div>
                <?php else : ?>
                    <div class="footer-column">
                        <h4><?php esc_html_e('Empresa', 'contentyx'); ?></h4>
                        <ul>
                            <li><a href="#about"><?php esc_html_e('Sobre', 'contentyx'); ?></a></li>
                            <li><a href="#blog"><?php esc_html_e('Blog', 'contentyx'); ?></a></li>
                            <li><a href="#contact"><?php esc_html_e('Contato', 'contentyx'); ?></a></li>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer-3')) : ?>
                    <div class="footer-column">
                        <?php dynamic_sidebar('footer-3'); ?>
                    </div>
                <?php else : ?>
                    <div class="footer-column">
                        <h4><?php esc_html_e('Legal', 'contentyx'); ?></h4>
                        <ul>
                            <li><a href="#terms"><?php esc_html_e('Termos de Uso', 'contentyx'); ?></a></li>
                            <li><a href="#privacy"><?php esc_html_e('Privacidade', 'contentyx'); ?></a></li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('Todos os direitos reservados.', 'contentyx'); ?></p>
            </div>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
