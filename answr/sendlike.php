<?php
include 'connectionAnswer.php';
include 'addALike.php';

$likeId = $_POST['likeInt'];

$sql = "UPDATE posts SET numOfLikes = numOfLikes + 1 WHERE id = '$likeId';";

  if (mysqli_query($connAnsw, $sql))
  {
    echo "$likeId liked";
  }
  else
  {
    //
  }
  mysqli_close($connAnsw);

header('Location: index.php');

?>
