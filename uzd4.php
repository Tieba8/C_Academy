<?php

  $months = 24;
  $car_price_new = 30000;
  $deprecation = 2;
  $car_price_used = $car_price_new;

  for ($i=0; $i < $months; $i++)
    {
      $car_price_used = $car_price_used / 100 * ( 100 - $deprecation);

    }

  $depr_perc = ($car_price_new - $car_price_used) / ($car_price_new / 100);

 ?>

<html>
  <head>
    <link rel="stylesheet" href="stylesheet.css">
  </head>
  <body>
    <div>
      <h1>Kiek nuvertės mašina?</h1>
    </div>
    <div>
      <?php echo "<h2>Naujos mašinos kaina: ".$car_price_new." eur. </h2>"; ?>
    </div>
    <div>
      <?php echo "<h3>Po " . $months . " mėn. mašinos vertė bus: ".round($car_price_used,2)." eur. </h3>"; ?>
    </div>
    <div>
      <?php echo "<h4>Mašina nuvertės " . round($depr_perc,2)  ." proc.</h4>"; ?>
    </div>
  </body>
</html>
