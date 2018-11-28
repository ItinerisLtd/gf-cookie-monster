<?php
/**
 * Plugin Name:     GF Cookie Monster
 * Plugin URI:      https://www.itineris.co.uk/
 * Description:     Pre-populate Gravity Forms fields and hide query strings by cookies
 * Version:         0.1.0
 * Author:          Itineris Limited
 * Author URI:      https://www.itineris.co.uk/
 * Text Domain:     gf-cookie-monster
 */

declare(strict_types=1);

namespace Itineris\GFCookieMonster;

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

/**
 * Begins execution of the plugin.
 *
 * @return void
 */
function run(): void
{
    $cookieJar = new CookieJar('gfcm_');
    $confirmation = new Confirmation($cookieJar);
    $form = new Form($cookieJar);

    add_filter('init', [$cookieJar, 'backupAndUnset']);
    add_filter('gform_confirmation_ui_settings', [$confirmation, 'displayHelpMessage']);
    add_filter('gform_confirmation', [$confirmation, 'transformRedirectUrl']);
    add_filter('gform_field_value', [$form, 'populateFields'], 10, 3);
}

run();
