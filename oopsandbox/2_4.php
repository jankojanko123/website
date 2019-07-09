<?php

class User{

  public $name;
  public $age;

//runs when object is created
  public function __construct($name, $age){
    echo 'class'.  __CLASS__ . ' instantiated <br>';
    $this->name = $name;
    $this->age = $age;
  }

  public function sayHello(){
    return $this->name.' Says Hello';
  }
// called when no other references to a certain object
//used for cleanup, closing connections, etc
  public function __destruct(){
    echo "destructor ran..";
  }
}


//instantiate newobject

$user1 = new User('jan', 21);
echo $user1->name . $user1->age;
echo '<br>';
echo $user1->sayHello();

$user2 = new User('sarah', 20);
echo $user2->name . $user2->age;
echo '<br>';
echo $user2->sayHello();
