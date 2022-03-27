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
    $bike = new Bicycle('orange');
    $bike->setCurrentSpeed = 30;
    var_dump($bike);

    //Charge element of this bike
    $bike->setColor('blue');
    var_dump($bike);

    //Moving bike and stop it
    echo $bike->forward().'<br>';
    echo '<br> Vitesse du vélo : '.$bike->getCurrentSpeed(). ' km/h.'.'<br>';
    echo $bike->brake().'<br>';
    echo '<br> Vitesse du vélo : '.$bike->getCurrentSpeed(). ' km/h.'.'<br>';
    echo $bike->brake().'<br>';

    //Instance of a new bike
    $tornado = new Bicycle ('yellow');
    $tornado->setCurrentSpeed = 5;
    $tornado->forward();
    var_dump($tornado);
    
    //Moving bike and stop it
    echo $tornado->forward().'<br>';
    echo '<br> Vitesse du tornado : '.$tornado->getCurrentSpeed(). ' km/h.'.'<br>';
    echo $tornado->brake().'<br>';
    echo '<br> Vitesse du tornado: '.$tornado->getCurrentSpeed(). ' km/h.'.'<br>';
    echo $tornado->brake().'<br>';


    require_once 'GarageCar.php';

    //Instance of new car
    $car = new GarageCar('black', 4, 'fuel');
    $car->setCurrentSpeed = 30;
    $car->setEnergyLevel = 45;
    var_dump($car).'<br>';

    //Start and moving car
    echo $car->startUp().'<br>';
    echo $car->forward().'<br>';


    echo $car->brake().'<br>';
    //Moving bike and stop it
    echo $tornado->forward().'<br>';
    echo '<br> Vitesse du camion : '.$tornado->getCurrentSpeed(). ' km/h.'.'<br>';
    echo $tornado->brake().'<br>';
    echo '<br> Vitesse du camion: '.$tornado->getCurrentSpeed(). ' km/h.'.'<br>';
    echo $tornado->brake().'<br>';

    //Instance new car
    $car2= new GarageCar('orange', 3, 60);
    echo $car2->getColor();

?>

</body>
</html>