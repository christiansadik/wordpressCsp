<?php
/**
 * Function to create custom post type Branch
 *
 * @return void
 */
function custom_post_type_branch() {
    // creo e registro il custom post type
    register_post_type( 'branch', /* nome del custom post type */
        // definisco le varie etichette da mostrare nei menù
        array('labels' => array(
            'name' => esc_html('Filiali', 'wordpress-csp'), /* nome, al plurale, dell'etichetta del post type. */
            'singular_name' => esc_html('Filiale', 'wordpress-csp'), /* nome, al singolare, dell'etichetta del post type. */
            'all_items' => esc_html('Tutte le filiali', 'wordpress-csp'), /* testo nei menu che indica tutti i contenuti del post type */
            'add_new' => esc_html('Aggiungi filiale', 'wordpress-csp'), /*testo del pulsante Aggiungi. */
            'add_new_item' =>  esc_html('Aggiungi nuova filiale', 'wordpress-csp'), /* testo per il pulsante Aggiungi nuovo post type */
            'edit_item' =>  esc_html('Modifica filiale', 'wordpress-csp'), /*  testo modifica */
            'new_item' => esc_html('Nuova filiale', 'wordpress-csp'), /* testo nuovo oggetto */
            'view_item' => esc_html('Visualizza filiale', 'wordpress-csp'), /* testo per visualizzare */
            'search_items' => esc_html('Cerca filiale', 'wordpress-csp'), /* testo per la ricerca*/
            'not_found' =>  esc_html('Nessuna filiale trovata', 'wordpress-csp'), /* testo se non trova nulla */
            'not_found_in_trash' => esc_html('Nessuna filiale trovata nel cestino', 'wordpress-csp'), /* testo se non trova nulla nel cestino */
            'parent_item_colon' => ''
        ), /* fine dell'array delle etichette del menu */
            'rewrite' => array('slug' => 'filiale'),
            'public' => true, /* definisce se il post type sia visibile sia da front-end che da back-end */
            'publicly_queryable' => true, /* definisce se possono essere fatte query da front-end */
            'exclude_from_search' => false, /* esclude (false) il post type dai risultati di ricerca */
            'menu_icon' => 'dashicons-building',
            'show_ui' => true, /* definisce se deve essere visualizzata l'interfaccia di default nel pannello di amministrazione */
            'query_var' => true,
            'has_archive' => true, /* definisci se abilitare la generazione di un archivio (tipo archive-cd.php) */
            'hierarchical' => false, /* definisci se potranno essere definiti elementi padri di altri */
            /* la riga successiva definisce quali elementi verranno visualizzati nella schermata di creazione del post */
            'supports' => array( 'title', 'thumbnail', 'editor'),
        )
    );

}
add_action( 'init', 'custom_post_type_branch');

/**
 * Function to add taxonomy 
 *
 * @return void
 */
function add_taxonomy_branch() {
    register_taxonomy(
        'branch_country',
        'branch',
        array(
            'hierarchical'  => true,
            'label'         => 'Regione',
            'query_var'     => true,
            'rewrite' => array(
                'slug' => 'regione-filiale',
                'with_front' => false
            )
        )
    );
}
add_action( 'init', 'add_taxonomy_branch');


