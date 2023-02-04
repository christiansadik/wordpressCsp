<?php
/**
 * Filters to disable Gutenberg blocks editor
 */
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);


/**
 * Function to get ID of Posts by the page's slug
 *
 * @param [string] $slug
 * @return int(ID) or null
 */
function get_post_id_by_slug($slug){
    $post = get_page_by_path($slug, OBJECT, 'branch');
    if ($post) {
        return $post->ID;
    } else {
        return null;
    }
}

