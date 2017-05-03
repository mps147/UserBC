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
    private $connection;
    private $msg;
    
    function __construct() {
      parent::__construct();
      $this->setHostDb('127.0.0.1');
      $this->setUserDb('root');
      $this->setPassDb(NULL);
      $this->setDbnameDb('generate_passBC');
      $this->setValidator(FALSE);
      
      try{
        $this->connection = new PDO("mysql:host={$this->getHostDb()}; dbname={$this->getDbnameDb()}", "root", NULL);
      } catch (PDOException $ex) {
        $ex->errorInfo($ex);
      }
    }
    
    /**
     * @name: validateFields
     * @author Marcelo Pereira <marcelopereiraIFSP@gmail.com>
     * @date: 03-05-2017;
     * @description: validate fields is used for validate user register data, for not suportate sql injection.
     * @return Call the function insertDB().
     */
    public function validateFields(){
      if ($this->getRepass() === $this->getPass()):
        $this->setMsg("Cadastro Realizado com Sucesso! :)");
        $this->setValidator(TRUE);
      else:
        $this->setMsg("Opss! Houve um erro! Parece que as senhas digitadas não se coincidem!");
        $this->setValidator(FALSE);
      endif;
      
      return $this->insertDB();
    }
    
    /**
     * @name: insertDB();
     * @date: 03-05-2017;
     * @description: Function used for to insert in data base the users datas resgisterds,
     */
    public function insertDB(){
       if($this->getValidator()):
         $this->connection->query("INSERT INTO `users` (name, phonePrimary, phoneSecundy, email, rg, cpf) VALUES ('{$this->getName()}', '{$this->getPhonePrimary()}', '{$this->getPhoneSecundy()}', '{$this->getEmail()}', '{$this->getRg()}', '{$this->getCpf()}');");
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
    function getConnection() {
      return $this->connection;
    }

    function setConnection($connection) {
      $this->connection = $connection;
    }
    
    public function getMsg() {
      return $this->msg;
    }

    public function setMsg($msg) {
      $this->msg = $msg;
    }
}
