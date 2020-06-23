<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<!-- <form action="input.php" method="post">
    <input type="number" name="row" placeholder="Row">    
    <input type="number" name="col" placeholder="Col">
    <input type="submit" name="Del" id="">    
</form> -->

<?php

function delElement($arr, $x) {
    for ($i=count($arr)-1; $i >= 0 ; $i--) { 
        if($arr[$i] == $x) {
            array_splice($arr, $i, 1);
        }
    }
    return $arr;
}
echo "<pre>";
print_r(delElement([1,2,3,4,6,8,6],6));
echo "</pre>";
?>


</body>
</html>