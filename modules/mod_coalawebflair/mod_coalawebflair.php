<?php defined('_JEXEC') or die('Restricted access');
/**
 * @package             Joomla
 * @subpackage          Coala Web Flair Module
 * @author              Steven Palmer
 * @author url          http://coalaweb.com
 * @author email        support@coalaweb.com
 * @license             GNU/GPL, see /assets/en-GB.license.txt
 * @copyright           Copyright (c) 2013 Steven Palmer All rights reserved.
 *
 * Coala Web Social Links is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once (dirname(__FILE__).DS.'helper.php');

$urlModMedia = JURI::root() . "media/mod_coalawebflair/";
$moduleClassSfx = htmlspecialchars($params->get('moduleclass_sfx'));

$doc = JFactory::getDocument();
if($params->get("load_css")) { 
    $doc->addStyleSheet($urlModMedia . "css/cwf_default.css"); }

// set params variables
$combinedId     = $params->get('combined_id');
$combinedPname  = $params->get('combined_pname');

$soDisplay  = $params->get('so_display');
$soId       = $params->get('so_id');
$soPname    = $params->get('so_pname');
$soTheme    = $params->get('so_theme');

$auDisplay  = $params->get('au_display');
$auId       = $params->get('au_id');
$auPname    = $params->get('au_pname');
$auTheme    = $params->get('au_theme');

$adDisplay  = $params->get('ad_display');
$adId       = $params->get('ad_id');
$adPname    = $params->get('ad_pname');
$adTheme    = $params->get('ad_theme');

$suDisplay  = $params->get('su_display');
$suId       = $params->get('su_id');
$suPname    = $params->get('su_pname');
$suTheme    = $params->get('su_theme');

$arDisplay  = $params->get('ar_display');
$arId       = $params->get('ar_id');
$arPname    = $params->get('ar_pname');
$arTheme    = $params->get('ar_theme');

$maDisplay  = $params->get('ma_display');
$maId       = $params->get('ma_id');
$maPname    = $params->get('ma_pname');
$maTheme    = $params->get('ma_theme');

$areaDisplay  = $params->get('area_display');
$areaId       = $params->get('area_id');
$areaPname    = $params->get('area_pname');
$areaTheme    = $params->get('area_theme');

$layout   = $params->get('layout');


/* Powered by */
$copy 		= $params->get('copy', 1);
$powered 	= $params->get('powered',JTEXT::_('MOD_COALAWEBFLAIR_POWERED'));

// get layout
require(JModuleHelper::getLayoutPath('mod_coalawebflair'));

?>