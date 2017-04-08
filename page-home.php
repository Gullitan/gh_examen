<?php
/* Template Name: Home */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <section class="primary">
                <div class="wrapper">
                    <div class="images-block">
                        <img src="<?php echo get_field('computer_image')['url']; ?>"
                             alt="<?php echo get_field('computer_image')['url']; ?>">
                    </div>
                    <div class="text-block">
                        <h1>
                            WHY <span class="color-text">
                        US
                    </span>?
                        </h1>
                        <span class="prof">
                   We are Professional
                </span>
                        <span class="client-text">
                    1000+ Clients,
                </span>
                        <span class="live-sup">
                    Live Support
                </span>
                        <span class="primary-text">
                    Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever
                    since the 1500s,
                </span>
                        <a href="#" class="go_bottom fa fa-angle-down" aria-hidden="true">
                        </a>
                    </div>
                </div>
            </section>
            <section class="wellcome">
                <div class="wrapper">
                    <div class="well">
                        <img src="<?php echo get_field('man_image')['url']; ?>"
                             alt="<?php echo get_field('man_image')['url']; ?>">
                    </div>
                    <div class="text-block-well">
                        <h2>
                            Welcome Here.
                        </h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since
                            the 1500s, when an unknown printer took a galley of type and scrambled it
                            to make a type <span class="red-text">specimen book</span> . It has survived not only five
                            centuries, but
                            also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the <span class="red-text">release of Letraset</span>
                            sheets
                            containing Lorem Ipsum passages, and more recently with desktop
                            publishing software <span class="red-text">like Aldus PageMaker including versions of
                            Lorem Ipsum.</span>
                        </p>
                    </div>
                </div>
            </section>
            <section class="offering">
                <div class="wrapper">
                    <?php while (have_rows('title_and_text_sections')): the_row();

                        // vars
                        $offering_section_title = get_sub_field('offering_section_title');
                        $offering_section_text = get_sub_field('offering_section_text');
                        $work_section_title = get_sub_field('work_section_title');
                        $work_section_text = get_sub_field('work_section_text');
                        $clients_section_title = get_sub_field('clients_section_title');
                        $contact_section_title = get_sub_field('contact_section_title');
                        $contact_seclion_text = get_sub_field('contact_seclion_text')

                        ?>


                        <h2 class="title-section">
                            <?php echo $offering_section_title; ?>
                        </h2>
                        <span class="text-section">
                                <?php echo $offering_section_text; ?>
                            </span>
                    <?php endwhile; ?>
                    <ul class="offerings-block">
                        <?php while (have_rows('offering')): the_row();

                            // vars
                            $image_offering = get_sub_field('image_offering');
                            $title_offering = get_sub_field('title_offering');
                            $text_offering = get_sub_field('text_offering');

                            ?>

                            <li>
                                <img src="<?php echo $image_offering['url']; ?>"
                                     alt="<?php echo $image_offering['url']; ?>">
                                <h3>
                                    <?php echo $title_offering; ?>
                                </h3>
                                <span>
                                 <?php echo $text_offering; ?>
                            </span>
                                <a href="">
                                    <?php echo $button_service; ?>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>

                </div>
            </section>
            <section class="work">
                <div class="wrapper">
                    <?php while (have_rows('title_and_text_sections')): the_row();

                        // vars
                        $work_section_title = get_sub_field('work_section_title');
                        $work_section_text = get_sub_field('work_section_text');

                        ?>


                        <h2 class="title-section">
                            <?php echo $work_section_title; ?>
                        </h2>
                        <span class="text-section">
                                <?php echo $work_section_text; ?>
                            </span>
                    <?php endwhile; ?>
                    <div class="button-group filter-button-group">
                        <button data-filter="*">All</button>
                        <button data-filter=".metal">Design</button>
                        <button data-filter=".transition">Development</button>
                        <button data-filter=".alkali, .alkaline-earth">SEO</button>
                        <button data-filter=":not(.transition)">Others</button>
                    </div>
                    <div class="grid">
                        <div class="element-item transition metal">
                            <img src="img/des-foto.png" alt="">
                        </div>
                        <div class="element-item post-transition metal">
                            <img src="img/2.png" alt="">
                        </div>
                        <div class="element-item alkali metal">
                            <img src="img/3.png" alt="">
                        </div>
                        <div class="element-item transition metal">
                            <img src="img/4.png" alt="">
                        </div>
                        <div class="element-item lanthanoid metal inner-transition">
                            <img src="../img/5.png" alt="">
                        </div>
                    </div>

                </div>
            </section>
            <section class="clients">
                <div class="wrapper">
                    <?php while (have_rows('title_and_text_sections')): the_row();

                        // vars
                        $clients_section_title = get_sub_field('clients_section_title');
                        ?>
                        <h2 class="title-section">
                            <?php echo $clients_section_title; ?>
                        </h2>
                    <?php endwhile; ?>
                    <ul class="clients-block">
                        <?php while (have_rows('images_clients')): the_row();

                            // vars
                            $client = get_sub_field('client');

                            ?>

                            <li>
                                <img src="<?php echo $client['url']; ?>" alt="<?php echo $client['url']; ?>">
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </section>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
