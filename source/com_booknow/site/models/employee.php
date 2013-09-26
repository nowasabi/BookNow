<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class BookNowModelsBook extends BookNowModelsDefault
{

  /**
  * Protected fields
  **/
  var $_employee_id     = null;
  
  var $_user_id     = null;
  
  var $_library_id  = null;

  var $_pagination  = null;

  var $_total       = null;

  var $_published   = 1;

  var $_waitlist    = FALSE;

  var $_wishlist    = FALSE;


  function __construct()
  {
    $app = JFactory::getApplication();
    $this->_employee_id = $app->input->get('id', null);
    
    parent::__construct();       
  }
 
  /**
  * Builds the query to be used by the employee model
  * @return   object  Query object
  *
  *
  */
  protected function _buildQuery()
  {
    $db = JFactory::getDBO();
    $query = $db->getQuery(TRUE);

    $query->select('e.employee_id, e.name, e.image, e.fk_calendar, e.created,
                    e.modified, e.ordering, e.published');
    $query->from('#__booknow_employees as e');

    /* $query->select('w.waitlist_id, w.user_id as borrower_id');
    $query->leftjoin('#__lendr_waitlists as w on w.book_id = b.book_id AND w.fulfilled = 0');

    $query->select('l.name as borrower');
    $query->leftjoin('#__users as l on l.id = b.lent_uid');

    $query->select('u.name as waitlist_user');
    $query->leftjoin('#__users AS u on u.id = w.user_id');
    */
    return $query;
  }

  /*
  public function getItem()
  {
    $employee = parent::getItem();

    $reviewModel = new LendrModelsReview();
    $reviewModel->set('_book_id',$book->book_id);
    $employee->reviews = $reviewModel->listItems();

    return $book;
  }
  */

  /**
  * Builds the filter for the query
  * @param    object  Query object
  * @return   object  Query object
  *
  */
  protected function _buildWhere(&$query)
  {

    if(is_numeric($this->_employee_id))
    {
      $query->where('e.employee_id = ' . (int) $this->_employee_id);
    }
    /*
    if(is_numeric($this->_user_id)) 
    {
      $query->where('b.user_id = ' . (int) $this->_user_id);
    }

    if(is_numeric($this->_library_id)) 
    {
      $query->where('b.library_id = ' . (int) $this->_library_id);
    }

    if($this->_waitlist)
    {
      $query->where('w.waitlist_id <> ""');
    }
    */
    $query->where('e.published = ' . (int) $this->_published);

    return $query;
  }

  /**
  * Lend the book
  * @param    array   Data array of book
  * @return   object  The book object loaned
  */
  /*
  public function lend($data = null)
  {
    $data = isset($data) ? $data : JRequest::get('post');

    if (isset($data['lend']) && $data['lend']==1)
    {
      $date = date("Y-m-d H:i:s");

      $data['lent'] = 1;
      $data['lent_date'] = $date;
      $data['lent_uid'] = $data['borrower_id'];

      $waitlistData = array('waitlist_id'=>$data['waitlist_id'], 'fulfilled' => 1, 'fulfilled_time' => $date, 'table' => 'Waitlist');
      $waitlistModel = new LendrModelsWaitlist();
      $waitlistModel->store($waitlistData);
    } else {
      $data['lent'] = 0;
      $data['lent_date'] = NULL;
      $data['lent_uid'] = NULL;

    }
    
    $row = parent::store($data);    
    
    return $row;

  }
  */

  /**
  * Delete an employee
  * @param int      ID of the employee to delete
  * @return boolean True if successfully deleted
  */
  public function delete($id = null)
  {
    $app  = JFactory::getApplication();
    $id   = $id ? $id : $app->input->get('employee_id');

    $employee = JTable::getInstance('Employee','Table');
    $employee->load($id);

    $employee->published = 0;

    if($employee->store())
    {
      return true;
    } else {
      return false;
    }
  }
}