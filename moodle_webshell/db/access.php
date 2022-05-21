<?php

/**
 * @package  moodle_webshell
 * @copyright 2022, Remi GASCOU (Podalirius) <podalirius@protonmail.com>
 * @license MIT
 * @doc https://docs.moodle.org/dev/Access_API
 */

// If you change this file, you must upgrade the plugin version inorder for your
// changes to take effect.
 
defined('MOODLE_INTERNAL') || die();

$capabilities = array(
    'local/cq_availability:secreteyes' => array(
        'riskbitmask' => RISK_CONFIG, // https://docs.moodle.org/dev/Hardening_new_Roles_system
        'captype' => 'write', // read or write
        'contextlevel' => CONTEXT_SYSTEM , // https://docs.moodle.org/dev/Roles#Context
        'archetypes' => array( // https://docs.moodle.org/dev/Role_archetypes (What are archetypes)
            // @key https://docs.moodle.org/dev/Roles#Capabilities_2
            //      Use only the last part of the capability, don't
            //      include the context or component and all these stuff.
            //      ex: 
            //          if you want to use 'moodle/legacy:student' from the list.
            //          you can write it as follow:
            //          
            //          'student' => CAP_ALLOW
            //          
            //          don't include the 'moodle/legacy:' part.
            //          
            // @value https://docs.moodle.org/dev/Roles#Capabilities
            'editingteacher' => CAP_ALLOW,
        ),
        //'clonepermissionsfrom' => 'moodle/quiz:attempt' // From May 2012: Copy defaults capabilities settings from core.
    )
);