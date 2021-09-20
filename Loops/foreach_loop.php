<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Foreach Loop</title>
  </head>
  <body>
    <?php
    $ages = [4,8,34,64,24,2];
    foreach ($ages as $age) {
      echo "Age: {$age}<br />";
    }
     ?>
     <br />

     <?php
     $person = array(
       "first_name" => "Ananth",
       "last_name" => "Bhandari",
       "address" => "Tumkur",
       "state" => "Karnataka"
     );

     foreach ($person as $attribute => $data) {
       $attr_nice = ucwords(str_replace("_", " ", $attribute));  //replacing "_" by " "
       echo "{$attr_nice}: {$data}<br />";
     }
      ?>
      <br />


      <?php
      $prices = array("Brand new computer" => 2000,
                      "1 month of Lynda.com" => 25,
                      "Learning PHP" => null);
      foreach ($prices as $item => $price) {
        echo "{$item}: ";
        if(is_int($price)){
          echo "$" . $price;
        }
        else {
          echo "priceless";
        }
        echo "<br />";
      }
       ?>

  </body>
</html>
