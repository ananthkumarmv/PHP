<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Booleans</title>
  </head>
  <body>
    <?php
    $result1=true;  //can also write in uppercase. php is case-insensitive.
    $result2 =false; //doesn't print anything.

     ?>
     Result1: <?php echo $result1; ?><br />
     Result2: <?php echo $result2; ?><br />


     is result2 boolean? <?php echo is_bool($result2); ?>

     <br />
     <?php
     $number =3.14;
     if(is_float($number)){
       echo "It is a float.";
     }
      ?>
  </body>
</html>
