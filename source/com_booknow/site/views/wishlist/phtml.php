<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

//Display partial views
class LendrViewsWishlistPhtml extends JViewHTML
{

    function render()
    {
    	$this->_bookListView = LendrHelpersView::load('Book','_entry','phtml');
    	return parent::render();
 	}
}