<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<form action="site.php" method="post">
Enter name:  <input type="text" name="Name">
Enter the star number:  <input type="number" name="StartNum">
Enter the distance:  <input type="number" name="Distance">

</select>
<input type="submit" name="obama">

</form>


<?php
class Jumper
{
  var $name;
  var $startNum;
  var $distance;

   function __construct($name, $startNum, $distance)
   {

     $this->name = $name;
     $this->startNum = $startNum;
     $this->distance = $distance;
   }

   function longestDist()
   {
     if ($this->distance >= 200)
     {
       echo "jumped over 200 meters.";

     }
     else if($this->distance <=200)
     {
      echo "didn't jump over 200 meters.";
     }

   }

}

  $jumper1 = new Jumper($_POST["Name"],$_POST["StartNum"],$_POST["Distance"]);


  echo "The jumper ", $jumper1->name;
  echo ", with the start number ", $jumper1->startNum;
  echo " jumped ", $jumper1->distance , " meters.";
  echo " He ", $jumper1->longestDist() , ".";



 ?>
<a href="test.php">Navigation</a>

  </body>
</html>
