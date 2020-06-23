<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    // A two-dimensional array
    
    // $cars=array(
    //             array("Volvo",100,96),
    //             array("BMW",60,59),
    //             array("Toyota",110,100)
    //            );

    $cars = [
        ["volvo",100,96],
        ["bmw",60,59],
        ["toyota",110,100]
    ];

    echo $cars[1][2] . "<br>" ;

    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

    foreach ($age as $key => $value) {
        echo "$key is $value year old! <br>";
    }

?>

</body>
</html>