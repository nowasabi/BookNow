<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class BookNowControllersDefault extends JControllerBase
{
  public function execute()
  {

    // Get the application
    $app = $this->getApplication();

    // default = 0
    // Austausch gegen Ist User admin?
    $params = JComponentHelper::getParams('com_booknow');
    if ($params->get('required_account') == 1) 
    {
        $user = JFactory::getUser();
        if ($user->get('guest'))
        {
            $app->redirect('index.php',JText::_('COM_BOOKNOW_ACCOUNT_REQUIRED_MSG'));
        }
    }
 
    // Get the document object.
    $document     = JFactory::getDocument();

    //  $viewName     = $app->input->getWord('view', 'profile');
    $viewName     = $app->input->getWord('view', 'employee');
    $viewFormat   = $document->getType();
    $layoutName   = $app->input->getWord('layout', 'list');

    $app->input->set('view', $viewName);
 
    // Register the layout paths for the view
    $paths = new SplPriorityQueue;
    $paths->insert(JPATH_COMPONENT . '/views/' . $viewName . '/tmpl', 'normal');
 
    $viewClass  = 'BookNowViews' . ucfirst($viewName) . ucfirst($viewFormat);
    $modelClass = 'BookNowModels' . ucfirst($viewName);

    if (false === class_exists($modelClass))
    {
      $modelClass = 'BookNowModelsDefault';
    }

    $view = new $viewClass(new $modelClass, $paths);

    $view->setLayout($layoutName);

    // Render our view.
    echo $view->render();
 
    return true;
  }

}