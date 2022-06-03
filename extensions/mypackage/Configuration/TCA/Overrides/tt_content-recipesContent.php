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

//                                   // // // // // // // // 
//                                   DECLARING NEW FIELD ELEMENT
//                                  // // // // // // // // 
//   // // // // // // // // // 
//  // tx_examples_separator
// // // // // // // // //
$tx_examples_separator = [
    'tx_examples_separator' => [
        'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tt_content.tx_examples_separator',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['Standard CSV data formats', '--div--'],
                ['Comma separated', ','],
                ['Semicolon separated', ';'],
                ['Some tests', '--div--'],
                ['Jambon', 'ooo'],
                ['Special formats', '--div--'],
                ['Pipe separated (TYPO3 tables)', '|'],
                ['Tab separated', "\t"],
            ],
            'default' => 'ooo'
        ],
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tx_examples_separator);

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
//  // ingredients list
// // // // // // // // //
$ingredients_lists = [
    'ingredients_lists' => [
        'label' => 'ingredients_lists',
        'description' => 'Liste d\'ingredients',
        'config' => [
            'type' => 'text',
            'renderType' => 'textTable',
            'placeholder' => 'ingredient',
            'size' => 20,
            'fieldControl' => [
                'editPopup' => [
                    'disabled' => true,
                ],
                'addRecord' => [
                    'disabled' => true,
                ],
                'listModule' => [
                    'disabled' => true,
                ]
            ]
        ],
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $ingredients_lists);




//                                   // // // // // // // // 
//                                   DECLARING CONTENT SECTIONS AND FIELDS
//                                   // // // // // // // // 
// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['recipesContent'] =
    [
        'showitem' => '
        --div--;Onglet edition,
        --palette--;;general,
            header; Title,
            ingredients_lists, liste d\'ingrdients,
            bodytext;Description,
            subheader; sous Title,
            tx_examples_separator; THE EXAMPLE,
            pi_flexform; the flexform package,
            preparation_time; Temps de preparation,
            cooking_time; Temps de cuisson,
         --div--;Un autre onglet,
            --palette--;;hidden,
            --palette--;;access,
      ',
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => true,
                    'richtextConfiguration' => 'default',
                ],
            ],
        ],
    ];
