<?php
defined('TYPO3_MODE') or die();

$fields = [

    'card' => [
        'exclude' => true,
        'label' => 'LLL:EXT:mxn_team/Resources/Private/Language/locallang_db.xlf:tx_mxnteam_domain_model_team.card',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],

];


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $fields);
/*
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'card');
*/


$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['type']['config']['items']['3'] =
  ['team', 3] ;

$GLOBALS['TCA']['tx_news_domain_model_news']['types']['3'] = [
  'showitem' => 'type,title, bodytext, card'
];
