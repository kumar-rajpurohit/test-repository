<?php
/**
 * Plugin Name:       Epitrove Licensing (Beta 1)
 * Plugin URI:        http://wisdmlabs.com
 * Description:       Licensing addon for all epitrove products.
 * Version:           2.0.0
 * Author:            WisdmLabs
 * Author URI:        http://wisdmlabs.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       epitrove-licensing
 * Domain Path:       /languages
 * GitHub Plugin URI: kumar-rajpurohit/test-repository
 * GitHub Plugin URI: https://github.com/kumar-rajpurohit/test-repository
 */

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

function run_epitrove_licensing()
{
    require plugin_dir_path(__FILE__).'includes/class-epitrove-license.php';
    new \Licensing\EpitroveLicense();
    // $plugin->run();
}
run_epitrove_licensing();
