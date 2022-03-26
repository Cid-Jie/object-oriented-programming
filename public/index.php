<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


    require_once 'Bicycle.php';

    //Instance of new bike
    $bike = new Bicycle;

    //Charge element of this bike
    $bike->setColor('blue');
    $bike->setCurrentSpeed = 30;
    var_dump($bike);

    //Moving bike and stop it
    echo $bike->forward();
    echo '<br> Vitesse du vélo : '.$bike->getCurrentSpeed(). ' km/h.'.'<br>';
    echo $bike->brake();
    echo '<br> Vitesse du vélo : '.$bike->getCurrentSpeed(). ' km/h.'.'<br>';
    echo $bike->brake();

    //Instance of a new bike
    $tornado = new Bicycle;
    $tornado->setColor = "red";
    $tornado->setCurrentSpeed = 5;
    $tornado->forward();
    var_dump($tornado);
    echo $tornado->forward();
    echo $tornado->stopNow();

    require_once 'GarageCar.php';

    //Instance of new car
    $car = new GarageCar();
    $car->getColor='black';
    $car->getCurrentSpeed = 30;
    $car->getEnergy = 60;
    $car->getEnergyLevel = 45;

    var_dump($car);

    //Start and moving car
    echo $car->startUp().'<br>';
    echo $car->movingForward().'<br>';

    //$car->getEnergyLevel =0;
    echo $car->startUp().'<br>';

    echo $car->brake();

    //Instance new car
    $car = new GarageCar();
    var_dump($car);

?>

</body>
</html>