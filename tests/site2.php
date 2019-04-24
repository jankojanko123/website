<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="site2.php" method="post">
      <input type="number" name="throwTimes">
      <input type="submit" name="obama" value="obama">
    </form>


<?php


$numOfThrows = $_POST["throwTimes"];
//$numOfThrows--;
$numHeads = 0;
$numTails = 0;


for($x = 1; $x <= $numOfThrows; $x++)
{
  if (rand(0,1) == 1)
  {
  echo "heads", "<br>";
  $numHeads++;
  }
  else
  {
    echo "tails", "<br>";
    $numTails++;
  }
}
echo "Heads:" , $numHeads, "<br>";
echo "Tails:" , $numTails, "<br>";
echo "Heads: ", $numHeads/$numOfThrows*100,"%";
echo "Tails: ", $numTails/$numOfThrows*100,"%";





 ?>

<a href="test.php">Navigation</a>




  </body>
</html>
