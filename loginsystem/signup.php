<?php
require "header.php";
 ?>

 <main>

    <h1>Sign up</h1>

    <?php

    if (isset($_GET['error'])) {
      if ($_GET['error'] == 'emptyfields') {
        echo '<p> Fill in all fields! </p>';
      }
      else if ($_GET['error'] == 'invaliduidemail') {
        echo '<p> Invalid username and e-mail! </p>';
      }
      else if ($_GET['error'] == 'invaliduid') {
        echo '<p> Invalid username! </p>';
      }
      else if ($_GET['error'] == 'invalidmail') {
        echo '<p> Invalid e-mail! </p>';
      }
      else if ($_GET['error'] == 'passwordcheck') {
        echo '<p> Invalid password! </p>';
      }
      else if ($_GET['error'] == 'usertaken') {
        echo '<p> Username taken! </p>';
      }
    }
    else if ($_GET['signup'] == 'success') {
      echo '<p> Signup successful! </p>';
    }

     ?>
    <form class = "form-signup" action="includes/signup.inc.php" method="post">
      <input type="text" name="uid" placeholder="Username">
      <input type="text" name="mail" placeholder="E-mail">
      <input type="password" name="pwd" placeholder="Password">
      <input type="password" name="pwd-repeat" placeholder="Repeat password">

      <button type="submit" name="signup-submit">Signup</button>
    </form>


 </main>

<?php
  require "footer.php";
 ?>
