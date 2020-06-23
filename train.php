<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
/* create function with an exception */
function isNum($number) {
if($number>1) {
throw new Exception("Value must be 1 or below");
}
return true;
}
/* trigger exception */
checkNumber(1);
?>


</body>
</html>