<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'cerroverde';

    /**
     * Default PageTS for Cerroverde
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/All.tsconfig',
        'cerroverde'
    );
});
