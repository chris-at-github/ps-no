<?php

if(!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Konfiguration fuer den (CKE) Editor im Backend
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['xoDefault'] = 'EXT:xna/Configuration/RTE/Default.yaml';
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['xoMinimal'] = 'EXT:xna/Configuration/RTE/Minimal.yaml';