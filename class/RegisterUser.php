<?php
require_once 'UserBC.php';
/**
 * Class responsible for manage data base
 * @date: 28-04-2017 
 * @author Marcelo
 */
class RegisterUser extends UserBC{
    private $hostDb;
    private $userDb;
    private $passDb;
    private $dbnameDb;
    private $validator;
    
    function __construct() {
      parent::__construct();
      $this->setHostDb('127.0.0.1');
      $this->setUserDb('root');
      $this->setPassDb(NULL);
      $this->setDbnameDb('UserBinaryCodeDB');
      $this->setValidator(FALSE);
    }

    
    public function validateFields(){
      return $this->setValidator(TRUE);
    }
    
    public function insertDB(){
       if($this->getValidator()):
         echo "São dados foram cadastrados com sucesso";
       endif;
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
    function getValidator() {
      return $this->validator;
    }

    function setValidator($validator) {
      $this->validator = $validator;
    }
}
