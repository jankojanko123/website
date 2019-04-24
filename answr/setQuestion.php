<!DOCTYPE html>
<?php require 'connectionQuestion.php' ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div align="center">
      <div style="background-color:tomato">

      <h3>Enter a question right here:</h3>

    <form action="insertQuestion.php" method="post">
      <input type="text" name="question" placeholder = "Share your question">
      <input type=submit>
    </form>
   </div>
  </div>

<?php
$question = $_POST['question'];
 ?>
 <a href="index.php">Home</a>

  </body>
</html>
