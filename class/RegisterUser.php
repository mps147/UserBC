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
       
    }
    
    public function getHostDb() {
        return $this->hostDb;
    }

    public function getUserDb() {
        return $this->userDb;
    }

    public function getPassDb() {
        return $this->passDb;
    }

    public function getDbnameDb() {
        return $this->dbnameDb;
    }

    public function setHostDb($hostDb) {
        $this->hostDb = $hostDb;
    }

    public function setUserDb($userDb) {
        $this->userDb = $userDb;
    }

    public function setPassDb($passDb) {
        $this->passDb = $passDb;
    }

    public function setDbnameDb($dbnameDb) {
        $this->dbnameDb = $dbnameDb;
    }
}
