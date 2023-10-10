<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Hotels</title>
</head>
<body>

<div class="container ">


    <?php foreach ($hotels as $hotel) : ?>
        <div class="row mt-5">
            <div class="col">
                <h3><?= $hotel["name"] ?></h3>
            </div>
            <div class="col">
                <h3><?= $hotel["description"] ?></h3>
            </div>
           
            <div class="col">
                <h3><?= $hotel["vote"] ?></h3>
            </div>
            <div class="col">
                <h3> <?= $hotel["distance_to_center"] ?></h3>
            </div>
            <div class="col">

            <?php if($hotel["parking"] === true) : ?>
                <h3> Si</h3>
                <?php else : ?>
                    <h3> No</h3>
            <?php endif; ?>


            </div>
          

        </div>

  
  
  
  
   <?php endforeach; ?>

    



</div>

    
</body>
</html>