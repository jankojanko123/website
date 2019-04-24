<?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        $sql = "SELECT * FROM likes";
        $result = mysqli_query($conn,$sql);
        $int = 0;

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result))
            {
              echo $row ["numOfLikes"] . "<br>";
            }
        }
        else {
          echo "0 results";
        }
    ?>


    <form action="index.php" method="post">
      <input type="checkbox" name="add" value= "add">
      <input type="submit" name = "Like" value="Like">
      </form>

<?php if (isset($_POST['add']))
      {
        $sql = "UPDATE likes SET numOfLikes = numOfLikes + 1 WHERE id = 1;";

        if (mysqli_query($conn, $sql))
        {
            echo "Liked";            
        }
        else
        {
          echo "Not liked";
        }
      }
      else if (!isset($_POST['add']))
      echo "Not checked";

      ?>


<?php mysqli_close($conn); ?>

  </body>
</html>
