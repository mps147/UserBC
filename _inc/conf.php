<?php
  require_once 'class/ValidateUser.php';
  require_once 'class/RegisterUser.php';
  
  $val = new ValidateUser();
  $db = new RegisterUser();
  $val->validateName();  
  $db->insertDB();

