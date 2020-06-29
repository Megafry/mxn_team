<?php
defined('TYPO3_MODE') or die();

//$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'mxn_team';


// 29.06.2020: apply globally, not what is wanted
/*
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class)
    ->registerImplementation(\GeorgRinger\News\Domain\Model\News::class, \Mexan\MxnTeam\Domain\Model\Team::class);
*/
