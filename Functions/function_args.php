<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Functons: Arguments</title>
  </head>
  <body>
    <?php

    function say_hello_to($word){
      echo "Hello {$word}! <br />";
    }
    $name = "There";

    say_hello_to($name);
    say_hello_to(null);

     ?>
     <br />

     <?php
     function better_hello($greeting, $target, $punct){
       echo $greeting . " " . $target . $punct . "<br />";
     }

     better_hello("Hello", $name, "!");
     better_hello("Hello", null, "");


      ?>



  </body>
</html>
