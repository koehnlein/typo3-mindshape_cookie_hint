<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// TypoScript
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('mindshape_cookie_hint', 'Configuration/TypoScript', 'mindshape Cookie Hint');
