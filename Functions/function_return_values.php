<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Functions: Return Values</title>
  </head>
  <body>

    <?php
    function add($val1, $val2) {
      $sum = $val1 + $val2;
      return $sum;
    }

    echo "sum of 3 and 4 is ". add(3,4). "<br />";
    $result = add(5.567,"5");
    echo $result;

    echo "<br />";
    function better_hello($greeting, $target, $punct){
      return $greeting . " " . $target . $punct . "<br />";
    }

    echo better_hello("Hello", "There", "!");


     ?>
  </body>
</html>
