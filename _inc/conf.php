<?php




    require_once 'class/RegisterUser.php';

    $db = new RegisterUser();
    $db->validateFields();
 