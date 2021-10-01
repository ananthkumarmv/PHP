<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $str = "Apples and bananas.";
    $pattern = "/ba(na){2}/i";
    echo preg_match($pattern, $str);
     ?>

  </body>
</html>
