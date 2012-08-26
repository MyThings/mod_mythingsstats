<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_mythingsstats
 * @copyright	Copyright (C) 2011. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

class modMyThingsStats
{
	public function getThings()
	{
		$db		= JFactory::getDbo();
		$query	= $db->getQuery(true);

		$query->clear();
		$query->select('COUNT(id)');
		$query->from('#__mythings');
		$db->setQuery($query);
		$things = $db->loadResult();

		return $things;
	}
}
