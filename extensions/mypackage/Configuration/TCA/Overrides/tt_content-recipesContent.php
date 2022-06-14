<?php
// // // // // // // // // 
// DECLARING CONTENT ELEMENT
// // // // // // // // // 
defined('TYPO3') or die('Access denied.');
call_user_func(
    function () {
        // Adds the content element to the "Type" dropdown
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
            'tt_content',
            'CType',
            [
                // Label // Should be multilanguage  //'LLL:EXT:mypackage/Resources/Private/Language/locallang.xlf:mypackage_newcontentelement_title',
                'Recipes',
                // Identifier
                'recipesContent',
                // icon identifier
                'content-coffee',
            ],
            'textmedia',
            'after'
        );
    }
);

///////////////////////////////// // // // // // // // 
///////////////////////////////DECLARING NEW FIELD ELEMENT
///////////////////////////////// // // // // // // //


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $ingredients_list);

//   // // // // // // // // // 
//  // Flexform
// // // // // // // // //
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    // 'list_type' does not apply here
    '*',
    // Flexform configuration schema file
    'FILE:EXT:mypackage/Configuration/FlexForms/flexform_recipesElement.xml',
    // ctype
    'recipesContent'
);


//    // // // // // // // // 
//   // // // // // // // // // 
//  // preparation_time
// // // // // // // // //
$preparation_time = [
    'preparation_time' => [
        'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tt_content.preparation_time',
        'description' => 'Temps pour faire la preparation',
        'config' => [
            'type' => 'input',
            'default' => 0,
            'eval' => 'num',
            'range' => [
                'lower' => 0,
                'upper' => 1500
            ],
            'size' => 10,
        ],
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $preparation_time);

//    // // // // // // // // 
//   // // // // // // // // // 
//  // cooking_time
// // // // // // // // //
$cooking_time = [
    'cooking_time' => [
        'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tt_content.cooking_time',
        'description' => 'Temps de cuisson',
        'config' => [
            'type' => 'input',
            'default' => 0,
            'eval' => 'num',
            'range' => [
                'lower' => 0,
                'upper' => 1500
            ],
            'size' => 10,
        ],
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $cooking_time);

//    // // // // // // // // 
//   // // // // // // // // // 
//  // servings
// // // // // // // // //
$servings = [
    'servings' => [
        'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tt_content.servings',
        'description' => 'Temps de cuisson',
        'config' => [
            'type' => 'input',
            'default' => 0,
            'eval' => 'num',
            'range' => [
                'lower' => 0,
                'upper' => 15
            ],
            'size' => 10,
        ],
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $servings);

//    // // // // // // // // 
//   // // // // // // // // // 
//  // IRRE
// // // // // // // // //
// $irre = [
//     'my_new_field2' => [
//         'label' => 'inline field with field information',
//         'config' => [
//             'type' => 'inline',
//             // further configuration can be found in the examples above
//             // ....
//         ],
//     ],
// ];
// \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $irre);
//    // // // // // // // // 
//   // // // // // // // // // 
//  // Niveau de difficulté
// // // // // // // // //
$difficulty_level = [
    'difficulty_level' => [
        'exclude' => 1,
        'label' => 'Difficulty level',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'Facile',
                    'Facile'
                ],
                [
                    'Moyen',
                    'Moyen'
                ],
                [
                    'Difficile',
                    'Difficile'
                ]
            ],
        ],
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $difficulty_level);



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    // 'list_type' does not apply here
    '*',
    // Flexform configuration schema file
    'FILE:EXT:mypackage/Configuration/FlexForms/Registration.xml',
    // ctype
    'accordion'
);


//// // // // // // // // 
// DECLARING CONTENT SECTIONS AND FIELDS
//// // // // // // // // 
// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['recipesContent'] =
    [
        'showitem' => '
        --div--;Onglet edition,
        --palette--;;general,
            header; LLL:EXT:mypackage/Resources/Private/Language/locallang.xlf:recipesContent.header,
            bodytext;LLL:EXT:mypackage/Resources/Private/Language/locallang.xlf:recipesContent.description,
            preparation_time; LLL:EXT:mypackage/Resources/Private/Language/locallang.xlf:recipesContent.prepTime,
            difficulty_level; Niveau de difficulté,
            cooking_time; Temps de cuisson,
            image, 
            pi_flexform; -,'
        //  --div--;Un autre onglet,
        //     --palette--;;hidden,
        //     --palette--;;access,
        ,
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => true,
                    'richtextConfiguration' => 'default',
                ],
            ],
        ],
    ];
