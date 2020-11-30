<?php

/*
 * TYPO3 extension "Form finisher: form2database"
 *
 * @author Michael Schams <schams.net>
 * @link https://github.com/schams-net/form2database
 */

call_user_func(
    function () {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
            'tx_form2database_domain_model_forms'
        );
    }
);
