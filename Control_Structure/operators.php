<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Comparision and Logical Operators</title>
  </head>
  <body>

    <?php
    $a =4;
    $b=3;
    $c=1;
    $d=20;
    if(($a > $b) && ($c<$d)){
      echo "a is larger then n AND ";
      echo "c is larger than d";
    }
     ?>
     <br />

     <?php
     $e =100;
     if(!isset($e)){
       $e =200;
     }
     echo $e;
      ?>
      <br />

      <?php
      //don't reject 0 or 0.0
      $quantity ="";
      if(empty($quantity) && !is_numeric($quantity)){
        echo "You must enter a quantity.";
      }
       ?>
  </body>
</html>