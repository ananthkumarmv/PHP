<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Functions: Multiple Returns</title>
  </head>
  <body>

    <?php

    function add_sub($val1, $val2){
      $add = $val1 + $val2;
      $sub = $val1 - $val2;
      return array($add, $sub);
    }

    $result_array = add_sub(10,5);
    echo "Add: " . $result_array[0]. "<br />";
    echo "Sub: " . $result_array[1] . "<br />";

    list($add_result, $sub_result) = add_sub(10,5);
    echo "Add: " . $add_result. "<br />";
    echo "Sub: " . $sub_result. "<br />";
     ?>

  </body>
</html>
