<?php

/**
 * @package     Joomla
 * @subpackage  CoalaWeb Flair
 * @author      Steven Palmer <support@coalaweb.com>
 * @link        https://coalaweb.com/
 * @license     GNU/GPL V3 or later; https://www.gnu.org/licenses/gpl-3.0.html
 * @copyright   Copyright (c) 2021 Steven Palmer All rights reserved.
 *
 * CoalaWeb Flair is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

defined('_JEXEC') or die('Restricted access');
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
