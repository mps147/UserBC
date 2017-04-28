<?php

require_once 'UserBC.php';

/**
 * Abstract class using for validate users from register of BinaryCode system's
 * @name ViladateUser
 * @author Marcelo Pereira
 */
class ValidateUser extends UserBC {
    protected $validator;

    /**
     * @author: Marcelo Pereira
     * @date: 27-04-2017
     * @name validateName
     * @descripiton: method for validate user name
     * @return boolean
     */
    public function validateName() {
        return $this->setValidator(TRUE);
    }
    
    function getValidator() {
        return $this->validator;
    }

    function setValidator($validator) {
        $this->validator = $validator;
    }
}
