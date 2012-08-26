<?php
/**
 *
 * @package MyThings
 * @subpackage mod_mythingsstats
 * @author Axel Tüting - www.time4mambo.de
 * @license GNU GPL
 */

defined('_JEXEC') or die;

require_once dirname(__FILE__) . DS . 'helper.php';
$stats = modMyThingsStats::getThings();
require JModuleHelper::getLayoutPath('mod_mythingsstats', 'default');