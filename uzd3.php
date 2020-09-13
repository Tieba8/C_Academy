<?php

$months = 12;
$wallet = 1000;
$month_income = 700;
for ($i=0; $i < $months; $i++) {
  $month_expenses  = rand(100,$wallet);
  $wallet = $wallet - $month_expenses;
  $wallet+=700;
  }
 ?>
<html>
  <head>
    <link rel="stylesheet" href="stylesheet.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div>
      <h1>Wallet Forecast</h1>
    </div>
    <div>
      <?php echo "<h2>Po ".$months." m. , prognozuojamas likutis: ".$wallet." </h2>"; ?>
    </div>
  </body>
</html>
