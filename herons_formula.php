<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area</title>
</head>
<body style="background-color:mediumspringgreen ;">
<?php
$first_side=$_POST['first_side'];
$second_side=$_POST['second_side'];
$third_side=$_POST['third_side'];
$res=($first_side + $second_side + $third_side) / 2;
$res_1=$res-$first_side;
$res_2=$res-$second_side;
$res_3=$res-$third_side;
$Area= sqrt($res*$res_1*$res_2*$res_3);
echo "<b>The first side is</b> : $first_side";
echo "<br>";
echo "<b>The second side is</b> : $second_side";
echo "<br>";
echo "<b>The third side is</b> : $third_side";
echo "<br>";
echo "<b>The result that is semi-perimeter of a triangle is</b> : $res";
echo "<br>";
echo "<b>The area is</b> : $Area";
?>
</body>
</html>