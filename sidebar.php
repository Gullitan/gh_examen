<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gh_exam
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
    <div class="search">
        <?php dynamic_sidebar( 'sidebar-3' ); ?>
    </div>
    <div class="categories">
        <?php dynamic_sidebar( 'sidebar-4' ); ?>
    </div>
    <div class="popular">
        <?php dynamic_sidebar( 'sidebar-2' ); ?>
    </div>
</aside>
