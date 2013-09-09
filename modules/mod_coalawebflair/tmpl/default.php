<?php defined('_JEXEC') or die('Restricted access');
/**
 * @package             Joomla
 * @subpackage          CoalaWeb Flair Module
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
?>
<div class="cw-flair-mod" id="<?php echo $params->get('module_unique_id'); ?>">
    <?php if ($layout) : ?>
        <?php echo mod_coalawebflairHelper::getStackExchangeFlair($combinedId, $combinedPname); ?>
    <?php else : ?>
        <?php if ($auDisplay) : ?>
            <?php echo mod_coalawebflairHelper::getAskUbuntuFlair($auId, $auPname, $auTheme); ?>
        <?php endif; ?>
        <?php if ($adDisplay) : ?>
            <?php echo mod_coalawebflairHelper::getAskDifferentFlair($adId, $adPname, $adTheme); ?>
        <?php endif; ?>
        <?php if ($arDisplay) : ?>
            <?php echo mod_coalawebflairHelper::getArqadeFlair($arId, $arPname, $arTheme); ?>
        <?php endif; ?>
        <?php if ($maDisplay) : ?>
            <?php echo mod_coalawebflairHelper::getMathematicsFlair($maId, $maPname, $maTheme); ?>
        <?php endif; ?>
        <?php if ($soDisplay) : ?>
            <?php echo mod_coalawebflairHelper::getStackOverflowFlair($soId, $soPname, $soTheme); ?>
        <?php endif; ?>
        <?php if ($suDisplay) : ?>
            <?php echo mod_coalawebflairHelper::getSuperUserFlair($suId, $suPname, $suTheme); ?>
        <?php endif; ?>
        <?php if ($areaDisplay) : ?>
            <?php echo mod_coalawebflairHelper::getAreaFlair($areaId, $areaPname, $areaTheme); ?>
        <?php endif; ?>
    <?php endif; ?>
<?php if ($copy) : ?>
	<span class="cw-flair-mod-copyrht">
            <?php echo $powered ?> <a target="_blank" title="CoalaWeb" href="http://coalaweb.com">CoalaWeb</a>
        </span>
<?php endif; ?>
        
</div>
