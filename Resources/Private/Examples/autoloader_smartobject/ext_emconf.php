<?php
/**
 * $EM_CONF
 *
 * @category Extension
 * @package  AutoloaderSmart
 * @author   Tim Lochmüller
 */

/** @var $_EXTKEY string */
$EM_CONF[$_EXTKEY] = [
    'title'       => 'Autoloader (Smart object - You should create test records of an smart object)',
    'description' => '',
    'constraints' => [
        'depends' => [
            'autoloader' => '1.9.1-9.9.9',
        ],
    ],
];