<?php
/**
 * $EM_CONF
 *
 * @category Extension
 * @package  AutoloaderAspect
 * @author   Tim Lochmüller
 */

/** @var $_EXTKEY string */
$EM_CONF[$_EXTKEY] = [
    'title'       => 'Autoloader (Aspect - Check the default list view)',
    'description' => '',
    'constraints' => [
        'depends' => [
            'autoloader' => '1.11.1-9.9.9',
        ],
    ],
];