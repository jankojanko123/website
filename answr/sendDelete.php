<?php
include 'deleteAnswer.php';



$delInt = $_POST['delInt'];

$sql = "DELETE FROM posts WHERE id= $delInt";

if (mysqli_query($connAnsw, $sql)) {
  echo "$delInt deleted";
}
 else
 {
  // echo "Error deleting stuff: " . mysqli_error($connAnsw);
 }


mysqli_close($connAnsw);


header("Location: index.php");
?>
