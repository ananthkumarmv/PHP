<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $str = "The rain in SPAIN falls mainly on the plains.";
    $pattern = "/ain/i";

    echo preg_match_all($pattern, $str);

     ?>
  </body>
</html>
