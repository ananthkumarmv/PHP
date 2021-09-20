<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Logical</title>
  </head>
  <body>
    <?php
    $a =4;
    $b=4;
    if($a>$b){
      echo "a is larger than b";
    }
    elseif($a<$b){
      echo "a is smaller than b";
    }
    else {
      echo "a is equal to b";
    }
     ?>
     <br />
     <?php

     $new_user = true;
     if($new_user){
       echo "<h1>Welcome!</h1>";
       echo "<p> we are glad you decided to join us.</p>";
     }
      ?>

      <br />

      <?php //don't divide by zero
      $n=20;
      $d = 5;
      $result =0;
      if($d>0){
        $result = $n/$d;
        echo "Result: {$result}";
      }

       ?>

  </body>
</html>
