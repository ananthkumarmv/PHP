<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Break</title>
  </head>
  <body>

    <?php
    for($count=0;$count<=10;$count++){
      if($count==5) break;
      echo $count . ", ";
    }
     ?>
     <br />
     <?php
     for($i=0; $i<=5;$i++){
       if($i%2==0) continue(1);  // default of continue is "1"
       for($k=0;$k<=5;$k++){
         if($k == 3) {break(2);}   // goes to the outer for loop
         echo $i . "-". $k . "<br />";
       }
     }
      ?>

  </body>
</html>
