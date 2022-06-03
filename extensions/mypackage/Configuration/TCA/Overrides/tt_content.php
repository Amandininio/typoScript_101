<?php
// plugin signature: <extension key without underscores> '_' <plugin name in lowercase>
// $pluginSignature = 'mypackage';

// $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';

// \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
//     $pluginSignature,

//     // Flexform configuration schema file
//     'FILE:EXT:mypackage/Configuration/FlexForms/Registration.xml'
// );

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    // 'list_type' does not apply here
    '*',
    // Flexform configuration schema file
    'FILE:EXT:mypackage/Configuration/FlexForms/Registration.xml',
    // ctype
    'accordion'
);
