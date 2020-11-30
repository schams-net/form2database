<?php

/*
 * TYPO3 extension "Form finisher: form2database"
 *
 * @author Michael Schams <schams.net>
 * @link https://github.com/schams-net/form2database
 */

$languageFile = 'form2database/Resources/Private/Language/locallang_db.xlf';
$tableName = 'tx_form2database_domain_model_forms';

return [
    'ctrl' => [
        'title' => 'LLL:EXT:' . $languageFile . ':' . $tableName . '.tableName',
        'label' => 'email',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'first_name, last_name, email',
        'iconfile' => 'EXT:form2database/Resources/Public/Icons/' . $tableName . '.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden, first_name, last_name, email',
    ],
    'types' => [
        '1' => [
            'showitem' => implode(',', [
                'hidden',
                'first_name',
                'last_name',
                'email',
                '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access',
                'starttime',
                'endtime'
            ])
        ],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'first_name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:' . $languageFile . ':' . $tableName . '.firstName',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'last_name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:' . $languageFile . ':' . $tableName . '.lastName',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'email' => [
            'exclude' => false,
            'label' => 'LLL:EXT:' . $languageFile . ':' . $tableName . '.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
    ],
];
