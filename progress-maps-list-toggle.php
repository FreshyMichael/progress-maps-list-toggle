<?php
/**
* Plugin Name: Progress Maps List Toggle
* Plugin URI: https://github.com/FreshyMichael/progress-maps-list-toggle
* Description: Collapses the list entries, and makes them toggle open/close on title click
* Version: 1.0.1
* Author: FreshySites
* Author URI: https://freshysites.com/
* License: GNU v3.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/* Progress Maps - List Toggle Start */
//______________________________________________________________________________
function pm_addon_scripts() {
    $dir = plugin_dir_url(__FILE__);
	wp_enqueue_style('list-and-filter-accordion-style', $dir . '/includes/css/style.css', array(), '1.0.1', 'all');
   	wp_enqueue_script('list-and-filter-accordion-script', $dir . '/includes/js/list-and-filter-accordion-function.js', array(), '1.0.1', 'true');
}
add_action( 'wp_enqueue_scripts', 'pm_addon_scripts' );
    
//______________________________________________________________________________
// All About Updates

//  Begin Version Control | Auto Update Checker
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
// ***IMPORTANT*** Update this path to New Github Repository Master Branch Path
	'https://github.com/FreshyMichael/progress-maps-list-toggle',
	__FILE__,
// ***IMPORTANT*** Update this to New Repository Master Branch Path
	'progress-maps-list-toggle'
);
//Enable Releases
$myUpdateChecker->getVcsApi()->enableReleaseAssets();
//Optional: If you're using a private repository, specify the access token like this:
//
//
//Future Update Note: Comment in these sections and add token and branch information once private git established
//
//
//$myUpdateChecker->setAuthentication('your-token-here');
//Optional: Set the branch that contains the stable release.
//$myUpdateChecker->setBranch('stable-branch-name');

//______________________________________________________________________________
/* Progress Maps - List Toggle End */
?>
