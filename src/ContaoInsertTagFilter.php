<?php

/**
 * Assetic InsertTag filter for Contao Open Source CMS.
 *
 * @copyright  2014 bit3 UG <http://bit3.de>
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    bit3/contao-assetic-inserttag-filter
 * @license    LGPL-3.0+ <http://www.gnu.org/licenses/lgpl-3.0.html>
 */


namespace Bit3\Contao\Assetic\Filter;

use Assetic\Asset\AssetInterface;
use Assetic\Filter\FilterInterface;

class ContaoInsertTagFilter extends \Controller implements FilterInterface
{
	/**
	 * Make the constructor public.
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Filters an asset after it has been loaded.
	 *
	 * @param AssetInterface $asset An asset
	 */
	public function filterLoad(\Assetic\Asset\AssetInterface $asset)
	{
		// get asset content
		$content = $asset->getContent();

		// replace all insert tags
		$content = $this->replaceInsertTags(
			$content,
			false
		);

		// set asset content
		$asset->setContent($content);
	}

	/**
	 * Filters an asset just before it's dumped.
	 *
	 * @param AssetInterface $asset An asset
	 */
	public function filterDump(\Assetic\Asset\AssetInterface $asset)
	{
	}
}
