<?php
define('pi',3.14,true);
define('area_circle',' Area of Circle =',true);
$radius=2.5;
$area_circle=$radius*$radius*pi;
echo 'Radius   =  '.$radius.'<br>'.area_circle.round($area_circle,2).'<br>';

define('area_rect',' Area of Rectangle = ',true);
$length=5;
$breadth=5;
$area_rect=$length*$breadth;
echo '<br>Length  = '.$length.', Breadth  = '.$breadth.'<br>'.area_rect.round($area_rect,2).'<br>';

define('area_sqr',' Area of Square  = ',true);
$side=5;
$area_sqr=$side**2;
echo '<br>Side = '.$side.'<br>'.area_sqr.round($area_sqr,2);

?>