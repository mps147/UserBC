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
  protected $cpf;
  protected $pass;

  function __construct() {
    $this->setName(empty($_POST['registerName']) ? '' : $_POST['registerName']);
    $this->setPhonePrimary(empty($_POST['registerPhone1']) ? '' : $_POST['registerPhone1']);
    $this->setPhoneSecundy(empty($_POST['registerPhone2']) ? '' : $_POST['registerPhone2']);
    $this->setEmail(empty($_POST['registerEmail']) ? '' : $_POST['registerEmail']);
    $this->setRg(empty($_POST['registerRG'])? '' : $_POST['registerRG']);
    $this->setCpf(empty($_POST['registerCPF'])? '' : $_POST['registerCPF']);
    $this->setPass(empty($_POST['registerPass'])? '' : $_POST['registerPass']);
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

  function getCpf() {
    return $this->cpf;
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

  function setCpf($cpf) {
    $this->cpf = $cpf;
  }
  function getPass() {
    return $this->pass;
  }

  function setPass($pass) {
    $this->pass = $pass;
  }
}
