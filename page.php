<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gh_exam
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div class="wrapper">
                <section class="services">
                    <div class="top">
                        <h2 class="title">
                            <?php the_field('section_title'); ?>
                        </h2>
                        <span class="title-text">
                        <?php the_field('section_text'); ?>
                        </span>
                        <ul class="service">
                            <?php while( have_rows('services') ): the_row();

                            // vars
                            $image_service = get_sub_field('image_service');
                            $name_service = get_sub_field('name_service');
                            $text_service = get_sub_field('text_service');
                            $button_service = get_sub_field('button_service')

                            ?>

                        <li>
                            <img src="<?php echo $image_service['url']; ?>" alt="<?php echo $image_service['url']; ?>">
                            <h3>
                                <?php echo $name_service; ?>
                            </h3>
                            <span>
                                 <?php echo $text_service; ?>
                            </span>
                            <a href="">
                                <?php echo $button_service; ?>
                            </a>
                        </li>
                                <?php endwhile; ?>

                        </ul>
                    </div>


                </section>
                <section class="latest">
                    <h2 class="title">
                        <?php the_field('section_latest_title'); ?>
                    </h2>
                    <span class="title-text">
                        <?php the_field('section_latest_text'); ?>
                        </span>
                    <ul class="computers">
                        <?php while( have_rows('computers') ): the_row();

                            // vars
                            $computer_image = get_sub_field('computer_image');
                            $name_work = get_sub_field('name_work')
                            ?>

                            <li>
                                <img src="<?php echo $computer_image['url']; ?>" alt="<?php echo $computer_image['url']; ?>">
                                <h3>
                                    <?php echo$name_work; ?>
                                </h3>

                            </li>
                        <?php endwhile; ?>
                    </ul>
                </section>
                <section class="purchase">
                    <h2 class="title">
                        <?php the_field('section_purchase_title'); ?>
                    </h2>
                    <span class="title-text">
                        <?php the_field('section_purchase_text'); ?>
                        </span>
                    <a href="#">Purchase</a>
                </section>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
