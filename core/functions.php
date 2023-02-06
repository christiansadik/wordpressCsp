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

/**
 * Function to change the email address before sending
 *
 * @param [object] $contact_form
 * @return void
 */
function wpcf7_change_recipient($contact_form){

    $submission = WPCF7_Submission::get_instance();
    $id_post    = get_post_id_by_slug($_POST['slug-page']);
    $recipient  = rwmb_get_value( 'branch_email', '', $id_post  );

	if($recipient) {
        $mail = $contact_form->prop( 'mail' );
        $mail['recipient'] = $recipient;
        $contact_form->set_properties(array('mail'=>$mail));
    }

}
add_action( 'wpcf7_before_send_mail', 'wpcf7_change_recipient' );

