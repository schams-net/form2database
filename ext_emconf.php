<?php

/*
 * TYPO3 extension "Form finisher: form2database"
 *
 * @author Michael Schams <schams.net>
 * @link https://github.com/schams-net/form2database
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Form Finisher: form2database',
    'description' => 'TYPO3 Form Finisher: Store submitted data into a database table',
    'category' => 'backend',
    'author' => 'Michael Schams',
    'author_company' => 'schams.net',
    'version' => '1.0.0',
    'state' => 'beta',
    'clearCacheOnLoad' => true,
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'form' => '10.4.0-10.4.99'
        ],
        'conflicts' => [
        ]
    ]
];
