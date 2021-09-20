<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Functions: Scope</title>
  </head>
  <body>

    <?php
    $bar = "outside";        //global scope

    function fOO(){
      global $bar;          // making variable global 
      if(isset($bar)){
        echo "foo: " . $bar . "<br />";
      }
      $bar = "inside";       //local scope
    }

    echo "1: " . $bar . "<br />";
    foo();
    echo "2: " . $bar . "<br />";

     ?>

  </body>
</html>
