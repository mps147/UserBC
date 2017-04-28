<?php
require_once 'UserBC.php';
/**
 * Abstract class using for validate users from register of BinaryCode system's
 * @name ViladateUser
 * @author Marcelo Pereira
 */
class ValidateUser extends UserBC {
  
  /**
   * @author: Marcelo Pereira
   * @date: 27-04-2017
   * @name validateName
   * @descripiton: method for validate user name
   * @return boolean
   */
  
  public function validateName() {
    if($this->getName() == 3):
      echo "<script type='text/javascript'>alert('Nome digitado e Inválido')</script>";
      return FALSE;
    endif;
  }
}
