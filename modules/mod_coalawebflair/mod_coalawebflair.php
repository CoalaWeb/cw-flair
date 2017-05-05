<?php defined('_JEXEC') or die('Restricted access');
/**
 * @package             Joomla
 * @subpackage          Coala Web Flair Module
 * @author              Steven Palmer
 * @author url          https://coalaweb.com
 * @author email        support@coalaweb.com
 * @license             GNU/GPL, see /assets/en-GB.license.txt
 * @copyright           Copyright (c) 2017 Steven Palmer All rights reserved.
 *
 * Coala Web Flair is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

require_once dirname(__FILE__) . '/helper.php';

// Load the language files
$jlang = JFactory::getLanguage();

// Module
$jlang->load('mod_coalawebflair', JPATH_SITE, 'en-GB', true);
$jlang->load('mod_coalawebflair', JPATH_SITE, $jlang->getDefault(), true);
$jlang->load('mod_coalawebflair', JPATH_SITE, null, true);


$urlModMedia = JURI::root() . "media/coalawebflair/modules/flair/";
$moduleClassSfx = htmlspecialchars($params->get('moduleclass_sfx'));

$doc = JFactory::getDocument();
if ($params->get("load_css")) {
    $doc->addStyleSheet($urlModMedia . "css/cwf-default.css");
}

// set params variables
$combinedId = $params->get('combined_id');
$combinedPname = $params->get('combined_pname');

$soDisplay = $params->get('so_display');
$soId = $params->get('so_id');
$soPname = $params->get('so_pname');
$soTheme = $params->get('so_theme');

$auDisplay = $params->get('au_display');
$auId = $params->get('au_id');
$auPname = $params->get('au_pname');
$auTheme = $params->get('au_theme');

$adDisplay = $params->get('ad_display');
$adId = $params->get('ad_id');
$adPname = $params->get('ad_pname');
$adTheme = $params->get('ad_theme');

$suDisplay = $params->get('su_display');
$suId = $params->get('su_id');
$suPname = $params->get('su_pname');
$suTheme = $params->get('su_theme');

$arDisplay = $params->get('ar_display');
$arId = $params->get('ar_id');
$arPname = $params->get('ar_pname');
$arTheme = $params->get('ar_theme');

$maDisplay = $params->get('ma_display');
$maId = $params->get('ma_id');
$maPname = $params->get('ma_pname');
$maTheme = $params->get('ma_theme');

$areaDisplay = $params->get('area_display');
$areaId = $params->get('area_id');
$areaPname = $params->get('area_pname');
$areaTheme = $params->get('area_theme');

$sfDisplay = $params->get('sf_display');
$sfId = $params->get('sf_id');
$sfPname = $params->get('sf_pname');
$sfTheme = $params->get('sf_theme');

$elDisplay = $params->get('el_display');
$elId = $params->get('el_id');
$elPname = $params->get('el_pname');
$elTheme = $params->get('el_theme');

$layout = $params->get('layout');
$uniqueId = $module->id;

$helpFunc = new CoalawebFlairHelper();

// get layout
require(JModuleHelper::getLayoutPath('mod_coalawebflair'));