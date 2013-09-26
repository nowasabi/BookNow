<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

//Display partial views
class BookNowViewsEmployeePhtml extends JViewHTML
{

    function render()
    {
    	$this->params = JComponentHelper::getParams('com_booknow');
    	
    	return parent::render();
 	}
}