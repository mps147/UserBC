<?php
require_once 'ValidateUser.php';
/**
 * Class responsible for manage data base
 * @date: 28-04-2017 
 * @author Marcelo
 */
class RegisterUser extends ValidateUser{
    private $hostDb;
    private $userDb;
    private $passDb;
    private $dbnameDb;

    public function insertDB(){
        
       echo $this->getValidator();
    }
}
