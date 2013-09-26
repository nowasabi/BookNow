<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class BookNowControllersWish extends JControllerBase
{
  public function execute()
  {

  	$return = array("success"=>false);

  	$model = new BookNowModelsWishlist();
  	if ( $model->store() )
  	{
  		$return['success'] = true;
  		$return['msg'] = JText::_('COM_BOOKNOW_WISHLIST_SUCCESS');

  	}else{
  		$return['msg'] = JText::_('COM_BOOKNOW_WISHLIST_FAILURE');
  	}

  	echo json_encode($return);

  }

}