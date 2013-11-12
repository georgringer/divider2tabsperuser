<?php

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tceforms.php']['getMainFieldsClass']['my_ext']
	= 'EXT:divider2tabsperuser/Classes/Hooks/FormEngine.php:GeorgRinger\\Divider2tabsperuser\\Hooks\\FormEngine';