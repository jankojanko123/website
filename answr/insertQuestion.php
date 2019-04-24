<div align="center">
  <div style="background-color:lightgreen">
    <?php
    include 'connectionQuestion.php';


    $question = $_POST['question'];

    $sqlQuest = "INSERT INTO posts (questions)
    VALUES ('$question')";

    if (mysqli_query($connQuest, $sqlQuest)) {
      echo "New question added";
    }
    else {
      echo "Error: " .$sqlQuest . "<br>" . mysqli_error($connQuest);
    }

    mysqli_close($connQuest);

    ?>
    <br>
    <a href="index.php">go back to index</a>
  </div>
</div

<?php header('Location: index.php'); ?>
