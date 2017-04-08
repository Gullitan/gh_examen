<?php
/* Template Name: Blog */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

                <section class="title-page">
                    <div class="wrapper">
                        <div class="hleb">
                            Blog Posts
                        </div>
                    </div>
                </section>
                <section>
                    <div class="wrapper">
                        <ul class="blog-list">
                            <?php
                            // the query

                            $query = new WP_Query(array('post_type' => 'news', 'post_status' => 'publish', 'posts_per_page' => 3, )); ?>

                            <?php if ($query->have_posts()) : ?>
                                <ul class="blog-list">
                                    <!— the loop —>
                                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                                        <li class="entry">
                                            <div class="block">
                                                <div class="more">

                                                </div>
                                                <h3>
                                                    <a href="<?php the_permalink();?>">
                                                        <?php the_title();?>
                                                    </a>
                                                </h3>
                                                <span class="text-post">
                                           <?php the_content(); ?>
                               </span>
                                                <span class="date">
                                            <?php the_date(); ?>
                                       </span>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                    <!— end of the loop —>
                                </ul>


                                <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                            <?php endif; ?>

                        </ul>
                        <?php echo paginate_links( $args ); ?>
                        <?php $args = array(
                            'base'               => '%_%',
                            'format'             => '?paged=%#%',
                            'total'              => 1,
                            'current'            => 0,
                            'show_all'           => false,
                            'end_size'           => 1,
                            'mid_size'           => 2,
                            'prev_next'          => true,
                            'prev_text'          => __('« Previous'),
                            'next_text'          => __('Next »'),
                            'type'               => 'plain',
                            'add_args'           => false,
                            'add_fragment'       => '',
                            'before_page_number' => '',
                            'after_page_number'  => ''
                        ); ?>
                    </div>
                </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
