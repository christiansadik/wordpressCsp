<?php
/**
* Plugin Name:       Wordpress Csp
* Description:       Un Plugin facile ed intuitivo per l'utente. Con l'utilizzo del nostro custom post type "Filiali", sarà facile creare ed aggiungere nuovi affilaiti.
* Company:           Forbidden Design 
* Company URI:       https://forbidden.design
* Author:            Christian Sadik Melik
* Text Domain:       worpress-csp
*
*/

define('PLUGIN_NAME','worpress-csp');
define('PLUGIN_URL', plugin_dir_url(__FILE__) );
define('PLUGIN_URL_ASSETS', plugin_dir_url(__FILE__) . 'assets/' );
define('PLUGIN_URI', dirname(__FILE__) );

/***** REQUIRE DEI FILE NECESSARI *****/
require 'core/functions.php';
require 'core/script.php';
require 'core/custom-post-type/cpt-branch.php';
require 'core/metabox-branch.php';

?>
