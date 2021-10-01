<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

      Name: <input type="text" name="fname" value="">
      <input type="submit" name="" value="Submit">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
      // collect value of input field
      $name = $_POST['fname'];
      if(empty($name)){
        echo "Name is empty";
      } else{
        echo $name;
      }
    }
     ?>

  </body>
</html>
