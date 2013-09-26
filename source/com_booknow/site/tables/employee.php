<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class TableEmployee extends JTable
{                      
  /**
  * Constructor
  *
  * @param object Database connector object
  */
  function __construct( &$db ) {
    parent::__construct('#__booknow_employee', 'employee_id', $db);
  }
}