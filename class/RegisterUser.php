<?php
require_once 'ValidadeUser.php';
/**
 * Class responsible for manage data base
 * @date: 28-04-2017 
 * @author Marcelo
 */
abstract class RegisterUser extends ValidateUser{
    private $host;
    private $user;
    private $pass;
    private $dbname;

    private function insertDB(){
        if($this->validator):
            echo "nome pode ser inserido ao banco de dados";
        endif;
    }
}
