<?php

/**
 * @package  moodle_webshell
 * @copyright 2022, Remi GASCOU (Podalirius) <podalirius@protonmail.com>
 * @license MIT
 * @doc https://docs.moodle.org/dev/version.php
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'local_moodle_webshell'; // Declare the type and name of this plugin.
$plugin->version = 2022052100;
$plugin->requires = 2014051200; // Moodle 2.7.0 is required.
$plugin->maturity = MATURITY_STABLE; // This is considered as ALPHA for production sites.
$plugin->release = 'v1.1.0'; // This is our first.