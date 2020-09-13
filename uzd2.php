<?php

$sunny = (bool)rand(0,1);
$rainy = (bool)rand(0,1);

 ?>

<html>
  <head>
    <link rel="stylesheet" href="stylesheet.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <h1 class = "centered">
    <?php
        if($sunny && $rainy){
          echo "<i class='fas fa-cloud-sun-rain'></i>";
          echo "<label> Saulėta su pragiedruliais</label>";
          }
        elseif($sunny){
          echo "<i class='fas fa-sun '></i>";
          echo "<label> Saulėta</label>";
        }
        elseif($rainy){
          echo "<i class='fas fa-cloud-rain'></i>";
          echo "<label> Lietinga</label>";
        }
        else{
          echo "<i class='fas fa-cloud-sun'></i>";
          echo "<label> Debesuota</label>";
        }
    ?>
    </h>
  </body>
</html>
