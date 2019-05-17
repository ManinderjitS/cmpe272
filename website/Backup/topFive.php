<?php
require_once('dbConnection.php');
$topFiveMarket = "SELECT product_name, count(product_name) AS visits FROM UserVisit GROUP BY product_name ORDER BY visits DESC LIMIT 5";
$topFiveBrewgy = "SELECT product_name, count(product_name) AS visits FROM UserVisit WHERE product_name LIKE 'Brewgy%' GROUP BY product_name ORDER BY visits DESC LIMIT 5";
$topFiveCloudBook = "SELECT product_name, count(product_name) AS visits FROM UserVisit WHERE product_name LIKE 'Cloudbook%' GROUP BY product_name ORDER BY visits DESC LIMIT 5";
$topFiveLeap = "SELECT product_name, count(product_name) AS visits FROM UserVisit WHERE product_name LIKE 'Service%' GROUP BY product_name ORDER BY visits DESC LIMIT 5";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TopFive</title>
  </head>
  <body>
    <h1>Top Five Most Visited MarketPlace</h1>
    <?php
    $topFiveMarket = "SELECT product_name, count(product_name) AS visits FROM UserVisit GROUP BY product_name ORDER BY visits DESC LIMIT 5";
    while($row = mysqli_fetch_array($getProducts)):; ?>
      <li><?php echo $row['product_name']; ?></li>
    <?php endwhile;
    ?>

    <h1>Top Five Most Visited Brewgy</h1>
    <?php
    $topFiveBrewgy = "SELECT product_name, count(product_name) AS visits FROM UserVisit WHERE product_name LIKE 'Brewgy%' GROUP BY product_name ORDER BY visits DESC LIMIT 5";
    while($row = mysqli_fetch_array($topFiveBrewgy)):; ?>
      <li><?php echo $row['product_name']; ?></li>
    <?php endwhile;
    ?>

    <h1>Top Five Most Visited CloudBook</h1>
    <?php
    $topFiveCloudBook = mysqli_query($conn, "SELECT product_name, count(product_name) AS visits FROM UserVisit WHERE product_name LIKE 'Cloudbook%' GROUP BY product_name ORDER BY visits DESC LIMIT 5");
    while($row = mysqli_fetch_array($topFiveCloudBook)):; ?>
      <li><?php echo $row['product_name']; ?></li>
    <?php endwhile;
    ?>

    <h1>Top Five Most Visited Leap</h1>
    <?php
    $topFiveLeap = mysqli_query($conn,"SELECT product_name, count(product_name) AS visits FROM UserVisit WHERE product_name LIKE 'Service%' GROUP BY product_name ORDER BY visits DESC LIMIT 5");
    while($row = mysqli_fetch_array($getProducts)):; ?>
      <a href='add_record.php?link=<?php echo $row['Weblink']; ?>' target="_blank"><img src="<?php echo $row['ImageAddr']; ?>" height="200" width="300"></a>
    <?php endwhile;
    ?>

  </body>
</html>
