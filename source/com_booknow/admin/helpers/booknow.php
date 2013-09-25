<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_booknow
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * BookNow component helper.
 *
 * @package     Joomla.Administrator
 * @subpackage  com_lendr
 * @since       1.6
 */
class BookNowHelpersBookNow
{
	public static $extension = 'com_booknow';

	/**
	 * @return  JObject
	 */
	public static function getActions()
	{
		$user	= JFactory::getUser();
		$result	= new JObject;

		$assetName = 'com_booknow';
		$level = 'component';

		$actions = JAccess::getActions('com_booknow', $level);

		foreach ($actions as $action)
		{
			$result->set($action->name,	$user->authorise($action->name, $assetName));
		}

		return $result;
	}
}