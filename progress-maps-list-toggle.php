<?php
/**
* Plugin Name: Accordion Listings for Progress Maps 
* Plugin URI: https://github.com/FreshyMichael/progress-maps-list-toggle
* Description: Add a Description
* Version: 1.0.0
* Author: FreshySites
* Author URI: https://freshysites.com/
* License: GNU v3.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/* Accordion Listings for Progress Maps Start */
//______________________________________________________________________________

if (! defined('PLUGIN_DIR'){
	define('PLUGIN_DIR' , dirname(__FILE__).'/');
}
    


//______________________________________________________________________________
// All About Updates

//  Begin Version Control | Auto Update Checker
require 'plugin-update-checker/progress-maps-list-toggle.php';
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
/* Accordion Listings for Progress Maps End */
?>
