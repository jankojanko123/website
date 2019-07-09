<?php

class User{
  public $name;
  public $age;
  public static $minPassLenght = 6; //always same


  public static function validatePass($pass){
    if (strlen($pass) >= self::$minPassLenght){ //accest it with sefl:: because it's static
      return true;
    }
    else {
      return false;
    }
  }
}

$password = 'Helosss';
if (User::validatePass($password)){ //user:: -----> because you are using infor from User and it's a static function
  echo "pass valid";
}
else {
  echo "pass not valid";
}
