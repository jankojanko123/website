<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file">
      <button type="submit" name="submit">Upload pic</button>
    </form>

<?php

for ($x = 0; $x <= 10000; $x++)
{
  ?>
  <img src=uploads/1.png alt=idk>;
  <?php
}
 ?>

  </body>
</html>
