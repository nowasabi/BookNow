<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class BookNowControllersLend extends JControllerBase
{
  public function execute()
  {

  	$return = array("success"=>false);

  	$model = new BookNowModelsBook();
    
  	if ( $row = $model->lend() )
  	{
  		$return['success'] = true;
  		$return['msg'] = JText::_('COM_BOOKNOW_BOOK_LEND_SUCCESS');

  	}else{
  		$return['msg'] = JText::_('COM_BOOKNOW_BOOK_LEND_FAILURE');
  	}

  	echo json_encode($return);

  }

}