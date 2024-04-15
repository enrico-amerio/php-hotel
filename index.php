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
  <title>Hotels</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="d-flex flex-wrap ">
      <?php
      foreach ($hotels as $hotel):
      ?>
      <div class="card m-3" style="width: 25rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"> Nome: <?php print_r($hotel['name'])  ?> </li>
          <li class="list-group-item"> Descrizione: <?php print_r($hotel['description'])  ?> </li>
          <li class="list-group-item"> Parcheggio: <?php echo $hotel['parking'] ? 'Si' : 'No'; ?> </li>
          <li class="list-group-item"> Voto: <?php print_r($hotel['vote'])  ?> </li>
          <li class="list-group-item"> Distanza dal centro: <?php print_r($hotel['distance_to_center']) ?> </li>
        </ul>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

</body>
</html>