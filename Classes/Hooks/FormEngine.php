<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Georg Ringer (typo3@ringerge.org)
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

namespace GeorgRinger\Divider2tabsperuser\Hooks;

/**
 * Hook for the FormEngine class
 */
class FormEngine {

	/**
	 * Hook for a pre processing of the rendering
	 *
	 * @param string $tableName
	 * @param array $row
	 * @param \TYPO3\CMS\Backend\Form\FormEngine $formEngine
	 * @return void
	 */
	public function getMainFields_preProcess($tableName, array $row, \TYPO3\CMS\Backend\Form\FormEngine $formEngine) {
		$tsConfig = \TYPO3\CMS\Backend\Utility\BackendUtility::getPagesTSconfig((int)$row['pid']);

		if (isset($tsConfig['divider2tabs.']) && is_array($tsConfig['divider2tabs.'])) {
			$configuration = $tsConfig['divider2tabs.'];

			// Global
			if (isset($configuration['global'])) {
				$GLOBALS['TCA'][$tableName]['ctrl']['dividers2tabs'] = $configuration['global'];
			}

			// Table specific
			if (isset($configuration[$tableName])) {
				$GLOBALS['TCA'][$tableName]['ctrl']['dividers2tabs'] = $configuration[$tableName];
			}
		}

	}
}