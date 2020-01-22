<?php

class Validation {

  private $request;
  private $a;

  function __construct($pass=[],$pass1=[]) {
      $this->request = $pass;
      $this->a = $pass1;
  }

  function validate() {

    if(isset($this->request['submit'])) {
        if (!empty($this->request['name']) and preg_match("/^[a-zA-Z ]*$/", $this->request['name']) and strlen($this->request['name'])>3 and strlen($this->request['name'])<10 and ctype_alpha($this->request['name'])) {
            $this->a['name'] = $this->request['name'];
        } else {
            $GLOBALS['nameError'] = " *Enter Valid Name";
        }


        if (!empty($this->request['age']) and ctype_digit($this->request['age'])) {
            $this->a['age'] = $this->request['age'];
        } else {
            $GLOBALS['ageError'] = " *Enter Valid Age";
        }

        if (!empty($this->request['gender'])) {
            $this->a['gender'] = $this->request['gender'];
        } else {
              $GLOBALS['genderError'] = " *Select Gender";
        }

        if (!empty($this->request['city'])) {
            $this->a['city'] = $this->request['city'];
        } else {
            $GLOBALS['cityError'] = " *Select City";
        }

        if (!empty($this->request['flavour'])) {
            $this->a['flavour'] = $this->request['flavour'];
        } else {
            $GLOBALS['flavourError'] = " *Select Flavour";
        }

        if (!empty($this->request['email']) and filter_var($this->request['email'], FILTER_VALIDATE_EMAIL)) {
            $this->a['email'] = $this->request['email'];
            print_r($this->a);
        } else {
            $GLOBALS['emailError'] = " *Enter Valid Email ID";
        }
 }
}
}

$obj = new Validation($_POST,array());
$obj->validate();

?>
