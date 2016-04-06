<?php
defined('_JEXEC') or die('Restricted access');
/**
 * @package             Joomla
 * @subpackage          CoalaWeb Flair Module
 * @author              Steven Palmer
 * @author url          http://coalaweb.com
 * @author email        support@coalaweb.com
 * @license             GNU/GPL, see /assets/en-GB.license.txt
 * @copyright           Copyright (c) 2016 Steven Palmer All rights reserved.
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
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
?>
<div class="cw-flair-mod" id="cw-flair-<?php echo $uniqueId; ?>">
    <?php if ($layout) : ?>
        <?php echo $helpFunc->getStackExchangeFlair($combinedId, $combinedPname); ?>
    <?php else : ?>
        <?php if ($auDisplay) : ?>
            <?php echo $helpFunc->getAskUbuntuFlair($auId, $auPname, $auTheme); ?>
        <?php endif; ?>
        <?php if ($adDisplay) : ?>
            <?php echo $helpFunc->getAskDifferentFlair($adId, $adPname, $adTheme); ?>
        <?php endif; ?>
        <?php if ($arDisplay) : ?>
            <?php echo $helpFunc->getArqadeFlair($arId, $arPname, $arTheme); ?>
        <?php endif; ?>
        <?php if ($maDisplay) : ?>
            <?php echo $helpFunc->getMathematicsFlair($maId, $maPname, $maTheme); ?>
        <?php endif; ?>
        <?php if ($soDisplay) : ?>
            <?php echo $helpFunc->getStackOverflowFlair($soId, $soPname, $soTheme); ?>
        <?php endif; ?>
        <?php if ($suDisplay) : ?>
            <?php echo $helpFunc->getSuperUserFlair($suId, $suPname, $suTheme); ?>
        <?php endif; ?>
        <?php if ($areaDisplay) : ?>
            <?php echo $helpFunc->getAreaFlair($areaId, $areaPname, $areaTheme); ?>
        <?php endif; ?>
        <?php if ($sfDisplay) : ?>
            <?php echo $helpFunc->getServerFaultFlair($sfId, $sfPname, $sfTheme); ?>
        <?php endif; ?>
        <?php if ($elDisplay) : ?>
            <?php echo $helpFunc->getEnglishLanguageFlair($elId, $elPname, $elTheme); ?>
        <?php endif; ?>
    <?php endif; ?>

</div>
