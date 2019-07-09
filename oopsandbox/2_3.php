<?php


//Define a class
class User {
  //properties (attributeesoop)
public $name;


  // Methosd (functions)

  public function sayHello(){

    return $this->name. " Says Hello ";
  }

}
//instantiate a user object from the user

$user = new User();

$user->name = 'Brad';
echo $user->name;
echo '<br>';
echo $user->sayHello();

echo '<br>';

$user1 = new User();
$user1->name = 'Sarah';
echo $user1->name;
echo '<br>';
echo $user1->sayHello();
