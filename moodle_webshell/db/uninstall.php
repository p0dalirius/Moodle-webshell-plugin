<?php

/**
 * @package  moodle_webshell
 * @copyright 2022, Remi GASCOU (Podalirius) <podalirius@protonmail.com>
 * @license MIT
 * @doc 
 */

// Allows you to execute a PHP code before the plugin's database tables and data are dropped during the plugin uninstallation.

defined('MOODLE_INTERNAL') || die();

function xmldb_local_moodle_webshell_uninstall() {
    // Uninstallation code goes here
}