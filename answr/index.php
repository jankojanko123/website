<!DOCTYPE html>
<?php session_start(); ?>
<?php require 'connectionAnswer.php' ?>
<?php require 'connectionQuestion.php' ?>



<html lang="en" dir="ltr">
  <head>
   <?php require 'style.php' ?>
    <meta charset="utf-8">
    <title>Answr</title>

  </head>

  <body>



  <div class="center">
<h1>Lets solve this: </h1>
 </div>


<div class="center">
  <h3>
    <?php
    $sqlQuest = "SELECT * FROM posts";
    $resultQuest = mysqli_query($connQuest,$sqlQuest);
    $intQuest = 0;

    if (mysqli_num_rows($resultQuest) > 0) {
        while($rowQuest = mysqli_fetch_assoc($resultQuest))
        {
          //echo $row ["id"]. $row["questions"] . "<br>";
          $intQuest++;
          $questionQuest = $rowQuest["questions"]. "<br>";
        }
    }
    else {
      echo "0 results";
    }

    echo $questionQuest . "<br>"; //test displays the last one
   mysqli_close($connQuest);


     ?>
  </h3>
</div>

<div class="center">
<!-- enter te answer  -->
    <form action="insertAnswer.php" method="post">
      <input type="text" name="answer" placeholder = "Share your answer">
      <input type=submit>
    </form>
</div>

<!-- show all the answers  -->
<div class="center">
  <?php
      $sqlAnsw = "SELECT * FROM posts ORDER BY numOfLikes DESC";
      $resultAnsw = mysqli_query($connAnsw,$sqlAnsw);
      $intAnsw = 0;

      if (mysqli_num_rows($resultAnsw) > 0) {
          while($rowAnsw = mysqli_fetch_assoc($resultAnsw))
          {
            echo $rowAnsw ["id"]. " - Answer: " . $rowAnsw["answers"] ."  ". $rowAnsw["numOfLikes"] ." ". "Likes" . "<br>";
            $intAnsw++;
          }
      }
      else {
        echo "0 results";
      }
      mysqli_close($connAnsw);
    ?>
</p>
</div>


 <div class="center">
  <?php echo $intAnsw . " answers in the database"; ?>
 </div>

<div class="center">
<a href="addALike.php">Add a like</a> <br>
<a href="setQuestion.php">Set a question</a> <br>
<a href="deleteAnswer.php">Delete stuff</a> <br>
<a href="/www/website/loginsystem/index.php">Login</a>
</div>

  </body>
</html>
