<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // remove last element in array
        $a = ['red', 'green'];
        array_pop($a);
    
        echo "<pre>";
        print_r($a);
        echo "</pre>";
    
    ?>
</body>
</html>