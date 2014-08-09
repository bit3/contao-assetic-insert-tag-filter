<?php

/**
 * Assetic InsertTag filter for Contao Open Source CMS.
 *
 * @copyright  2014 bit3 UG <http://bit3.de>
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    bit3/contao-assetic-inserttag-filter
 * @license    LGPL-3.0+ <http://www.gnu.org/licenses/lgpl-3.0.html>
 */


/**
 * Assetic compiler filter
 */
$GLOBALS['ASSETIC']['compiler']['contaoInsertTag']                = 'Bit3\Contao\ThemePlus\Filter\ContaoInsertTagFilter';

/**
 * Assetic css compatible filters
 */
$GLOBALS['ASSETIC']['css'][] = 'contaoInsertTag';

/**
 * Assetic js compatible filters
 */
$GLOBALS['ASSETIC']['js'][] = 'contaoInsertTag';
