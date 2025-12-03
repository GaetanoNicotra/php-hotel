<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>
<body>

    <h1>Hotels</h1>

    <?php
# Array di hotel

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

    # Logica di filtraggio
$parkingRequest = false;

    if(isset($_GET['parking']) && $_GET['parking'] == 'on'){
        $parkingRequest=true;
    }

?>

<!-- Form per i filtraggi -->
<div class="container">
    <form class='ms-2 mb-4' action=''>
       
        <input id='parking' type='checkbox' class='btn btn-primary' name='parking'></input>
         <label for='parking'>Mostra hotel con parcheggio</label>

        <button class='btn btn-primary'>Cerca</button>
    </form>
</div>

<!-- Tabella -->
<div class="container">
    <table class='table'>
<thead>
   <tr class='table-primary'>
    <th>Nome</th>
    <th>Descrizione</th>
    <th>Voto</th>
    <th>Parcheggio</th>
    <th>Distanza dal centro</th>
</tr> 
</thead>

<tbody>
<tr class='table-info'>
     <td>
        <?php 
         foreach($hotels as $hotel){
            
    if($parkingRequest && !$hotel['parking']){
        continue;
    }
         echo $hotel["name"];
         echo "<hr>";
       }

     ?>
</td>  

<td>
<?php 
         foreach($hotels as $hotel){
            
    if($parkingRequest && !$hotel['parking']){
        continue;
    }
         echo $hotel["description"];
         echo "<hr>";
       }
     ?>
</td>

<td>
<?php 
         foreach($hotels as $hotel){
            
    if($parkingRequest && !$hotel['parking']){
        continue;
    }
         echo $hotel["vote"];
         echo "<hr>";
       }
     ?>
</td>


<td>
<?php
         foreach($hotels as $hotel){
            
    if($parkingRequest && !$hotel['parking']){
        continue;
    }
            if($hotel["parking"] == false){
                echo 'Nessun parcheggio';
            }
         echo $hotel["parking"].' Presente';
         echo "<hr>";
       }
     ?>
</td>

<td>
<?php 
         foreach($hotels as $hotel){
            
    if($parkingRequest && !$hotel['parking']){
        continue;
    }
         echo $hotel["distance_to_center"].' m';
         echo "<hr>";
       }
     ?>
</td>
        
</tr>
   
</tbody>
</table>
</div>

</body>
</html>