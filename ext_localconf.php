<?php
//
//	$Id$
//

if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

//get EXT path
$PATH_timtab_theme_ocadia = t3lib_extMgm::extPath('timtab_theme_ocadia');

if (TYPO3_MODE == 'FE')	{
	require_once($PATH_timtab_theme_ocadia.'class.tx_timtabthemeocadia_fe.php');
}

//registering for several hooks
$TYPO3_CONF_VARS['EXTCONF']['tt_news']['extraItemMarkerHook'][]      = 'tx_timtabthemeocadia_fe';
$TYPO3_CONF_VARS['EXTCONF']['ve_guestbook']['extraItemMarkerHook'][] = 'tx_timtabthemeocadia_fe';

?>