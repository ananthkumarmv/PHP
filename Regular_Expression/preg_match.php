<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $str = "Visit W3schools";
    $pattern = "/w3schools/i";        // i makes case insensitive
    echo preg_match($pattern, $str);
     ?>
  </body>
</html>
