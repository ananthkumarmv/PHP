<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Globals</title>
  </head>
  <body>
    <?php

    $x = 75;
    $y = 25;

    function addition(){
      $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    addition();
    echo $z;
     ?>
  </body>
</html>
