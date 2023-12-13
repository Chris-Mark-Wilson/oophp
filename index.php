<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   require_once './classes/Car.php';
   $car01 = new Car("volvo","green");
   $car01->vehicleType = "truck";
   echo $car01->vehicleType ."<br/>";
   echo $car01->getCarInfo()."<br/>";
   $car01->setBrand("BMW");

   echo $car01->getCarInfo()."<br/>";
   
    echo "<br/> Hello world! <br/>";
    
    if ($car01->setColor("orange") !== false) {
        echo "Color changed <br/>";
    }else echo "Color not changed <br/>";

   echo $car01->getCarInfo()."<br/>";
    if ($car01->setColor("white") !== false) {
        echo "Color changed <br/>";
    }else echo "Color not changed <br/>";

   echo $car01->getCarInfo()."<br/>";
    ?>
</body>
</html>