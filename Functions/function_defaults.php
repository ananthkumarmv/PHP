<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Functions: Default Argument Values</title>
  </head>
  <body>

    <?php

    function paint($room = "office", $color="red"){          //default function
      return "The color of the {$room} is {$color}. <br />";
    }

    echo paint("bedroom","blue");
    echo paint("bedroom",null);
    echo paint("bedroom");

     ?>

  </body>
</html>
