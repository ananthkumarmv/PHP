<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Server variable</title>
  </head>
  <body>
    <?php
    echo $_SERVER['PHP_SELF'];
    echo "<br>";

    echo $_SERVER['SERVER_NAME'];
    echo "<br>";

    echo $_SERVER['HTTP_HOST'];
    echo "<br>";

    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";

    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";

    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";

    echo $_SERVER['GATEWAY_INTERFACE'];
    echo "<br>";

    echo $_SERVER['SERVER_ADDR'];
    echo "<br>";

    echo $_SERVER['SERVER_SOFTWARE'];
    echo "<br>";

    echo $_SERVER['SERVER_PROTOCOL'];
    echo "<br>";

    echo $_SERVER['REQUEST_METHOD'];
    echo "<br>";

    echo $_SERVER['QUERY_STRING'];
    echo "<br>";

    echo $_SERVER['SERVER_PORT'];
    echo "<br>";

     ?>
  </body>
</html>
