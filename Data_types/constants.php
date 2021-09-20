<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Constants</title>
  </head>
  <body>

    <?php
    $max_width = 980;
    define("MAX_WIDTH",980); //using double quotes because the variable haven't been declared yet.
    echo MAX_WIDTH
     ?>
     <br />

     <?php //can't change the value
     // MAX_WIDTH +=1
     // echo MAX_WIDTH;
      ?>

      <?php //can't even redefine it
      // define("MAX_WIDTH",981);
      // echo MAX_WIDTH; ?>

  </body>
</html>
