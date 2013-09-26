<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class BookNowViewsStatisticsHtml extends JViewHtml
{
  function render()
  {
    $app = JFactory::getApplication();
   
    //retrieve task list from model
    $model = new BookNowModelsStatistics();
    $this->stats = $model->getStats();

    $this->addToolbar();

    //display
    return parent::render();
  } 

    /**
     * Add the page title and toolbar.
     *
     * @since   1.6
     */
    protected function addToolbar()
    {
        // TODO warum wird die Klasse nicht gefunden ?

        //$canDo = BookNowHelpersBookNow::getActions();

        // Get the toolbar object instance
        $bar = JToolBar::getInstance('toolbar');

        JToolbarHelper::title(JText::_('COM_BOOKNOW_STATISTICS'));
               
        //if ($canDo->get('core.admin'))
        //{
            JToolbarHelper::preferences('com_booknow');
        //}
    }
}