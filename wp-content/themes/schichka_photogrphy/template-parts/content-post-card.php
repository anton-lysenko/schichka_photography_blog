<?php
/**
 * Template part for displaying post card.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package schichka_photogrphy
 */

?>
<div class="posts_container">
    <?php

    foreach ($posts as $post) {
        $id = $post->ID;
        echo '<div class="post-card"><a href="' . get_permalink($post->ID) . '"><div class="post_card_hover">' . get_the_post_thumbnail($id, 'recent_post_thumb') .'</div>'. $post->post_title . '</a> </div> ';
    }

    ?>
</div>
