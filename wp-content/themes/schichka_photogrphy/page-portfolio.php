<?php


get_header(); ?>

    <div class="posts-page portfolio_page">
        <?php if (have_posts()) : while (have_posts()) : the_post();
            the_content();
        endwhile; endif; ?>
        <?php

        $categories_list = get_categories();
        $categories_length = count($categories_list);

        for ($i = 0; $i < $categories_length; $i++) {
            $category_name = $categories_list[$i]->name;
            $category_slug = $categories_list[$i]->slug;
            echo '<h2 class="underlined">' . $category_name . '</h2>';

            $args = array(
                'posts_per_page' => 50,
                'offset' => 0,
                'category' => '',
                'category_name' => $category_slug,
                'orderby' => 'date',
                'order' => 'DESC',
                'include' => '',
                'exclude' => '',
                'meta_key' => '',
                'meta_value' => '',
                'post_type' => 'post',
                'post_mime_type' => '',
                'post_parent' => '',
                'author' => '',
                'post_status' => 'publish',
                'suppress_filters' => true
            );
            $posts = get_posts($args);

            get_template_part('template-parts/content', 'post-card');
        }
        ?>

    </div><!-- .posts-page -->

<?php
get_footer();
