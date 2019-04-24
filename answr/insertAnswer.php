<?php

require 'connectionAnswer.php';
//include 'index.php'

$answer = $_POST['answer'];

  $sqlAnsw = "INSERT INTO posts (answers, numOfLikes)
  VALUES ('$answer' , 0 )";

  if (mysqli_query($connAnsw, $sqlAnsw)) {
      echo "New answer added";
  }
  else {
    echo "Error: " .$sqlAnsw . "<br>" . mysqli_error($connAnsw);
  }

  mysqli_close($connAnsw);



?>
<br>
  <a href="index.php">go back to index</a>

<?php header('Location: index.php'); ?>
