<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'mindshape_cookie_hint',
	'Main',
	'Cookies'
);
