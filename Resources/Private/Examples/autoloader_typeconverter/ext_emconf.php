<?php
/**
 * $EM_CONF
 *
 * @category Extension
 * @package  AutoloaderTypeconverter
 * @author   Tim Lochmüller
 */

/** @var $_EXTKEY string */
$EM_CONF[$_EXTKEY] = [
    'title'       => 'Autoloader (TypeConverter - There are two dummy type converter in the TYPO3_CONF_VARS/EXTCONF/extbase/typeConverters)',
    'description' => '',
    'constraints' => [
        'depends' => [
            'autoloader' => '1.11.1-9.9.9',
        ],
    ],
];