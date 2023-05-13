<?php 
// Customers Details and data's

require_once '../Src/dbutility.php';

class Customers extends Controller {
    // your class methods here
    public function __construct() 
      { 
         parent::__construct();        
      } 
}

$customersController = new Customers();
$customersController->handleRequest('customers');

?>