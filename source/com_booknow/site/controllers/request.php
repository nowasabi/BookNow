<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class BookNowControllersRequest extends JControllerBase
{
  public function execute()
  {

  	$return = array("success"=>false);

  	$model = new BookNowModelsWaitlist();
  	if ( $model->store() )
  	{
  		$return['success'] = true;
  		$return['msg'] = JText::_('COM_BOOKNOW_BOOK_REQUEST_SUCCESS');

  	}else{
  		$return['msg'] = JText::_('COM_BOOKNOW_BOOK_REQUEST_FAILURE');
  	}

  	echo json_encode($return);

  }

}