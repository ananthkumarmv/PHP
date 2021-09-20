<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Arrays</title>
  </head>
  <body>
    <?php
    $numbers = array(4,8,15,16,23,42);
    echo $numbers[1];
     ?>
     <br />

     <?php $mixed = array(6, "fox", "dog", array("x","y","z")); ?>
     <?php echo $mixed[2]; ?><br />
     <?php echo $mixed[3][1]; ?><br />
     <pre>
       <?php echo print_r($mixed); ?>
     </pre>

     <?php $mixed[2]="cat"; ?>
     <?php $mixed[4]="mouse"; ?>
     <?php $mixed[]="horse"; ?>
     <pre>
       <?php echo print_r($mixed); ?>
     </pre>

     <?php $k = $array = [1,2,3]; ?>
     <?php $r = [4,5,6]; ?>
     <?php echo $array[1]; ?> <br />
     <?php echo $k[2]; ?><br />
     <?php echo $r[2]; ?>



  </body>
</html>
