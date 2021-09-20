<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strings</title>
  </head>
  <body>
    <?php

    echo "Hello world <br />";
    echo "Hello world <br />";

    $greeting = "Hello";
    $target = "World";
    $phrase = $greeting . " " . $target;
    echo $phrase;
     ?>
     <br />
     <?php
     echo "$phrase Again <br />";
     // echo "$phraseAgain <br />"; //error
     echo "${phrase}Again <br />";  //"$phraseAgain" won't work. Because, php treats as a variable. so, we've to use {$variable}string.
     echo '$phrase Again';
      ?>

  </body>
</html>
