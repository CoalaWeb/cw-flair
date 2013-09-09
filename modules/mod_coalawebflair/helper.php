<?php defined( '_JEXEC' ) or die( 'Restricted access' );
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

class mod_coalawebflairHelper {
//Combined Flair
    public static function getStackExchangeFlair($combinedId, $combinedPname){
            
        return
                '<a href="http://stackexchange.com/users/'.$combinedId.'/'.$combinedPname.'" target="_blank">
                    <img src="http://stackexchange.com/users/flair/'.$combinedId.'.png" width="208" height="58" alt="'. $combinedPname . JText::sprintf("MOD_COALAWEBFLAIR_COMBINED_ALT") . '" title="'. $combinedPname . JText::sprintf("MOD_COALAWEBFLAIR_COMBINED_ALT") . '" />
                </a>';
    }
//Individual Flair Accounts
    public static function getStackOverflowFlair($soId, $soPname, $soTheme){
            
        return
                '<a href="http://stackoverflow.com/users/'.$soId.'/'.$soPname.'" target="_blank">
                    <img src="http://stackoverflow.com/users/flair/'.$soId.'.png?theme='. $soTheme .'" width="208" height="58" alt="'. $soPname . JText::sprintf("MOD_COALAWEBFLAIR_STACKOVERFLOW_ALT") . '" title="'. $soPname . JText::sprintf("MOD_COALAWEBFLAIR_STACKOVERFLOW_ALT") . '" />
                </a>';
    }
    
    public static function getAskUbuntuFlair($auId, $auPname, $auTheme){
            
        return
                '<a href="http://askubuntu.com/users/'.$auId.'/'.$auPname.'" target="_blank">
                    <img src="http://askubuntu.com/users/flair/'.$auId.'.png?theme='. $auTheme .'" width="208" height="58" alt="'. $auPname . JText::sprintf("MOD_COALAWEBFLAIR_ASKUBUNTU_ALT") . '" title="' .$auPname . JText::sprintf("MOD_COALAWEBFLAIR_ASKUBUNTU_ALT") . '">
                </a>';
    }
    
        public static function getSuperUserFlair($suId, $suPname, $suTheme){
            
        return
                '<a href="http://superuser.com/users/'.$suId.'/'.$suPname.'" target="_blank">
                    <img src="http://superuser.com/users/flair/'.$suId.'.png?theme='. $suTheme .'" width="208" height="58" alt="'. $suPname . JText::sprintf("MOD_COALAWEBFLAIR_SUPERUSER_ALT") . '" title="' .$suPname . JText::sprintf("MOD_COALAWEBFLAIR_SUPERUSER_ALT") . '">
                </a>';
    }
    
        public static function getArqadeFlair($arId, $arPname, $arTheme){
            
        return
                '<a href="http://gaming.stackexchange.com/users/'.$arId.'/'.$arPname.'" target="_blank">
                    <img src="http://gaming.stackexchange.com/users/flair/'.$arId.'.png?theme='. $arTheme .'" width="208" height="58" alt="'. $arPname . JText::sprintf("MOD_COALAWEBFLAIR_ARQADE_ALT") . '" title="' .$arPname . JText::sprintf("MOD_COALAWEBFLAIR_ARQADE_ALT") . '">
                </a>';
    }
    
        public static function getMathematicsFlair($maId, $maPname, $maTheme){
            
        return
                '<a href="http://math.stackexchange.com/users/'.$maId.'/'.$maPname.'" target="_blank">
                    <img src="http://math.stackexchange.com/users/flair/'.$maId.'.png?theme='. $maTheme .'" width="208" height="58" alt="'. $maPname . JText::sprintf("MOD_COALAWEBFLAIR_MATHEMATICS_ALT") . '" title="' .$maPname . JText::sprintf("MOD_COALAWEBFLAIR_MATHEMATICS_ALT") . '">
                </a>';
    }
    
        public static function getAskDifferentFlair($adId, $adPname, $adTheme){
            
        return
                '<a href="http://apple.stackexchange.com/users/'.$adId.'/'.$adPname.'" target="_blank">
                    <img src="http://apple.stackexchange.com/users/flair/'.$adId.'.png?theme='. $adTheme .'" width="208" height="58" alt="'. $adPname . JText::sprintf("MOD_COALAWEBFLAIR_ASKDIFFERENT_ALT") . '" title="' .$adPname . JText::sprintf("MOD_COALAWEBFLAIR_ASKDIFFERENT_ALT") . '">
                </a>';
    }
    
        public static function getAreaFlair($areaId, $areaPname, $areaTheme){
            
        return
                '<a href="http://area51.stackexchange.com/users/'.$areaId.'/'.$areaPname.'" target="_blank">
                    <img src="http://area51.stackexchange.com/users/flair/'.$areaId.'.png?theme='. $areaTheme .'" width="208" height="58" alt="'. $areaPname . JText::sprintf("MOD_COALAWEBFLAIR_AREA_ALT") . '" title="' .$areaPname . JText::sprintf("MOD_COALAWEBFLAIR_AREA_ALT") . '">
                </a>';
    }

}

?>