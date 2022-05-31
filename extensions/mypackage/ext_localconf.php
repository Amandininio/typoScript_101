<?php
defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['mypackage'] = 'EXT:mypackage/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:mypackage/Configuration/TsConfig/Page/All.tsconfig">');



/***************
 * Config personnalisée
 */
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend'] = [
    'backendFavicon' => 'EXT:extension_key/Resources/Public/icons/setup.ico'
    // 'backendLogo' => 'fileadmin/path/to/file/filename.extension',
    // 'loginBackgroundImage' => 'fileadmin/path/to/file/filename.extension',
    // 'loginLogo' => 'EXT:extension_key/Resources/Public/path/to/file/filename.extension',
    // 'loginHighlightColor' => 'Hexadecimal color code', //For example #ff0000 for Red
    // 'loginFootnote' => 'Just a Login Foot Note',
];
