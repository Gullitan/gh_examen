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

    <div class="contacts">
        <div class="wrapper">
            <div class="contactos">
                <?php while (have_rows('title_and_text_sections')): the_row();

                    // vars
                    $contact_section_title = get_sub_field('contact_section_title');
                    $contact_seclion_text = get_sub_field('contact_seclion_text')

                    ?>


                    <h2 class="title-section">
                        <?php echo $contact_section_title; ?>
                    </h2>
                    <span class="text-section">
                                <?php echo $contact_seclion_text; ?>
                            </span>
                <?php endwhile; ?>

                <span class="tel">
                        <?php echo get_theme_mod('telephone_number', ''); ?>
                    </span>
                <address>
                    <?php echo get_theme_mod('address', ''); ?>
                </address>
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6635.422847292248!2d150.73229083345927!3d-33.74227754084259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b1285117575b7dd%3A0x8f39936b03b644ee!2zMTIzLzIgUGFya3NpZGUgQXZlLCBXZXJyaW5ndG9uIERvd25zIE5TVyAyNzQ3LCDQkNCy0YHRgtGA0LDQu9C40Y8!5e0!3m2!1sru!2sua!4v1491643218367"
                            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="contact-form">
                <?php echo do_shortcode("[wpforms id=\"163\"]"); ?>
            </div>
        </div>
    </div>
    <div class="top">
        <div class="wrapper">
            <div class="logo">
                <?php if (get_theme_mod('logo')) {
                    echo '<img src="' . esc_url(get_theme_mod('logo')) . '">';
                } ?>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="wrapper">
            <div class="copyright">
                <?php
                if (get_theme_mod('hide_copyright') == '') { ?>
                    &#169;
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
