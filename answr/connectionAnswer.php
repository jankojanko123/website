<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "answers";

  $connAnsw = mysqli_connect($servername, $username, $password, $dbname);

  if (!$connAnsw) {
    die("Connection failed: ".mysqli_connect_error());
  }
