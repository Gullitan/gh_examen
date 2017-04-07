<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gh_exam
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="wrapper">
            <div class="top">
                <div class="logo-social-icons">
                    <div class="logo">
                        <?php if (get_theme_mod('logo')) {
                            echo '<img src="' . esc_url(get_theme_mod('logo')) . '">'; }?>
                    </div>
                    <div class="header-social">
                        <?php my_social_media_icons(); ?>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum gravida
                        quam quis nunc rutrum placerat. Proin eu mi vitae neque veh interdum id nec
                        turpis nam auctor faucibus sollicitudin.
                    </p>
                </div>
                <div class="contact-info">
                    <span class="title">
                        Contact Info
                    </span>
                    <address>
                        <?php echo get_theme_mod('address') ?>
                    </address>
                    <a href="#">
                        info@deliver.ca
                    </a>
                    <span class="numbers">
                        1.306.222.3456
                    </span>
                </div>
                <div class="footer-menu">
                    <span class="title">
                        Quick Links
                    </span>
                    <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
                </div>
                <div class="news">
                    <span class="title">
                        Newsletter
                    </span>
                    <?php echo do_shortcode("[wpforms id=\"83\"]");?>
                </div>
            </div>
            <div class="bottom">
                <div class="copyright">
                    <?php
                    if (get_theme_mod('hide_copyright') == '') { ?>
                        <span class="design-sign"><?php echo __('Designed by ', 'text_domain'); ?></span>
                        <a href="#"><?php echo get_theme_mod('copyrighter_name', '') . ' '; ?></a>
                        <?php echo get_theme_mod('copyright_year' . '') . ' '; ?>
                        <a href="<?php the_permalink(); ?>"><?php echo get_theme_mod('copyright_name', '') . ' '; ?></a>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
