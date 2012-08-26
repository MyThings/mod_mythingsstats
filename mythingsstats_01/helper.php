<?php
/**
 * @package		MyThings
 * @subpackage	mod_mythingsstats
 * @author 		Axel Tüting - www.time4mambo.de
 * @license		GNU GPL
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
