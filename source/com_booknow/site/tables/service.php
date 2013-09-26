<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class TableService extends JTable
{                      
  /**
  * Constructor
  *
  * @param object Database connector object
  */
  function __construct( &$db ) {
    parent::__construct('#__booknow_services', 'service_id', $db);
  }
}