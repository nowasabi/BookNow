<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class BookNowViewsEmployeeHtml extends JViewHtml
{
  function render()
  {
    $app = JFactory::getApplication();
    $layout = $this->getLayout();

    $this->params = JComponentHelper::getParams('com_booknow');

    //retrieve task list from model
    $model = new BookNowModelsEmployee();

    if($layout == 'list')
    {
        $this->employees = $model->listItems();
        $this->_employeeListView = BookNowHelpersView::load('Employee','_list','phtml');
    } else {
        halt('EERROR');

        $this->book = $model->getItem();
        
        $this->_addReviewView = LendrHelpersView::load('Review','_add','phtml');
        $this->_addReviewView->book = $this->book;
        $this->_addReviewView->user = JFactory::getUser();

        $this->_lendBookView = LendrHelpersView::load('Book', '_lend', 'phtml');
        $this->_lendBookView->borrower = $this->book->waitlist_user;
        $this->_lendBookView->book = $this->book;

        $this->_returnBookView = LendrHelpersView::load('Book', '_return', 'phtml');
        $this->_returnBookView->borrower = $this->book->waitlist_user;
        $this->_returnBookView->book = $this->book;

        $this->_reviewsView = LendrHelpersView::load('Review','list','phtml');
        $this->_reviewsView->reviews = $this->book->reviews;

        $this->_modalMessage = LendrHelpersView::load('Profile','_message','phtml');
    }

    //display
    return parent::render();
  } 
}