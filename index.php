<?php
// 0. Créneau horaire
$parisTimeZone = new DateTimeZone('Europe/Paris');

// 1. La date et l'heure actuelle
$presentTime = new DateTime('2023-04-15 21:11');
$presentTime->setTimeZone($parisTimeZone);

// 1. Définir une date et une heure de destination
$destinationTime = new DateTime('2033-10-31 11:34');
$destinationTime->setTimeZone($parisTimeZone);

// 2. Afficher present time dans le bon format :
//echo $presentTime->format('M-d-Y A h:i') . "\n";
// Afficher destination time dans le bon format :
//echo $destinationTime->format('M-d-Y A h:i') . "\n";

// 3. Calcul de l'intervalle : 
$interval = $presentTime->diff($destinationTime);

// 3. Afficher l'intervalle au bon format:
//echo "Travel's interval lap :" . $interval->format('%y years %m months %d days %h hours ') . "\n";

// [BONUS] Intervalle en minutes :
$intervalMinute = $interval->days * 24 * 60;
$intervalMinute += $interval->h * 60;
$intervalMinute += $interval->i;
//echo "Travel's interval lap in minutes :" . $intervalMinute . "\n";

// [BONUS] Carburant :
$fuel = ceil($intervalMinute % 10000);
//echo "Travel's fuel liter needed :" . $fuel . "\n";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Compteur de Dolorean</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <div>
            <h1>TIME ZONE : Europe/Paris</h1>
            <h1>PRESENT TIME :</h1>
            <p>
                <?php echo $presentTime->format('M-d-Y A h:i'); ?>
            </p>
            <h1>DESTINATION TIME :</h1>
            <p>
                <?php echo $destinationTime->format('M-d-Y A h:i'); ?>
            </p>
            <h1>TRAVEL TIME INTERVAL :</h1>
            <p> <?php echo $interval->format('%y years %m months %d days %h hours '); ?>
            </p>
            <h1>TRAVEL TIME INTERVAL (minutes) :</h1>
            <p> <?php echo $intervalMinute; ?>
            </p>
            <h1>FUEL CONSUMPTION (liter):</h1>
            <p><?php echo $fuel; ?></p>
        </div>
    </div>
</body>

</html>