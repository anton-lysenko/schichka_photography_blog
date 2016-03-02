<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package schichka_photogrphy
 */

get_header(); ?>

        <div class="site-main home_page">

            <?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/content', 'page');

            endwhile; // End of the loop.
            ?>


            <h2 class="underlined">Недавние события</h2>
            <?php $args = array(
                'numberposts' => 3,
                'offset' => 0,
                'category' => 0,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'include' => '',
                'exclude' => '',
                'meta_key' => '',
                'meta_value' => '',
                'post_type' => 'post',
                'post_status' => 'publish',
                'suppress_filters' => true);

            $posts = wp_get_recent_posts($args, OBJECT);
            get_template_part('template-parts/content', 'post-card');
            ?>

        </div>
        <!-- #main -->


<?php
get_footer();
