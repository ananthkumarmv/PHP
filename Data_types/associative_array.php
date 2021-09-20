<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Associative Arrays</title>
  </head>
  <body>
    <?php $assoc = array("first_name" => "Ananth", "last_name" => "vasanth"); ?>
    <?php echo $assoc["first_name"]; ?> <br />
    <?php echo $assoc["first_name"]." ". $assoc["last_name"]; ?> <br />
    <?php $assoc["first_name"]="Amith"; ?>
    <?php echo $assoc["first_name"]." ". $assoc["last_name"]; ?> <br />
    <?php //echo $assoc[0]; ?> <br />

    <?php $numbers = array(4,8,15,16,23,42); ?>
    <?php $numbers = array(0 => 4, 2=> 25, 3=> 16, 4=>23,5=>42); ?>
    <?php echo $numbers[3]; ?>

    <?php  ?>
  </body>
</html>
