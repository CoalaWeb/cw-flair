<?php

defined('_JEXEC') or die('Restricted access');

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
class CoalawebFlairHelper {
    /* Combined Flair */

    function getStackExchangeFlair($combinedId, $combinedPname) {
        $output[] = '<div class="cwf-profile">';
        $output[] = '<a href="http://stackexchange.com/users/' . $combinedId . '/' . $combinedPname . '" target="_blank">';
        $output[] = '<img src="http://stackexchange.com/users/flair/' . $combinedId . '.png" width="208" height="58" alt="' . $combinedPname . JText::sprintf("MOD_CWFLAIR_COMBINED_ALT") . '" title="' . $combinedPname . JText::sprintf("MOD_CWFLAIR_COMBINED_ALT") . '" />';
        $output[] = '</a>';
        $output[] = '</div>';
        return implode("\n", $output);
    }

    /* Individual Flair Accounts */

    function getStackOverflowFlair($soId, $soPname, $soTheme) {
        $output[] = '<div class="cwf-profile">';
        $output[] = '<a href="http://stackoverflow.com/users/' . $soId . '/' . $soPname . '" target="_blank">';
        $output[] = '<img src="http://stackoverflow.com/users/flair/' . $soId . '.png?theme=' . $soTheme . '" width="208" height="58" alt="' . $soPname . JText::sprintf("MOD_CWFLAIR_STACKOVERFLOW_ALT") . '" title="' . $soPname . JText::sprintf("MOD_CWFLAIR_STACKOVERFLOW_ALT") . '" />';
        $output[] = '</a>';
        $output[] = '</div>';
        return implode("\n", $output);
    }

    function getAskUbuntuFlair($auId, $auPname, $auTheme) {
        $output[] = '<div class="cwf-profile">';
        $output[] = '<a href="http://askubuntu.com/users/' . $auId . '/' . $auPname . '" target="_blank">';
        $output[] = '<img src="http://askubuntu.com/users/flair/' . $auId . '.png?theme=' . $auTheme . '" width="208" height="58" alt="' . $auPname . JText::sprintf("MOD_CWFLAIR_ASKUBUNTU_ALT") . '" title="' . $auPname . JText::sprintf("MOD_CWFLAIR_ASKUBUNTU_ALT") . '">';
        $output[] = '</a>';
        $output[] = '</div>';
        return implode("\n", $output);
    }

    function getSuperUserFlair($suId, $suPname, $suTheme) {
        $output[] = '<div class="cwf-profile">';
        $output[] = '<a href="http://superuser.com/users/' . $suId . '/' . $suPname . '" target="_blank">';
        $output[] = '<img src="http://superuser.com/users/flair/' . $suId . '.png?theme=' . $suTheme . '" width="208" height="58" alt="' . $suPname . JText::sprintf("MOD_CWFLAIR_SUPERUSER_ALT") . '" title="' . $suPname . JText::sprintf("MOD_CWFLAIR_SUPERUSER_ALT") . '">';
        $output[] = '</a>';
        $output[] = '</div>';
        return implode("\n", $output);
    }

    function getArqadeFlair($arId, $arPname, $arTheme) {
        $output[] = '<div class="cwf-profile">';
        $output[] = '<a href="http://gaming.stackexchange.com/users/' . $arId . '/' . $arPname . '" target="_blank">';
        $output[] = '<img src="http://gaming.stackexchange.com/users/flair/' . $arId . '.png?theme=' . $arTheme . '" width="208" height="58" alt="' . $arPname . JText::sprintf("MOD_CWFLAIR_ARQADE_ALT") . '" title="' . $arPname . JText::sprintf("MOD_CWFLAIR_ARQADE_ALT") . '">';
        $output[] = '</a>';
        $output[] = '</div>';
        return implode("\n", $output);
    }

    function getMathematicsFlair($maId, $maPname, $maTheme) {
        $output[] = '<div class="cwf-profile">';
        $output[] = '<a href="http://math.stackexchange.com/users/' . $maId . '/' . $maPname . '" target="_blank">';
        $output[] = '<img src="http://math.stackexchange.com/users/flair/' . $maId . '.png?theme=' . $maTheme . '" width="208" height="58" alt="' . $maPname . JText::sprintf("MOD_CWFLAIR_MATHEMATICS_ALT") . '" title="' . $maPname . JText::sprintf("MOD_CWFLAIR_MATHEMATICS_ALT") . '">';
        $output[] = '</a>';
        $output[] = '</div>';
        return implode("\n", $output);
    }

    function getAskDifferentFlair($adId, $adPname, $adTheme) {
        $output[] = '<div class="cwf-profile">';
        $output[] = '<a href="http://apple.stackexchange.com/users/' . $adId . '/' . $adPname . '" target="_blank">';
        $output[] = '<img src="http://apple.stackexchange.com/users/flair/' . $adId . '.png?theme=' . $adTheme . '" width="208" height="58" alt="' . $adPname . JText::sprintf("MOD_CWFLAIR_ASKDIFFERENT_ALT") . '" title="' . $adPname . JText::sprintf("MOD_CWFLAIR_ASKDIFFERENT_ALT") . '">';
        $output[] = '</a>';
        $output[] = '</div>';
        return implode("\n", $output);
    }

    function getAreaFlair($areaId, $areaPname, $areaTheme) {
        $output[] = '<div class="cwf-profile">';
        $output[] = '<a href="http://area51.stackexchange.com/users/' . $areaId . '/' . $areaPname . '" target="_blank">';
        $output[] = '<img src="http://area51.stackexchange.com/users/flair/' . $areaId . '.png?theme=' . $areaTheme . '" width="208" height="58" alt="' . $areaPname . JText::sprintf("MOD_CWFLAIR_AREA_ALT") . '" title="' . $areaPname . JText::sprintf("MOD_CWFLAIR_AREA_ALT") . '">';
        $output[] = '</a>';
        $output[] = '</div>';
        return implode("\n", $output);
    }

    function getServerFaultFlair($sfId, $sfPname, $sfTheme) {
        $output[] = '<div class="cwf-profile">';
        $output[] = '<a href="http://serverfault.com/users/' . $sfId . '/' . $sfPname . '" target="_blank">';
        $output[] = '<img src="http://serverfault.com/users/flair/' . $sfId . '.png?theme=' . $sfTheme . '" width="208" height="58" alt="' . $sfPname . JText::sprintf("MOD_CWFLAIR_SERVERFAULT_ALT") . '" title="' . $sfPname . JText::sprintf("MOD_CWFLAIR_SERVERFAULT_ALT") . '">';
        $output[] = '</a>';
        $output[] = '</div>';
        return implode("\n", $output);
    }

    function getEnglishLanguageFlair($elId, $elPname, $elTheme) {
        $output[] = '<div class="cwf-profile">';
        $output[] = '<a href="http://english.stackexchange.com/users/' . $elId . '/' . $elPname . '" target="_blank">';
        $output[] = '<img src="http://english.stackexchange.com/users/flair/' . $elId . '.png?theme=' . $elTheme . '" width="208" height="58" alt="' . $elPname . JText::sprintf("MOD_CWFLAIR_ENGLISHLANGUAGE_ALT") . '" title="' . $elPname . JText::sprintf("MOD_CWFLAIR_ENGLISHLANGUAGE_ALT") . '">';
        $output[] = '</a>';
        $output[] = '</div>';
        return implode("\n", $output);
    }

}
