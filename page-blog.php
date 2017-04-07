<?php
/* Template Name: Blog */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div class="wrapper">
                <section>

                    <aside>
                        <div class="archive">

                        </div>
                        <div class="categories">

                        </div>
                        <div class="popular">

                        </div>
                    </aside>
                    <ul class="blog-list">
                        <?php
                        while ( have_posts() ) : the_post();?>

                            <li>
                           <div class="">
                               <h3>
                                   <a href="<?php the_permalink();?>">
                                       <?php the_title();?>
                                   </a>
                               </h3>
                               <span class="">

                               </span>
                               <img src="" alt="">
                           </div>
                           <div>
                               <span class="">

                               </span>
                               <span class="">

                               </span>
                               <span class="">

                               </span>
                           </div>
                        </li>
                        <?php endwhile; // End of the loop.
                        ?>

                    </ul>
                </section>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
