<?php
/**
 * Gutenag
 *
 * Gutenag is a plugin that quiets the prompt to install the new, still
 * in beta post editor targeted for WordPress 5.0, Gutenberg.
 *
 * @link              https://github.com/boogah/gutenag/
 * @package           Gutenag
 * @author            Jason Cosper <boogah@gmail.com>
 * @license           GPL-3.0
 *
 * @wordpress-plugin
 * Plugin Name:       Nil Desperandum
 * Plugin URI:        https://github.com/boogah/gutenag/
 * Description:       Goodbye. Adieu. Aufwiedersehen. Gesundheit. Farewell.
 * Version:           1.0.0
 * Author:            Jason Cosper
 * Author URI:        https://jasoncosper.com/
 * License:           GPL-3.0
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Hide the "try Gutenberg" nag.
 *
 * @since 1.0.0
 */
remove_action( 'try_gutenberg_panel', 'wp_try_gutenberg_panel' );
