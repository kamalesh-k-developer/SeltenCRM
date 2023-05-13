<?php 
// users Details and data's

require_once '../Src/dbutility.php';

class Users extends Controller {
    // your class methods here
    public function __construct() 
      { 
         parent::__construct();        
      } 
}

$userController = new Users();
$userController->handleRequest('users');

?>