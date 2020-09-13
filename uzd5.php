<?php

  $products = [
    [
          'name'          => 'Stumbro degtinėla',
          'price'         => 6.49,
          'image'         => 'https://www.officeday.lt/images/z1/500-01638/stumbro-simtmecio-degtine-40-0-7-l.jpg'
    ] ,
    [
          'name'          => 'Balzamas',
          'price'         => 9.50,
          'price_special' => 7.99,
          'image'         => 'https://www.vynomeka.lt/images/uploader/ba/388x291.g/balzamas-devynerios-raudonos-07-l-1.jpg?t=798531'

    ] ,
    [
          'name'          => 'Vilniaus kvietinis alus',
          'price'         => 1.49,
          'image'         => 'http://www.vilniausalus.lt/photobanks/15/430x440x85/product661s400-009.png'
    ] ,
    [
          'name'          => 'Vilniaus nealkoholinis alus',
          'price'         => 1.20,
          'price_special' => 1.08,
          'image'         => 'http://www.lukritma.lt/image/cache/catalog/Nealkoholinis%20alus,sidras,vynas,%C5%A1ampanas/Alus%20nealkoholinis%20Vilniaus%20nefil%200.33l-380x450.jpg',
    ]
  ];

 ?>

<html>
  <head>
    <link rel="stylesheet" href="stylesheet.css">
  </head>
  <body>
    <div>
      <h1 class = "centered-text">Drink catalogue</h1>
    </div>
    <div class="gallery centered">
        <?php foreach ($products as $product):
          echo "<div class='gallery-product'>";
          echo "<img src='".$product['image']."' alt='".$product['name']."_nuotrauka'>";

          if(isset($product['price_special'])){

            $discount = ($product['price'] - $product['price_special']) / ($product['price'] / 100);
            echo "<div class = 'discount-container'><p> - ".round($discount)." % </p></div>";
            echo "<div class = 'price-container'><p>".$product['price_special']." €</p></div>";
          }
          else{
            echo "<div class = 'price-container'><p>".$product['price']." €</p></div>";
          }
          echo "<div class='desc'>".$product['name']."</div>";
          echo "</div>";
         endforeach; ?>
    </div>
  </body>
</html>
