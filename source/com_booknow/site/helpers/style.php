<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

class BookNowHelpersStyle
{
	function load()
	{
        //bbbb
		$document = JFactory::getDocument();

		//stylesheets
		$document->addStylesheet(JURI::base().'components/com_booknow/assets/css/style.css');

		//javascripts
		$document->addScript(JURI::base().'components/com_booknow/assets/js/booknow.js');

	}
}