<?php
  require_once 'class/RegisterUser.php';

  $db = new RegisterUser();
  $db->validateFields();
  echo "<pre>";
  print_r($db);
  echo "</pre>"; 