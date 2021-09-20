<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array Functions</title>
  </head>
  <body>
    <?php $numbers = array(8,23,15,42,16,4); ?>

    Count:     <?php echo count($numbers); ?><br />
    Max value: <?php echo max($numbers); ?><br />
    Min value: <?php echo min($numbers); ?><br />
    <br />
    <pre>
    Sort:      <?php sort($numbers);// no need to assign ($numbers = sort($numbers));
     print_r($numbers); ?><br />
    </pre>


    <pre>
      Reverse sort: <?php rsort($numbers); print_r($numbers); ?><br />
      <br />
    </pre>
    <br />
    Implode: <?php  echo $num_string = implode(" * ",$numbers); //converts array into string ?><br />
    <?php echo gettype($num_string); ?> <br />
    Explode: <?php print_r(explode(" * ", $num_string)); ?><br />
    <?php echo gettype($num_string); ?> <br />
    15 in array?: <?php echo in_array(15, $numbers); //returns T/F ?><br />
    19 in array?: <?php echo in_array(19, $numbers); //returns T/F ?><br />

  </body>
</html>
