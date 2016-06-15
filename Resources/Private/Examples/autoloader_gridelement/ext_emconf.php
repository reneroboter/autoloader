<?php
/**
 * $EM_CONF
 *
 * @category Extension
 * @package  AutoloaderHooks
 * @author   Tim Lochmüller
 */

/** @var $_EXTKEY string */
$EM_CONF[$_EXTKEY] = [
    'title'       => 'Autoloader (Gridelement - Register a new Gridelement)',
    'description' => '',
    'constraints' => [
        'depends' => [
            'autoloader' => '1.11.4-9.9.9',
        ],
    ],
];
