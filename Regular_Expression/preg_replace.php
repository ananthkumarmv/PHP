<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $str = "Visit Microsoft!";
    $pattern = "/microsoft/i";
    echo preg_replace($pattern, "AIT", $str);
     ?>

  </body>
</html>
