<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "questions";

  $connQuest = mysqli_connect($servername, $username, $password, $dbname);

  if (!$connQuest) {
    die("Connection failed: ".mysqli_connect_error());
  }
