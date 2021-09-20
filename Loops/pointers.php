<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pointers</title>
  </head>
  <body>

    <?php
    $ages = array(4,5,6,7,8,9);
    // current: current pointer value
    echo "1: " . current($ages) . "<br />";

    // next: move the pointer forward
    // similar to using 'continue' inside a loop
    next($ages);
    echo "2: " . current($ages) . "<br />";

    next($ages);
    next($ages);
    next($ages);
    echo "3: " . current($ages) . "<br />";

    //prev: move the pointer backward
    prev($ages);
    echo "4: " . current($ages) . "<br />";

    //reset: move the pointer to the first element
    reset($ages);
    echo "5: " . current($ages) . "<br />";

    //end: move the pointer to the last element
    end($ages);
    echo "6: " . current($ages) . "<br />";

    next($ages);
    echo "7: " . current($ages) . "<br />";  //returns nothing

     ?>

     <br />

     <?php
     // while loop that moves the array pointer
     // similar to foreach
     reset($ages);
     while($age = current($ages)){
       echo $age . ", ";
       next($ages);
     }
      ?>

  </body>
</html>
