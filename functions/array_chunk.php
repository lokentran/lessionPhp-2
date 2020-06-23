<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Chia mang thanh cac mang con

    $cars=["Volvo","BMW","Toyota","Honda","Mercedes","Opel","Posrche"];
    echo "<pre>";
    print_r(array_chunk($cars,3));
    echo "</pre>";
    
    echo ' In phan tu '. array_chunk($cars,3)[0][1];
?>
</body>
</html>