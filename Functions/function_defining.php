<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Functions: Defining</title>
  </head>
  <body>
    <?php
    function say_hello(){
      echo "Hello World! <br />";
    }
    say_hello();

    function say_hello_to($word){
      echo "Hello {$word}! <br />";
    }

    say_hello_to("Everyone");

    say_hello_loudly();

    function say_hello_loudly(){
      echo "HELLO WORLD! <br />";
    }
     ?>


  </body>
</html>
