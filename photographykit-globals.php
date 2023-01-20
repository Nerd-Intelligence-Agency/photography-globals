<?php
/**
 * @package PhotographyKit_Globals
 * @version 1.0.1
 */
/*
Plugin Name: PhotographyKit Globals
Plugin URI: https://nerdintel.com/
Description: Photography Global updates and changes.
Author: Nerd Inelligence Agency
Version: 0.0.2
Author URI: https://getideakit.com/
*/

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly


/**
* Custom post types
**/
 include plugin_dir_path( __FILE__ ).'pk-cpts/pk-cpts.php';

 /**
 * Custom toolset fields
 **/
 include plugin_dir_path( __FILE__ ).'pk-toolset-custom-flieds/toolset-custom-fields.php';

?>
