<?php
  require_once 'class/RegisterUser.php';
  
  
  $val = new ValidateUser();
  $val->validateName();
  $db = new RegisterUser();
  $db->insertDB();
  echo "<pre>";
  print_r($db);
  echo "</pre>";
  
  

