<?php

class Validation {

  public $expiryTime;
  public $name;
  public $age;
  public $gender;
  public $city;
  public $flavour;
  public $email;
  public $submit;

  function get_name($name,$age,$gender,$city,$flavour,$email,$submit,$list=[]) {
    $this->name = $name;
    $this->age = $age;
    $this->gender = $gender;
    $this->city = $city;
    $this->flavour = $flavour;
    $this->email = $email;
    $this->submit = $submit;

    if(isset($submit)) {
        if (!empty($name) and preg_match("/^[a-zA-Z ]*$/", $name) and strlen($name)>3 and strlen($name)<10 and ctype_alpha($name)) {
            $list["name"] = $name;
            setcookie("name",$name,$GLOBALS['expiryTime']);
        } else {
            $GLOBALS['nameError'] = " *Enter Valid Name";
        }


        if (!empty($age) and ctype_digit($age)) {
            array_push($list,$age);
            setcookie("age",$age,$GLOBALS['expiryTime']);
        } else {
            $GLOBALS['ageError'] = " *Enter Valid Age";
        }

        if (!empty($gender)) {
            array_push($list,$gender);
            setcookie("gender",$gender,$GLOBALS['expiryTime']);
        } else {
              $GLOBALS['genderError'] = " *Select Gender";
        }

        if (!empty($city)) {
            array_push($list,$city);
            setcookie("city",$city,$GLOBALS['expiryTime']);
        } else {
            $GLOBALS['cityError'] = " *Select City";
        }

        if (!empty($flavour)) {
            array_push($list,$flavour);
            setcookie("flavour",$flavour,$GLOBALS['expiryTime']);
        } else {
            $GLOBALS['flavourError'] = " *Select Flavour";
        }

        if (!empty($email) and filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($list,$email);
            setcookie("email",$email,$GLOBALS['expiryTime']);
        } else {
            $GLOBALS['emailError'] = " *Enter Valid Email ID";
        }

}

if(isset($submit)) {
    print_r($list);
}

}
}

$obj = new Validation();
echo $obj->get_name($_POST["name"],$_POST["age"],$_POST["gender"],$_POST["city"],$_POST["flavour"],$_POST["email"],$_POST["submit"],array());
$obj->display();

?>
