<?php

/**
 * @descripion: Class responsible of to manage of register client of the company BinaryCode
 * @name UserBc
 * @author Marcelo
 * @date: 27-04-2017
 */
abstract class UserBC {

  protected $name;
  protected $phonePrimary;
  protected $phoneSecundy;
  protected $email;
  protected $rg;
  protected $pass;
  protected $repass;
          function __construct() {
    $this->setName(empty($_POST['registerName']) ? '' : $_POST['registerName']);
    $this->setPhonePrimary(empty($_POST['registerPhone1']) ? '' : $_POST['registerPhone1']);
    $this->setPhoneSecundy(empty($_POST['registerPhone2']) ? '' : $_POST['registerPhone2']);
    $this->setEmail(empty($_POST['registerEmail']) ? '' : $_POST['registerEmail']);
    $this->setRg(empty($_POST['registerRG'])? '' : $_POST['registerRG']);
    $this->setPass(empty($_POST['registerPass'])? '' : $_POST['registerPass']);
    $this->setRepass(empty($_POST['registerRepass'])? '' : $_POST['registerRepass']);
  }

  function getName() {
    return $this->name;
  }

  function getPhonePrimary() {
    return $this->phonePrimary;
  }

  function getPhoneSecundy() {
    return $this->phoneSecundy;
  }

  function getEmail() {
    return $this->email;
  }

  function getRg() {
    return $this->rg;
  }

  function setName($name) {
    $this->name = $name;
  }

  function setPhonePrimary($phonePrimary) {
    $this->phonePrimary = $phonePrimary;
  }

  function setPhoneSecundy($phoneSecundy) {
    $this->phoneSecundy = $phoneSecundy;
  }

  function setEmail($email) {
    $this->email = $email;
  }

  function setRg($rg) {
    $this->rg = $rg;
  }
  
  function getPass() {
    return $this->pass;
  }

  function setPass($pass) {
    $this->pass = $pass;
  }
  
  public function getRepass() {
    return $this->repass;
  }

  public function setRepass($repass) {
    $this->repass = $repass;
  }
}
