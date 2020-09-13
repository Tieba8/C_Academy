<?php
  $distance = rand (100 , 1000) / 10;
  $consumption = 7.5;
  $price_l = 1.3;
  $fuel_total = $consumption / 100 * $distance ;
  $price_trip = $fuel_total * $price_l;
?>

<html>
  <body>
    <h1>Kelionės skaičiuoklė<h1>
    <ul>
      <li>
         <?php echo "Nuvažiuota distancija: " . $distance ?>
      </li>
      <li>
        <?php echo "Sunaudota: " . $fuel_total . " l. kuro" ?>
      </li>
      <li>
        <?php echo "Kaina: " . $price_trip . " pinigų"?>
      </li>
    </ul>
  </body>
</html>
